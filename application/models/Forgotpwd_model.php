<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Forgotpwd_model extends CI_Model
{
	
/*
	function fetch_pass($username)
	{
		$fetch_pass=$this->db->query("select password from sign_up where username='$username'");
		$res=$fetch_pass->result();
	}
*/
	
	function change_pass($username,$newPassword)
	{
		$update_pass=$this->db->query("UPDATE sign_up set password='$newPassword'  where username='$username'");
	}



}?>