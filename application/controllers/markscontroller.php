<?php
class Markscontroller extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        
         if(!$this->session->userdata('user')) redirect('Login_controller');

     }
	/*public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('classtestmarksmodel');
		$a = $this->classtestmarksmodel->getData();
		//print_r($a);
		$data['marks'] = $this->classtestmarksmodel->getData();
		//$this->load->view('classtestmarksview',$data);
		$data['page_'] = 'classtestmarksview';
		$data['title'] = 'View class test marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}*/
	public function index()
	{
		 $data['page_'] = 'classtestmarksview';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('classtestmarksmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}
}