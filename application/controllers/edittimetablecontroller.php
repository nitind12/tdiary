<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Edittimetablecontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();  

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		 $this->load->model('Add_class_model','am');
   
		$this->load->model('edittimrtablemodel','um');
	}
	function index()
	{
		$data['users'] = $this->um->fetchtable();
		 $data['page_'] = 'edittimetable';
         $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();       
        $this->load->view('templates/header');
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata3()
	{
		$this->um->savingdata3();
		redirect('Edittimetablecontroller');
		$data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
	}
	
	public function del()
	{
		
		$this->db->empty_table('time_table_edit');
		redirect('Edittimetablecontroller','refresh');
		$data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
	}
	public function del1()
	{
		$u = $this->uri->segment(3);
		$this->um->del($u);
		$data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
		redirect('Edittimetablecontroller','refresh');

	}
	/*public function update()
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