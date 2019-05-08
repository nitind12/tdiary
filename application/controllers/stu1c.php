<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Stu1c extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('stu1m','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		//$this->load->view('assignmentview',$data);
		 $data['page_'] = 's1view';
		 $data['title'] = 'Student Detail';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata4()
	{
		$this->um->savingdata4();
		redirect('stu1c');
	}
	
	public function del()
	{
		
		$this->db->empty_table('std_personal');
		redirect('stu1c','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		
		redirect('stu1c','refresh');
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