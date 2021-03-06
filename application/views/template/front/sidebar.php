

    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="index.html">Joli Admin</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="<?php echo base_url('assets/images/users/avatar.jpg');?>" alt="John Doe"/>
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">John Doe</div>
                            <div class="profile-data-title">Web Developer/Designer</div>
                        </div>
                        <div class="profile-controls">
                            <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <li class="xn-title">Navigation</li>
                <li class="active">
                    <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                </li>


                <li class="xn-title">Components</li>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                    <ul>
                        <li>
                            <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                            <div class="informer informer-danger">New</div>
                            <ul>
                                <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                            </ul>
                        </li>
                        <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                        <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                        <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                        <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                        <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                    <ul>
                        <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                        <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                        <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                    <ul>
                        <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                        <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                        <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                        <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                    <ul>
                        <li class="xn-openable">
                            <a href="#">Second Level</a>
                            <ul>
                                <li class="xn-openable">
                                    <a href="#">Third Level</a>
                                    <ul>
                                        <li class="xn-openable">
                                            <a href="#">Fourth Level</a>
                                            <ul>
                                                <li><a href="#">Fifth Level</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- END X-NAVIGATION -->
        </div>

        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..."/>
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-comments"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->

    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="<?php echo base_url('assets/audio/alert.mp3');?>" preload="auto"></audio>
    <audio id="audio-fail" src="<?php echo base_url('assets/audio/fail.mp3');?>" preload="auto"></audio>
    <!-- END PRELOADS -->

<!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery/jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js');?>'></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/scrolltotop/scrolltopcontrol.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/morris/raphael-min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/morris/morris.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/rickshaw/d3.v3.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/rickshaw/rickshaw.min.js');?>"></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>'></script>
    <script type='text/javascript' src='<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-datepicker.js');?>'></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/owl/owl.carousel.min.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/moment.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <!--<script type="text/javascript" src="<?php echo base_url('assets/js/settings.js');?>"></script>-->
<!-->settings load<-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/actions.js');?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/demo_dashboard.js');?>"></script>
    <!-- END TEMPLATE -->
<!-- END SCRIPTS -->
