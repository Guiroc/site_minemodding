<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mod_model extends CI_Model{

	protected $table = 'mod';
	
    public function select_All_Mod(){
		
		return $this->db->select("gameversion_label, mod_id, mod_label")
		->from($this->table)
		->join("gameversion", "gameversion_id = mod_uneversion")
		->order_by("mod_label")
		->get()
		->result();
	}
	public function get_Mod($id){
		
		return $this->db->select("gameversion_label, mod_label")
		->from($this->table)
		->join("gameversion", "gameversion_id = mod_uneversion")
		->where("mod_id", $id)
		->get()
		->result();
	}
}