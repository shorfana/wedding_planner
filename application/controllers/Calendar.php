<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	// Codeigniter : Write Less Do More
		$session = $this->session->userdata('username');
    	$this->load->model('m_calendar');
    	$this->load->model('CRUD_models');
    	$this->load->helper('url');
        if (!isset($session)) {
            redirect(base_url()."auth");
        }
    }	

	public function index()
	{
        

        $header['home'] = '';
        $header['planntemp'] = '';
        $header['fixplann'] = '';
        $header['inv'] = '';
        $header['calendar'] = 'active';
        $header['budget'] = '';
		$header['lokasi'] = '';
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
		$body['card'] = $this->m_calendar->getCard();
		$body['list'] = $this->m_calendar->get_list_card();
		$this->load->view('ops/header',$header);
		$this->load->view('calendar/view',$body);
		$this->load->view('ops/footer');
        // echo "home";
	}

	function addCard(){
		$data = explode(" ",$this->input->post('judul'));
		$month = $data[0];
		$data = array(
			'title' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'id_user' => $this->session->userdata('username'),
			'monthh' => $month
		);
		$insert = $this->m_calendar->cardAdd($data,'kalender');
		if($insert){
			$json = array('success' => true,'msg' => 'success');
		}else{
			$json = array('success' => false,'msg' => 'failed');
		}
		echo json_encode($json);
	}


	function editCard(){
		$data = array(
			'title' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi')
		); //$data,$table,$where,$value

		$update = $this->m_calendar->updateCard($data,'kalender','id',$this->input->post('id'));
		if($update){
			redirect('calendar');

		}else{
			redirect('calendar');

		}
	}


	function addList(){
		$data = array(
			'list' => $this->input->post('listkalender'),
			'id_kalendar2' => $this->input->post('idkalender'),
		);
		// var_dump($data);die;
		$insert = $this->m_calendar->listAdd($data,'kalender_detail');
		if($insert){
			redirect('calendar');
		}else{
			redirect('calendar');
		}
		// echo json_encode($json);
	}

	function editList(){
		$data = array(
			'list' => $this->input->post('list'),
			'status' => $this->input->post('status')
		);
		$update = $this->CRUD_models->update($data,'kalender_detail','id',$this->input->post('id'));
		
		if($update){
			redirect('calendar');
		}else{
			redirect('calendar');
		}
	}




	
}
