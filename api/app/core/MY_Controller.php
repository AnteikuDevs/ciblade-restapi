<?php 

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class MY_Controller extends REST_Controller
{

	protected $result_key = '';

    public function __construct() {
       parent::__construct();
       $this->result_key = env('RESULT_KEY');
       // $this->init_auth();
    }

    public function init_auth()
	{
		$auth = $this->Auth_app->check_app();
		if (!$auth[$this->result_key]) {
			$this->response($auth);
		}
	}

}

