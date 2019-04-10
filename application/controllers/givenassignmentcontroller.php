<?php
class Givenassignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Givenassignmentmodel','um');
		 $this->load->model('Add_class_model','am');
	}
	
	/*public function index()
	{
		
		$this->load->model('givenassignmentmodel');
		$a = $this->givenassignmentmodel->getData();
		
		$data['marks'] = $this->givenassignmentmodel->getData();
		
		$data['page_'] = 'givenassignmentview';
		$data['title'] = 'Given Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}*/

	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
       
		 $data['page_'] = 'givenassignmentview';
		 $data['title'] = 'View Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
 public function view_assignment($no_,$sess,$crs) ////rename fecttab 
    {  
    	$data['vie'] = $this->um->view_given_assignment($no_);
    	$data['add_class_in'] = $this->am->add_view_attendance($sess, $crs);////ravi wALA SE

        $data['title'] = "assignment_view";
        $data['page_'] = "givenassignment";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }
	
	function viewmarks(){
		$this->load->model('givenassignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}


}