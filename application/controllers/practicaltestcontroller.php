<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Practicaltestcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('practicaltestmodel','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		//$this->load->view('practicalview',$data);
		$data['page_'] = 'practicalview';
		$data['title'] = 'Practical Edit';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
	function savingdata2()
	{
		$this->um->savingdata2();
		redirect('practicaltestcontroller');
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
		$this->db->empty_table('practicaltest');
		redirect('practicaltestcontroller','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		//$this->db->empty_table('studentmarks');
		redirect('practicaltestcontroller','refresh');
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