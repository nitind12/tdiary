<?php
class Update_Assignment_Controller extends CI_Controller{
	/*public function index()
	{
		
		$this->load->model('update_assignmentmodel');
		$a = $this->update_assignmentmodel->getData();
		
		$data['marks'] = $this->update_assignmentmodel->getData();
		
		$data['page_'] = 'update_assignmentview';
		$data['title'] = 'Updated Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}*/

	public function index()
	{
		 $data['page_'] = 'update_assignmentview';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('update_assignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}
}