<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Assignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Givenassignmentmodel','gm');
		
		$this->load->model('assignmentmodel','um');
		 $this->load->model('Add_class_model','am');
	}
	  public function index()  
    {  

        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "Edit_Assignment";
        $data['page_'] = "view_class";

        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage', $data);  
        $this->load->view('templates/footer');

    }
     public function lecture_edit($no_,$sess)  
    {  
    	//$data['users'] = $this->um->fetchtable();
   		 $data['add_class_in'] = $this->gm->add_view_attendance($no_);////ravi wALA SE

        $data['title'] ="assignment_edit";
        $data['page_'] = "assignmentview";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
    }
	function savingdata3()
	{
		$this->um->savingdata3();
		//echo"data inns";die();
		redirect('Assignmentcontroller');
	}
	
	public function del()
	{
		
		$this->db->empty_table('assignment');
		redirect('Assignmentcontroller','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		
		redirect('Assignmentcontroller','refresh');
	}
	
}