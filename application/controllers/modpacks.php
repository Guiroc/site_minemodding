<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modpacks extends CI_Controller{
		
	public function index(){
		
		$this->load->model("modpacks_model");
		
		$data = array();
		
		$data["liste_modpacks"] = $this->modpacks_model->get_All_Modpacks();
		
		foreach($data["liste_modpacks"] as $unmodpack){
			$versions = $this->modpacks_model->get_Gameversion_Modpack($unmodpack->modpack_id);
			$unmodpack->versions= "";
			
			foreach ($versions as $unversion){
				$unmodpack->versions = $unmodpack->versions.$unversion->gameversion_label.", ";
			}
			$unmodpack->versions = substr($unmodpack->versions, 0, -2);
			$unmodpack->date = $this->modpacks_model->get_Recent_Date_Modpackversion($unmodpack->modpack_id)[0]->modpackversion_date;
		}
		
		//var_dump($data["liste_mod"]);
		
		$this->layout->view("modpacks", $data);
	}
	
	public function unmodpack($id){
		$this->load->model("modpacks_model");
		
		$data = array();
		
		$data["modpack"] = $this->modpacks_model->get_Modpack($id)[0];
		$data["modpack"]->modpackversions = $this->modpacks_model->get_All_Modpackversion($id);
		
		$this->layout->view("modpack", $data);
	}
}