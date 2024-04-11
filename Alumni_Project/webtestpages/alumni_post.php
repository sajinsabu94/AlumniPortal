<?php
 session_start();   
 include_once("/db/dbconfig.php");
 if(isset($_POST["post"]))
 {
 $insertsql="INSERT INTO tbl_alumnipost(register_no, postby, posttitle, postname, poston, postdescrp, postphoto, postdate) VALUES ('".$_SESSION["register_no"]."','".$_SESSION["fname"]."','".$_POST["title"]."','".$_POST["name"]."','".$_POST["poston"]."','".$_POST["descrp"]."','".$_POST["photo"]."','".date("d/M/Y")."')";
 $result=mysql_query($insertsql);
 echo $insertsql;
 }
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.png"/>
	<title>Alumni Survey</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/datepicker.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>
<div class="navbar navbar-fixed-top" style="position:fixed;">
		<div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href=".">Alumni Survey</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                    
                        <ul class="nav pull-right">
                        <li><a><i class="icon-calendar"></i> 11-06-2015 </a></li>
                            <li><a><i class="icon-time"></i> <span id="clock"></span> </a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Support
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="change-password.html">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span2">
			
                </div>


				<div class="span9">
					<div class="content">

						<div class="module">
                        	<div class="module-head">
								<h3>Personal Information</h3>
							</div>
                            <div class="module-body">
                            <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                            	<div class="control-group">
											<label class="control-label" >Post Title</label>
											<div class="controls">
												<input type="text" id="title" name="title" placeholder="Enter the title of the post" class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Post Name</label>
											<div class="controls">
												<input type="text" id="name" name="name" placeholder="Enter the Post name" class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Conduct On</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8"  name="poston" type="text" placeholder="Conduct on" id="datepicker">
												</div>
											</div>
										</div>
                                        <div class="control-group">
									<label class="control-label" >Description</label>
										<div class="controls">
                                          <textarea class="span8" id="descrp" name="descrp" placeholder="About the post"></textarea>
										</div>
								</div>
                                <div class="control-group">
											<label class="control-label" >Photo</label>
											<div class="controls">
												<input type="file" id="photo" name="photo" placeholder="upload" class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<div class="controls">
												<button type="submit" name="post" class="btn btn-danger">Post</button>
                                                <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>
											</div>

										</div>
                                      </div>
                                </form>
                           
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<div class="footer">
		<div class="container">
			 
			<b class="copyright">&copy; 2017 UIT Kollam.</b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap-datepicker.js"></script> 
	<script src="scripts/common.js" type="text/javascript"></script>
      
</body>
</html>
