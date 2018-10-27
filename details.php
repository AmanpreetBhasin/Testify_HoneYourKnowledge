<?php
	session_start();
	if(isset($_SESSION['logged_in']))
		require("final_index.php");
	else
		header("location:login.php");
?>
<section id="login" class="wrapper">
    <div class="inner">
        <div class="heading">
        <?php if(isset($_GET["x"]))
      		echo "<strong>$_GET[x]</strong>";
        else if(isset($_GET["y"]))
      		echo "<strong style=\"color:green\">$_GET[y]</strong>";
      ?>
    </div>
        <div id="choose">
    			<button class="detail" id="d" onclick="showTab(this.id)">Account Details</button>
    			<button class="changepassword active_li" id="cp" onclick="showTab(this.id)">Change Password</button>
        </div>
    		<div class="hide" id="detail">
    			<form>
    		<?php
				$db=new mysqli("localhost","root","","project2");
				$name=$_SESSION['username'];
				$r=$db->query("select Name,Username,Email from users where Username='$name'");
				if($r->num_rows>0)
				{
				while($ques=mysqli_fetch_assoc($r))
				{
				$name=$ques["Name"];
				$username=$ques["Username"];
				$email=$ques["Email"];
					?>	
					<label for="name">Name</label>
      				<input id="name" type="text" placeholder=<?php echo "'$name'" ?> disabled >
      				<label for="username">Username</label>
      				<input id="username" type="text" placeholder=<?php echo "'$username'" ?> disabled >
					<label for="Email">E-mail</label>
      				<input id="email" type="email" placeholder=<?php echo "'$email'"?> disabled>
					<?php
				}
				}
				?>
      </form>
      </div>
			<div class="hide" id="changepassword">
				<form method="POST" action='update.php' onsubmit="return somefunction()">
					<label for="opassword">Old Password</label>
      		<input name="opassword" id="opassword" type="password" placeholder="Old Password">
      		<label for="npassword">New Password</label>
      		<input name="npassword" id="npassword" type="password" placeholder="New Password">
      		<label for="cpassword">Confirm Password</label>
      		<input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password">
      		<button type='submit' value='Update'>Update</button>
        </form>
        <h2 class="match"><?php 
          if(isset($_GET['pass']))
              echo $_GET['pass'];

            ?></h2>
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
            <script src="js/update.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>