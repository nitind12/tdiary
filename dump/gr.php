<ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('stu1c/index');?>"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                         </ul>
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
              // $this->session->set_userdata('itypefrm', $mt);
              // $this->session->set_userdata('itypeidfrm', $so_);
            //$data['marks_headerr_']=$this->um->marks_header($so_,$mt);
           
            $this->load->view('templates/header', $data);
            $this->load->view('myrajpage',$data);  
            $this->load->view('templates/footer');
        }
        else 
        {
            redirect('test');
        }
    <div class="btn-box-row row-fluid">
          <?php
            $data = array(
              'name' => 'frmformSelected',
              'id' => 'frmformSelected'
            );
            echo form_open('Main/Edit_Form_controller', $data); 
          ?>

           <?php foreach($f4_ as $item){?>
             <div class="btn-box-row row-fluid" >
       
             <div class="btn-box-row row-fluid" >
                <button type="button" class="btn-box big span3" data-toggle="modal" data-target="#myModal">
                    <i class="icon-briefcase" id="btnaddclass"name="btnaddclass"></i>
                    <b><?php echo $item->form_type_name?></b>
              </button>
               </div>
   
                <?php 
              } ?>
          </div>
                         <input type="hidden" name="mtypeidfrm" id="mtypeidfrm">
              <input type="hidden" name="mtypenamefrm" id="mtypenamefrm">
              <?php
              echo form_close();
              ?>

      </div>
      jssss
      $('#Subject_Name').change(function(){
    var site_url_=$('#site_url').val;
    var Course=$('#Course').val();
    var Semester=$('#Semester').val();
    if(Course!= '' && Semester!= ''){
        $.ajax({
            url:site_url_+"Main/index",
            type:"POST",
            data :{'couser_id ': Course, 
            'semester_id':Semester

            },
            dataType:'json',
            success:function(data){
                $(#Subject_Name).html(data);
            },
            error:function(){
                $(#Subject_Name).html('No option');
            }


        });
    }

});
