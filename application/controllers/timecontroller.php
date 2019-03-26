<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Timecontroller3 extends CI_Controller{
public function index()
{
 $data['page_'] = 'testview3';
 $data['title'] = "Timetable";
 $this->load->view('templates/header',$data);
 $this->load->view('dashboard',$data);
 $this->load->view('templates/footer');
}
}
<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Timecontroller2 extends CI_Controller{
public function index()
{
 $data['page_'] = 'testview2';
 $data['title'] = "Timetable";
 $this->load->view('templates/header',$data);
 $this->load->view('dashboard',$data);
 $this->load->view('templates/footer');
}
}
<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Timecontroller4 extends CI_Controller{
public function index()
{
 $data['page_'] = 'testview4';
 $data['title'] = "Timetable";
 $this->load->view('templates/header',$data);
 $this->load->view('dashboard',$data);
 $this->load->view('templates/footer');
}
}
<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Timecontroller5 extends CI_Controller{
public function index()
{
 $data['page_'] = 'testview5';
 $data['title'] = "Timetable";
 $this->load->view('templates/header',$data);
 $this->load->view('dashboard',$data);
 $this->load->view('templates/footer');
}
}