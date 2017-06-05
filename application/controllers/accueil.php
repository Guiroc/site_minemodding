<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller{
		
	public function index(){
		$this->load->model("accueil_model");
		
		$data = array();
		
		$data["nb_modversion"] = $this->accueil_model->get_Count_Modversion();
		$data["nb_modpackversion"] = $this->accueil_model->get_Count_Modpackversion();
		$data["nb_texturepackversion"] = $this->accueil_model->get_Count_Texturepackversion();
		
		$this->layout->view("accueil", $data);
	}
}