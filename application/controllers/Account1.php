<?php

class Account1 extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		include APPPATH . 'third_party/links.php';
	}
	public function viewLogin()
	{
		$this->load->view('account1/login');
	}
}
