<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct(){
        parent::__construct();
       //if(! $this->session->userdata('user')) redirect('Login_controller');
       $this->load->model('Add_class_model','am');
    }
    public function index()  
    {  
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard');  
        $this->load->view('templates/footer');
    }  

    public function attendance_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "online_attendance";
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    
    public function addclass_controller()  
    {  
        $this->am->savingdata(); 
        redirect('Main/attendance_controller');   
        }

    public function delclass_controller($no_)  
    {  
        $this->am->delclass($no_); 
        redirect('Main/attendance_controller');   
    }

    
     public function takeattendance_controller()  //showing the page of attendance;

   // public function takeattendance_controller($no_, $sess, $crs)  //showing the page of aatendance;
    {  
        $data['title'] = "TAKE-ONLINE_ATTENDANCE";
        $data['page_'] = "attendance_take";        
        $this->load->view('templates/header', $data);
        $data['add_attend'] = $this->am->add_attendance($sess, $crs);
         $this->load->view('myravipage', $data);  
        
        $this->load->view('templates/footer');
        
    }

    public function submitattendance_controller()               ///showing the page of submit the data;
    {  
        $this->am->take_attendance(); 
        redirect('Main/attendance_controller');   
    }

    function deleteClass($no_){
        $res = $this->am->delClass($no_);
        redirect('Main/attendance_controller');
    }
    
 }
?>  