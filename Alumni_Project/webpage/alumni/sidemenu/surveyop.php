<?php 

    if($_POST["po1"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp1"]=="-select-")
	{
		echo'please choose your opinion';
	}
	 else if($_POST["po2"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp2"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po3"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp3"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po4"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp4"]=="-select-")
	{
		echo'please choose your opinion';
	}else if($_POST["po5"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp5"]=="-select-")
	{
		echo'please choose your opinion';
	}else if($_POST["po6"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp6"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po7"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp7"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po8"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp8"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po9"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp9"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po10"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp10"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po11"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp11"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po12"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp12"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["po13"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else if($_POST["imp13"]=="-select-")
	{
		echo'please choose your opinion';
	}
	else
	{
	
	$poupdate="UPDATE tbl_surveypo SET po1='".$_POST["po1"]."',po2='".$_POST["po2"]."',po3='".$_POST["po3"]."',po4='".$_POST["po4"]."',po5='".$_POST["po5"]."',po6='".$_POST["po6"]."',po7='".$_POST["po7"]."',po8='".$_POST["po8"]."',po9='".$_POST["po9"]."',po10='".$_POST["po10"]."',po11='".$_POST["po11"]."',po12='".$_POST["po12"]."',po13='".$_POST["po13"]."' WHERE register_no='".$_SESSION["register_no"]."'";
	$rs=mysql_query($poupdate);
	
	$impupdate="UPDATE tbl_surveyimp SET imp1='".$_POST["imp1"]."',imp2='".$_POST["imp2"]."',imp3='".$_POST["imp3"]."',imp4='".$_POST["imp4"]."',imp5='".$_POST["imp5"]."',imp6='".$_POST["imp6"]."',imp7='".$_POST["imp7"]."',imp8='".$_POST["imp8"]."',imp9='".$_POST["imp9"]."',imp10='".$_POST["imp10"]."',imp11='".$_POST["imp11"]."',imp12='".$_POST["imp12"]."',imp13='".$_POST["imp13"]."' WHERE register_no='".$_SESSION["register_no"]."'";
	$rs1=mysql_query($impupdate);
	
		
	}

?>