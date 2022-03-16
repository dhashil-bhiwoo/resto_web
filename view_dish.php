<!DOCTYPE html>
<html lang="en">
<head>
<title>Dishes</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<h1><a href="index.html" id="logo">Deliccio Classic European Cuisine</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html"><img src="images/icon_1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/icon_2.gif" alt=""></a></li>
						<li class="end"><a href="#"><img src="images/icon_3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<li><a href="index.html">Restaurant</a></li>
							<li class="active"><a href="view_dish.php">Dishes</a></li>
							<li><a href="customer.php">Customer</a></li>
							<li><a href="dish_price_search.php">Search</a></li>
							<li><a href="dish_sort.php">Dish Sort</a></li>
					</ul>
				</nav>
			</header><div class="ic"></div>
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">View<span>Dishes</span></h2>
							<?php 
error_reporting(0);
require 'login.php';
$table = "dishes"; 
$query_list = "SELECT * FROM $table"; 
$result_list=mysql_query($query_list); 
$num = mysql_num_rows($result_list); 

print ' 
<h2>Select a dish</h2> 
<form method="post" action="'.$_SERVER['PHPSELF'].'">'; 
print '<select name="dish">'; 
for ($i=0; $i<$num; $i++){ 
$dish=mysql_result($result_list,$i,"dish_name"); 
print '<option value="'.$dish.'">'.$dish.'</option>'; 
} 
print '</select>&nbsp;&nbsp;&nbsp;'; 
print '<input type="Submit" value="Submit" /></form><br>'; 

if ($_POST['dish']) { 
   
  $dish=$_POST['dish']; 
    $query="SELECT * FROM $table WHERE dish_name='$dish'"; 
    // echo $query.'<br>';  // for debugging only 
    $result=mysql_query($query);     
    echo "<table border=1 cellspacing=0 cellpadding=4>"; 
    echo "<tr><th> ID </th><th> Dish </th><th> Price </th><th> Spicy? </th></tr>"; 
    // Now, print a table with content from the "dishes" table 
      $i=0; 
    $dish_id=mysql_result($result,$i,"dish_id"); 
    $dish_name=mysql_result($result,$i,"dish_name"); 
    $price=mysql_result($result,$i,"price"); 
    $is_spicy = mysql_result($result,$i,"is_spicy")==1 ? "Yes" : "No"; 
    echo "<tr><td> $dish_id </td><td> $dish_name </td><td> $price </td><td> $is_spicy </td></tr> ";  
    echo "</table>";     
}  // end if 

    mysql_close(); 
?> 
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main">
		<article id="content2">
			<div class="wrapper">
				<section class="pad_left1">
					<div class="wrapper">
						<div class="cols">
							<h2>Our Contacts</h2>
						</div>
						<div class="col3 pad_left1">
							<h2>Miscellaneous Info</h2>
						</div>
					</div>
					<div class="line1">
						<div class="wrapper line2">
							<div class="cols">
								<div class="wrapper pad_bot1">
									<p>Some Text Here.</p>
									<p class="address">
										Marmora Road, Glasgow, D04 89GR.<br>
										<span>Freephone:</span>    +1 800 559 6580<br>
										<span>Telephone:</span>    +1 959 603 6035<br>
										<span>E-mail:</span>             <a href="mailto:">mail@demolink.org</a>
									</p>
								</div>
							</div>
							<div class="col3 pad_left1">
								<p>
									A very long text that is tiresome to read and will force you to read even if you don't want to. this is a sample text and is not concerned or related in anyway to the context of restaurant.
								</p>
								A very long text that is tiresome to read and will force you to read even if you don't want to. this is a sample text and is not concerned or related in anyway to the context of restaurant.
							</div>
						</div>
					</div>
				</section>
			</div>
		</article>
<!-- / content -->
	</div>
</div>
<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col1 pad_left1">
						<h3>Toll Free: <span>1-800 123 45 67</span></h3>
						
					</section>
					<section class="col2 pad_left1">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
						</ul>
					</section>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>