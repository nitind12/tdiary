<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Test extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('testmodel','um');
		$this->load->model('Add_class_model','am');
        if(!$this->session->userdata('user')) redirect('Login_controller');
   
	}
    

	 public function viewmarks_controller2($no_,$sess) ////rename fecttab 
    {  
        $data['title'] = "assignment_view";
        $data['page_'] = "viewmarksset2";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['vim'] = $this->um->view_internal_marks($no_,$sess);
          $this->load->view('templates/header', $data);
      
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
    }

               
    function index() 												//internal wale class 
	{
		$data['page_'] = 'edit_marks_selected';
        $data['title'] = "Edit-Marks ";
        $data['marks_type_']=$this->um->marks_type_();
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
	}


	 public function Edt_controller()  /////internal marks page load as like input box;
    {  
        if($this->input->post('mtypeid'))
        {
            $so_ = $this->input->post('mtypeid');
            $mt = $this->input->post('mtypename');
            $data['title'] = "Select-Marks-Type";
            $data['page_'] = "testview";        
               $data['dashboard1'] = $this->am->getDashboardMenu();
            $data['menu'] = $this->am->getMenu();
            $data['submenu'] = $this->am->getSubmenu();
            $data['last'] = $this->am->getlastMenu();
            $data['cls_in_session'] = $this->am->fetchClass();
               $this->session->set_userdata('itype', $mt);
               $this->session->set_userdata('itypeid', $so_);
               $this->session->set_userdata('marksid', $so_);
                $this->session->set_userdata('marksname', $mt);
           
            $data['marks_headerr_']=$this->um->marks_header($so_,$mt);

            $this->load->view('templates/header', $data);
            $this->load->view('myrajpage',$data);  
            $this->load->view('templates/footer');
        }
        else 
        {
            redirect('test');
        }
        
    } 
             
    
    public function Testinternal_controller()  /////internal marks page load as like input box;
        { 
         if($this->input->post('addclassid'))
            {
            $no_ = $this->input->post('addclassid');
            $sess = $this->input->post('sessionid');
            $subid=$this->input->post('subject_id');
        
            $data['title'] = "Edit-Marks";
            $data['page_'] = "edittest";        
            $this->load->view('templates/header', $data);
            $data['add_class_in'] = $this->am->add_view_attendance($no_);
            $data['add_attend'] = $this->am->add_attendance($sess, $no_);
            $data['marks_headerr_']=$this->um->marks_header($no_,$sess);
            $data['dashboard1'] = $this->am->getDashboardMenu();
            $data['menu'] = $this->am->getMenu();
            $data['submenu'] = $this->am->getSubmenu();
            $data['last'] = $this->am->getlastMenu();
            $data['update_marks'] = $this->um->update_marks($no_,$subid);
           
       
             $this->load->view('myrajpage',$data);  
            $this->load->view('templates/footer');
         } 
        else 
        {
            redirect('test/Edt_controller');
        }
    }
       

    public function submitmarks_controller()               ///showing the page of submit the data;
    {  
        $this->um->take_marks(); 
        redirect('Test/index');   
    }
  
    public function submitmarks_controller_update()               ///showing the page of submit the data;
    {  
        $this->um->take_marks_update(); 
        redirect('Test');   
    }
    public function viewmarks()                           //showing all classs in view marks
        {
        $data['page_'] = 'view_marks_selected';
        $data['title'] = "View-marks";
        $data['marks_type_']=$this->um->marks_type_();
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
    }

	public function vie_controller() 
    {
		if($this->input->post('mtypeid1')){
            $so_ = $this->input->post('mtypeid1');
            $mt = $this->input->post('mtypename1');
            $data['title'] = "Select-View-Type";
            $data['page_'] = "viewtestclass";        
            $data['cls_in_session'] = $this->am->fetchClass();
            $this->session->set_userdata('marksname', $mt);
            $this->session->set_userdata('marksid', $so_);
            $data['marks_headerr_']=$this->um->marks_header($so_,$mt);
              $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
          $this->load->view('templates/header', $data);
            $this->load->view('myrajpage',$data);  
            $this->load->view('templates/footer');
        }
        else{
            redirect("test/viewmarks");
        }
        }
 public function viewmarks_controller() ////rename fecttab 
    {  
    	
         if($this->input->post('addclassid1'))
         {
         $no_ = $this->input->post('addclassid1');
         $sess = $this->input->post('sessionid1');
        $data['title'] = "assignment_view";
        $data['page_'] = "viewmarksset";
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
        $this->load->view('templates/header', $data);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
          $data['vim'] = $this->um->view_internal_marks($no_,$sess);
    	
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
         }

            else{
        redirect("test/viewmarks");
       
            }
    }
    public function del()
    {
        $this->db->empty_table('studentmarks');
        redirect('Test/vie_controller','refresh');
    }

    
    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->um->del1($u);
        redirect('Test/vie_controller','refresh');
    }


  function updatedColumn()
    {

        //$this->load->model('Testmodel','um');
        $bool_= $this->um->updatedColumn();

        echo $data; 
    }

}