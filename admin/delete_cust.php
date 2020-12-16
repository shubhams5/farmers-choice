<?php 


include ("include/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM customers WHERE id = $id";
if(mysqli_query($connect, $sql)){
	
$sql1 = "DELETE FROM address WHERE userid = $id";
mysqli_query($connect, $sql1);
	
    header("Location: cust.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>