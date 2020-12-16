<?php

include("include/connection.php");

$id = $_GET['id'];
	//$sql = "";
	$upactive = "UPDATE `users` SET  `active` = '1' where `id` = '$id'"; 
    $res = mysqli_query($connect,$upactive);

//$up = update("feedback" , 'active = "0"', "id = '$id'");
header("Location: vendor.php");



?>