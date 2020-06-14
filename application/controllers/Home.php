<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['articles'] = $this->ActivityModel->get_articles();
		$data['activities'] = $this->ActivityModel->get_activities();
		$data['domains'] = $this->ActivityModel->get_domains();
		$this->load->view('index', $data);
	}

	public function list_activities() {
		$data['articles'] = $this->ActivityModel->get_articles();
		$data['activities'] = $this->ActivityModel->get_activities();
		$data['domains'] = $this->ActivityModel->get_domains();
		$data['activities'] = $this->ActivityModel->get_activities();
		$this->load->view('list_activities', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function desc_blog()
	{
		$this->load->view('desc_blog');
	}

	public function publish_activity()
	{
		$data['domains'] = $this->ActivityModel->get_domains();
		$this->load->view('publish_activity', $data);
	}

	public function publish_article()
	{
		$data['domains'] = $this->ActivityModel->get_domains();
		$this->load->view('publish_article', $data);
	}

	public function activity() 
	{
		$data['activity'] = $this->ActivityModel->get_where_activity($this->session->id);
		$data['domains'] = $this->ActivityModel->get_domains();
		$this->load->view('activity', $data);
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
