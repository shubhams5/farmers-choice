<?php 


include ("include/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE id = $id";
if(mysqli_query($connect, $sql)){

$sql1 = "DELETE FROM prod_color WHERE prod_id = $id";
mysqli_query($connect, $sql1);

$sql2 = "DELETE FROM prod_size WHERE prod_id = $id";
mysqli_query($connect, $sql2);

    header("Location: view_product_wholesaler.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}





?>