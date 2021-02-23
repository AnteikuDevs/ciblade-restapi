<?php 

require APPPATH.'/libraries/swiftmailer/autoload.php';

class MY_Email {

	
	public function send($params = null)
	{
		$option['ssl']['verify_peer'] = FALSE;
        $option['ssl']['verify_peer_name'] = FALSE;
		$transport = (new Swift_SmtpTransport(env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_SMTPSECURE')))
		  ->setUsername(env('MAIL_USERNAME'))
		  ->setPassword(env('MAIL_PASSWORD'))
		  ->setStreamOptions($option);

		$mailer = new Swift_Mailer($transport);

		$message = (new Swift_Message($params['subject']))
		  ->setFrom([env('MAIL_USERNAME') => env('MAIL_NAME')])
		  ->setTo([$params['to']])
		  ->setBody($params['message'], 'text/html');

		$sender = $mailer->send($message);
		if ($sender) {
			$result['status'] = true;
			$result['message'] = "Berhasil mengirim email ke $params[to]";
			goto output;
		}
		$result['status'] = false;
		$result['message'] = "Gagal mengirim email ke $params[to]";
		goto output;
		output:
		return $result;
	}

}