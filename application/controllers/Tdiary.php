<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tdiary extends CI_Controller
 {
	function index()
	{
		
		$this->load->view('dashboard');

	}
}
