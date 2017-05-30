<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Modversion_model extends CI_Model{

	protected $table = 'modversion';
	
    public function get_Count_Modversion(){
	
		return $this->db->count_all_results($this->table);
	}
	
	public function get__Modversion_By_Id($id){
	
	return $this->db->select("*")
	->from($this->table)
	->where("modversion_unmod", $id)
	->get()
	->result();
	}
}