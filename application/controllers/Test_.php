<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_ extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_model', 'um');
	}
	function index(){
		$data['users'] = $this->um->fetchtable();
		$this->load->view('test', $data);
	}

	function savingdata(){
		$this->um->savingdata();
		redirect('test_');
	}
}