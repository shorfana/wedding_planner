<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catering extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	// Codeigniter : Write Less Do More
		$session = $this->session->userdata('username');
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
        $header['calendar'] = '';
        $header['budget'] = '';
		$header['lokasi'] = '';
		$header['dekorasi'] = '';
		$header['catering'] = 'active';
		$header['video'] = '';
		$header['seserahan'] = '';
		$header['sovenir'] = '';
		$header['seragam'] = '';
		$header['makeup'] = '';
		$header['bridesmide'] = '';
		$header['entertaiment'] = '';
		$header['other'] = '';
		$this->load->view('ops/header',$header);
		// $this->load->view('calendar/view');
		$this->load->view('ops/footer');
        // echo "home";
	}


	
}
