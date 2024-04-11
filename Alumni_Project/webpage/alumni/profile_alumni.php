<?php    
 session_start();
 include_once("../../db/dbconfig.php");
 
 
	$viewsql="SELECT t1.register_no,t1.fname,t1.sname,t1.mail,t1.phone,t1.gender,t1.dob,t1.address,t2.username,t2.password,t2.type FROM tbl_signup AS t1 INNER JOIN tbl_login AS t2 ON t1.id=t2.id WHERE t1.register_no='".$_SESSION["register_no"]."'";
	$viewresult=mysql_query($viewsql);
    $row=mysql_fetch_array($viewresult);
	
	$balsql="SELECT t1.register_no,t1.dprt,t1.course,t1.fyear,t1.tyear,t1.activity,t1.addinfo,t2.register_no,t2.jobtype,t2.compname,t2.desgination,t2.addinfo,t2.photo FROM tbl_alumniacad AS t1 INNER JOIN tbl_alumnicareer AS t2 ON t1.register_no=t2.register_no WHERE t1.register_no='".$_SESSION["register_no"]."' ";
	
	$viewrsbal=mysql_query($balsql);
	$rowbal=mysql_fetch_array($viewrsbal);
	  
	  
  if(isset($_POST["submit"]))
  {
  
	  $signupdate="UPDATE tbl_signup SET dob='".$_POST["dob"]."',address='".$_POST["address"]."' WHERE register_no='".$_SESSION["register_no"]."'"; 
	  $result=mysql_query($signupdate);	  
	  
	  $acadinsert="UPDATE tbl_alumniacad SET register_no='".$_SESSION["register_no"]."',dprt='".$_POST["dprt"]."',course='".$_POST["course"]."',fyear='".$_POST["fyear"]."',tyear='".$_POST["tyear"]."',activity='".$_POST["activity"]."',addinfo='".$_POST["addinfo"]."' WHERE register_no='".$_SESSION["register_no"]."'";
	  $acadresult=mysql_query($acadinsert);

	  
	  $uploaddir = 'uploads/';
	  $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
      move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile) ;
	  
	  if($_POST["photo"]=='')
	  {
	  $careerinsert="UPDATE tbl_alumnicareer SET register_no='".$_SESSION["register_no"]."',jobtype='".$_POST["jobtype"]."',compname='".$_POST["cname"]."',desgination='".$_POST["desgn"]."',addinfo='".$_POST["addinfor"]."',photo='".$uploadfile."' WHERE register_no='".$_SESSION["register_no"]."'";
	  $careerresult=mysql_query($careerinsert);
	  }
	  else
	  {
		  $careerinsert="UPDATE tbl_alumnicareer SET register_no='".$_SESSION["register_no"]."',jobtype='".$_POST["jobtype"]."',compname='".$_POST["cname"]."',desgination='".$_POST["desgn"]."',addinfo='".$_POST["addinfor"]."',photo='".$uploadfile."' WHERE register_no='".$_SESSION["register_no"]."'";
	  $careerresult=mysql_query($careerinsert);
		  
	  }
	  
	 
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../../images/favicon.png"/>
	<title>Alumni Survey</title>
	<link type="text/css" href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../../bootstrap/css/datepicker.css" rel="stylesheet">
	<link type="text/css" href="../../css/theme.css" rel="stylesheet">
	<link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>
<div class="navbar navbar-fixed-top" style="position:fixed;">
		<div class="navbar-inner">
                <div class="container">
			        <?php include_once("/sidemenu/top.php");?>
                </div>
                <!-- container -->
            </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
                        <?php include_once("/sidemenu/profile_sidemenu.php");?>
                    </div>
                    <!--/.span3-->

				<div class="span9">
					<div class="content">

						<div class="module">
                        <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                        	<div class="module-head">
								<h3>Personal Information</h3>
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
                                        <div class="control-group">
											<label class="control-label" >Date of Birth</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="dob" type="text" placeholder="Date of year"        id="datepicker" value="<?php echo $row["dob"] ?>">
												</div>
											</div>
										</div>
                                        <div class="control-group">
									<label class="control-label" >Contact Address</label>
										<div class="controls">
                                          <textarea class="span8" id="address" name="address" placeholder="Type something here..."><?php echo $row["address"] ?></textarea>
										</div>
								</div>
        
                                        
                            </div>
                            
                            <div class="module-head">
								<h3>Academic Information</h3>
							</div>
                            <div class="module-body">

                            	<div class="control-group">
									<label class="control-label" >Department</label>
										<div class="controls">
											<input type="text" id="dprt" name="dprt" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["dprt"] ?>" >
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Course</label>
										<div class="controls">
											<input type="text" id="course" name="course" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["course"] ?>">
										</div>
								</div>
                                 <div class="control-group">
											<label class="control-label" >From Year</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on"><i class="icon-calendar"></i></span>
                                                <input  class="span8" name="fyear" type="text" placeholder="From Year"  id="datepickerfrom" value="<?php echo $rowbal["fyear"] ?>">      
												</div>
											</div>
										</div>

                                
                                 <div class="control-group">
											<label class="control-label" >To Year</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on"><i class="icon-calendar"></i></span>
                                                 <input  class="span8" name="tyear" type="text" placeholder="To Year"  id="datepickerto" value="<?php echo $rowbal["tyear"] ?>">      
												</div>
											</div>
										</div>

                                
                                 <div class="control-group">
									<label class="control-label" >Activities</label>
										<div class="controls">
											<input type="text" id="activity" name="activity" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["activity"] ?>">
										</div>
								</div>
                                 <div class="control-group">
									<label class="control-label" >Additional Information</label>
										<div class="controls">
                                          <textarea class="span8" id="addinfo" name="addinfo" placeholder="Type something here..."><?php echo $rowbal["addinfo"] ?></textarea>
										</div>
								</div>
                       
                            </div>
                            
							<div class="module-head">
								<h3>Career Information</h3>
							</div>
							<div class="module-body">		
										<div class="control-group">
											<label class="control-label" >Job Type</label>
											<div class="controls">
												<input type="text" id="jobtype" name="jobtype" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["jobtype"] ?>">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Company Name</label>
											<div class="controls">
												<input type="text" id="cname" name="cname" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["compname"] ?>">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Designation</label>
											<div class="controls">
												<input type="text" id="desgn" name="desgn" placeholder="Type something here..." class="span8" value="<?php echo $rowbal["desgination"] ?>">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Additional Information</label>
											<div class="controls">
                                              <textarea class="span8" id="addinfor" name="addinfor" placeholder="Type something here..." value="">   <?php echo $rowbal["addinfo"] ?>
                                              </textarea>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Photo</label>
											<div class="controls">
												<input type="file" id="photo" name="photo" placeholder="upload" class="span4" >
                                                 <img width="150" height="180" src="<?php echo $rowbal["photo"];?>"/>
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

    <script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../../bootstrap/js/bootstrap-datepicker.js"></script> 
	<script src="../../scripts/common.js" type="text/javascript"></script>
      
      
</body>
</html>
