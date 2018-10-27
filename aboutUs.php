<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Intensify by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

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
					<li><a href="aboutUs.php">About Us</a></li>
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>About Us</h1>
						<p>An online Examination portal to practice questions and hone your knowledge</p>
					</header>
					<!--<div class="image fit">
						<img src="images/pic05.jpg" alt="" />
					</div>-->
					<p>Testify is an online examination question practicing portal that helps one to practice questions on a subject of one's own choice. One can even select the number of questions one wants to attempt. </p>
					<p>Instant view of result post exam is available, where every question has one mark and carries no negative marking.</p>
					<p>All the previous exam records can be accesed by the person post login in a graphical and tabular manner. Performance graph of last 10 exams can also be viewed for every subject.</p>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>