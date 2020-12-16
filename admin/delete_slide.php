<?php 


include ("include/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM slider  WHERE id = '$id'";
if(mysqli_query($connect, $sql)){
    header("Location: view_slider.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>