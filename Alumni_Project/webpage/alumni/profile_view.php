<?php    
 session_start();
 include_once("../../db/dbconfig.php");
 
 
	$viewsql="SELECT t1.register_no,t1.fname,t1.sname,t1.mail,t1.phone,t1.gender,t1.dob,t1.address,t2.username,t2.password,t2.type FROM tbl_signup AS t1 INNER JOIN tbl_login AS t2 ON t1.id=t2.id WHERE t1.register_no='".$_SESSION["register_no"]."'";
	$viewresult=mysql_query($viewsql);
    $row=mysql_fetch_array($viewresult);
	
	$balsql="SELECT t1.register_no,t1.dprt,t1.course,t1.fyear,t1.tyear,t1.activity,t1.addinfo,t2.register_no,t2.jobtype,t2.compname,t2.desgination,t2.addinfo,t2.photo FROM tbl_alumniacad AS t1 INNER JOIN tbl_alumnicareer AS t2 ON t1.register_no=t2.register_no WHERE t1.register_no='".$_SESSION["register_no"]."' ";
	
	$viewrsbal=mysql_query($balsql);
	$rowbal=mysql_fetch_array($viewrsbal);
	  
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
        <link type="text/css" href="../../css/theme.css" rel="stylesheet">
        <link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
</head>

<body>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
			        <?php include_once("/sidemenu/top.php");?>
                </div>
                <!-- container -->
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include_once("/sidemenu/profile_sidemenu.php");?>
                    </div>
                    <!--/.span3--> 
                    <div class="span9">
                        <div class="content">
                            
                            <!--/#btn-controls-->
                             <form class="form-vertical row-fluid" method="post" enctype="multipart/form-data">
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Profile View</h3>
                                </div>						
						<div class="module-body">
                
            	<div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Register Number</label>
                        <input type="text" id="Reg" name="Reg" placeholder="Register Number" value="<?php echo $row["register_no"] ?>" style="margin-left:60px"  disabled>
                        
                        
                        <label style="margin-left: 500px;margin-top: -65px;">User Name</label>
                        <input type="text" id="username" name="username" placeholder="User Name" style="margin-left: 500px;" value="<?php echo $row["username"] ?>"  disabled>
					</div>                    	
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" style="margin-left:60px" value="<?php echo $row["fname"] ?>" disabled>
						
                        <label style="margin-left: 500px;margin-top: -65px;">Sur Name</label>
                        <input type="text" id="sname" name="sname" placeholder="Sur Name" style="margin-left: 500px;" value="<?php echo $row["sname"] ?>"  disabled>
					</div>
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Phone number</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone Number" style="margin-left:60px" value="<?php echo $row["phone"] ?>"  disabled>
                        
                        <label style="margin-left: 500px;margin-top: -65px;">Email id</label>
                        <input type="text" id="mail" name="mail" placeholder="Email id" style="margin-left: 500px;" value="<?php echo $row["mail"] ?>"  disabled>
					</div>
				</div>
                <div class="control-group">
				  <div class="control-label">
                    	<label style="margin-left:60px">Date of birth</label>
                        
							<div class="input-prepend" style="margin-left:60px">
								<span class="add-on"><i class="icon-calendar"></i></span>                  			 													                                   <input type="text" id="datepicker" class="span3" name="dob" placeholder="Date of birth" value="<?php echo $row["dob"] ?>"  disabled>
								</div>
						
                        
                    <label style="margin-left: 500px;margin-top: -65px;">Address</label>
                      <textarea name="address" id="address" style="margin-left: 500px;" placeholder="Address"  disabled> <?php echo $row["address"] ?></textarea>
					</div>
				</div>  
                 
                
                    
                </div>
                <div class="module-head">
                                    <h3>
                                        Academic Details</h3>
                                </div>						
						<div class="module-body">
                
            	<div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Department</label>
                        <input type="text" id="dprt" name="dprt" placeholder="Department" style="margin-left:60px" value="<?php echo $rowbal["dprt"] ?>"  disabled>
                        
                        <label style="margin-left: 500px;margin-top: -65px;">Course</label>
                        <input type="text" id="course" name="course" placeholder="Course" style="margin-left: 500px;" value="<?php echo $rowbal["course"] ?>"  disabled>
					</div>                    	
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Course From</label>
                        
							<div class="input-prepend" style="margin-left:60px">
								<span class="add-on"><i class="icon-calendar"></i></span>                  			 													                                   <input  class="span3" name="fyear" type="text" placeholder="From Year"  id="datepickerfrom" value="<?php echo $rowbal["fyear"] ?>"  disabled>
								</div>
                        <label style="margin-left: 500px;margin-top: -65px;">Course End</label>
                        
							<div class="input-prepend" style="margin-left:500px">
								<span class="add-on"><i class="icon-calendar"></i></span>                  			 													                                   <input  class="span7" name="tyear" type="text" placeholder="To Year"  id="datepickerto" value="<?php echo $rowbal["tyear"] ?>"  disabled >
								</div>
					</div>
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Activity</label>
                        <input type="text" id="activity" name="activity" placeholder="Activities" style="margin-left:60px"  value="<?php echo $rowbal["activity"] ?>"  disabled>
                        
                         <label style="margin-left: 500px;margin-top: -65px;">Additional Information</label>
                      <textarea id="addinfo" name="addinfo" style="margin-left: 500px;" placeholder="Add info"  disabled> <?php echo $rowbal["addinfo"] ?> </textarea>
					</div>
				</div>
                    
                </div>
                <div class="module-head">
                                    <h3>
                                        Career Details</h3>
                                </div>						
						<div class="module-body">
                
            	<div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Job Type</label>
                        <input type="text" id="jobtype" name="jobtype" values="" placeholder="Job Type" style="margin-left:60px" value="<?php echo $rowbal["jobtype"] ?>"  disabled>
                        
                        <label style="margin-left: 500px;margin-top: -65px;">Company Name</label>
                        <input type="text" id="cname" name="cname" placeholder="Company Name" style="margin-left: 500px;" value="<?php echo $rowbal["compname"] ?>"  disabled>
					</div>                    	
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<label style="margin-left:60px">Designation</label>
                        <input type="text" id="desgn" name="desgn" placeholder="First Name" style="margin-left:60px" value="<?php echo $rowbal["desgination"] ?>"  disabled>
						
                        <label style="margin-left: 500px;margin-top: -65px;">Additional Information</label>
                        <textarea name="addinfor" id="addinfor" style="margin-left: 500px;" placeholder="Additional Information"  disabled><?php echo $rowbal["addinfo"] ?></textarea>
					</div>
				</div>
                <div class="control-group">
					<div class="control-label">
                    	<!--<label style="margin-left:60px">Photo</label>
                        <input type="file" id="photo" name="photo" style="margin-left:60px" >-->
                        <img width="150" height="180" src="<?php echo $rowbal["photo"];?>" style="margin-left: 60px;"/>
                        
                        
                        <button type="submit" name="submit" style="margin-left: 300px;margin-top: -40px;" class="btn btn-primary">Ok</button>
					</div>
				</div>
               
                
                    
                </div>
                            </div>
                            <!--/.module-->
						</form>
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
        <script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../../scripts/common.js" type="text/javascript"></script>
      
</body>
</html>
