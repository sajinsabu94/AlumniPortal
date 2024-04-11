<?php
include_once("../../db/dbconfig.php");
if(isset($_POST['action'])){
	$act = $_POST['action'];	
	if($act=='send'){
		$usr = $_POST['user'];
		$recp = $_POST['rec'];
		$msg = $_POST['msg'];
		$tm = $_POST['tm'];
		$qry = "INSERT INTO tbl_msg VALUES(NULL,'".$usr."','".$recp."','".$msg."','".$tm."')";
		$res = mysql_query($qry);
	}
	if($act=='read'){
		$usr = $_POST['user'];
		$recp = $_POST['rec'];
		$qry = "SELECT * FROM tbl_msg WHERE usr = '".$usr."' AND recp = '".$recp."' UNION 
		SELECT * FROM tbl_msg WHERE recp = '".$usr."' AND usr = '".$recp."' ORDER BY no";
		$result = mysql_query($qry);
		//echo $result;
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_array($result)){
				if($row[1]==$usr){
					echo'<li class="clearfix">';
                        echo'<div class="message-data align-right">';
                          echo'<span class="message-data-time">'.$row[4].'</span>';  
						  echo'<span class="message-data-name">  Me</span>';						  
                        echo'</div>';
                        echo'<div class="message other-message float-right">'.$row[3].'</div>';
                      echo'</li>';
				}
				else{
					echo'<li>';
                        echo'<div class="message-data">';
						  echo'<span class="message-data-time">'.$row[4].'</span>';
                        echo'</div>';
                        echo'<div class="message my-message">'.$row[3].'</div>';
                      echo'</li>';     
				}
			}
		}
	}
}
?>