<?php  
ob_start();
session_start();
require('final_index.php');
$db=new mysqli("localhost","root","","project2");
if(isset($_SESSION["remail"]))
{
	$email=$_SESSION["remail"];
	if(isset($_GET['reset']))
	{
    	$n=$db->query("select random_string from users where Email='$email'");
    	if(mysqli_num_rows($n)>0)
    	{ 
      		$name=mysqli_fetch_assoc($n);
      		if($_GET['reset']==$name['random_string'])
      		{    
    		?>  
                <section id="forgot-password" class="wrapper">
                  <div class="inner">
                    <form method="post" role="form" action="forget4.php">
                      <label for=password>Enter New Password</label>
                      <input name="password" id="password" type="password" placeholder="Enter New Password">
                        <label for=cpassword>Confirm New Password</label>
                      <input name="cpassword" id="cpassword" type="password" placeholder="Confirm New Password">
                      <span></span>
                      <button type="submit">Login</button>
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
            <script src="js/forget2.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
      		<?php
      		} 
      		else
        		header("location:forget.php?x=You Entered/Copied an Wrong Link");
    	}
    	else
  			header("location:forget.php?");
	}
	else
		header("location:forget.php?");
}
else
	header("location:index.php");
?>
