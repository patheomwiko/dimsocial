<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['activities'] = $this->ActivityModel->get_activity();
		$data['categories'] = $this->ActivityModel->get_category();
		$this->load->view('index', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function desc_blog()
	{
		$this->load->view('desc_blog');
	}

	public function publish()
	{
		$this->load->view('publish');
	}

	public function activity() 
	{
		$this->load->view('activity');
	}

	public function sign_in()
	{
		$this->load->view('sign_in');
	}


}
