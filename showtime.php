<?php
session_start();
$_SESSION['test-submit']=1;
	if(isset($_SESSION['logged_in'])&&($_SERVER['REQUEST_METHOD'] == 'POST'))
	{
		require('final_index.php');
		$subject=$_POST["subject"];
		$no=$_POST["question"];
		$i=1;
		$db=new mysqli("localhost","root","","project2");
		$r=$db->query("select Name,option1,option2,option3,option4,S_No from question where subject=\"$subject\" order by rand() limit $no ");
		echo "<section id=\"login\" class=\"wrapper\">";
		echo "<form action='result.php?subject=$subject' method=post id='form'>";
		if($r->num_rows>0)
		{
			while($ques=mysqli_fetch_assoc($r))
			{	
				echo "<div class='inner ques'>";
				echo "<h3>Ques ".$i." : &nbsp;".$ques['Name']."</h3>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option1'>$ques[option1]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option2'>$ques[option2]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option3'>$ques[option3]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option4'>$ques[option4]</p>";
				echo "<p class='hide'><input type='radio' name='".$ques["S_No"]."' value='NULL' checked></p>";
				echo "</div>";;
				$i++;
			}
		}
		echo "<div class='inner ques sub'><input class='submit' type='submit' value='Calculate'></div>";
		echo "</form>";
		echo "</div>";
        echo "</section>";
	}
	else
		header("location:index.php");
?>

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
<script src="js/index.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
