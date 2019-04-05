<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct(){
        parent::__construct();
       if(! $this->session->userdata('user')) redirect('Login_controller');
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
    public function takeattendance_controller()  
    {  
        $data['title'] = "TAKE-ONLINE_ATTENDANCE";
        $data['page_'] = "attendance_take";        
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    
 }
?>  