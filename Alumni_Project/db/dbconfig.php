<?php 
error_reporting(0);
$con=mysql_connect("localhost","root","");
if($con>1)
    {
		$ctd=mysql_select_db("alumninew",$con);
		if(!$ctd)
		{
			echo "Could not connect to database";
		}		
}
else 
{
	echo "My Sql Server not Started";
}
?>