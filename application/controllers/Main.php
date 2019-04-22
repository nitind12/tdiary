<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct(){
        parent::__construct();
     //if(! $this->session->userdata('user')) redirect('Login_controller');
       $this->load->model('Add_class_model','am');
    }
    public function index()  
    {   $data['page_'] = "Reg_div";
       
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
   
    public function attendance_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "online_attendance";
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    public function attendance_view_controller()  
    {  
        $data['title'] = "ONLINE_VIEW_ATTENDANCE";
        $data['page_'] = "view_attendance_class";
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    public function attendance_class_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "online_take_attendance";
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }

    function specificClass()
    {
        $data['clsid'] = $this->am->specificClass();
        echo json_encode($data);
    }

    function view_attendance_controller_via_ajax($no_, $sess_){
        $data['reports_'] = $data['reports'] = $this->am->reports_attendance_modals($no_);
        echo json_encode($data);
    }
    public function view_attendance_controller($no_,$sess)  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "View-Attendance-Reports";
        // Fetcing Master Data
        $data['cls_in_session'] = $this->am->fetchCourses();
        $data['session__'] = $this->am->fetchSession();
        $data['subject__'] = $this->am->fetchSubject();
        
        // --------------------
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['reports'] = $this->am->reports_attendance_modals();
        $data['no_'] = $no_;
        $data['sess_'] = $sess;
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
     public function view_attendance_reports_controller($no_,$sess)  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "view-reports-attendance";
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['attendance_Status'] = $this->am->reports_modals($no_);   
         $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    
    public function addclass_controller()  
    {  
        $this->am->savingdata(); 
        redirect('Main/attendance_controller');   
        }

    public function delclass_controller($no_)  
    {  
        $this->am->delclass($no_); 
        redirect('Main/attendance_controller');   
    }



    public function takeattendance_controller($no_,$sess)  //showing the page of aatendance;
    {  
        $data['title'] = "TAKE-ONLINE_ATTENDANCE";
        $data['page_'] = "attendance_take";        
        $this->load->view('templates/header', $data);
         //  $data['add_class_in'] = $this->am->add_view_attendance($sess, $crs);
         //  $data['add_attend'] = $this->am->add_attendance($sess, $crs);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['add_attend'] = $this->am->add_attendance($sess, $no_);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }

    public function submitattendance_controller()               ///showing the page of submit the data;
    {  
        $this->am->take_attendance(); 
        redirect('Main/attendance_controller');   
    }

    function deleteClass($no_){
        $res = $this->am->delClass($no_);
        redirect('Main/attendance_controller');
    }
    
 }
?>  