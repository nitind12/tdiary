<div class="sidebar hideblock">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="<?php echo site_url('Main/index'); ?>"><i class="menu-icon icon-dashboard">
                            
                        </i>Dashboard
                        </a></li>
                        
                        <li><a href="<?php echo site_url('Main/index'); ?>"><i class="menu-icon icon-inbox"></i>Notification <b class="label green pull-right"> 0</b> </a></li>
                        </b> </a></li>
                    </ul>
                        <!--/.widget-nav-->
                              
                     <ul class="widget widget-menu unstyled">
                        <?php foreach ($menu as $option) { ?>
                            <ul class="widget widget-menu unstyled">
                            <li><a class="collapsed" data-toggle="collapse" href="#togglePages<?php echo $option->sidebar_id;?>"><i class="menu-icon icon-table">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i><?php echo $option->sidebar_name;?> </a>
                                    <ul id="togglePages<?php echo $option->sidebar_id;?>" class="collapse unstyled">
                                    <?php foreach ($submenu as $suboption) { ?>
                                        <?php if($option->sidebar_id == $suboption->sidebar_id){?>
                                            <li><a href="<?php echo site_url($suboption->path); ?>"><i class="icon-edit"></i><?php echo $suboption->sub_sidebar_name; ?></a></li>
                                        <?php } ?>
                                    <?php } ?>
                                    </ul>
                            </li>
                            </ul>
                        <?php } ?>
                    </ul>  

                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo site_url('stu1c/index');?>"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                         </ul>
                                </li>
                                <li><a href="<?php echo site_url('Main/logout'); ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->