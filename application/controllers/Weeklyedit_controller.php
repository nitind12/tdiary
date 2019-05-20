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
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
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

    public function details($no_,$sd,$ed,$wi)
    {  
        $data['title'] = "Weekly details";
        $data['page_'] = "Weeklydetails";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
         $data['t_diary'] = $this->obj->fetchtable($no_);

         $data['t_diary'] = $this->obj->weeklyreport($wi);

        $data['details']= $this->obj->detailsreports($sd,$ed,$no_,$wi);
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