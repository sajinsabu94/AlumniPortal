<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <?php
 session_start();
 include_once("../../db/dbconfig.php"); 

 $allmem = "SELECT user,request FROM tbl_friend WHERE friend ='".$_SESSION["register_no"]."'";
 $result = mysql_query($allmem); 
 $num = mysql_num_rows($result);
 
 $isent = "SELECT friend,request FROM tbl_friend WHERE user ='".$_SESSION["register_no"]."'";
 $ires = mysql_query($isent); 
 $inum = mysql_num_rows($ires);
 
 $ireq = "SELECT t.ID FROM (SELECT friend AS 'ID' FROM tbl_friend WHERE user = '".$_SESSION["register_no"]."' AND request='1' UNION SELECT user AS 'ID' FROM tbl_friend WHERE friend = '".$_SESSION["register_no"]."' AND request='1') t";//tbl_friend WHERE user ='".$_SESSION["register_no"]."' AND request='1'";
 $rres = mysql_query($ireq); 
 $ir = mysql_num_rows($rres);
 
?>

  <title>Alumni Survey</title>
  <link type="text/css" href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link type="text/css" href="../../css/theme.css" rel="stylesheet" />
  <link type="text/css" href="../../css/fl.css" rel="stylesheet" />
  <link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet" />
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' />
</head>

