<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <?php
      
          include_once("/pagestyles/head.php");
      ?>
</head>

<body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                   <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="../.">Alumni Survey</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                    
                        <ul class="nav pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                   </div>
                    <!-- /.nav-collapse -->
                </div> 

            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="../."><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                                <li><a href="../create-report.html"><i class="menu-icon icon-pencil"></i>Create Report </a></li>
                                <li><a href="../reports.html"><i class="menu-icon icon-inbox"></i>Reports <b class="label green pull-right">
                                    11</b> </a></li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="../login.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                                
                                
                            </ul>
                            </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            
                            <!--/#btn-controls-->
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Dashboard</h3>
                                </div>
                                <div class="module-body">
                                    <div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div>

									<br />
                                </div>
                            </div>
                            <!--/.module-->
                            
                            
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
         <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2017 UIT Kollam.</b> All rights reserved.
            </div>
        </div>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
</body>
</html>
