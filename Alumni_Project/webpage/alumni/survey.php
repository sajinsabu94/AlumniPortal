<?php    
 session_start();
 include_once("../../db/dbconfig.php");
 
 
 
 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/999/xhtml">
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
                    <div class="span2">
                        <?php include_once("/sidemenu/alumni_sidemenu.php");?>
                    </div>
                    <!--/.span3--> 
                    
                    
                  <div class="span10">
                        <div class="content">
          <div class="module message">
            <div class="module-head">
              <h3> Survey </h3>
            </div>
           <div class="module-body" style="margin-left: 20px;">
            <b><h3>Self assessment by alumni based on Programme Outcomes (POs):-</h3></b> 
        Programme Outcomes (POs) are narrower statements that describe what the students are expected to know and be able to do by the time of graduation. These relate to the skills, knowledge, and behavior that the students acquire in their matriculation through the programme.
        <ul>
            <li><b><i>Firstly</i></b> please use a <b><i>scale of 1 to 5</i></b> to rate your <b><i>level of achievement</i></b> of each of the following Programme Outcomes, based on what you have acquired by the time of graduation from the department of computer science, UIT Kollam.
                <br><b><i>(1:poor, 2:fair, 3:good, 4:very good, 5:excellent)</i></b></li>
            <li><b><i>Secondly</i></b> please use a <b><i>scale of 1 to 5</i></b> to rate the <b><i>importance</i></b> of each of the Programme Outcome for a graduate in  Computer Science in your opinion.
                <br><b><i>(1 indicating least important and 5 meaning extremely important)</i></b></li>
        </ul>

        <!--  -->
        
                <font color="red">* - All PO's are mandatory</font><br>
                 <!-- <input  type="text" placeholder="Search" class="span2">
                    <button class="btn btn-default" title="Submit"><i class="icon-chevron-right"></i></button>-->
            </div>
            <form onsubmit="return confirm(&#39;Are you sure that all the details are entered correctly ?&#39;)" method="post">
            <div class="module-body table">
              <table class="table table-message">
                <tbody>
                  <tr class="heading">
                    <td class="cell-title"><center> No. </center></td>
                    <td class="cell-title"> <center> The POs formulated for undergraduate<br/> programme are described below </center> </td>
                    <td class="cell-title"> <center> Level of achievement <br/>of each PO </center></td>
                    <td class="cell-title"><center> Importance of each PO </center></td>
                  </tr>
                   <?php 	
	                   $viewsql="SELECT ques_id,ques_to,ques_survey FROM tbl_question";
	
                       $resultview=mysql_query($viewsql);
		  
          while($rowreg=mysql_fetch_array($resultview))
          {
			?>
                
                  <tr>
                    <td class="cell-title"> <?php echo $rowreg["ques_id"];?> </td>
                    <!--<td class="cell-title"> <?php echo $rowreg["ques_to"];?> </td>-->
                    <td class="cell-title"> <?php echo $rowreg["ques_survey"];?> </td>
                    <td class="cell-title"><center><select name="po1" class="span1">
										    <option value="-select-">select</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											</select><font color="red"></font></center></td>
                     <td class="cell-title"><center><select name="im1" class="span1">
										    <option value="-select-">select</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											</select><font color="red"></font></center></td>
                  </tr>
                   
                  
                  
               
               <?php 
		  }
		  ?>
                
                  
                </tbody>
              </table>
              
            </div>
            
            
            <div class="module-foot">
           <!--<div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>-->
                                <center>
              <button type="submit" class="btn btn-primary" name="done">Done</button>
            </center>
            
            </div>
            </form>
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
