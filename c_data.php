<?php
require_once ('login.php');
$Fname = $_POST['f_name'];
$Lname = $_POST['l_name'];    
$phone = $_POST['phone'];
$fav_dish = $_POST['fav_dish'];

// Insert data into mysql
$sql="INSERT INTO customer (f_name, l_name, phone, dish_id, reg_date)
VALUES ('$Fname', '$Lname', '$phone', '$fav_dish', NOW())";
$result = mysql_query($sql);
// if successfully insert data into database, displays message "Successful".
if($result)
{
	header('location: thankyou.php');
}
else 
{
	echo "ERROR". mysql_error();
}
// close mysql
mysql_close();
?>