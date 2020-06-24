<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compteur extends CI_Controller {
 
	function ajouter_vue() {
		$fichier = dirname(__DIR__). DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'compteur';
		$compteur = 1;
		if(file_exists($fichier)){
			$compteur = (int)file_get_contents($fichier);
			$compteur++;

		}
		file_input_contents($fichier,$compteur);
	}
	  
}