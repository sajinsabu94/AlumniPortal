<?php    
 include_once("/db/dbconfig.php");
 
 
	$viewsql="SELECT t1.register_no,t1.fname,t1.sname,t1.mail,t1.phone,t1.gender,t2.username,t2.password,t2.type FROM       		  tbl_signstudnt AS t1 INNER JOIN tbl_login AS t2 ON t1.id=t2.id WHERE t1.register_no='12123'";
	$viewresult=mysql_query($viewsql);
    $row=mysql_fetch_array($viewresult);
	  
	  
  if(isset($_POST["submit"]))
  {
  
	  /*$signupdate="UPDATE tbl_signup SET dob='".$_POST["dob"]."',address='".$_POST["address"]."' WHERE id='1001'"; 
	  $result=mysql_query($signupdate);	*/
	  
	  $reginsert="INSERT INTO tbl_studntreg(register_no,fathername,mothername,guardian,dob,address,phone,gmail,photo)
	  VALUES('".$row["register_no"]."','".$_POST["fathername"]."','".$_POST["mothername"]."','".$_POST["guardian"]."',                 '".$_POST["dob"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["gmail"]."','".$_POST["photo"]."')";
	  $regresult=mysql_query($reginsert);
	  echo $reginsert;

	  
	  
	  $acadinsert="INSERT INTO tbl_studntacad(register_no,admn_no,dprt,course,admn_date,add_info)
	  VALUES('".$row["register_no"]."','".$_POST["admn_no"]."','".$_POST["dprt"]."','".$_POST["course"]."',                         '".$_POST["admn_date"]."','".$_POST["add_info"]."')";
	  $acadresult=mysql_query($acadinsert);
	  echo $acadinsert;
	  
	 
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
                                    <li><a href="login.html">Logout</a></li>
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
								<h3>Sign-Up Details</h3>
							</div>
                            <div class="module-body">
                            	<div class="control-group">
											<label class="control-label" >Register Number</label>
											<div class="controls">
												<input type="text" id="register_no" name="register_no" placeholder="You can't type something here..." class="span8" value="<?php echo $row["register_no"] ?>" disabled>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >First Name</label>
											<div class="controls">
												<input type="text" id="fname" name="fname" class="span8" value="<?php echo $row["fname"] ?>">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Second Name</label>
											<div class="controls">
												<input type="text" id="sname" name="sname" placeholder="You can't type something here..." class="span8"  value="<?php echo $row["sname"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Phone Number</label>
											<div class="controls">
												<input type="text" id="phone" name="phone" placeholder="You can't type something here..." class="span8"  value="<?php echo $row["phone"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Email - id</label>
											<div class="controls">
												<input type="text" id="mail" name="mail" placeholder="You can't type something here..." class="span8" value="<?php echo $row["mail"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Username</label>
											<div class="controls">
												<input type="text" id="username" name="username" placeholder="You can't type something here..." class="span8" value="<?php echo $row["username"] ?>" disabled>
											</div>
										</div>
                                    
        
                                        
                            </div>
                            
                            <div class="module-head">
								<h3>Personal Information</h3>
							</div>
                            <div class="module-body">

                            	<div class="control-group">
									<label class="control-label" >Father's Name</label>
										<div class="controls">
											<input type="text" id="fathername" name="fathername" placeholder="Enter your father name here.." class="span8">
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Mother's Name</label>
										<div class="controls">
											<input type="text" id="mothername" name="mothername" placeholder="Enter your mother name here..." class="span8">
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Gaurdian</label>
										<div class="controls">
											<input type="text" id="guardian" name="guardian" placeholder="Enter your guardian name here..." class="span8">
										</div>
								</div>
                                <div class="control-group">
											<label class="control-label" >Date of Birth</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="dob" type="text" placeholder="Date of year"        id="datepicker">
												</div>
											</div>
										</div>

                                
                                 <div class="control-group">
									<label class="control-label" >Contact Address</label>
										<div class="controls">
                                          <textarea class="span8" id="address" name="address" placeholder="Enter your contact address here..."></textarea>
										</div>
								</div>
                                
                                  <div class="control-group">
											<label class="control-label" >Phone Number</label>
											<div class="controls">
												<input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="span8" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Email - id</label>
											<div class="controls">
												<input type="text" id="gmail" name="gmail" placeholder="Enter your mail" class="span8">
											</div>
										</div>
                                  <div class="control-group">
											<label class="control-label" >Photo</label>
											<div class="controls">
												<input type="file" id="photo" name="photo" placeholder="upload" class="span8">
											</div>
										</div>
                            </div>
                            
							<div class="module-head">
								<h3>Academic Information</h3>
							</div>
							<div class="module-body">		
										<div class="control-group">
											<label class="control-label" >Admission Number</label>
											<div class="controls">
												<input type="text" id="admn_no" name="admn_no" placeholder="Enter your admission number" class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Department</label>
											<div class="controls">
												<input type="text" id="dprt" name="dprt" placeholder="Enter your department" class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Course</label>
											<div class="controls">
												<input type="text" id="course" name="course" placeholder="TEnter your course" class="span8">
											</div>
										</div>
                                         <div class="control-group">
											<label class="control-label" >Admission Date</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="admn_date" type="text" placeholder="Date of admission" id="datepicker">
												</div>
											</div>
										</div>

                                       <div class="control-group">
									<label class="control-label" >Additional Information</label>
										<div class="controls">
                                          <textarea class="span8" id="add_info" name="add_info" placeholder="Enter any additioanl information here..."></textarea>
										</div>
								</div>
                                        <div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn btn-danger">Submit</button>
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
