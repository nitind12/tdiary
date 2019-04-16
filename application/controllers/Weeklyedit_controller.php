<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyedit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Givenassignmentmodel','gm');

		$this->load->model('Weeklyedit_model','obj');
		$this->load->model('Add_class_model','am');	
		
	}

	function index()
	{
		
	    $data['title'] = "Weekly Class page";
        $data['page_'] = "Weeklyedit_class";
        $data['cls_in_session'] = $this->am->fetchClass();

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}


	public function WeeklyEdit($no_)
	{

		$data['t_diary'] = $this->obj->fetchtable();
		$data['add_class_in']= $this->gm->add_view_class($no_);
		//$data['course']=$this->obj->getCourse();

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