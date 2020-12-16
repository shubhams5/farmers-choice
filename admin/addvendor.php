<?php
include('include/connection.php');

session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($connect, "select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);



$login_session = $row['username'];

if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
    die();
}






if (isset($_POST['submit'])) {

    // $id = $_SESSION['login_id']; 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = @md5($_POST['password']);
    $dname = $_POST['dname'];
    $pincode = $_POST['pincode'];
    $emailAddress = $_POST['emailAddress'];
    $mobileno = $_POST['mobileno'];
    $state = $_POST['state'];
    $city  = $_POST['city'];

  


    


        $sql3 = "INSERT INTO `users`
    (`mobileno`, `email`, `password1`, `fname`, `lname`, `address`, `pincode`, `user_level`, `state`, `country`, `city`, `active`, `created_at`)
     VALUES ('$mobileno','$emailAddress','$password','$fname','$lname','$dname','$pincode',3,'$state','India','$city',1,Now())";
        $res3 = mysqli_query($connect, $sql3);

    
   
    if ($res3) {
        header("Location: cust.php");
    } else {
        echo "error" . mysqli_error($connect);
    }
}
