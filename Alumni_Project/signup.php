<?php    
 include_once("/db/dbconfig.php");
/* if(isset($_POST["signup"]))
		{     
				
				 
			  if($_POST["RadioGroup1"]=='Male')
			  {  
			  	$gender="Male";
			  }
			  else if($_POST["RadioGroup1"]=='Female')
			  {
				  $gender="Female";
			  }
			 
			  $sql='SELECT username FROM tbl_login where username = "'.$_POST['username'].'"';
				$res=mysql_query($sql);
 				if(mysql_num_rows($res)>=1)
  				 {
    					echo"name already exists";
						/*<!--<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> name already exists 
						</div>-->*/
   				/*}
				 else
    				{
   						//insert query goes here
    
		
		     if($_POST["registeras"]=='Alumni')
			  {  
			  $selmax="SELECT MAX(id) AS id FROM tbl_signup"; 
				$result=mysql_query($selmax);
				$row=mysql_fetch_array($result);
				if($row["id"]=="")
				 {
					$tabid="2001";
				 }
				else
				 {
					$tabid=$row["id"]+1 ;
		         }
			  	$insqry="INSERT INTO tbl_signup(id,register_no,fname,sname,mail,phone,gender) 
			  	VALUES ('".$tabid."','".$_POST["Reg"]."','".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["mail"]."',                      '".$_POST["phone"]."','".$gender."')";
			  	$rs=mysql_query($insqry);	
				$insertacad="INSERT INTO tbl_alumniacad(id,register_no,dprt,course,fyear,tyear,activity,addinfo) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs2=mysql_query($insertacad);
				
				$insertcar="INSERT INTO tbl_alumnicareer(id,register_no,jobtype,compname,desgination,addinfo,photo) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs3=mysql_query($insertcar);
					 
			  }
			  else if($_POST["registeras"]=='Student')
			  {  
			  $selmax="SELECT MAX(id) AS id FROM tbl_signstudnt"; 
				$result=mysql_query($selmax);
				$row=mysql_fetch_array($result);
				if($row["id"]=="")
				 {
					$tabid="3001";
				 }
				else
				 {
					$tabid=$row["id"]+1 ;
		         }
			  	$insqry1="INSERT INTO tbl_signstudnt(id,register_no,fname,sname,mail,phone,gender) 
			  	VALUES ('".$tabid."','".$_POST["Reg"]."','".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["mail"]."',                      '".$_POST["phone"]."','".$gender."')";
				$rs=mysql_query($insqry1);
				$insertacad="INSERT INTO tbl_studntreg(id,register_no,fathername,mothername,guardian,dob,address,phone,gmail,photo) VALUES('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs2=mysql_query($insertacad);
				
				$insertcar="INSERT INTO tbl_studntacad(id,register_no,admn_no,dprt,course,admn_date,add_info) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs3=mysql_query($insertcar);
				
			  }
			  else
			  {
			  
				  echo "Please select your register type";
			  
			  }
			  
			  $logininsqry="INSERT INTO tbl_login(id,register_no,username,password,type)VALUES('".$tabid."','".$_POST["Reg"]."', '".$_POST["username"]."','".$_POST["password"]."','".$_POST["registeras"]."')";
			  $result=mysql_query($logininsqry);
               
			  
		
			 // if($rs>0)
			    // echo "Registered Sucessfully";
			}
		}
*/
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
<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
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

						

						

						<li><a href="forgot-password.html">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login offset1" style="margin-top: 0px;">
					<form class="form-vertical row-fluid" method="post" enctype="multipart/form-data">
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
				<div class="control-group">
                  <label style="margin-left:620px;"><h3>Account Information</h3></label>   
					<div class="controls row-fluid">
                    	<label style="margin-top:-34px;">Register As</label> 
                        <select name="registeras" style="margin-top: -51px; margin-left: 125px;">
                         <option value="Select">--Select--</option>
                         <option value="Alumni">Alumni</option>
                         <option value="Student">Student</option>                      
                        </select> 
                        
					</div>                 	
				</div>
                
            	<div class="control-group">
					<div class="controls row-fluid">
                    	<label>Register Number</label>
                        <input type="text" id="Reg" name="Reg" placeholder="Register Number"values="" style="margin-top: -51px; margin-left: 125px;">
                       
                        <label style="margin-left:580px; margin-top:-42px;">User Name</label>
                        <input type="text" id="username" name="username" placeholder="User Name" style="margin-top: -51px; margin-left: 700px;">
					</div>                    	
				</div>
                <div class="control-group">
					<div class="controls row-fluid">
                    	<label>First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" style="margin-top: -51px; margin-left: 125px;">
						
                        <label style="margin-left:580px; margin-top:-42px;">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" style="margin-top: -51px; margin-left: 700px;">
					</div>
				</div>
                <div class="control-group">
					<div class="controls row-fluid">
                    	<label>Surname</label>
                        <input type="text" id="sname" name="sname" placeholder="Surname" style="margin-top: -51px; margin-left: 125px;">
                        
                        <label  style="margin-left:580px; margin-top:-42px;" >Confirm Password</label>
                        <input type="password" id="pass" name="pass" placeholder="Re-enter Password" style="margin-top: -51px; margin-left: 700px;">
					</div>
				</div>
                <div class="control-group">
					<div class="controls row-fluid">
                    	<label>E-mail id</label>
                        <input type="email" id="inputEmail" name="inputEmail" placeholder="Enter your mail id" style="margin-top: -51px; margin-left: 125px;">
                         <center>
                        <label style="margin-left:390px; margin-top:-47px;">
                     		<button type="submit" class="btn btn-primary" name="signup" >Sign Up</button>
                        </label>
                        <label style="margin-left:580px; margin-top:-33px;">
                        	<button type="submit"class="btn btn-primary" name="cancel">Cancel</button>
                    	</label>
                    </center>
					</div>
				</div>
                <div class="control-group">
					<div class="controls row-fluid">
                    	<label>Phone Number</label>
                        <input type="text" id="phone" name="phone" placeholder="Phone Number" style="margin-top: -51px; margin-left: 125px;">
                               <label  style="margin-left:580px; margin-top:-19px;" >
                                           <?php    
 //include_once("/db/dbconfig.php");
 if(isset($_POST["signup"]))
		{     
				
				 
			  if($_POST["RadioGroup1"]=='Male')
			  {  
			  	$gender="Male";
			  }
			  else if($_POST["RadioGroup1"]=='Female')
			  {
				  $gender="Female";
			  }
			 
			  $sql='SELECT register_no,username FROM tbl_login' ;
				$res=mysql_query($sql);
 				if(mysql_num_rows($res)>=2)
  				 {
    					//echo"name already exists";?>
						<div class="alert alert-error" class="span4">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Register number and username already used  
						</div>
                        <!--<div class="popup"  onclick="myFunction()"> where username = "'.$_POST['username'].'"';
 								 <span class="popuptext" id="myPopup">Use another usernaame</span>
							</div> -->
                        
   				<?php }
				 else
    				{
   						//insert query goes here
    
		
		     if($_POST["registeras"]=='Alumni')
			  {  
			  $selmax="SELECT MAX(id) AS id FROM tbl_signup"; 
				$result=mysql_query($selmax);
				$row=mysql_fetch_array($result);
				if($row["id"]=="")
				 {
					$tabid="2001";
				 }
				else
				 {
					$tabid=$row["id"]+1 ;
		         }
			  	$insqry="INSERT INTO tbl_signup(id,register_no,fname,sname,mail,phone,gender) 
			  	VALUES ('".$tabid."','".$_POST["Reg"]."','".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["inputEmail"]."',                      '".$_POST["phone"]."','".$gender."')";
			  	$rs=mysql_query($insqry);	
				$insertacad="INSERT INTO tbl_alumniacad(id,register_no,dprt,course,fyear,tyear,activity,addinfo) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs2=mysql_query($insertacad);
				
				$insertcar="INSERT INTO tbl_alumnicareer(id,register_no,jobtype,compname,desgination,addinfo,photo) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs3=mysql_query($insertcar);
					 
			  }
			  else if($_POST["registeras"]=='Student')
			  {  
			  $selmax="SELECT MAX(id) AS id FROM tbl_signstudnt"; 
				$result=mysql_query($selmax);
				$row=mysql_fetch_array($result);
				if($row["id"]=="")
				 {
					$tabid="3001";
				 }
				else
				 {
					$tabid=$row["id"]+1 ;
		         }
			  	$insqry1="INSERT INTO tbl_signstudnt(id,register_no,fname,sname,mail,phone,gender) 
			  	VALUES ('".$tabid."','".$_POST["Reg"]."','".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["inputEmail"]."',                      '".$_POST["phone"]."','".$gender."')";
				$rs=mysql_query($insqry1);
				$insertacad="INSERT INTO tbl_studntreg(id,register_no,fathername,mothername,guardian,dob,address,phone,gmail,photo) VALUES('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs2=mysql_query($insertacad);
				
				$insertcar="INSERT INTO tbl_studntacad(id,register_no,admn_no,dprt,course,admn_date,add_info) VALUES ('".$tabid."', '".$_POST["Reg"]."','".NULL."','".NULL."','".NULL."','".NULL."','".NULL."')";
				$rs3=mysql_query($insertcar);
				
			  }
			  else
			  {
			  
				  echo "Please select your register type";
			  
			  }
			  
			  $logininsqry="INSERT INTO tbl_login(id,register_no,username,password,type)VALUES('".$tabid."','".$_POST["Reg"]."', '".$_POST["username"]."','".$_POST["password"]."','".$_POST["registeras"]."')";
			  $result=mysql_query($logininsqry);
               
			  
		
			 // if($rs>0)
			    // echo "Registered Sucessfully";
			}
		}

?> 
</label>
                       
					</div>
				</div>
                <div class="control-group">
					<div class="controls row-fluid">
                    	<label>Gender</label>
                          <label style="margin-top: -25px; margin-left: 125px;" >
                            <input type="radio" name="RadioGroup1" value="Male" id="male" />
                            Male
                            </label>
                             <label style="margin-top: -25px; margin-left: 190px;" >
                            <input type="radio" name="RadioGroup1" value="Female" id="female"/>
                            Female
                            </label>
                          <br />
                    
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
			<b class="copyright">&copy; 2017 UIT Kollam.</b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</body>
</html>