<?php 
ob_start();
?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Testify. Hone your knowledge.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css1/default.css"/>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Testify</a>
				<nav class="right">
                    <?php
                        if(isset($_SESSION['logged_in'])) 
                    {?>
                        <a href='logout.php' class='button alt'>Log out</a>
						  <?php } 
                    else 
                            { ?>
                        <a href='login.php' class='button alt'>Log in</a>
                    <?php
                    }?>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
                <?php
                    if(isset($_SESSION['logged_in'])) 
                        echo "<h3 style=\"color:white\">$_SESSION[logged_in]</h3>";
                    ?>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutUs.html">About Us</a></li>
                    <?php
                    if(isset($_SESSION['logged_in'])) 
                    { ?>
                    <li><a href="details.php">Your Account</a></li>
                    <?php
                    }?>
				</ul>
				<ul class="actions vertical">
                    <?php
                    if(isset($_SESSION['logged_in'])) 
                        echo "<li><a href='logout.php' class='button fit'>Logout</a></li>";
						  else
                        echo "<li><a href='login.php' class='button fit'>Login</a></li>";
                    ?>
				</ul>
			</nav>
	