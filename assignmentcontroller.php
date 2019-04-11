<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Assignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('assignmentmodel','um');
		 $this->load->model('Add_class_model','am');
	}
	/*function index()
	{
		$data['users'] = $this->um->fetchtable();
		//$this->load->view('assignmentview',$data);
		 $data['page_'] = 'assignmentview';
		 $data['title'] = 'Edit Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}*/

	  public function index()  
    {  

        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "Edit_Assignment";
        $data['page_'] = "view_class";

        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage', $data);  
        $this->load->view('templates/footer');

    }
     public function lecture_edit($no_,$sess,$crs)  
    {  
    	$data['users'] = $this->um->fetchtable();
    	$data['add_class_in'] = $this->am->add_view_attendance($sess, $crs);////ravi wALA SE

        $data['title'] = "assignment_edit";
        $data['page_'] = "assignmentview";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
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
	/*public function pilih()
	{
		$kd = $this->uri->segment(3);
		if($kd == null)
		{
			redirect('test');
		}
		$dt = $this->testmodel->edit($kd);
		$data['Student_name'] = $dt->Student_name;
		$data['marks1'] = $dt->marks1;
		$data['marks2'] = $dt->marks2;
	}
	public function update()
	{
		if($this->input->post('edit'))
		{
			$id->$this->input->post('id');
			$this->um->update($id);
			redirect('test','refresh');
		}else
		{
			redirect('test/pilih',$id,'refresh');
		}
	}*/

}