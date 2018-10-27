<?php   
ob_start();
session_start();
require('final_index.php');
?>
<section id="login" class="wrapper">
  <div class="inner">
      <div class="heading">
        <?php if(isset($_GET["x"]))
      		echo "<strong>$_GET[x]</strong>";
      ?>
    </div>
    <form method="post" role="form" onsubmit="return somefunction()" action="sign_up2.php">
      <label for=username>Enter Username</label>
        <span class="username"></span>
      <input name="username" id="username" type="text" placeholder="Username">
      
      <label for="name">Enter Name</label>
      <input name="name" id="name" type="text" placeholder="Name"> 
      <label for="email">Enter E-Mail</label>
        <span class="email"></span>
      <input name="email" id="email" type="email" placeholder="E-mail">
      <label for="password">Enter Password</label>
      <input name="password" id="password" type="password" placeholder="Password"> 
      <label for="cpassword">Confirm Password</label>
      <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password">
      <button class="button" type="submit">Sign Up</button>
    </form>
  </div>
</section>
    <footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(+91) 9599134336</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">me@amanpreetbhasin.com</a></li>
						<li><span class="icon fa-map-marker"></span>New Delhi, Delhi</li>
					</ul>
				</div>
				<div class="copyright">
					&copy;<a href="https://www.amanpreetbhasin.com">Amanpreet Bhasin</a>
				</div>
			</footer>

		<!-- Scripts -->
            <script src="js/sign_up.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
