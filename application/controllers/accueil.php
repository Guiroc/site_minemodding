<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller{
		
	public function index(){
		$this->load->model("modversion_model");
		
		$data = array();
		
		$data["nb_modversion"] = $this->modversion_model->get_Count_Modversion();
		
		$this->layout->ajouter_css("layout/default/header");
		$this->layout->ajouter_css("layout/default/menu");
		$this->layout->ajouter_css("layout/default/default");
		$this->layout->ajouter_css("accueil");
		
		$this->layout->views("layout/header")
		->views("layout/menu")
		->view("accueil", $data);
	}
}