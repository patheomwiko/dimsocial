<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * data()
	 * 
	 * @return array
	 */
	private function data() : array {
		$data['articles'] = $this->ActivityModel->get_desc_articles();
		$data['activities'] = $this->ActivityModel->get_desc_activities();
		$data['domains'] = $this->ActivityModel->get_domains();
		// $data['user'] = $this->user();
		$data['user'] = $this->UserModel->get_user_where_id($this->session->id);
		return $data;
	}

	public function index() {
		$this->load->view('index', $this->data());
	}

	public function list_activities() { 
		$this->load->view('list_activities', $this->data());
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function desc_blog()
	{
		$this->load->view('desc_blog');
	}

	public function publish_activity() 	{ 
		$this->load->view('publish_activity', $this->data());
	}

	public function publish_article() { 
		$this->load->view('publish_article', $this->data());
	}

	public function activity() 
	{
		$this->data()['activity'] = $this->ActivityModel->get_where_activity($this->session->id);
		$this->load->view('activity', $this->data());
	}

	public function sign_in()
	{
		$data['domains'] = $this->ActivityModel->get_domains();
		$this->load->view('sign_in', $data);
	}

	public function politic()
	{
		echo 'Politics';
	}

}
