<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct(){
        parent::__construct();
        if(! $this->session->userdata('user')) redirect('Login_controller');
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
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
 }
?>  