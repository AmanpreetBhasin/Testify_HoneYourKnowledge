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
		echo "<div class='inner ques'>";
		echo "<div class='left question-showtime'>";
		if($r->num_rows>0)
		{
			while($ques=mysqli_fetch_assoc($r))
			{	
				echo "<h3>Ques ".$i." : &nbsp;".$ques['Name']."</h3>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option1' onchange='checkradio(this.name,this.value)'>$ques[option1]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option2' onchange='checkradio(this.name,this.value)'>$ques[option2]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option3' onchange='checkradio(this.name,this.value)'>$ques[option3]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option4' onchange='checkradio(this.name,this.value)'>$ques[option4]</p>";
				echo "<p class='hide'><input type='radio' name='".$ques["S_No"]."' value='NULL' checked></p>";
				echo"<h4><a href='' class='resetradio' id='$ques[S_No]clear' onclick='resetradio(this.id)'>Clear</a></h4>";
				$i++;
			}
		
		echo "</div>";
		echo "<div class='panel'>";
		echo "<h3 id='ttime' style='margin-bottom:0.5em'></h3>";
		echo "<h3>Time Remaining :&nbsp;<span style='font-size:1.7em' id='time'></span></h3>";
		echo "<ul>";
		mysqli_data_seek($r,0);
		$i=1;
		while($qs=mysqli_fetch_assoc($r))
			{
				echo "<li id='".$qs["S_No"]."'>$i</li>";
				$i++;
			}
		echo "</ul>";
		echo "<div ><h3><div style=background-color:#f6755e;width:25px;height:25px;display:inline-block;vertical-align:top></div>&nbsp;&nbsp;: Attempted</h3></div>";
		echo"<div><h3><span style='background-color:darkgray;width:25px;height:25px;display:inline-block;vertical-align:top'></span>&nbsp;&nbsp;: Unanswered</h3></div>";
		}
		echo "</div>";
		echo "<div class='clear'></div>";
		echo "<div class='inner ques sub'><input class='submit' type='submit' value='Calculate'></div>";
		echo "</div>";
		echo "</form>";
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

<script>
				window.onload=hello;
				function hello(){
				var time=<?php echo $no ?>;
				document.getElementById('ttime').innerHTML ="Total time :&nbsp;"+time + ":00";
				document.getElementById('time').innerHTML = time + ":00";
				startTimer();

				function startTimer() {
				  var presentTime = document.getElementById('time').innerHTML;
					console.log(presentTime)
				  var timeArray = presentTime.split(/[:]+/);
				  var m = timeArray[0];
				  var s = checkSecond((timeArray[1] - 1));
				  if(s==59){m=m-1}
				  //if(m<0){alert('timer completed')}

				  document.getElementById('time').innerHTML =
					m + ":" + s;
					if(m==0 && s==0)
						{
							alert("Your time is over, all answers are saved and your test will be submitted");
							document.getElementById("form").submit();
						}
				  setTimeout(startTimer, 1000);
				}

				function checkSecond(sec) {
				  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
				  if (sec < 0) {sec = "59"};
				  return sec;
				}
				};
			</script>


