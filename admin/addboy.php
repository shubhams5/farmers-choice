<?php
include('include/connection.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($connect, "select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);




print_r($_POST);


if (isset($_POST['submit'])) {

  
    
    $emailAddress = $_POST['emailAddress'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = @md5($_POST['password']);
    $pincode = $_POST['pincode'];
    $mobileno = $_POST['mobileno'];
    $state = $_POST['state'];
    $city  = $_POST['city'];
    $address  = $_POST['address'];



        $sql3 = "INSERT INTO `users`
    (`mobileno`, `email`, `password1`, `profile_pic`, `vcard`, `fname`, `lname`, `address`, `pincode`, `user_level`, `vendor_code`, `shop_cat`, `state`, `country`, `city`, `reffer`, `active`, `created_at`)
     VALUES ('$mobileno','$emailAddress','$password','','','$fname','$lname','$address','$pincode',2,'','','$state','India','$city','',1,Now())";
        $res3 = mysqli_query($connect, $sql3);

        if ($res3) {
            header("Location: view_boy.php");
        } else {
            echo "error" . mysqli_error($connect);
        }

}
