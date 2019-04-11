<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Registrationform_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('registration_model','um');
	}
	public function index1()
	{
		//$data['cls_in_session'] = $this->am->fetchClass();
		 $data['page_'] = 'Reg_div';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}




function index()
	{
		
		 $data['page_'] = 'registration_view';
		 $data['title'] = 'Edit Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata3()
	{
		$this->um->savingdata3();
		redirect('address_form_controller','refresh');
	}
}