<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Test extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('testmodel','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		$this->load->view('testview',$data);
		

	}
	function savingdata()
	{
		$this->um->savingdata();
		redirect('test');
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
		$this->db->empty_table('studentmarks');
		redirect('test','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		//$this->db->empty_table('studentmarks');
		redirect('test','refresh');
	}

}