<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Forgotpwd_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Forgotpwd_model','fm');
         //if(!$this->session->userdata('user')) redirect('Login_controller');
    }
    
   
    public function index()
  
    {

        if($this->input->post('btnpwd'))
        {

            $username=$this->input->post('username');
            $newPassword=$this->input->post('newPassword');
            $confirmPassword=$this->input->post('confirmPassword');

            $que=$this->db->query("select password from sign_up  where username='$username'");
            $row=$que->row();
           
            if(!strcmp($newPassword, $confirmPassword))
            {
                 $this->fm->change_pass($username,$newPassword);
                 

                $this->session->set_flashdata('c', "Password changed successfully");
            }
            else
            {
                   
                    $this->session->set_flashdata('c', "Invalid");
            }
        }

        $data['title'] = "Forgot Password";
        //$this->load->view('templates/header_login', $data);
        $this->load->view('Forgot_password'); 
        $this->load->view('templates/footer');  
    }
}
?>
 
