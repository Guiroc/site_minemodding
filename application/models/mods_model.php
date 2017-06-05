<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mods_model extends CI_Model{
	
    public function get_All_Mods(){
		
		return $this->db->select("mod_id, mod_label")
		->from("mod")
		->join("modversion", "mod_id = modversion_unmod")
		->order_by("mod_label")
		->group_by("mod_id")
		->get()
		->result();
	}
	public function get_Gameversion_Mod($id){
		
		return $this->db->select("gameversion_label")
		->from("modversion")
		->join("gameversion", "modversion_uneversion = gameversion_id")
		->where("modversion_unmod", $id)
		->group_by("gameversion_label")
		->get()
		->result();
	}
	public function get_Recent_Date_Modversion($id){
		return $this->db->select_max("modversion_date")
		->from("modversion")
		->where("modversion_unmod", $id)
		->get()
		->result();
	}
	public function get_Mod($id){
		
		return $this->db->select("mod_label")
		->from("mod")
		->where("mod_id", $id)
		->get()
		->result();
	}
	public function get_All_modversion($id){
		return $this->db->select("modversion_label, gameversion_label")
		->from("modversion")
		->join("gameversion", "modversion_uneversion = gameversion_id")
		->where("modversion_unmod", $id)
		->order_by("gameversion_label")
		->get()
		->result();
	}
}