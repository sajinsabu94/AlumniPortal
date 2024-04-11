<?php   
session_start();
include_once("/db/dbconfig.php");
if(isset($_SESSION["register_no"])){
	$usr = $_SESSION["register_no"];
	$logout = "DELETE FROM tbl_online WHERE user_id = '".$usr."'";
	mysql_query($logout);
}
if(isset($_POST["login"]))
{
$loginsql="SELECT register_no,username,type FROM tbl_login WHERE username='".$_POST["username"]."' AND                              password='".$_POST["password"]."'";
$loginresult=mysql_query($loginsql);
if($row=mysql_fetch_array($loginresult))
{
	$namesql="SELECT t1.register_no,t1.fname FROM tbl_signup AS t1 INNER JOIN tbl_login AS t2 ON
		      t1.register_no=t2.register_no WHERE t1.register_no='".$row["register_no"]."'";
			  $resultname=mysql_query($namesql);
			  echo $namesql;
			  $rowname=mysql_fetch_array($resultname);
	if($row["type"]!="")
	{
		
 			if( $row["type"]=="Admin")
 			{
	 			$_SESSION["register_no"]=$row["register_no"];
	 			$_SESSION["username"]=$row["username"];	
				$_SESSION["fname"]=$rowname["fname"]; 
	 			$_SESSION["type"]=$row["type"];				
				$status = "INSERT INTO tbl_online VALUES('".$row["register_no"]."')";
				$res = mysql_query($status);
				header("location: index.php");
 			}
 			else if( $row["type"]=="Alumni")
 			{
	 			$_SESSION["register_no"]=$row["register_no"];
	 			$_SESSION["username"]=$row["username"];	
				$_SESSION["fname"]=$rowname["fname"];  
	 			$_SESSION["type"]=$row["type"];
				$status = "INSERT INTO tbl_online VALUES('".$row["register_no"]."')";
				$res = mysql_query($status);
				header("location: alumniindex.html");
		 	}
 			else if( $row["type"]=="Student")
 			{
	 			$_SESSION["register_no"]=$row["register_no"];
	 			$_SESSION["username"]=$row["username"];	
				$_SESSION["fname"]=$rowname["fname"];  
	 			$_SESSION["type"]=$row["type"];
				$status = "INSERT INTO tbl_online VALUES('".$row["register_no"]."')";
				$res = mysql_query($status);
				header("location: studentindex.html");
 			}
	}
}
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.png"/>
		<title>Alumni Survey</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href=".">Alumni Survey</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">
						<li>
						<a href="signup.php">
					     	Sign Up
						 </a>
							</li>
                            <li>
                            
                            
                            </li>
						<!--<li><a href="forgot-password.html">
							Forgot your password?
						</a></li>-->
                        
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="username" name="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="login" class="btn btn-primary pull-right">Login</button>
                                     
                                     <a href="forgot-password.html">
							             Forgot your password?
						             </a>
                                     
									<!--<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>-->
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright"> &copy; 2017 UIT Kollam.</b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
</body>
</html>