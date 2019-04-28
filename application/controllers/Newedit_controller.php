<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newedit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

        if(!$this->session->userdata('user')) redirect('Login_controller');
        
         $this->load->model('Newedit_model','obj');
        
     
    }
	    public function index()  
    {  
        $data['t_diary'] = $this->obj->fetchtable();
        $data['title'] = "New Editpage";
        $data['page_'] = "Newedit";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');

    }

       function savingdata()
		    {
		        $this->obj->savingdata();
		        redirect('Newedit_controller');
		    }

        public function del1()
		    {
		        $u = $this->uri->segment(3);
		        $this->obj->del($u);
		        
		        redirect('Newedit_controller','refresh');
		    }
  }?>