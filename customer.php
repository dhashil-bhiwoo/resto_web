<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Registration</title>
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
							<li><a href="view_dish.php">Dishes</a></li>
							<li class="active"><a href="customer.php">Customer</a></li>
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
							<h2 class="letter_spacing">Customer <span>Registration</span></h2>
							<form action="c_data.php" method="POST">
     <p>
        <label>First Name:</label>
        <input name="f_name" required placeholder="First Name" type="text">
    </p>
    <p>
        <label>Last Name:</label>
        <input name="l_name" required placeholder="Last Name" type="text">
    </p>
    <p>
        <label>Phone Number:</label>
        <input name="phone" required placeholder="Phone Number" type="number">
    </p>
    <p>
    <label>Favourite Dish:</label>
  	<?php
	require ('login.php');
			
	$sql = "SELECT dish_id, dish_name from dishes;";
	$result = mysql_query($sql);
			
	echo "<select name='fav_dish'>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<option value='" . $row['dish_id'] . "'>" . $row['dish_name'] . "</option>";
	}
	echo "</select>";	
	?>
    </p>
    <p>
        <input value="Submit" type="submit">
    </p>
  </form>
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
									<p>Some Text Here</p>
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