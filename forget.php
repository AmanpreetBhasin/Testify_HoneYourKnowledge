<?php   
ob_start();
session_start();
require('final_index.php');
?>
<section id="forgot-password" class="wrapper">
  <div class="inner">
    <div class="heading">
        <?php if(isset($_GET["x"]))
      		echo "<strong>$_GET[x]</strong>";
        else if(isset($_GET["y"]))
      		echo "<strong style=\"color:green\">$_GET[y]</strong>";
      ?>
    </div>
    <form method="post" role="form" onsubmit="return somefunction()" action="forget2.php">
      <label for=email>Enter Email Id</label>
      <input name="email" id="email" type="email" placeholder="Enter Email Id"> 
      <span></span>
      <button type="submit">Next</button>
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
            <script src="js/forget1.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
