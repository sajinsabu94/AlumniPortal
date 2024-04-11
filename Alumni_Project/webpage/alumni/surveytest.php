<?php    
 session_start();
 include_once("../../db/dbconfig.php"); 
 ?>
 <?php
    
	if(isset($_POST["done"]))
  {	  	  
     $sql='SELECT t1.register_no,t1.po1,t1.po2,t1.po3,t1.po4,t1.po5,t1.po6,t1.po7,t1.po8,t1.po9,t1.po10,t1.po11,t1.po12,t1.po13,t2.register_no,t2.imp1,t2.imp2,t2.imp3,t2.imp4,t2.imp5,t2.imp6,t2.imp7,t2.imp8,t2.imp9,t2.imp10,t2.imp11,t2.imp12,t2.imp13 FROM tbl_surveypo AS t1 INNER JOIN tbl_surveyimp AS t2 where t1.register_no = "'.$_SESSION["register_no"].'"';
			   
				$res=mysql_query($sql);
 				if(mysql_num_rows($res)>=1)
  				 {
   			         echo"you already attend the survey"; 
	             }
	  			else
	  			 {
	                  include_once("/sidemenu/surveyop.php");
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
           
            <div class="module-body table">
              <form method="post" accept-charset="utf-8"> 
           <center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center><center></center>
           <table class="table table-message" cellpadding="5">
           <tbody>
           <tr class="heading">
           <td class="cell-title">
           <b><center>No.</center></b></td>
           <td wdith="auto" class="cell-title"><b><center>
           The POs formulated for undergraduate programme are described below</center></b></td>
           <td class="cell-title"><b><center>Level of achievement of each PO</center></b></td>
           <td class="cell-title"><b><center>Importance of each PO</center></b></td></tr>
           <tr><td wdith="auto" ><b>CSE/PO1</b></td><td><label for="po1">an ability to apply knowledge of mathematics, science, and engineering : </label></td><td><center><select class="span2"  name="po1">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp1">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO2</b></td><td><label for="po2">an ability to identify, formulate and solve engineering   problems. : </label></td><td><center><select class="span2"  name="po2">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp2">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO3</b></td><td><label for="po3">an ability to visualize and work on laboratory and multidisciplinary tasks : </label></td><td><center><select class="span2"  name="po3">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp3">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO4</b></td><td><label for="po4">demonstrate skills to use modern engineering tools, software and equipments to analyze the problems : </label></td><td><center><select class="span2"  name="po4">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp4">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO5</b></td><td><label for="po5">an ability to communicate effectively in both verbal and written form. : </label></td><td><center><select class="span2"  name="po5">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp5">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO6</b></td><td><label for="po6">demonstrate knowledge of professional and ethical responsibilities : </label></td><td><center><select class="span2"  name="po6">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp6">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO7</b></td><td><label for="po7">show the understanding of impact of engineering solutions on the society : </label></td><td><center><select class="span2"  name="po7">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp7">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO8</b></td><td><label for="po8">an ability to participate and succeed in competitive examinations like gate and GRE : </label></td><td><center><select class="span2"  name="po8">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp8">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO9</b></td><td><label for="po9">an ability to design a system, component and conduct experiments, analyze and interpret data and generate ideas leading to research : </label></td><td><center><select class="span2"  name="po9">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp9">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO10</b></td><td><label for="po10">an ability to understand the architecture of system, develop programming skills in machine language and high level language programming : </label></td><td><center><select class="span2"  name="po10">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp10">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO11</b></td><td><label for="po11">develop confidence for self education and ability for life long learning : </label></td><td><center><select class="span2"  name="po11">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp11">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO12</b></td><td><label for="po12">a knowledge of contemporary issues : </label></td><td><center><select class="span2"  name="po12">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp12">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr><tr><td wdith="auto"><b>CSE/PO13</b></td><td><label for="po13">an ability to function on multidisciplinary teams : </label></td><td><center><select class="span2"  name="po13">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td><td><center><select class="span2"  name="imp13">
<option value="-select-">-select-</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select><font color="red"></font></center></td></tr></tbody></table>

<!--<button name="mybutton" type="button" onclick="location.href = &#39;index.php?do_later&#39;;">Do later</button>
&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Continue">-->
    

</center>
  
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
              <button type="submit" class="btn btn-primary" name="done" style="margin-left:50px;" >Done</button>
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
        