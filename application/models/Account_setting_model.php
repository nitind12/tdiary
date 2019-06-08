<?php
class Account_setting_model extends CI_Model 
{

/*	function fetch_pass($username)
	{
		$fetch_pass=$this->db->query("select * from sign_up where username='$username'");
		$res=$fetch_pass->result();
	}
*/
	function change_pass($username,$new_pass)
	{
		$update_pass=$this->db->query("UPDATE sign_up set password='$new_pass'  where username='$username'");
	}
}