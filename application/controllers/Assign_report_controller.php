<?php
class assign_report_controller extends CI_Controller{
	function __construct()
	{
        parent::__construct();
        $this->load->model('Givenassignmentmodel','gm');
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('Add_class_model','am');
    }
    public function index()
	{
		 $data['page_'] = 'assign_report_view';
		 $data['title'] = 'assign_report_view ';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function assignment_report(){
		$this->load->model('Assign_report_model','im');
		$data['marks'] = $this->im->assignment_report();

		echo json_encode($data);
	}
}