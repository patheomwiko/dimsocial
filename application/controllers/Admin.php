<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function index() {
		$this->load->view('admin/index');
    }
	public function valider_pub() {
		$this -> load -> view('admin/valider_pub');
	}  
	public function promouvoir() {
		$this -> load -> view('admin/promouvoir');
	} 
	public function gerer_entrepreneurs() {
		$this -> load -> view('admin/gerer_entrepreneurs');
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
	function ajouter_vue() {
		$fichier = dirname(__DIR__). DIRECTORY_SEPARATOR . 'date' . DIRECTORY_SEPARATOR . 'compteur';
		$compteur 
	}
	  
}