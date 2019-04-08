<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyedit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Weeklyedit_model','obj');	
		
	}

	function index()
	{
		$data['t_diary'] = $this->obj->fetchtable();
		 $data['course']=$this->obj->getCourse();
		
	    $data['title'] = "Weeklyedit page";
        $data['page_'] = "Weeklyedit";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	function savingdata()
	{
		
		$this->obj->savingdata();
		redirect('Weeklyedit_controller');
	}

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Weeklyedit_controller','refresh');
    }


}
?>