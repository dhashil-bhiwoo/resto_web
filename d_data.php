<?php
require_once ('login.php');
$dname = $_POST['dname'];
$price = $_POST['price'];    
$is_spicy = $_POST['is_spicy'];

// Insert data into mysql
$sql="INSERT INTO dishes (dish_name, price, is_spicy)
VALUES ('$dname', '$price', '$is_spicy')";
$result = mysql_query($sql);
// if successfully insert data into database, displays message "Successful".
if($result)
{
	header('location: view_dish.php');
}
else 
{
	echo "ERROR". mysql_error();
}
// close mysql
mysql_close();
?>