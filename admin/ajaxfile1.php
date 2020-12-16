<?php


include('include/connection.php');

$userid = $_POST['userid'];

$sql = "select * from users where vendor_code = '$userid'";
$result = mysqli_query($connect,$sql);

$response = "<table border='0' width='100%'>";
$row = mysqli_fetch_array($result);
 $id = $row['profile_pic'];
 $emp_name = $row['vcard'];

 
 $response .= "<tr>";
 $response .= "<td>Name : </td><td>".$row['fname']." ".$row['lname']."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Mobile Number : </td><td>".$row['mobileno']."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Email : </td><td>".$row['email']."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Address : </td><td>".$row['address']."</td>";
 $response .= "</tr>";


 $response .= "<tr>";
 $response .= "<td>Pincode : </td><td>".$row['pincode']."</td>";
 $response .= "</tr>";



$response .= "</table>";

echo $response;
exit;

?>