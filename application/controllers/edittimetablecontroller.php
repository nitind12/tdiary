<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Edittimetablecontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('edittimrtablemodel','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		//$this->load->view('assignmentview',$data);
		 $data['page_'] = 'edittimetable';
       
        $this->load->view('templates/header');
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata3()
	{
		$this->um->savingdata3();
		redirect('Edittimetablecontroller');
	}
	
	public function del()
	{
		
		$this->db->empty_table('time_table_edit');
		redirect('Edittimetablecontroller','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		
		redirect('Edittimetablecontroller','refresh');
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