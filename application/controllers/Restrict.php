<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
		$this->load->library("session");
	}
	public function index()
	{
		if($this->session->userdata("id_user")){
			$data = array(
				"scripts" => array(
					"util.js",
					"restrict.js"
				)
			);
			
			//$this->load->model("users_model");
			//print_r($this->users_model->get_user_data("An"));
			//echo password_hash("123456", PASSWORD_DEFAULT);
			$this->template->show('template/restrict.php',$data);
		}else{
			$data = array(
				"scripts" => array(
					"util.js",
					"login.js"
				)
			);
			$this->template->show('template/login',$data);
		}
	}
	public function logoff(){
		$this->session->sess_destroy();
		header("Location: ".base_url()."restrict");
	}

	public function ajax_login(){

		//Segurança para não entrar direto, acho
		if(!$this->input->is_ajax_request()){
			exit("Sem acesso a próxima página");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$passwd = $this->input->post("password");

		if(empty($username)){
			$json["status"] = 0;
			$json['error_list']['#username'] = "Usuário não de ser vazio!";
		}else{
			$this->load->model("users_model");
			$result = $this->users_model->get_user_data($username);
			if($result){
				$id_user = $result->id_user;
				$password = $result->password;
				if(password_verify($passwd, $password)){
					$this->session->set_userdata("id_user",$id_user);
				}else{
					$json["status"] = 0;
				}
			}else{
				$json['status'] = 0;
			}
			if($json['status'] == 0){
				$json["error_list"]["#username"] = "Usuário e/ou senha incorretos!";
			}
		}
		echo json_encode($json);
	}


	public function ajax_save_list(){

		if($this->input->is_ajax_request() == 0){
			exit("Nenhum acesso de script direto permitido!");

		}
		$json = array();
		$json['status'] = 1;
		$json['error_list'] = array();

		$this->load->model("lists_model");

		$data = $this->input->post();

		if(empty($data['list_name'])){
			$json['error_list']['#list_name'] = "Nome obrigatório!";
		}else{
			if($this->lists_model->is_duplicated("list_name",$data['list_name'],$data['list_id'])){				
				$json['error_list']['#list_name'] = "Nome já existente";

			}
		}

		if(!empty($json['error_list'])){
			$json['status'] = 0;
		}else{
			if(empty($data['list_id'])){
				$this->lists_model->insert($data);
			}else{
				$list_id = $data['list_id'];
				unset($data['list_id']);
				$this->lists_model->update($list_id,$data);
			}
		}
	
	}

}