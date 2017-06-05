<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mods extends CI_Controller{
		
	public function index(){
		
		$this->load->model("mods_model");
		
		$data = array();
		
		$data["liste_mods"] = $this->mods_model->get_All_Mods();
		
		foreach($data["liste_mods"] as $unmod){
			$versions = $this->mods_model->get_Gameversion_Mod($unmod->mod_id);
			$unmod->versions= "";
			
			foreach ($versions as $unversion){
				$unmod->versions = $unmod->versions.$unversion->gameversion_label.", ";
			}
			$unmod->versions = substr($unmod->versions, 0, -2);
			$unmod->date = $this->mods_model->get_Recent_Date_Modversion($unmod->mod_id)[0]->modversion_date;
		}
		
		//var_dump($data["liste_mod"]);
		
		$this->layout->view("mods", $data);
	}
	
	public function unmod($id){
		$this->load->model("mods_model");
		
		$data = array();
		
		$data["mod"] = $this->mods_model->get_Mod($id)[0];
		$data["mod"]->modversions = $this->mods_model->get_All_modversion($id);
		
		$this->layout->view("mod", $data);
	}
}