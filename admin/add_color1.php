<?php 
include "include/connection.php";

// if (isset($_POST['submit_size'])) {

    $stock = $_POST['stock'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $label = $_POST['label'];

    $pid = $_POST['pid'];
    $sql = "INSERT into `prod_size` (size,prod_id,stock,price,label) values ('$size','$pid','$stock','$price','$label')";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    if ($query) {
        header("Location: add_color_size.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
// }
