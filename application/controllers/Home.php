<?php

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		include APPPATH . 'third_party/links.php';
	}
	public function view()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/assignedTo');
		$this->load->view('pages/following');
		$this->load->view('pages/history');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewNewIssue()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/newIssue');
		//$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewAssigned()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/assignedTo');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewFollowing()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/following');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewFilters()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/filters');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewAllIssues()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/allIssues');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
	public function viewHistory()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/history');
		$this->load->view('templates/closeDiv');
		$this->load->view('templates/footer');
	}
}
