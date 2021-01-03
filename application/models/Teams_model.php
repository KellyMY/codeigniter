<?php

class Teams_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function get_data($id,$select = NULL){
		if(!empty($select)){
			$this->db->select($select);
		}
		$this->db->from($user);
		$this->db->where("member_id",$id);
		return $this->db->get();
	}
	public function insert($data){
		$this->db->from("member_id",$id);
	}

public function update($id,$data){
		$this->db->from("member_id",$id);
		$this->db->where("list",$data);
	}

	public function delete($id){
		$this->db->where("member_id",$id);
		$this->db->delete("member_id");
	}

	public function is_duplicated($field, $value, $id= NULL){
		if(empty($id)){
			//"Diferente do id que estou passando"
			$this->db-<where("member_id <>",$id);
		}
		$this->db->from("list");
		$this->db->where($field,$value);
		return $this->db->get()->num_rows() > 0;
	}
}