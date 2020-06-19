<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function index() {
		$this->load->view('admin/index');
    }
	public function valider_projet() {
		$this -> load -> view('admin/valider_projet');
	}  
	public function promouvoir() {
		$this -> load -> view('admin/promouvoir');
	} 
	public function gerer_investisseurs() {
		$this -> load -> view('admin/gerer_investisseurs');
	} 
	public function gerer_entrepreneurs() {
		$this -> load -> view('admin/gerer_entrepreneurs');
	} 
	public function gerer_projets() {
		$this -> load -> view('admin/gerer_projets');
	}
    public function profile() {
		$this -> load -> view('admin/profile');
	} 
	public function utilisateur(){
		$this->load->view('admin/utilisateur');
	}
	public function manuel(){
		$this->load->view('admin/manuel');
	}
	public function deconnexion(){
		$this->load->view('admin/deconnexion');
	}
 
    
}