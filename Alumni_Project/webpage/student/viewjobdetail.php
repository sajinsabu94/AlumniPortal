<?php 
 session_start();   
 include_once("../../db/dbconfig.php");
  if(isset($_REQUEST["id"]))
  {
  $jobsql="SELECT post_id,register_no, jobcode, jobtitle, jobtype, compname, compaddress, compsite, opendate,closedate,vacancy, salaray, qualif, skill, descrip,post_date FROM tbl_jobpost WHERE post_id='".$_REQUEST["id"]."'";
	$jobresult=mysql_query($jobsql);
	$jobrow=mysql_fetch_array($jobresult);
	
	$sqlview="SELECT register_no,fname,sname,mail,phone FROM tbl_signstudnt WHERE register_no='".$_SESSION["register_no"]."'";
	$sqlrs=mysql_query($sqlview);
	$sqlrow=mysql_fetch_array($sqlrs);
	if(isset($_POST["apply"]))
	{
	  $apply="INSERT INTO tbl_referals(alumni_id, job_code, student_reg, student_name, student_mail, student_phone) VALUES('".$jobrow["register_no"]."','".$jobrow["jobcode"]."','".$sqlrow["register_no"]."','".$sqlrow["fname"]."','".$sqlrow["mail"]."','".$sqlrow["phone"]."') ";
	  $applyrs=mysql_query($apply);
	}
	 else if(isset($_POST["back"]))
  		{
			header("Location: viewjob.php");
  		}
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
    <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed;  /*Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 0px; /* Location of the box */
    /*left: 500px;*/
	top: 11px;
	margin-top: 0px;
    top: 0;
    margin-left:30px;
    width: 30%; /* Full width */
    /*height: 100%;  Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
	/*margin-top: 100px;*/
    padding: 0px;
    border: 1px solid #888;
    /*width: 20%%;*/
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
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
   						<?php include_once("/sidemenu/job_sidemenu.php");?>
		</div>
 					<!--/.span3--> 

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
                                                <button type="button" name="apply" id="myBtn" class="btn btn-danger">Apply</button>
                                                <button type="submit" name="back" id="back" class="btn btn-danger">Back</button>
											</div>
                                            
                                          <!-- Popup modal -->  
                                            
                                            <div class="modal" id="myModal">
                                      <!-- Modal content -->
                                      
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">&times;</span>
                                            <p style="font-family: cursive;font-size: x-large;">
    												For Referenals use </p>
                                        </div>
                                        <div class="modal-body">
                                        <p> please check these details </p>
                                       
                                              <div>
                                                <label>Register Number</label>
                                                <input type="text" id="register_no" name="register_no" value=<?php echo $sqlrow["register_no"]?> >
                                              </div>
                                              <div>
                                                <label>Name</label>
                                                <input type="text" id="name" name="name" value=<?php echo $sqlrow["fname"]?>>
                                              </div>
                                              <div>
                                                <label>Mail id</label>
                                                <input type="text" id="mail" name="mail" value=<?php echo $sqlrow["mail"]?>>
                                              </div>
                                              <div>
                                                <label>Phone Number</label>
                                                <input type="text" id="phone" name="phone" value=<?php echo $sqlrow["phone"]?>>
                                              </div>
                                              
                                              <div>
                                                 <center>
                                                   <button type="submit" class="btn btn-primary" name="apply" >Apply</button>
                                                  </center> 
                                              </div>           
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Popup modal --> 
                                    <!-- Popup Script -->
    		<script>
					// Get the modal
					var modal = document.getElementById('myModal');
					
					// Get the button that opens the modal
					var btn = document.getElementById("myBtn");
					
					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];
					
					// When the user clicks the button, open the modal 
					btn.onclick = function() {
						modal.style.display = "block";
					}
					
					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
						modal.style.display = "none";
					}
					
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
					</script>
       <!-- Popup Script --> 

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

