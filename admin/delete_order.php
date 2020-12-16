<?php 


include ("include/connection.php");

$id = $_GET['id'];
$oid = $_GET['oid'];

$sql = "DELETE FROM cart WHERE id = $id";
if(mysqli_query($connect, $sql)){
	

	
    header("Location: view_invoice.php?id=".$oid);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>