<?php


   include('include/connection.php');

$userid = $_POST['userid'];

$sql = "select * from users where id=".$userid;
$result = mysqli_query($connect,$sql);

$response = "<table border='0' width='100%'>";
$row = mysqli_fetch_array($result);
 $id = $row['profile_pic'];
 $emp_name = $row['vcard'];

 
 $response .= "<tr>";
 $response .= "<td>GST Certificate : </td><td><img src='http://uploads.bagbazaar.in/".$id."' class='img-fluid' width='500' height='500'/></td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Visiting Card : </td><td><img src='http://uploads.bagbazaar.in/".$emp_name."' class='img-fluid'/></td>";
 $response .= "</tr>";



$response .= "</table>";

echo $response;
exit;

?>