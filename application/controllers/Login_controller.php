<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()  
    {  
        $data['title'] = "Login";
        $this->load->view('templates/header_login', $data);
        $this->load->view('loginpage');  
        $this->load->view('templates/footer');
    }

    public function authenticate()  
    {  
        $this->load->model('login_model');  
    
        if ($this->login_model->log_in_correctly())  
        {  
           redirect('Main');
        } else {  
            redirect('Login_controller');  
           
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Login_controller');  
    }  
}
    