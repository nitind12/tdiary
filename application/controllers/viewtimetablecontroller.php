<?php
class Viewtimetablecontroller extends CI_Controller{
	/*public function index()
	{
		
		$this->load->model('viewtimetablemodel');
		$a = $this->viewtimetablemodel->getData();
		
		$data['marks'] = $this->viewtimetablemodel->getData();
		
		$data['page_'] = 'timetableview';
       
        $this->load->view('templates/header');
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		

	}*/

	public function index()
	{
		 $data['page_'] = 'timetableview';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('viewtimetablemodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}
}