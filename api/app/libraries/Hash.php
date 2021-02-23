<?php 

class Hash
{

	protected $cost;
	protected $salt;
	protected $options;

	public function __construct()
	{
		$this->options = [
			'cost' => 10
		];
	}

	public function initialize($cost,$salt = null)
	{
		$options['cost'] = $cost;
		$this->options = $options;
	}

    public function make($string,$cost = 10)
    {
    	$this->initialize($cost);
        return password_hash($string, PASSWORD_BCRYPT, $this->options);
    }

    public function check($string,$hash)
    {
    	return password_verify($string, $hash);
    }

    public function crypto_rand_secure($min, $max)
	{
	    $range = $max - $min;
	    if ($range < 1) return $min; // not so random...
	    $log = ceil(log($range, 2));
	    $bytes = (int) ($log / 8) + 1; // length in bytes
	    $bits = (int) $log + 1; // length in bits
	    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
	    do {
	        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
	        $rnd = $rnd & $filter; // discard irrelevant bits
	    } while ($rnd > $range);
	    return $min + $rnd;
	}

    public function generate_token($length = 181)
    {
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
		$max = strlen($codeAlphabet);
    	// md5(uniqid(rand(), true))
		for ($i=0; $i < $length; $i++) {
			$token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
		}
		return $token;
    }

    public function generate_kode()
    {
    	$tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$serial = '';
		for ($i = 0; $i < 4; $i++) {
			for ($j = 0; $j < 5; $j++) {
			    $serial .= $tokens[rand(0, 35)];
			}
			if ($i < 3) {
			    $serial .= '-';
			}
		}
		return $serial;
    }
}
