<?php 
 session_start();   
 include_once("../../db/dbconfig.php");
  if(isset($_REQUEST["id"]))
  {
  $postsql="SELECT register_no, postby,post_id, posttitle, postname, poston, postdescrp, postphoto, postdate FROM tbl_alumnipost WHERE post_id='".$_REQUEST["id"]."'";
	$postresult=mysql_query($postsql);
	$postrow=mysql_fetch_array($postresult);
	if(isset($_POST["update"]))
  	{
	  $postupdate="UPDATE tbl_alumnipost SET posttitle='".$_POST["title"]."',postname='".$_POST["name"]."',poston='".$_POST["poston"]."',postdescrp='".$_POST["descrp"]."',postphoto='".$_POST["photo"]."',postdate='".date("d/M/Y")."' WHERE post_id='".$_REQUEST["id"]."'";
	  $postupdateresult=mysql_query($postupdate); 
	  
	   //if($postupdateresult)
	      //header("Location: post_manage.php");	 
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
                        <?php include_once("/sidemenu/post_sidemenu.php");?>
                    </div>
                        <!--/.sidebar-->
                   <div class="span9">
					<div class="content">

						<div class="module">
                        	<div class="module-head">
								<h3>Update Notification</h3>
							</div>
                            <div class="module-body">
                            <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                            	<div class="control-group">
											<label class="control-label" >Post Category</label>
											<div class="controls">
												<input type="text" id="title" name="title" placeholder="Enter the title of the post" value=<?php echo $postrow["posttitle"]?> class="span8" >
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Post Name</label>
											<div class="controls">
												<input type="text" id="name" name="name" placeholder="Enter the Post name" value=<?php echo $postrow["postname"]?> class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" >Conduct On</label>
											<div class="controls">
												<div class="input-prepend">
												<span class="add-on"><i class="icon-calendar"></i></span>                  			 													<input  class="span8"  name="poston" type="text" placeholder="Conduct on" id="datepicker" value=<?php echo $postrow["poston"]?>>
												</div>
											</div>
										</div>
                                        <div class="control-group">
									<label class="control-label" >Description</label>
										<div class="controls">
                                          <textarea class="span8" id="descrp" name="descrp" placeholder="About the post"><?php echo $postrow["postdescrp"]?> </textarea>
										</div>
								</div>
                                <div class="control-group">
											<label class="control-label" >Photo</label> 
											<div class="controls">
												<input type="file" id="photo" name="photo" placeholder="upload" class="span8" value=<?php echo $postrow["postphoto"]?>>
											</div>
										</div>
                                        <div class="control-group">
											<div class="controls">
												<button type="submit" name="update" class="btn btn-danger">Update</button>
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
