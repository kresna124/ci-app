<?php 

class Peoples_model extends CI_Model{
	public function getAllPeoples(){
		return $this->db->get('peoples')->result_array();
	}
	public function getPeoples($lmit, $start){
		return $this->db->get('peoples',$lmit ,$start)->result_array();
	}
	public function countAllPeoples(){
		return $this->db->get('peoples')->num_rows();
	}
}