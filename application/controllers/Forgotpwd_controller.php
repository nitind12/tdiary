<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Forgotpwd_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()  
    {  
        
        $data['title'] = "Forgot Password";
        $this->load->view('templates/header_login', $data);
        $this->load->view('Forgot_password');
        $this->load->view('templates/footer');
       
    }
}?>
 
