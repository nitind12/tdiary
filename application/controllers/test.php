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
		//$data['users'] = $this->um->fetchtable();
		//$this->load->view('testview',$data);
		$data['users'] = $this->um->fetchtable();
        $data['page_'] = 'testview';
        $data['title'] = "Edit Marks";
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
	function savingdata()
	{
		$this->um->savingdata();
		redirect('test');
	}
	
	public function del()
	{
		
		$this->db->empty_table('studentmarks');
		redirect('test','refresh');
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		
		redirect('test','refresh');
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