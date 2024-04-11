<!DOCTYPE html>
<?php
 session_start();
 include_once("../../db/dbconfig.php"); 

 $allmem = "SELECT register_no,fname,sname FROM tbl_signup WHERE register_no !='".$_SESSION["register_no"]."' UNION SELECT register_no,fname,sname FROM tbl_signstudnt WHERE register_no !='".$_SESSION["register_no"]."'";

 $result = mysql_query($allmem); 

 $num = mysql_num_rows($result);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <title>Alumni Survey</title>
  <link type="text/css" href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link type="text/css" href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link type="text/css" href="../../css/theme.css" rel="stylesheet" />
  <link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet" />
  <link type="text/css" href="../../css/fl.css" rel="stylesheet" />
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
              <div class="search-list">
                <div class="sbar">
                  <input type="text" name="search" placeholder="Search.." class="search-l"/>
                </div>

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
                                if($num>=1){
                                    while($row=mysql_fetch_array($result)){
                                        $qry = "SELECT course,dprt FROM tbl_alumniacad WHERE register_no='".$row[0]."' UNION SELECT course,dprt FROM tbl_studntacad WHERE register_no='".$row[0]."'";
										$res = mysql_query($qry);
										$val = mysql_fetch_array($res);
										$check = "SELECT * FROM tbl_friend WHERE user='".$row[0]."' AND friend = '".$_SESSION["register_no"]."'";
										$check2  = "SELECT * FROM tbl_friend WHERE friend = '".$row[0]."' AND user='".$_SESSION["register_no"]."'";
										$n = mysql_query($check);
										$m = mysql_query($check2);
										if(mysql_num_rows($n)==0 && mysql_num_rows($m)==0){
                           ?>
                          <div class="arr" style="width:25%; display:inline-block;">
                            <div class="w3-card-2 w3-round w3-white">
                              <div class="w3-container">
                                <p class="w3-center"><img src="../../images/user.png" class="w3-circle"
                                style="height:106px;width:106px" alt="Avatar" /></p>
                                <hr />
                                <h4 class="w3-center"><?php echo $row[1].' '.$row[2]?></h4>

                                <p class="w3-center"><?php echo $val[0]?></p>

                                <p class="w3-center"><?php echo $val[1]?></p>
                              </div>

                              <div class="w3-center">
                                <button type="button" class="bt" style="margin-bottom: 15px" value="<?php echo $row[0]?>">Request</button>
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
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="container">
          <b class="copyright">2017 UIT Kollam.</b> All rights reserved.
        </div>
      </div><script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript">
</script> <script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
</script> <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript">
</script> <script src="../../scripts/flot/jquery.flot.js" type="text/javascript">
</script> <script src="../../scripts/flot/jquery.flot.resize.js" type="text/javascript">
</script> <script src="../../scripts/common.js" type="text/javascript">
</script> <script>
$('.bt').click(function(){
        var frnd = $(this).val();
		var usr = document.getElementById('us').value;
		$.ajax({
            type  : "POST",
            url  : 'chat.php',
			data : {user:usr, friend: frnd, action:'send'},
            success: function (data) {
               location.reload();
            }
        });
    });
</script>
    </div>
  </div>
</body>
</html>
