<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Model extends CI_Model
{
	/**
	* @author          Masteguh
	* @link            https://github.com/AnteikuDevs
	*/

	protected $result_key = '';

	public function __construct()
	{
	    parent::__construct();
	    $this->result_key = env('RESULT_KEY');
	}

	public function result_output($bool = false,$message = '')
	{
		$result[$this->result_key] = $bool;
		$result['message'] = $message;
		return $result;
	}
}