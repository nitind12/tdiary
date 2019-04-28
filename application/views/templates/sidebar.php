<div class="sidebar hideblock">
                    <ul class="widget widget-menu unstyled">
                        <?php foreach ($dashboard1 as $option1) { ?>
                       <li class="active"><a href="<?php echo site_url($option1->path); ?>"><i class="menu-icon icon-dashboard">    
                        </i><?php echo $option1->sidebar_name;?></a></li>
                         <?php } ?>
                                   
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
                                <?php foreach ($last as $option1) { ?>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages<?php echo $option1->sidebar_id;?>"><i class="menu-icon icon-cog">
                                    
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i><?php echo $option1->sidebar_name; ?> </a>
                                    <ul id="togglePages<?php echo $option1->sidebar_id;?>" class="collapse unstyled">
                                        <li></li>
                                        
                                <?php }?>
                            </ul>
                        </div>
                        <!--/.sidebar-->