<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends My_Controller
{
/*
======================================================

    @author    : Masteguh
    @github    : https://github.com/AnteikuDevs

======================================================
*/

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('dashboard',$data);
    }
}
