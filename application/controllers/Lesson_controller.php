<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('lessonplan');
	}
}?>