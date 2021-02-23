<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends My_Controller
{
/*
========================

	@author	: Masteguh
	@github	: https://github.com/AnteikuDevs

========================
*/

    public function __construct()
    {
    	parent::__construct();
    }

    public function login()
    {
	    $data['title'] = 'Login';
	    return view('auth/login',$data);
    }
}