<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
       // $this->load->model('testmodel','um');

    }
    
    public function index()  
    {  
       
       // $data['users'] = $this->um->fetchtable();
      $data['page_'] = 'newdashboard';

        $data['title'] = "Dashboard";

        $this->load->view('templates/header',$data);
       // $this->load->view('internal',$data); 
         $this->load->view('myrajpage',$data);
        $this->load->view('templates/footer');
    }

    /*public function authenticate()  
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
    }  */
}
    