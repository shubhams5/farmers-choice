<?php 

include "include/connection.php";


#post details get and transfer to the variable


if(isset($_POST['submit']))
{

extract($_POST);
	session_start();
    $mcategory = $_POST['mcategory'];
    $productName = $_POST['product_name'];
    $productDesc = $_POST['product_desc'];
    $sku = $_POST['sku_number'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $isNew = $_POST['isNew'];
    $isTop = $_POST['isTop']; 
	
	$s1 = "SELECT max(id) mid FROM product ";
    $q1 = mysqli_query($connect, $s1);
	$r1 = mysqli_fetch_assoc($q1);
	$id=$r1['mid']+1;
	

    $targetdir = "uploads/";
    $filename = basename($_FILES['file']['name']);
    $targetFiledir = $targetdir.$filename;
    $filetype = pathinfo($targetFiledir, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file"]['tmp_name'], $targetFiledir))
        {
			$filename=basename($_FILES['file']['name']);
		}
		else
		{
			$filename='';
		}
	
	 $filename1 = basename($_FILES['file1']['name']);
    $targetFiledir1 = $targetdir.$filename1;
    $filetype1 = pathinfo($targetFiledir1, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file1"]['tmp_name'], $targetFiledir1))
        {
			$filename1=basename($_FILES['file1']['name']);
		}
		else
		{
			$filename1='';
		}
	
	 $filename2 = basename($_FILES['file2']['name']);
    $targetFiledir2 = $targetdir.$filename2;
    $filetype1 = pathinfo($targetFiledir2, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file2"]['tmp_name'], $targetFiledir2))
        {
			$filename2=basename($_FILES['file2']['name']);
		}
		else
		{
			$filename2='';
		}
		
         
	 $filename3 = basename($_FILES['file3']['name']);
    $targetFiledir3 = $targetdir.$filename3;
    $filetype1 = pathinfo($targetFiledir3, PATHINFO_EXTENSION);

        #upload to file to server
        if(move_uploaded_file($_FILES["file3"]['tmp_name'], $targetFiledir3))
        {
			$filename3=basename($_FILES['file3']['name']);
		}
		else
		{
			$filename3='';
		}

	
	$sql = "INSERT into `services` (id, service_name, service_description, service_price, unit, image,  image1, image2,  image3, is_new, is_topselling, vendor_code,created_at, category_id, scat_id) values ('$id', '$productName', '$productDesc', '$price', '$sku',  '$filename','$filename1', '$filename2', '$filename3', '$isNew', '$isTop', 'Owner',now(), '$mcategory', '$subcat')";
            $query = mysqli_query($connect, $sql);
            if($query)
            {
					$_SESSION['id']=$id;
					$_SESSION['prod']=$product_name;
                header("Location: view_service.php");
				
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            }
        }
    


