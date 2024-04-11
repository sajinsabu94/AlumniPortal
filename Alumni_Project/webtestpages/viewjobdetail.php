<?php 
 session_start();   
 include_once("/db/dbconfig.php");
  if(isset($_REQUEST["id"]))
  {
  $jobsql="SELECT register_no, jobcode, jobtitle, jobtype, compname, compaddress, compsite, opendate,closedate,vacancy, salaray, qualif, skill, descrip,post_date FROM tbl_jobpost WHERE register_no='".$_REQUEST["id"]."'";
	$jobresult=mysql_query($jobsql);
	$jobrow=mysql_fetch_array($jobresult);
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
                        <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                        	<div class="module-head">
								<h3>Post a Job</h3>
							</div>
                            <div class="module-body">
                            	<!--<div class="control-group">
											<label class="control-label" >Register Number</label>
											<div class="controls">
												<input type="text" id="register_no" name="register_no" value=<?php echo $jobrow["register_no"]?> class="span8" disabled="disabled">
											</div>
										</div>-->
                                        <div class="control-group">
											<label class="control-label" >Jobe Code</label>
											<div class="controls">
												<input type="text" id="jobcode" name="jobcode" class="span8" value=<?php echo $jobrow["jobcode"]?> disabled="disabled">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Job Title/Desgination</label>
											<div class="controls">
												<input type="text" id="jobtitle" name="jobtitle" value=<?php echo $jobrow["jobtitle"]?> class="span8" disabled="disabled">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Job Type</label>
											<div class="controls">
												<input type="text" id="jobtype" name="jobtype" value=<?php echo $jobrow["jobtype"]?> class="span8" disabled="disabled" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Company Name</label>
											<div class="controls">
											<input type="text" id="compname" name="compname" value=<?php echo $jobrow["compname"]?> class="span8" disabled="disabled">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Company Address</label>
											<div class="controls">
												<textarea type="text" id="compaddress" name="compaddress" value="" class="span8" disabled="disabled"> <?php echo $jobrow["compaddress"]?> </textarea>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Company Site</label>
											<div class="controls">
											<input type="text" id="compsite" name="compsite" value=<?php echo $jobrow["compsite"]?> class="span8" disabled="disabled">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Open Date</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 												<input  class="span8" name="opendate" type="text" value=<?php echo $jobrow["opendate"]?> id="datepicker" disabled="disabled">
												</div>
											</div>
										</div>
                                         <div class="control-group">
											<label class="control-label" >Close Date</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="closedate" type="text" value=<?php echo $jobrow["closedate"]?> id="datepicker" disabled="disabled">
												</div>
											</div>
										</div>
                                        <div class="control-group">
									<label class="control-label" >Number of Vacancy</label>
										<div class="controls">
                                         <input class="span8" type="text" id="vacancy" name="vacancy" value=<?php echo $jobrow["vacancy"]?> disabled="disabled">
										</div>
								</div>
                            	<div class="control-group">
									<label class="control-label" >Salaray</label>
										<div class="controls">
											<input type="text" id="salaray" name="salaray" value=<?php echo $jobrow["salaray"]?>    class="span8" disabled="disabled">
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Qualification</label>
										<div class="controls">
											<input type="text" id="qualif" name="qualif" value=<?php echo $jobrow["qualif"]?> class="span8" disabled="disabled">
										</div>
								</div>
                         
                                
                                 <div class="control-group">
									<label class="control-label" >Skills</label>
										<div class="controls">
											<input type="text" id="skill" name="skill" value=<?php echo $jobrow["skill"]?> class="span8" disabled="disabled">
										</div>
								</div>
                                 <div class="control-group">
									<label class="control-label">Description</label>
										<div class="controls">
                                          <textarea type="text" class="span8" id="descrip" name="descrip" value="" disabled="disabled">                                          <?php echo $jobrow["descrip"]?> </textarea>
										</div>
								</div>
                                <div class="control-group">
											<label class="control-label" >Posted On</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 												<input  class="span8" name="closedate" type="text" value=<?php echo $jobrow["post_date"]?> id="datepicker" disabled="disabled">
												</div>
											</div>
										</div>
                                        <div class="control-group">
											<div class="controls">
                                                <button type="submit" name="ok" class="btn btn-danger">Done</button>
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

