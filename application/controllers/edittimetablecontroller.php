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
          $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
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
	
}