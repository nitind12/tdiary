<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonedit_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('lessonedit');
	}
}?>