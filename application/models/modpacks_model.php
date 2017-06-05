<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Modpacks_model extends CI_Model{
	
    public function get_All_Modpacks(){
		
		return $this->db->select("modpack_id, modpack_label")
		->from("modpack")
		->join("modpackversion", "modpack_id = modpackversion_unmodpack")
		->order_by("modpack_label")
		->group_by("modpack_id")
		->get()
		->result();
	}
	public function get_Gameversion_Modpack($id){
		
		return $this->db->select("gameversion_label")
		->from("modpackversion")
		->join("gameversion", "modpackversion_uneversion = gameversion_id")
		->where("modpackversion_unmodpack", $id)
		->group_by("gameversion_label")
		->get()
		->result();
	}
	public function get_Recent_Date_Modpackversion($id){
		return $this->db->select_max("modpackversion_date")
		->from("modpackversion")
		->where("modpackversion_unmodpack", $id)
		->get()
		->result();
	}
	public function get_Modpack($id){
		
		return $this->db->select("modpack_label")
		->from("modpack")
		->where("modpack_id", $id)
		->get()
		->result();
	}
	public function get_All_modpackversion($id){
		return $this->db->select("modpackversion_label, gameversion_label")
		->from("modpackversion")
		->join("gameversion", "modpackversion_uneversion = gameversion_id")
		->where("modpackversion_unmodpack", $id)
		->order_by("gameversion_label")
		->get()
		->result();
	}
}