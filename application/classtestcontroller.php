<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Classtestcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('classtestmodel','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		//$this->load->view('classtestview',$data);
		 $data['page_'] = 'classtestview';
       
        $this->load->view('templates/header');
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata1()
	{
		$this->um->savingdata1();
		redirect('classtestcontroller');
	}
	/*public function exam_list()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Student_Roll','Student_Roll','required|numeric');
		$this->form_validation->set_rules('Student_name','Student_name','required|alpha');
		$this->form_validation->set_rules('marks1','marks1','required|numeric');
		$this->form_validation->set_rules('marks2','marks2','required');
		if( $this->form_validation->run()==false ){
			echo "success";
		}else{
			echo "fail";
		}
	}*/
	public function del()
	{
		//$u = $this->uri->segment(3);
		//$this->testmodel->del($u);
		$this->db->empty_table('classtest');
		redirect('classtestcontroller','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		//$this->db->empty_table('studentmarks');
		redirect('classtestcontroller','refresh');
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
			$this->testmodel->update($id);
			redirect('test','refresh');
		}else
		{
			redirect('test/pilih',$id,'refresh');
		}
	}*/

}