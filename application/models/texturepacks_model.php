<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Texturepacks_model extends CI_Model{
	
    public function get_All_Texturepacks(){
		
		return $this->db->select("texturepack_id, texturepack_label")
		->from("texturepack")
		->join("texturepackversion", "texturepack_id = texturepackversion_untexturepack")
		->order_by("texturepack_label")
		->group_by("texturepack_id")
		->get()
		->result();
	}
	public function get_Gameversion_Texturepack($id){
		
		return $this->db->select("gameversion_label")
		->from("texturepackversion")
		->join("gameversion", "texturepackversion_uneversion = gameversion_id")
		->where("texturepackversion_untexturepack", $id)
		->group_by("gameversion_label")
		->get()
		->result();
	}
	public function get_Recent_Date_Texturepackversion($id){
		return $this->db->select_max("texturepackversion_date")
		->from("texturepackversion")
		->where("texturepackversion_untexturepack", $id)
		->get()
		->result();
	}
	public function get_Texturepack($id){
		
		return $this->db->select("texturepack_label")
		->from("texturepack")
		->where("texturepack_id", $id)
		->get()
		->result();
	}
	public function get_All_texturepackversion($id){
		return $this->db->select("texturepackversion_label, gameversion_label")
		->from("texturepackversion")
		->join("gameversion", "texturepackversion_uneversion = gameversion_id")
		->where("texturepackversion_untexturepack", $id)
		->order_by("gameversion_label")
		->get()
		->result();
	}
}