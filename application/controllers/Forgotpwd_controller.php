<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  

class Forgotpwd_controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Forgotpwd_model' , 'fm');
    }
    

    
    public function index()
    {
        if($this->input->post('submit'))
        {
            $email=$this->input->post('email');
            $newPassword=$this->input->post('newPassword');
            $confirmPassword=$this->input->post('confirmPassword');

            $que=$this->db->query("select password from sign_up  where email='$email'");
            $row=$que->row();
           
            if(!strcmp($newPassword, $confirmPassword))
            {
                 $this->fm->change_pass($email,$newPassword);
                 

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