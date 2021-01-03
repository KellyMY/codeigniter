<?php

class Lists_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function get_data($id,$select = NULL){
		if(!empty($select)){
			$this->db->select($select);
		}
		$this->db->from('list');
		$this->db->where("list_id",$id);
		return $this->db->get();
	}
	public function insert($data){
		$this->db->insert('list',$data);
	}

public function update($id,$data){
		$this->db->from("list_id",$id);
		$this->db->where("list",$data);
	}

	public function delete($id){
		$this->db->where("list_id",$id);
		$this->db->delete("list_id");
	}

	public function is_duplicated($field, $value, $id= NULL){
		if(!empty($id)){
			//"Diferente do id que estou passando"
			$this->db->where("list_id <>",$id);
		}
		$this->db->from("list");
		$this->db->where($field,$value);
		return $this->db->get()->num_rows() > 0;
	}
}