<body>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <?php include_once("/sidemenu/top.php");?>
      </div><!-- container -->
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
 <input type="hidden" id="us" value="<?php echo $_SESSION["register_no"]?>">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="span3">
          <?php include_once("/sidemenu/social_sidemenu.php");?>
        </div><!--/.span3-->

        <div class="span9">
          <div class="content">
            <!--/#btn-controls-->

            <div class="module">
				<div class="w3-bar w3-black">
					<button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Request')">Requests</button>
					<button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Sent')">Sent</button>
					<button class="w3-bar-item w3-button tablink" onclick="openCity(event,'All')">All Friends</button>
				</div>  
				<div id="Request" class="w3-container w3-border tab">
					
				<div class="listf">
                  <div class="w3-container w3-content" style="max-width:800px;margin-top:80px">
                    <!-- The Grid -->

                    <div class="w3-row" style="overflow-x: scroll; display: inline;">
                      <!-- Left Column -->

                      <div class="w3-col m3" style="width:100%">
                        <!-- Profile -->

                        <div class="lis" style="width:100%; max-height:300px; overflow-x:hidden;">
                          <?php 
                                if($num>=1){
                                    while($row=mysql_fetch_array($result)){
										if($row[1]==0){
                                        $qry = "SELECT fname,sname FROM tbl_signup WHERE register_no ='".$row[0]."' UNION SELECT fname,sname FROM tbl_signstudnt WHERE register_no ='".$row[0]."'";
										$res = mysql_query($qry);
										$val = mysql_fetch_array($res);
										
										$qry2 = "SELECT course,dprt FROM tbl_alumniacad WHERE register_no='".$row[0]."' UNION SELECT course,dprt FROM tbl_studntacad WHERE register_no='".$row[0]."'";
										$res2 = mysql_query($qry2);
										$val2 = mysql_fetch_array($res2);
										
                           ?>
                          <div class="arr" style="width:25%; display:inline-block;">
                            <div class="w3-card-2 w3-round w3-white">
                              <div class="w3-container">
                                <p class="w3-center"><img src="../../images/user.png" class="w3-circle"
                                style="height:106px;width:106px" alt="Avatar" /></p>
                                <hr />
                                <h4 class="w3-center"><?php echo $val[0].' '.$val[1]?></h4>

                                <p class="w3-center"><?php echo $val2[0]?></p>

                                <p class="w3-center"><?php echo $val2[1]?></p>
                              </div>
                              <div class="w3-center">
                                <button type="button" class="bt1 btn-success" style="margin-bottom: 15px" value="<?php echo $row[0]?>">Accept</button>
								<button type="button" class="bt11 btn-danger" style="margin-bottom: 15px" value="<?php echo $row[0]?>">Reject</button>
                              </div>
                            </div><br />
                          </div>
						  <?php
                                    }
								}
								}
						 ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
					
				</div>
				<div id="Sent" class="w3-container w3-border tab" style="display:none">
					 
				<div class="listf">
                  <div class="w3-container w3-content" style="max-width:800px;margin-top:80px">
                    <!-- The Grid -->

                    <div class="w3-row" style="overflow-x: scroll; display: inline;">
                      <!-- Left Column -->

                      <div class="w3-col m3" style="width:100%">
                        <!-- Profile -->

                        <div class="lis" style="width:100%; max-height:300px; overflow-x:hidden;">
						  <input type="hidden" id="us" value="<?php echo $_SESSION["register_no"]?>">
                          <?php 								
                                if($inum>0){
									$i=0;
                                    while($i<$inum){
										$irow=mysql_fetch_array($ires);
										if($irow[1]==0){
                                        $iqry = "SELECT fname,sname FROM tbl_signup WHERE register_no ='".$irow[0]."' UNION SELECT fname,sname FROM tbl_signstudnt WHERE register_no ='".$irow[0]."'";
										$ires = mysql_query($iqry);
										$ival = mysql_fetch_array($ires);
										
										$iqry2 = "SELECT course,dprt FROM tbl_alumniacad WHERE register_no='".$irow[0]."' UNION SELECT course,dprt FROM tbl_studntacad WHERE register_no='".$irow[0]."'";
										$ires2 = mysql_query($iqry2);
										$ival2 = mysql_fetch_array($ires2);			
                           ?>
                          <div class="arr" style="width:25%; display:inline-block;">
                            <div class="w3-card-2 w3-round w3-white">
                              <div class="w3-container">
                                <p class="w3-center"><img src="../../images/user.png" class="w3-circle"
                                style="height:106px;width:106px" alt="Avatar" /></p>
                                <hr />
                                <h4 class="w3-center"><?php echo $ival[0].' '.$ival[1]?></h4>

                                <p class="w3-center"><?php echo $ival2[0]?></p>

                                <p class="w3-center"><?php echo $ival2[1]?></p>
                              </div>

                              <div class="w3-center">
                                <button type="button" class="bt2 btn-success" style="margin-bottom: 15px" value="<?php echo $irow[0]?>">Cancel</button>
                              </div>
                            </div><br />
                          </div>
						  <?php
                                    }
									$i++;
								}
								} 
						 ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
					 
					 
				</div>
				<div id="All" class="w3-container w3-border tab" style="display:none">
					
				<div class="listf">
                  <div class="w3-container w3-content" style="max-width:800px;margin-top:80px">
                    <!-- The Grid -->

                    <div class="w3-row" style="overflow-x: scroll; display: inline;">
                      <!-- Left Column -->

                      <div class="w3-col m3" style="width:100%">
                        <!-- Profile -->

                        <div class="lis" style="width:100%; max-height:300px; overflow-x:hidden;">
						  <input type="hidden" id="us" value="<?php echo $_SESSION["register_no"]?>">
                          <?php 								
                                if($ir>0){
									$i=0;
                                    while($i<$ir){
										$irs=mysql_fetch_array($rres);								
                                        $irqry = "SELECT fname,sname FROM tbl_signup WHERE register_no ='".$irs[0]."' UNION SELECT fname,sname FROM tbl_signstudnt WHERE register_no ='".$irs[0]."'";
										$irres = mysql_query($irqry);
										$irval = mysql_fetch_array($irres);
										
										$irqry2 = "SELECT course,dprt FROM tbl_alumniacad WHERE register_no='".$irs[0]."' UNION SELECT course,dprt FROM tbl_studntacad WHERE register_no='".$irs[0]."'";
										$irres2 = mysql_query($irqry2);
										$irval2 = mysql_fetch_array($irres2);		
                           ?>
                          <div class="arr" style="width:25%; display:inline-block;">
                            <div class="w3-card-2 w3-round w3-white">
                              <div class="w3-container">
                                <p class="w3-center"><img src="../../images/user.png" class="w3-circle"
                                style="height:106px;width:106px" alt="Avatar" /></p>
                                <hr />
                                <h4 class="w3-center"><?php echo $irval[0].' '.$irval[1]?></h4>

                                <p class="w3-center"><?php echo $irval2[0]?></p>

                                <p class="w3-center"><?php echo $irval2[1]?></p>
                              </div>

                              <div class="w3-center">
                                <button type="button" class="bt3 btn-danger" style="margin-bottom: 15px" value="<?php echo $irow[0]?>">Unfriend</button>
                              </div>
                            </div><br />
                          </div>
						  <?php
									$i++;
								}
								} 
						 ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
					
					
				</div>
            </div><!--/.module-->
            <!--/.module-->
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->

  <div class="footer">
    <div class="container">
      <b class="copyright"> 2017 UIT Kollam.</b> All rights reserved.
    </div>
  </div><script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript">
</script> <script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
</script> <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript">
</script> <script src="../../scripts/flot/jquery.flot.js" type="text/javascript">
</script> <script src="../../scripts/flot/jquery.flot.resize.js" type="text/javascript">
</script> <script src="../../scripts/common.js" type="text/javascript">
</script> <script src="../../scripts/manage.js" type="text/javascript">
</script>
<script>
	
  function openCity(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
	
</script>
</body>
</html>
