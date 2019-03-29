<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tblec extends CI_Controller {
public function index()
	{
		$this->load->helper('url');
		//$this->load->helper('html');
		$this->load->view('table');

	}
}











