<?php
class Check_assign_report_controller extends CI_Controller{
	public function index()
	{
		 $data['page_'] = 'check_assign_report_view';
		 $data['title'] = 'assign_report_view ';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function assignment_report(){
		$this->load->model('check_assign_report_model','im');
		$data['marks'] = $this->im->assignment_report();

		echo json_encode($data);
	}





	public function marks1()
	{
		 $data['page_'] = 'check_marks1_report_view';
		 $data['title'] = 'marks_report_view ';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function marks1_report(){
		$this->load->model('check_assign_report_model','im');
		$data['marks'] = $this->im->marks1_report();

		echo json_encode($data);
	}
}