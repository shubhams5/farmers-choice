<?php

include("includes/connection.php");

$id = $_GET['id'];
if($_GET['action'] == 'deact')
{
	//$sql = "";
	$upactive = "update slider set  active = '0' where id = '$id' "; 
			$res = mysqli_query($upactive);

//$up = update("feedback" , 'active = "0"', "id = '$id'");
header("Location: view_slider.php");
}
if($_GET['action'] == 'act')
{
	//$sql = "";
		$updeactive = "update slider set  active = '1' where id = '$id' "; 
		$res = mysqli_query($updeactive);
		
//$up = update("feedback" , 'active = "1"', "id = '$id'");
header("Location: view_slider.php");
}
?>
