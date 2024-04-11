<?php 
 session_start();   
 include_once("../../db/dbconfig.php");


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
                    <!--/.span3 
                    <div class="span5">-->
                   <div class="module module-login span5 offset1" style=" margin-top: 0px;">
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Change Password</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span10" type="password" id="inputPassword" placeholder="Old Password" name="oldpass">
								</div>
							</div>
                            <div class="control-group">
								<div class="controls row-fluid">
									<input class="span10" type="password" id="inputPassword" placeholder="New Password" name="newpass">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span10" type="password" id="inputPassword" placeholder="Confirm Password" name="newpass1">
								</div>
							</div>
				       </div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="change">Change Password</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
             <!-- </div>
                    /.span9-->
                    <?php
				$sql1="SELECT password from tbl_login WHERE register_no='".$_SESSION["register_no"]."' ";
				$rs1=mysql_query($sql1);
				$row1=mysql_fetch_array($rs1);	
				//echo $sql1;
				if(isset($_POST["change"]))
  			 	{
					if($row1["password"]!=$_POST['oldpass'])
					{
						echo 'Password incorrect';
					}
					else if($_POST['newpass']!=$_POST['newpass1'])
					{
						echo 'Password donot match';
					}
					else
					{
				   		$passupdate="UPDATE tbl_login SET password='".$_POST["newpass"]."' WHERE register_no='".$_SESSION["register_no"]."'"; 
	  		       		$result=mysql_query($passupdate);
				   		echo 'Password Changed';	
 		 	    	}
			 	}
					?>
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
