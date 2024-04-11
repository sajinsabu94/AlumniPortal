<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../../images/favicon.png"/>
<title>Alumni Survey</title>
<link type="text/css" href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link type="text/css" href="../../css/theme.css" rel="stylesheet">
<link type="text/css" href="../../css/style.css" rel="stylesheet">
<link type="text/css" href="../../images/icons/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel='stylesheet'>
<?php 
session_start();
include_once("../../db/dbconfig.php");
$ireq = "SELECT t.ID FROM (SELECT friend AS 'ID' FROM tbl_friend WHERE user = '".$_SESSION["register_no"]."' AND request='1' UNION SELECT user AS 'ID' FROM tbl_friend WHERE friend = '".$_SESSION["register_no"]."' AND request='1') t";
 $rres = mysql_query($ireq); 
 $ir = mysql_num_rows($rres);
?>
</head>
<body>
<input type="hidden" id="usr" value="<?php echo $_SESSION["register_no"] ?>">
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
        <?php include_once("/sidemenu/social_sidemenu.php");?>
      </div>
      <!--/.span3-->
      <div class="span9">
        <div class="content"> 
          
          <!--/#btn-controls-->
          <div class="module" style="height:400px">
              <div class="containerl clearfix">
                <div class="people-list" id="people-list">
                  <div class="search">
                    <input type="text" placeholder="search" />
                  </div>
                  <ul class="list" style="list-style-type: none;" id="frnd_list">				  
				  <?php
						if($ir>0){
									$i=0;
                                    while($i<$ir){
										$irs=mysql_fetch_array($rres);								
                                        $irqry = "SELECT fname,sname FROM tbl_signup WHERE register_no ='".$irs[0]."' UNION SELECT fname,sname FROM tbl_signstudnt WHERE register_no ='".$irs[0]."'";
										$irres = mysql_query($irqry);
										$irval = mysql_fetch_array($irres);
										
										$online = "SELECT * from tbl_online WHERE user_id = '".$irs[0]."'";
										$res_exc = mysql_query($online);
										$name = $irval[0].' '.$irval[1];
				  ?>
                    <li class="clearfix" style="border-bottom: 1px solid #95a5a6;" id="<?php echo $irs[0] ?>">
					<div id="<?php echo $irs[0] ?>" data-title="<?php echo $name ?>"  onClick="loadChat(this,this.id)"  >
                      <img src="../../images/user.png" alt="avatar" />
                      <div class="about">
                        <div class="name" id="sel_usr">
						<?php
                          echo $name;
						?>
                        </div>
                        <div class="status">
						<?php 
							if(mysql_num_rows($res_exc)>0)
								echo "online";
							else
								echo "offine";
						 ?>
                        </div>
                      </div>
					  </div>
                    </li>
					<?php
						$i++;
								}
								} 
					?>
                  </ul>
                </div> 				
                <div class="chat">
                  <div class="chat-header clearfix" id="chat-header" style="background-color: #2980b9; padding:10px 20px 10px 20px;">
                    <img src="../../images/user.png" alt="avatar" />
                    <div class="chat-about">
                      <div class="chat-with" id="chat-with">
                      </div>
                    </div>
                  </div><!-- end chat-header -->

                  <div class="chat-history" value="" style="height: 310px;">				  
                    <ul style="list-style-type: none;">
						<div id="boxr">
						</div>
                    </ul>
                  </div>
				  
                  <div class="chat-message clearfix">
                    <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3" style="width: 80%;"></textarea>
					<button id="send_btn" class="btn btn-success" onClick="sendMsg()" style="margin-top:20px;">Send</button>
                  </div><!-- end chat-message -->
                </div><!-- end chat -->
              </div><!-- end container -->
              <script id="message-template" type="text/x-handlebars-template">
<![CDATA[
              <li class="clearfix">
              <div class="message-data align-right">
              <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Me</span> <i class="fa fa-circle me"></i>
              </div>
              <div class="message other-message float-right">
              {{messageOutput}}
              </div>
              </li>
              ]]>
              </script> <script id="message-response-template" type="text/x-handlebars-template">
<![CDATA[
              <li>
              <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> Sajin</span>
              <span class="message-data-time">{{time}}, Today</span>
              </div>
              <div class="message my-message">
              {{response}}
              </div>
              </li>
              ]]>
              </script>
          </div>
        </div>
        <!--/.module--> 
        
        <!--/.module--> 
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
  <div class="container"> <b class="copyright">&copy; 2017 UIT Kollam.</b> All rights reserved. </div>
</div>
<script src="../../scripts/chats.js" type="text/javascript"></script>
<script src="../../scripts/jquery-1.9.1.min.js" type="text/javascript"></script> 
<script src="../../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../../scripts/flot/jquery.flot.js" type="text/javascript"></script> 
<script src="../../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script> 
<script src="../../scripts/common.js" type="text/javascript"></script> 
<script>
$(document).ready(function() {
	$('ul#frnd_list li:first div:first', this).trigger('click');
	setTimeout(loadChat(dv,recp), 5000);
});

</script>
</body>
</html>
