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
                        <?php include_once("/sidemenu/job_sidemenu.php");?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
          <div class="module message">
            <div class="module-head">
              <h3> Reports</h3>
            </div>
            <div class="module-option clearfix">
              <div class="pull-right">
                <div class="btn-group">
                  <div class="input-prepend">
                    <input  type="text" placeholder="Search" class="span2">
                    <button class="btn btn-default" title="Submit"><i class="icon-chevron-right"></i></button>
                  </div>
                </div> </div>
            </div>
           
            <div class="module-body table">
              <table class="table table-message">
                <tbody>
                  <tr class="heading">
                    <td class="cell-title"> Job Title </td>
                    <td class="cell-title"> Job Type </td>
                    <td class="cell-title"> Company Name </td>
                    <td class="cell-title"> Details </td>
                    <td class="cell-icon hidden-phone hidden-tablet"></td>
                    <td class="cell-time align-right"> Date </td>
                    <td class="cell-title">Action</td>
                    <td class="cell-title">Action</td>
                  </tr>
                   <?php 	
	$viewsql="SELECT register_no,postby,jobcode,jobtitle,jobtype,compname,compaddress,compsite,opendate,                			                    closedate,vacancy,salaray,qualif, skill, descrip,post_date FROM tbl_jobpost WHERE register_no='".$_SESSION["register_no"]."'";
	
          $resultview=mysql_query($viewsql);
		  
          while($rowreg=mysql_fetch_array($resultview))
          {
			?>
                
                  <tr>
                    <td class="cell-title"> <?php echo $rowreg["jobtitle"];?> </td>
                    <td class="cell-title"> <?php echo $rowreg["jobtype"];?> </td>
                    <td class="cell-title"> <?php echo $rowreg["compname"];?> </td>
                    <td class="cell-title"> <?php echo $rowreg["descrip"];?> </td>
                    <td class="cell-icon hidden-phone hidden-tablet"><i class="icon-paper-clip-no"></i></td>
                    <td class="cell-time align-right"> <?php echo $rowreg["post_date"];?> </td>
                    <td class="cell-title">  <a href="jobupdate.php?id=<?php echo $rowreg["jobcode"];?>" >Update</td></a>
                     <td class="cell-title"> <a href="jobremove.php?id=<?php echo $rowreg["jobcode"];?>" >Remove</td></a> 
                  </tr>
                   
                  
                  
               
               <?php 
		  }
		  ?>
                
                  
                </tbody>
              </table>
            </div>
            <div class="module-foot">
          <!--  <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>-->
            </div>
          </div>
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
