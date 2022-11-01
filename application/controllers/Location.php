<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	// Codeigniter : Write Less Do More
		$session = $this->session->userdata('username');
    	$this->load->helper(array('form', 'url'));
    	$this->load->model(array('CRUD_models', 'm_lokasi'));
		$this->load->library('upload');
        if (!isset($session)) {
            redirect(base_url()."auth");
        }
    }
	
	public function index()
	{
        
        $header['home'] = '';
        $header['planntemp'] = 'active';
        $header['fixplann'] = '';
        $header['inv'] = '';
        $header['calendar'] = '';
        $header['budget'] = '';
		$header['lokasi'] = 'active';
		$header['dekorasi'] = '';
		$header['catering'] = '';
		$header['video'] = '';
		$header['seserahan'] = '';
		$header['sovenir'] = '';
		$header['seragam'] = '';
		$header['makeup'] = '';
		$header['bridesmide'] = '';
		$header['entertaiment'] = '';
		$header['other'] = '';
		$body['card'] = $this->m_lokasi->getCard();
		$this->load->view('ops/header',$header);
		$this->load->view('planning_temp/location/view',$body);
		$this->load->view('ops/footer');
	}


	public function addCard(){
		// $photo1 = $_FILES['photo1'];
		// $file = file_get_contents($photo1['tmp_name']);
		// var_dump(base64_encode($file))
		$str2 = str_replace(".","",$this->input->post('harga'));
		$data = array(
			'nama_lokasi' => $this->input->post('nama_lokasi'),
			'harga' => $str2,
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'contact' => $this->input->post('contact'),
			'link' => $this->input->post('link'),
			'id_user' => $this->session->userdata('username')
		);
		$insert = $this->CRUD_models->insert($data,'lokasi');//data table
		if($insert){
			$json = array('success' => true,'msg' => 'success');
		}else{
			$json = array('success' => false,'msg' => 'failed');
		}
		echo json_encode($json);
	}

	public function editCard(){
		$id = $this->input->post('id');
		$str2 = str_replace(".","",$this->input->post('price'));
		// echo $str2;
		$data = array(
			'nama_lokasi' => $this->input->post('nama_lokasi'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'contact' => $this->input->post('contact'),
			'link' => $this->input->post('link'),
			'harga' => $str2
		);///updateCard($data,$table,$where,$value){ 
		$update = $this->m_lokasi->updateCard($data,'lokasi','id',$id);
		if($update){
			redirect('location');
		}	else{
			redirect('location');
		}
	}
	
}
