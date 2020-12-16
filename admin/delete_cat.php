<?php 


include ("include/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM category  WHERE id = '$id'";
if(mysqli_query($connect, $sql)){
    header("Location: add_category.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>