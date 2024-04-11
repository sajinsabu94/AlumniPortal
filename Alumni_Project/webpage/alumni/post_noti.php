<?php
 session_start();   
 include_once("../../db/dbconfig.php");
 if(isset($_POST["post"]))
 {
	 $selmax="SELECT MAX(post_id) AS val FROM tbl_alumnipost"; 
				$resultid=mysql_query($selmax);
				$row=mysql_fetch_array($resultid);
				if($row["val"]=="")
				 {
					$tabid="1001";
				 }
				else
				 {
					$tabid=$row["val"]+1 ;
		         }
 $insertsql="INSERT INTO tbl_alumnipost(register_no, postby,post_id, posttitle, postname, poston, postdescrp, postphoto, postdate) VALUES ('".$_SESSION["register_no"]."','".$_SESSION["fname"]."','".$tabid."','".$_POST["title"]."','".$_POST["name"]."','".$_POST["poston"]."','".$_POST["descrp"]."','".$_POST["photo"]."','".date("d/M/Y")."')";
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
                        <?php include_once("/sidemenu/post_sidemenu.php");?>
                    </div>
                        <!--/.sidebar-->
				<div class="span9">
					<div class="content">

						<div class="module">
                        	<div class="module-head">
								<h3>Post Notification</h3>
							</div>
                            <div class="module-body">
                            <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                            	<div class="control-group">
											<label class="control-label" >Post Category</label>
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

	<script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../../bootstrap/js/bootstrap-datepicker.js"></script> 
	<script src="../../scripts/common.js" type="text/javascript"></script>
      
</body>
</html>
