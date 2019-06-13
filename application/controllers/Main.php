<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
    function __construct()
    {
        parent::__construct();

     if(!$this->session->userdata('user')) redirect('Login_controller');
       $this->load->model('Add_class_model','am');
       $this->load->model('Viewtimetablemodel','vm');
        $this->load->model('Assign_report_model','ar');
      
    }

    public function total_subject()  
    {   
        $data['page_'] = "Total_subject";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Course'] = $this->am->getall_course();
        $data['totSubject'] = $this->am->getall_subject();
     
        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
public function total_subject2()  
    {   
        $data['page_'] = "Total_subject";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Course'] = $this->am->getall_course();
        $data['totSubject'] = $this->am->getall_subjectno2211();
     
        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }

    public function total_course()  
    {   
        $data['page_'] = "Total_course";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Course'] = $this->am->getall_course();
     
        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }



     function gettotal_course_details($course)  
       {   
        $data['page_'] = "Total_course_details";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['cour'] = $this->am->gettotal_course_details($course);

 
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    

     public function total_faculty()  
    {   
        $data['page_'] = "total_faculty";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Faculty'] = $this->am->getallfaculty();
     
        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }


    function gettotal_faculty_details($faculty)  
       {   
        $data['page_'] = "Total_faculty_details";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['m'] = $this->am->gettotal_facuty_details($faculty);

 
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    
    

    public function total_student()  
    {   
        $data['page_'] = "total_student";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Student'] = $this->am->getallstudent();
     
        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }

     function gettotal_student_details($std)  
       {   
        $data['page_'] = "Total_student_details";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['m'] = $this->am->gettotalstd_details($std);

 
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    
  



    public function index()  
    {   
        $data['page_'] = "Reg_div";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['student_no'] = $this->am-> getallstudentno();
        $data['faculty_no'] = $this->am-> getall_facultyno();
        $data['course_no'] = $this->am-> getall_courseno();
        $data['view_edit_class_no'] = $this->am-> getall_view_edit_classno();


        $Course_id=$this->input->post('Course');
        $Semester_id=$this->input->post('Semester');
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }




    public function indext()  
    {   
            $data['days_'] = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $data['time_'] = array ('09_00_09_50', '09_50_10_40', '10_40_11_30', '11_50_12_40', '12_40_01_30', '02_10_03_00', '03_00_03_50', '03_50_04_40');
        $data['page_'] = "teacherdash";
        $data['title'] = "Dashboard";
        $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();

        $data['subject_no'] = $this->am->getall_subjectno22();
        $data['view_edit_class_no'] = $this->am-> getall_view_edit_classno22();

        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
    public function indexs()  
    {   
        $data['page_'] = "studentdash";
        $data['title'] = "Dashboard";
        $data['dashboard1'] = $this->am->getDashboardMenu();
          $data['subject_'] = $this->am->subject_wise_data();
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
    
    public function Promoted_Class_controller()
     {   
        $data['page_'] = "Promoted_Class";
        $data['title'] = "Form Page";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['f4_'] = $this->am->getformtypeMenu();
       $data['course1'] = $this->am->getCourse1();
      $data['Semester1'] = $this->am->getSemester1();
      $data['Session1'] = $this->am->getSession1();
      $data['faculty'] = $this->am->getfaculty();
             
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
      $data['faculty'] = $this->am->getfaculty();
      $data['class'] = $this->am->getclass1();
             
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
        $data['cls_in_session'] = $this->am->fetchClass1();
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
        $data['page_'] = "student_report_attendance1";
        $data['course1'] = $this->am->getCourse1();
         $data['cls_in_session'] = $this->am->fetchClass();
       
        $data['Semester1'] = $this->am->getSemester1();
        $data['Session1'] = $this->am->getSession1();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();

        $data['subjects'] = $this->am->subjectCAT();
   
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
   
   
  public function attendance_report_student_controller_admin()  
    {  
        $data['title'] = "Student-Report-Daywise";
        $data['page_'] = "student_report_daywise";
        $data['course1'] = $this->am->getCourse1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Session1'] = $this->am->getSession1();
        
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
  public function attendance_report_student_controller1()  
    {  
        $data['title'] = "Student-Report-Daywise";
        $data['page_'] = "student_daywise";
        $data['course1'] = $this->am->getCourse1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Session1'] = $this->am->getSession1();
        
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

    public function attendance_report_student_controller_daywise()  
    {  
        $data['title'] = "Student-Report-Daywise";
        $data['page_'] = "student_report_daywise_student";
        
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['subjects'] = $this->am->subjectCAT();
   
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }     


 public function attendance_report_View_Consolidate()  
    {  
        $data['title'] = "View-Consolidate";
        $data['page_'] = "view_attendance_consolidate";
        $data['cls_in_session'] = $this->am->fetchClass();
       
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();

       
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }

public function attendance_report_View_Consolidate2($no_,$sess,$cour,$sem,$subid)  
    {  
        $data['title'] = "View-Consolidate";
        $data['page_'] = "student_report_View_Consolidate";
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
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
    public function view_attendance_controller()  
    {  
        if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');

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
        else
        {
            redirect("main/view_attendance_controller");
        }
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
    
     public function view_attendance_reports_controller()  
    {  
        $data['title'] = "ONLINE_ATTENDANCE";
        $data['page_'] = "view-reports-attendance";
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



    public function takeattendance_controller()  //showing the page of aatendance;
    {  

        if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');

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
        else
        {
            redirect('Main/takeattendance_controller');
        }
    }


 public function asignsubject_controller()               ///showing the page of submit the data;
    {  
        $this->am->assignsubject_modals(); 
        redirect('Main/form_controller');   
    }
    public function submitattendance_controller()               ///showing the page of submit the data;
    {  
        $this->am->take_attendance(); 
        redirect('Main/attendance_class_controller');   
    }

    function deleteClass($no_){
        $res = $this->am->delClass($no_);
        redirect('Main/attendance_controller');
    }
    function addsectionClass(){
         $this->am->addsectionstudent();
        
        redirect('Main/Promoted_Class_controller');
    }
    function reports_attendance_controller_CA()
    {
        $data['consolidate']=$this->am->reports_attendance_modalsCA789();
        $data['date1']=$this->am->reports_attendance_modals_data_admin789();
        $data['student']=$this->am->reports_attendance_modals_datastudent789();
       
        echo json_encode($data);
    
    }
        
 function promotedClass()
 {
 $this->am->addpromotedstudent();
redirect('Main/Promoted_Class_controller');
}
    function get_subjects(){
        $data['subjects'] = $this->am->getSubject1();
        echo json_encode($data);
    }
    function get_subjectc(){
        $data['subjects'] = $this->am->getSubjectc();
        echo json_encode($data);
    }
    function get_subjectc23(){
        $data['subjects'] = $this->am->getSubjectc23();
        echo json_encode($data);
    }
    function get_subjectsasign(){
        $data['subjects'] = $this->am->getSubjectasign();
        echo json_encode($data);
    }
    function get_class()
    {
        $data['class'] = $this->am->getclass1();
        echo json_encode($data);
    }
    function get_classC()
    {
        $data['class'] = $this->am->getclassC();
        echo json_encode($data);
    }
    function get_classC23()
    {
        $data['class'] = $this->am->getclassC23();
        echo json_encode($data);
    }
    function get_classassign()
    {
        $data['class'] = $this->am->getclassassign();
        echo json_encode($data);
    }
    function get_classP()
    {
        $data['class'] = $this->am->getclassP();
        echo json_encode($data);
    }
 function get_classP1()
    {
        $data['class'] = $this->am->getclassP1();
        echo json_encode($data);
    }

function get_student()
    {
        $data['student'] = $this->am->getstudent1();
        echo json_encode($data);
    }
    function get_studentP()
    {
        $data['student'] = $this->am->getstudentP();
        echo json_encode($data);
    }

    function get_sessionassign()
       {
        $this->am->addSession();
         redirect('Main/form_controller');

     }


       function get_Batchsign()
       {
        $this->am->addBatch();
         redirect('Main/form_controller');

     }

         function getAdmin_pwd()
       {
        $this->am->addAdmin_pwd();
         redirect('Main/form_controller');

    }


     public function addcourse_controller()  
    {  
    
        $this->am->add_course(); 
            
        redirect('Main/form_controller');   
        }

    

    public function save_notes_controller()  
    {  
    
         $this->am->getUpload();
       
        redirect('Main/upload_controller');   
        }


    public function Upload_controller()
     {   
        $data['page_'] = "Upload_Notes";
        $data['title'] = "Form Page";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['downloads'] = $this->am->download_models();

        $data['course1'] = $this->am->getCourse1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Session1'] = $this->am->getSession1();
      
       
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
    }
    function get_subjectupload()
    {
        $data['subjects'] = $this->am->getuploadsubject();
        echo json_encode($data);
    }


       public function Download_controller()
     {   
        $data['page_'] = "Download_notes";
        $data['title'] = "Form Page";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['downloads'] = $this->am->download_models2();
    
        $data['subjects'] = $this->am->getSubject_download();

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
    }


        

    function notes_view(){
        $data['down_notes'] = $this->am->notes_view();
        echo json_encode($data);
    }



    //--- for delete -->
    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->am->del($u);
        
        redirect('Main/upload_controller','refresh');
    }



    function totalAttenview()
    {
        $data['totalatten_'] = $this->am->totalAttendance_view();

        echo json_encode($data);    
    }

 function view_attendance_controller_via_ajax2()
 {
        $data['reports_'] = $this->am->reports_attendance_modalsC($no_);
        echo json_encode($data);
    }
  public function attendance_report_student_controller_student()  
    {  
        $data['title'] = "Student-Report-Attendance";
        $data['page_'] = "report_attendance_student_cons";
        $data['course1'] = $this->am->getCourse1();
        $data['Semester1'] = $this->am->getSemester1();
        $data['Session1'] = $this->am->getSession1();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();

        $data['subjects'] = $this->am->subjectCAT();
   
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
   
  
 function reports_attendance_controller_via_ajax_studentCA()
 {
        $data['consolidate'] = $this->am->reports_attendance_modals_studentCA5();
        $data['date1']=$this->am->reports_attendance_modals_data();
        $data['student']=$this->am->reports_attendance_modals_datastudentCA();
       
        echo json_encode($data);
    }

function reports_attendance_controller_via_ajax_student_daywise()
 {
        $data['consolidate']=$this->am->reports_attendance_modals_studentCA6();
        $data['date1']=$this->am->reports_attendance_modals_data_day();
        $data['student']=$this->am->reports_attendance_modals_datastudentCA();
       
        echo json_encode($data);
    }
function reports_attendance_controller_via_ajax_student_daywise_admin()
 {
        $data['consolidate']=$this->am->reports_attendance_modals_student_admin();
        $data['date1']=$this->am->reports_attendance_modals_data_day_admin1();
        $data['student']=$this->am->reports_attendance_modals_datastudent_admin_day();
       
        echo json_encode($data);
    }

 public function attendance_report_student_controller_student2()  
    {  
        $data['title'] = "Student-Report-Attendance";
        $data['page_'] = "student_total_reports";
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
         $data['subjects'] = $this->am->subjectCAT();
   
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
function reports_attendance_controller_via_ajax_student_total()
 {
        $data['consolidate']=$this->am->reports_attendance_modals_student_total();
       
        echo json_encode($data);
    }

   //admin total
    public function attendance_report_student_controller2()  
    {  
        $data['title'] = "Student-Report-Attendance";
        $data['page_'] = "total_attendance_admin";
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
function reports_attendance_controller_via_ajax_student_total_admin_2()
 {
        $data['consolidate']=$this->am->reports_attendance_modals_student_total_admin_23();
        $data['consolidate2']=$this->am->reports_attendance_modals_student_total_admin_23458();
       $data['student']=$this->am->reports_attendance_modals_datastudent_admin_total_23();
       $data['date']=$this->am->reports_attendance_modals_data_admin_total_date_231();
       
        echo json_encode($data);
    }

public function attendance_report_View_total_faculty() 
{ 
   if($this->input->post('addclassidtotal'))
        {
            $no_ = $this->input->post('addclassidtotal');
            $sess = $this->input->post('sessionidtotal');

      $data['title'] = "View-Consolidate";
        $data['page_'] = "view_attendance_total_reports_faculty";
        $data['cls_in_session'] = $this->am->fetchClass();
         $data['add_class_in'] = $this->am->add_view_attendance($no_);
      
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();

       
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
        
    }
        else
        {
            redirect('Main/attendance_report_student_controller');
        }
}

function reports_attendance_controller_via_ajax_faculty_total()
 {
        $data['consolidate'] = $this->am->reports_attendance_modals_student_total_faculty_reports();
        $data['student'] = $this->am->reports_attendance_modals_data_faculty_student_details_87();
        $data['date'] = $this->am->reports_attendance_modals_data_faculty_date_87();
        echo json_encode($data);
    }

}
?>  