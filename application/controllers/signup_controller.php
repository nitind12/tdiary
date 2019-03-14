<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_controller extends CI_Controller {

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('signup_page');
	}

	function register(){
		$this->load->model('my_signup_model', 'mrm');
		$data['res'] = $this->mrm->register();
		if($data['res'] == true){
			//echo "Register Successfully"."<br><a href='" . site_url('Page_1_controller') . "'>Back</a>";
			redirect('dashbooard');
		} else {
			echo "Already exists. Please try with new name and email."."<br><a href='" . site_url('signup_page') . "'>Back</a>"; 
		}
	}

}
