<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Timecontroller2 extends CI_Controller
{
	    function __construct()
    {
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
     }

	public function index()
	{
	 $data['page_'] = 'testview2';
	 $data['title'] = "Timetable";
	 $this->load->view('templates/header',$data);
	 $this->load->view('dashboard',$data);
	 $this->load->view('templates/footer');
	}
}?>
