<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mods extends CI_Controller{
		
	public function index(){
		
		$this->load->model("mod_model");
		
		$data = array();
		
		$data["liste_mod"] = $this->mod_model->select_All_Mod();
		//var_dump($data["liste_mod"]);
		
		$this->layout->ajouter_css("layout/default/header");
		$this->layout->ajouter_css("layout/default/menu");
		$this->layout->ajouter_css("layout/default/default");
		$this->layout->ajouter_css("liste_mod");
		
		$this->layout->views("layout/header")
		->views("layout/menu")
		->view("liste_mod", $data);
	}
	
	public function unmod($id){
		$this->load->model("mod_model");
		$this->load->model("modversion_model");
		
		$data = array();
		
		$data["unmod"] = $this->mod_model->get_Mod($id);
		
		$data["liste_modversion"] = $this->modversion_model->get__Modversion_By_Id($id);
		
		$this->layout->ajouter_css("layout/default/header");
		$this->layout->ajouter_css("layout/default/menu");
		$this->layout->ajouter_css("layout/default/default");
		$this->layout->ajouter_css("liste_mod");
		
		$this->layout->views("layout/header")
		->views("layout/menu")
		->view("unmod", $data);
	}
}