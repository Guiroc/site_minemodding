<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Accueil_model extends CI_Model{

	
    public function get_Count_Modversion(){
	
    	return $this->db->count_all_results("modversion");
	}
	
	public function get_Count_Modpackversion(){
		
		return $this->db->count_all_results("modpackversion");
	}
	
	public function get_Count_Texturepackversion(){
		
		return $this->db->count_all_results("texturepackversion");
	}
}