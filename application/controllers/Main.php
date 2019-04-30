<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct(){
        parent::__construct();

     if(!$this->session->userdata('user')) redirect('Login_controller');
       $this->load->model('Add_class_model','am');
    }
    public function index()  
    {   
        $data['page_'] = "Reg_div";
        $data['title'] = "Dashboard";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        /*/$Course_id=$this->input->post('Course');
        //$Semester_id=$this->input->post('Semester');
        //$Subject=$this->am->getSubject1($Course_id,$Semester_id);
        if(count($Subject)>0)
        {
            $sub_select_box="";
            $sub_select_box.='<option value="none">Select subject</option>';
            foreach($Subject as $sub)
            {
                $sub_select_box.='<option value="'.$sub->subject.'">'$sub->subject_name.'</option>';
            }
            echo json_encode($sub_select_box);
        }?*/
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    public function indext()  
    {   
        $data['page_'] = "teacherdash";
        $data['title'] = "Dashboard";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    public function indexs()  
    {   
        $data['page_'] = "studentdash";
        $data['title'] = "Dashboard";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    public function form_controller()  
    {   
        $data['page_'] = "formpage";
        $data['title'] = "Form Page";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['f4_'] = $this->am->getformtypeMenu();
       $data['course1'] = $this->am->getCourse1();
      $data['Semester1'] = $this->am->getSemester1();
      $data['Session1'] = $this->am->getSession1();
            
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
   
    public function attendance_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "online_attendance";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
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
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    public function attendance_class_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "online_take_attendance";
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
    public function attendance_report_student_controller()  
    {  
        $data['title'] = "Student-Report-Attendance";
        $data['page_'] = "student_report_attendance";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
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
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        // --------------------
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['reports'] = $this->am->reports_attendance_modals();
        $data['no_'] = $no_;
        $data['sess_'] = $sess;
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
     public function Edit_Form_controller()  /////internal marks page load as like input box;
    {  
        if($this->input->post('mtypeid')){
            $so_ = $this->input->post('mtypeidfrm');
            $mt = $this->input->post('mtypenamefrm');
            $data['title'] = "Select-Form-Type";
            $data['page_'] = "select_form_edit";        
               $data['dashboard1'] = $this->am->getDashboardMenu();
                $data['menu'] = $this->am->getMenu();
                $data['submenu'] = $this->am->getSubmenu();
                $data['last'] = $this->am->getlastMenu();
            $data['cls_in_session'] = $this->am->fetchClass();
               $this->session->set_userdata('itypefrm', $mt);
               $this->session->set_userdata('itypeid', $so_);
            $data['marks_headerr_']=$this->um->marks_header($so_,$mt);
           
            $this->load->view('templates/header', $data);
            $this->load->view('myrajpage',$data);  
            $this->load->view('templates/footer');
        }
        else 
        {
            redirect('test');
        }
    }
    
     public function view_attendance_reports_controller($no_,$sess)  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "view-reports-attendance";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['attendance_Status'] = $this->am->reports_modals($no_);   
         $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    
    public function addclass_controller()  
    {  
    
        $config['upload_path']  = './assets/uploads/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']     = 1000;
            $this->load->library('upload', $config);    
                $upload_data = $this->upload->data();
                $data['pic_file'] = $upload_data['file_name'];
                 $this->am->savingdata($data); 
            
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
       
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
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