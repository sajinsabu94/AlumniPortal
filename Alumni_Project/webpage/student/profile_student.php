<?php   
session_start(); 
 include_once("../../db/dbconfig.php");
 
 
	$viewsql="SELECT t1.register_no,t1.fname,t1.sname,t1.mail,t1.phone,t1.gender,t2.username,t2.password,t2.type FROM       		  tbl_signstudnt AS t1 INNER JOIN tbl_login AS t2 ON t1.id=t2.id WHERE t1.register_no='".$_SESSION["register_no"]."'";
	$viewresult=mysql_query($viewsql);
    $row=mysql_fetch_array($viewresult);
	
	$viewsql1="SELECT t1.fathername,t1.mothername,t1.guardian,t1.dob,t1.address,t1.phone,t1.gmail,t1.photo,t2.admn_no,t2.dprt,t2.course,t2.admn_date,t2.add_info FROM tbl_studntreg AS t1 INNER JOIN tbl_studntacad AS t2 ON t1.id=t2.id WHERE t1.register_no='".$_SESSION["register_no"]."'";
	$viewresult1=mysql_query($viewsql1);
    $row1=mysql_fetch_array($viewresult1);
	  
	  
  if(isset($_POST["submit"]))
  {
	  
	  $uploaddir = 'uploads/';
	  $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
      move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile) ;
	  
	  if($_POST["photo"]=='')
	  {
	   $regsql1="UPDATE tbl_studntreg SET fathername='".$_POST["fathername"]."',mothername='".$_POST["mothername"]."',guardian='".			 				$_POST["guardian"]."',dob='".$_POST["dob"]."',address='".$_POST["address"]."',phone='".$_POST["phone"]."',gmail='"		 				.$_POST["gmail"]."',photo='".$uploadfile."' WHERE register_no='".$_SESSION["register_no"]."'"; 
	  $rssql1=mysql_query($regsql1);
	  }
	  else
	  {
		  $regsql1="UPDATE tbl_studntreg SET fathername='".$_POST["fathername"]."',mothername='".$_POST["mothername"]."',			 					guardian='".$_POST["guardian"]."',dob='".$_POST["dob"]."',address='".$_POST["address"]."',phone='".$_POST[  	  				"phone"]."',gmail='".$_POST["gmail"]."' WHERE register_no='".$_SESSION["register_no"]."'"; 	  $rssql1=mysql_query($regsql1);
	  }
  
	  /*$signupdate="UPDATE tbl_signup SET dob='".$_POST["dob"]."',address='".$_POST["address"]."' WHERE id='1001'"; 
	  $result=mysql_query($signupdate);	*/
	  
	  /*$reginsert="INSERT INTO tbl_studntreg(register_no,fathername,mothername,guardian,dob,address,phone,gmail,photo)
	  VALUES('".$row["register_no"]."','".$_POST["fathername"]."','".$_POST["mothername"]."','".$_POST["guardian"]."',                 '".$_POST["dob"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["gmail"]."','".$_POST["photo"]."')";
	  $regresult=mysql_query($reginsert);
	  echo $reginsert;
	  
	  $regsql1="UPDATE tbl_studntreg SET fathername='".$_POST["fathername"]."',mothername='".$_POST["mothername"]."',guardian='".			 				$_POST["guardian"]."',dob='".$_POST["dob"]."',address='".$_POST["address"]."',phone='".$_POST["phone"]."',gmail='"		 				.$_POST["gmail"]."',photo='".$_POST["photo"]."' WHERE register_no='".$_SESSION["register_no"]."'"; 
	  $rssql1=mysql_query($regsql1);*/
	  
	  
	 /* $acadinsert="INSERT INTO tbl_studntacad(register_no,admn_no,dprt,course,admn_date,add_info)
	  VALUES('".$row["register_no"]."','".$_POST["admn_no"]."','".$_POST["dprt"]."','".$_POST["course"]."',                         '".$_POST["admn_date"]."','".$_POST["add_info"]."')";
	  $acadresult=mysql_query($acadinsert);
	  echo $acadinsert;*/
	  
	  $acadsql1= "UPDATE tbl_studntacad SET admn_no='".$_POST["admn_no"]."',dprt='".$_POST["dprt"]."',course='".$_POST["course"]."',admn_date='".$_POST["admn_date"]."',add_info='".$_POST["add_info"]."' WHERE register_no='".$_SESSION["register_no"]."'";
	  $acadrs1=mysql_query($acadsql1);
	  
	  
	  
	 
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
											<input type="text" id="fathername" name="fathername" placeholder="Enter your father name here.." class="span8" value="<?php echo $row1["fathername"] ?>" >
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Mother's Name</label>
										<div class="controls">
											<input type="text" id="mothername" name="mothername" placeholder="Enter your mother name here..." class="span8" value="<?php echo $row1["mothername"] ?>" >
										</div>
								</div>
                                <div class="control-group">
									<label class="control-label" >Gaurdian</label>
										<div class="controls">
											<input type="text" id="guardian" name="guardian" placeholder="Enter your guardian name here..." class="span8" value="<?php echo $row1["guardian"] ?>" >
										</div>
								</div>
                                <div class="control-group">
											<label class="control-label" >Date of Birth</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="dob" type="text" placeholder="Date of year"        id="datepicker" value="<?php echo $row1["dob"] ?>" >
												</div>
											</div>
										</div>

                                
                                 <div class="control-group">
									<label class="control-label" >Contact Address</label>
										<div class="controls">
                                          <textarea class="span8" id="address" name="address" placeholder="Enter your contact address here..."><?php echo $row1["address"] ?> </textarea>
										</div>
								</div>
                                
                                  <div class="control-group">
											<label class="control-label" >Phone Number</label>
											<div class="controls">
												<input type="text" id="phone" name="phone" placeholder="Enter your phone number" class="span8" value="<?php echo $row1["phone"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Email - id</label>
											<div class="controls">
												<input type="text" id="gmail" name="gmail" placeholder="Enter your mail" class="span8" value="<?php echo $row1["gmail"] ?>" >
											</div>
										</div>
                                  <div class="control-group">
											<label class="control-label" >Photo</label>
											<div class="controls">
												<input type="file" id="photo" name="photo" placeholder="upload" class="span4">
                                                <img width="150" height="180" src="<?php echo $row1["photo"];?>"/>
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
												<input type="text" id="admn_no" name="admn_no" placeholder="Enter your admission number" class="span8" value="<?php echo $row1["admn_no"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Department</label>
											<div class="controls">
												<input type="text" id="dprt" name="dprt" placeholder="Enter your department" class="span8" value="<?php echo $row1["dprt"] ?>" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Course</label>
											<div class="controls">
												<input type="text" id="course" name="course" placeholder="TEnter your course" class="span8" value="<?php echo $row1["course"] ?>" >
											</div>
										</div>
                                         <div class="control-group">
											<label class="control-label" >Admission Date</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8" name="admn_date" type="text" placeholder="Date of admission" id="datepicker" value="<?php echo $row1["admn_date"] ?>" >
												</div>
											</div>
										</div>

                                       <div class="control-group">
									<label class="control-label" >Additional Information</label>
										<div class="controls">
                                          <textarea class="span8" id="add_info" name="add_info" placeholder="Enter any additioanl information here..."><?php echo $row1["add_info"] ?> </textarea>
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
