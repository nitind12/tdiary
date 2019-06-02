<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyedit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('Weeklyedit_model','obj');	
		$this->load->model('Add_class_model','am');
        if(!$this->session->userdata('user')) redirect('Login_controller');
		
	}

	function index()
	{
	
		$data['cls_in_session'] = $this->am->fetchClass();
	    $data['title'] = "Weeklyedit page";
        $data['page_'] = "Weeklyedit_class";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
    }
 function count_lecture()
    {
      $data['count'] = $this->obj->count_lecture();
              echo json_encode($data);
    }
function count_lecture1()
    {
       $data['count'] = $this->obj->count_lecture_arrangement();
              echo json_encode($data);
    }
function count_lecture2()
    {
       $data['count'] = $this->obj->count_lecture_Extra_Lecture_Taken();
              echo json_encode($data);
    }
function count_lecture3()
    {
       $data['count'] = $this->obj->count_lecture_Actual_Lecture_Taken();
              echo json_encode($data);
    }


    function weekly_edit()
    {  
        if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');
            $clsid = $this->input->post('courseidED');
            $subid = $this->input->post('subjectidED');

            $data['dashboard1'] = $this->am->getDashboardMenu();
            $data['menu'] = $this->am->getMenu();
            $data['submenu'] = $this->am->getSubmenu();
            $data['last'] = $this->am->getlastMenu();
            $data['add_class_in'] = $this->am->add_view_attendance($no_);
            $data['t_diary'] = $this->obj->fetchtable($no_,$subid);
            $data['title'] = "Weekly Edit";
            $data['page_'] = "Weeklyedit";
            $this->load->view('templates/header', $data);
            $this->load->view('mypreetipage',$data);
            $this->load->view('templates/footer');
         }
        else
        {
        redirect('Weeklyedit_controller');
        }
    }

    public function details($no_,$sd,$ed,$wi,$subid)
    {  
        $data['title'] = "Weekly details";
        $data['page_'] = "Weeklydetails";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
         $data['t_diary'] = $this->obj->fetchtable($no_,$subid);

         $data['t_diary'] = $this->obj->weeklyreport($wi);

        $data['details']= $this->obj->detailsreports($sd,$ed,$no_,$subid);
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }


    function weekly_view()
    {  

         if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');
            $clsid = $this->input->post('courseidED');
            $subid = $this->input->post('subjectidED');

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
           $data['add_class_in'] = $this->am->add_view_attendance($no_);
             $data['t_diary'] = $this->obj->fetchtable($no_,$subid);
            $data['title'] = "Weekly Edit";
            $data['page_'] = "Weeklyview";
            $this->load->view('templates/header', $data);
            $this->load->view('mypreetipage',$data);
            $this->load->view('templates/footer');
        }
        else
        {
            redirect('Weeklyview_controller');
        }
    }


	function savingdata($no_,$sess,$crs)
	{
		
		$this->obj->savingdata();
		redirect('Weeklyedit_controller/weekly_edit/'.$no_.'/'.$sess.'/'.$crs);
	}


    function del1()
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