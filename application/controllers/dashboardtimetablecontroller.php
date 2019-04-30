<?php
class Dashboardtimetablecontroller extends CI_Controller{
	function __construct()
	{
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         


           $this->load->model('Add_class_model','am');
 
    }

	public function index()
	{
		 $data['page_'] = 'dashboardtimetable';
		 $data['title'] = 'Dashboard Timetable';
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header',$data);
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('viewtimetablemodel','im');
		$data['marks'] = $this->im->timetable();
       echo json_encode($data);
	}
}
