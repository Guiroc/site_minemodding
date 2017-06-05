<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Texturepacks extends CI_Controller{
		
	public function index(){
		
		$this->load->model("texturepacks_model");
		
		$data = array();
		
		$data["liste_texturepacks"] = $this->texturepacks_model->get_All_texturepacks();
		
		foreach($data["liste_texturepacks"] as $untexturepack){
			$versions = $this->texturepacks_model->get_Gameversion_texturepack($untexturepack->texturepack_id);
			$untexturepack->versions= "";
			
			foreach ($versions as $unversion){
				$untexturepack->versions = $untexturepack->versions.$unversion->gameversion_label.", ";
			}
			$untexturepack->versions = substr($untexturepack->versions, 0, -2);
			$untexturepack->date = $this->texturepacks_model->get_Recent_Date_texturepackversion($untexturepack->texturepack_id)[0]->texturepackversion_date;
		}
		
		//var_dump($data["liste_mod"]);
		
		$this->layout->view("texturepacks", $data);
	}
	
	public function untexturepack($id){
		$this->load->model("texturepacks_model");
		
		$data = array();
		
		$data["texturepack"] = $this->texturepacks_model->get_texturepack($id)[0];
		$data["texturepack"]->texturepackversions = $this->texturepacks_model->get_All_texturepackversion($id);
		
		$this->layout->view("texturepack", $data);
	}
}