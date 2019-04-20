<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
         $this->load->model('Lectureedit_model','obj'); 
         $this->load->model('Add_class_model','am');
    }



    public function index()  
    {  
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "lecture_page";
        $data['page_'] = "Lecture_class";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
    }



    public function view_lecture_div()
    {
        $data['title'] = "Lectureview page";
        $data['page_'] = "Lecture_view_div";
        $data['cls_in_session'] = $this->am->fetchClass();

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');  
    }



    public function lecture_edit($no_,$sess,$crs)
    {  
        $data['add_class_in'] = $this->obj->add_view_class($no_);
        $data['t_diary'] = $this->obj->fetchtable($no_);
       // $data['total']=$this->obj->total_modal();
        $data['title'] = "lecture_edit";
        $data['page_'] = "Lecture_edit";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }



    public function lecture_view($no_,$sess,$crs)
    {  
        $data['add_class_in'] = $this->obj->add_view_class($no_);
        $data['t_diary'] = $this->obj->fetchtable($no_);
        $data['title'] = "lecture_view";
        $data['page_'] = "lecture_view";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage',$data);
        $this->load->view('templates/footer');
    }


    
    public function lecture_saving_data($no_,$sess,$crs)
    {
        $this->obj->lecture_saving_data_modal();
        redirect('Edit_controller/lecture_edit/'.$no_.'/'.$sess.'/'.$crs);
    }




    function lessonview()
    {
        $this->load->model('Lview_model','object');
        $data['lect_'] = $this->object->savingdata3();

        echo json_encode($data);    
    }



//--- for delete -->
    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Edit_controller/lecture_edit','refresh');
    }

//-- double click and edit ----//

    function updatedColumn()
    {

        $this->load->model('Lectureedit_model','lectup');
        $bool_= $this->lectup->updatedColumn();

        echo $data; 
    }

}	
?>
