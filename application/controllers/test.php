<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Test extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('testmodel','um');
		$this->load->model('Add_class_model','am');
   
	}
	function index() 												//internal wale class 
	{
		$data['page_'] = 'edit_marks_selected';
        $data['title'] = "Edit-Marks ";
        $data['marks_type_']=$this->um->marks_type_();
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
	 public function Edt_controller($so_,$mt)  /////internal marks page load as like input box;
    {  
        $data['title'] = "Select-Marks-Type";
        $data['page_'] = "testview";        
       $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
        
        }
    public function Testinternal_controller($no_,$sess)  /////internal marks page load as like input box;
        {  
        $data['title'] = "Edit-Marks";
        $data['page_'] = "edittest";        
        $this->load->view('templates/header', $data);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['add_attend'] = $this->am->add_attendance($sess, $no_);
         $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
        
    }

    public function submitmarks_controller()               ///showing the page of submit the data;
    {  
        $this->um->take_marks(); 
        redirect('Test/index');   
    }
    public function viewmarks()                           //showing all classs in view marks
        {
        $data['page_'] = 'view_marks_selected';
        $data['title'] = "View-marks";
        $data['marks_type_']=$this->um->marks_type_();
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
    }

	public function vie_controller()                           //showing all classs in view marks
		{
		$data['page_'] = 'viewtestclass';
        $data['title'] = "View-marks";
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
	}
 public function viewmarks_controller($no_,$sess) ////rename fecttab 
    {  
    	
        $data['title'] = "assignment_view";
        $data['page_'] = "viewmarksset";
        
        $this->load->view('templates/header', $data);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['vim'] = $this->um->view_internal_marks($no_,$sess);
    	
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
    }

}