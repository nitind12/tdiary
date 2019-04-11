<?php
class Update_Assignment_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('update_assignmentmodel','um');
		 $this->load->model('Add_class_model','am');
	}

	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
		 $data['page_'] = 'update_assignmentviewdiv';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	public function view_assignment($no_,$sess,$crs) ////rename fecttab 
    {  
    	$data['vie'] = $this->um->view_given_assignment($no_);
    	$data['add_class_in'] = $this->am->add_attendance($sess, $crs);////ravi wALA SE

        $data['title'] = "assignment_view";
        $data['page_'] = "update_assignmentview";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }

	function viewmarks(){
		$this->load->model('update_assignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}
}