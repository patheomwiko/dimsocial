<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
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

	public function sign_in()
	{
		$this->load->view('sign_in');
	}


}
