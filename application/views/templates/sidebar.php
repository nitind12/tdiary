<div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Update</a>
                        </li>
                        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Notification <b class="label green pull-right"> 0</b> </a></li>
                        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                        19</b> </a></li>
                    </ul>
                        <!--/.widget-nav-->
                              
                     <ul class="widget widget-menu unstyled">
                        <li><a href="#"><i class="menu-icon icon-table"></i> Online Attendance </a></li> 



                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages1"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Lecture Plan </a>
                                    <ul id="togglePages1" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('Edit_controller/index'); ?>"><i class="icon-edit"></i>Edit</a></li>
                                        
                                        <li><a href="<?php echo site_url('Lview_controller/index'); ?>"><i class="icon-eye-open"></i>View</a></li>
                                    </ul>
                                </li>
                            </ul>

   
                             <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-book">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Lesson Plan </a>
                                        <ul id="togglePages2" class="collapse unstyled">
                                            <li><a href="<?php echo site_url('Lessonedit_controller/index'); ?>"><i class="icon-edit"></i>Edit</a></li>
                                                       
                                             <li><a href="<?php echo site_url('Lessonview_controller/index'); ?>"><i class="icon-eye-open"></i>View </a></li>
                                        </ul>
                                    </li>
                             </ul>

                               <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#togglePages4"><i class="menu-icon icon-book">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Weekly Lesson Plan </a>
                                        <ul id="togglePages4" class="collapse unstyled">
                                            <li><a href="<?php echo site_url('Weeklyedit_controller/index'); ?>"><i class="icon-edit"></i>Edit</a></li>
                                                       
                                             <li><a href="<?php echo site_url('Weeklyview_controller/index'); ?>"><i class="icon-eye-open"></i>View </a></li>
                                        </ul>
                                    </li>
                             </ul>
                                  


                                       <!--  <li><a href="#togglePage"><i class="icon-book"></i>Weekly Lesson Plan </a> </li>    
                                    <!-  <li><a href="#"><i class="menu-icon icon-paste"></i>Lesson Plan </a></li>

                                      <li><a href="#"><i class="menu-icon icon-paste"></i>Weekly Plan </a></li>     -->

                                     <ul class="widget widget-menu unstyled">
                                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages3"><i class="icon-paste">
                                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Internal Marks </a>
                                                  <ul id="togglePages3" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('test/index');?>"><i class="icon-edit"></i>Edit</a></li>
                                        <li><a href="<?php echo site_url('nitin/view');?>"><i class="icon-eye-open"></i>View </a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                               

                                <li><a href="#"><i class="menu-icon icon-bold"></i> Assignments</a></li>
                                <li><a href="#"><i class="menu-icon icon-bar-chart"></i>Time-Charts </a></li>
                        </ul>



                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('Main/logout'); ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->