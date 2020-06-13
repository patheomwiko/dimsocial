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
		$data['categories'] = $this->ActivityModel->get_category();
		$this->load->view('publish', $data);
	}

	public function activity() 
	{
		$data['categories'] = $this->ActivityModel->get_category();
		$this->load->view('activity', $data);
	}

	public function sign_in()
	{
		$data['categories'] = $this->ActivityModel->get_category();
		$this->load->view('sign_in', $data);
	}

	public function politic()
	{
		echo 'Politics';
	}

}
