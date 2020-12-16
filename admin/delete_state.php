<?php 


include ("include/connection.php");


$id = $_GET['id'];
$link = $_GET['link'];

$sql = "DELETE FROM state  WHERE `id` = '$id'";
if(mysqli_query($connect, $sql)){
    header("Location: $link");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>