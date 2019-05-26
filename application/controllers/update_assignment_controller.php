<?php
class Update_Assignment_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
		$this->load->model('Checkassignmentmodel','um');
		 $this->load->model('Add_class_model','am');
          $this->load->model('Update_Assignmentmodel','ohj');
         
	}

	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
		$data['page_'] = 'update_assignmentviewdiv';
		$data['title'] = 'Check_View_Assignment';
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
	}

	public function view_assignment() ////rename fecttab 
    { 
     if($this->input->post('addclassidCA')){
            $no_ = $this->input->post('addclassidCA');
            $sess = $this->input->post('sessionidCA');
            $cours = $this->input->post('courseidCA');
            $subid = $this->input->post('subjectidCA');

        $data['vie2'] = $this->ohj->view_given_assignment_final2($no_,$sess,$cours,$subid);
        
    	$data['vie'] = $this->um->view_given_assignment($no_,$sess);
    	$data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['title'] = "Check_view_Assignment";
        $data['page_'] = "update_assignmentview";  
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }else{
        redirect('Update_Assignment_Controller');
    }
    	
       
    }

     public function del1()
    {
        $u = $this->uri->segment(3);
        $this->um->del1($u);
        redirect('update_assignment_controller/index','refresh');
    }




  function updatedColumn()
    {

        //$this->load->model('Lectureedit_model','lectup');
        $bool_= $this->um->updatedColumn();

        echo $data; 
    }



}?>