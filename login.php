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
    <form method="post" role="form" action="login2.php">
      <label for=username>Username</label>
      <input name="username" id="username" type="text" placeholder="Enter Username"> 
      <span></span>
      <label for=email>Password</label>
      <input name="password" id="password" type="password" placeholder="Enter Password"> 
      <button type="submit">Sign in</button>
    </form>
      <div class="after-form">
    <button class="forgot"><a href="forget.php">Forget Password</a></button>
    <button class="signup"><a href="sign_up.php">New User ? &nbsp;  Sign Up Here</a></button> 
      </div>
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
            <script src="js/login.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
