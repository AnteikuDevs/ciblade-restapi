<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Error_Handlers extends MY_Controller
{
	/*
		@author		: Masteguh
		@link		: https://github.com/AnteikuDevs
		@location	: /controllers/Error_Handlers.php
	*/

    public function __construct()
    {
    	parent::__construct();
    }

    public function error_404()
    {
    	show_404_page();
    }
}
