<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Edittimetablecontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();  

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		 $this->load->model('Add_class_model','am');
         $this->load->model('edittimrtablemodel','um');
         $this->load->model('Edittimrtablemodel','im');
         //$this->load->model('Givenassignmentmodel','gm');
         //$this->load->model('Lessonedit_model','obj');
         //$this->load->model('Add_class_model','am');
         $this->load->model('Assign_report_model','ar');
	}
	 function  get_subjectT(){
        $data['subjects'] = $this->um->getSubjectT();
        echo json_encode($data);
    }
    function time_edit_controller(){
		}
	function index()
	{
		$data['title'] = "TIME_page";
		$data['users'] = $this->um->fetchtable();
		$data['page_'] = 'edittimetable';
		$data['Semester1'] = $this->im->getmarkstype1();
		$data['course1'] = $this->im->getmarkstype4();
		//$data['course1'] = $this->im->getmarkstype();
		$data['Session1'] = $this->im->getmarkstype6();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header',$data);
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata3()
	{
		$this->um->savingdata3();
		$data['time_table'] = $this->im->time_edit_modals();
       echo json_encode($data);
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

	   function updatedColumn()
    {
      //  $this->load->model('Lessonedit_model','lectup');
        $bool_= $this->um->updatedColumn();
        echo $data; 
    }


    function viewmarks(){
		$this->load->model('Edittimrtablemodel','im');
		$data['marks'] = $this->im->savingdata3();
        echo json_encode($data);
	}

	
}