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
            $username=$this->input->post('username');
            $newPassword=$this->input->post('newPassword');
            $confirmPassword=$this->input->post('confirmPassword');

            $que=$this->db->query("select password from sign_up  where username='$username'");
            $row=$que->row();

            if(!strcmp($newPassword, $confirmPassword))
            {
                $this->fm->change_pass($username,$newPassword);

                echo "Password changed successfully !";
            }
            else
            {
                    echo "Invalid";
            }
        }

        $data['title'] = "Forgot Password";
        $this->load->view('templates/header_login', $data);
        $this->load->view('Forgot_password'); 
        $this->load->view('templates/footer');  
    }
}
?>