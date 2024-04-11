<?php 
 include_once("../../db/dbconfig.php"); 
 if(isset($_POST['action'])){
 $act = $_POST['action'];
 $usr = $_POST['user'];
 $frnd = $_POST['friend'];
 if($act=='send'){
	$sql = "INSERT INTO tbl_friend VALUES('".$usr."','".$frnd."',0)";
	$result = mysql_query($sql); 
 }
 else if($act=='accept'){
	 $sql = "UPDATE tbl_friend SET request = '1' WHERE friend = '".$usr."' AND user = '".$frnd."'";
	 $result = mysql_query($sql); 
 }
 else if($act=='reject'){
	 $sql = "DELETE FROM tbl_friend WHERE user = '".$usr."' AND friend = '".$frnd."'";
	 $result = mysql_query($sql); 
 }
 else if($act=='cancel'){
	 $sql = "DELETE FROM tbl_friend WHERE user = '".$usr."' AND friend = '".$frnd."'";
	 $result = mysql_query($sql); 
 }
 else if($act=='unfriend'){
	 $sql = "DELETE FROM tbl_friend WHERE user = '".$usr."' AND friend = '".$frnd."'";
	 $result = mysql_query($sql); 
	 $sql1 = "DELETE FROM tbl_friend WHERE friend = '".$usr."' AND user = '".$frnd."'";
	 $result1 = mysql_query($sql1);
 }
 }
?>