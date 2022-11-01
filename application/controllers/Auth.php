<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
    	parent::__construct();

    	//Codeigniter : Write Less Do More
    	$this->load->model('auth_model');
    	$this->load->model('CRUD_models');
    	$this->load->helper('url');
   
    }

	public function index()
	{
		
		$session = $this->session->userdata('username');
		if (isset($session)) {
            redirect(base_url()."home");
        }else{
			$this->load->view('auth/v_login');
		}
	}

	public function auth(){
			// echo $_POST['username'] ." ". $_POST['password'];
			$user = $_POST['username'];
			$pass = md5($_POST['password']);
			$unik = uniqid();
			$unique = array(
				'unique_code' => $unik
			);
			$insert_uniq = $this->CRUD_models->update($unique,'user','username',$user);  //update($data,$table,$where,$value)
			$cek_user = $this->auth_model->getuser($user,$pass,$unik);
			if($cek_user == true){
				$data_session = array(
					'username' => $user,
					'uniq' => $unik
				);
				$this->session->set_userdata($data_session);
				redirect('home');
			}else{
				echo "gagal login";
			}
	}


	public function auth_logout(){
		$delete = $this->CRUD_models->delete('unique_code','null','user');
		$this->session->sess_destroy();
		return redirect('auth');
	}


	

	
}
