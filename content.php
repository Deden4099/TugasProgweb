<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];	
	$file="$page.php";
	
	//untuk mengkoneksi ke dasboard
	if (!file_exists($file)){
		include ("dashboard.php");
	}else{
		include ("$page.php");
	}
}else{
	//untuk mengkoneksi ke dasboard
	include ("dashboard.php");
}
?>
