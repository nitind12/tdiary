<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyedit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Weeklyedit_model','obj');	
		$this->load->model('Add_class_model','am');
		
	}

	function index()
	{
	
		$data['cls_in_session'] = $this->am->fetchClass();
	    $data['title'] = "Weeklyedit page";
        $data['page_'] = "Weeklyedit_class";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

    public function weekly_edit($no_,$sess,$crs)
    {  
        $data['add_class_in'] = $this->obj->add_view_class($no_);
        $data['t_diary'] = $this->obj->fetchtable($no_);
        $data['title'] = "Weekly Edit";
        $data['page_'] = "Weeklyedit";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }
    public function details($no_,$sd,$ed)
    {  
        $data['title'] = "Weekly details";
        $data['page_'] = "Weeklydetails";
        $data['details']= $this->obj->detailsreports($sd,$ed,$no_);
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }


    public function weekly_view($no_,$sess,$crs)
    {  
        $data['add_class_in'] = $this->obj->add_view_class($no_);
        $data['t_diary'] = $this->obj->fetchtable($no_);
        $data['title'] = "Weekly Edit";
        $data['page_'] = "Weeklyview";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }


	function savingdata($no_,$sess,$crs)
	{
		
		$this->obj->savingdata();
		redirect('Weeklyedit_controller/Weekly_edit/'.$no_.'/'.$sess.'/'.$crs);
	}

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Weeklyedit_controller','refresh');
    }


    function updatedColumn()
    {
      //  $this->load->model('Lessonedit_model','lectup');
        $bool_= $this->obj->updatedColumn();
        echo $data; 
    }


}
?>