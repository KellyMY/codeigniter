<?php

class Users_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}
	//verifica se existe
	public function get_user_data($name_user){
		$this->db->select("id_user, name_user, password, user_full_name,user_email")
		->from("users")
		->where("name_user",$name_user);

		$result = $this->db->get();

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return NULL;
		}
	}

	public function get_data($id,$select = NULL){
		if(!empty($select)){
			$this->db->select($select);
		}
		$this->db->from($user);
		$this->db->where("id_user",$id);
		return $this->db->get();
	}
	public function insert($data){
		$this->db->from("id_user",$id);
	}

public function update($id,$data){
		$this->db->from("id_user",$id);
		$this->db->where("users",$data);
	}

	public function delete($id){
		$this->db->where("id_user",$id);
		$this->db->delete("id_user");
	}

	public function is_duplicated($field, $value, $id= NULL){
		if(empty($id)){
			//"Diferente do id que estou passando"
			$this->db->where("id_user <>",$id);
		}
		$this->db->from("users");
		$this->db->where($field,$value);
		return $this->db->get()->num_rows() > 0;
	}
}