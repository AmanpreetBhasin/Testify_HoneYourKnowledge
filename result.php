<?php
session_start();
if(isset($_SESSION['logged_in'])&&($_SERVER['REQUEST_METHOD'] == 'POST'))
  {
      require('final_index.php');
?>
      <div class="result">
      <?php
        $i=0;
    	$score=0;
        $db=new mysqli("localhost","root","","project2");
        $subject=$_GET['subject'];
        echo "<section id=\"login\" class=\"wrapper\">";
        echo "<div class='inner'>";
        foreach($_POST as $key=>$value)
        {  
          $i++;
          $r=$db->query("select * from question where subject='$subject' and S_NO='$key'");
          if($r->num_rows>0)
          {
            while($ques=mysqli_fetch_assoc($r))
            {
              echo "<h3>".$i." &nbsp;: &nbsp;".$ques['Name']."</h3>";
              if($ques['ans']==$value)
              {
                echo "<h5 class='correct'><span>Right answer &nbsp;</span> Your Choice - &nbsp;".$ques[$value]."</h5>";
                  $score++;
              }
              else
              {
				  if($value!='NULL')
				  {
                echo "<h5 class='incorrect'><span>Wrong answer &nbsp;</span> Your Choice - &nbsp;".$ques[$value]."</h5>";
				  }
				  else
				  {
				echo "<h5 class='unattempted'><span>Unattempted Question &nbsp;</span></h5>";
				  }
              }
            } 
          }
        
		}
        $sub="";
        $date="";
        $mm="";
        $om="";
		date_default_timezone_set("Asia/Calcutta");
        $r=$db->query("select * from users where Username='$_SESSION[username]'");
        if($r->num_rows>0)
        {
            $ques=mysqli_fetch_assoc($r);
            $sub=$ques['subject'].$subject."#";
            $date=$ques['date'].date("d/m/Y")." - ".date("H:i:s")."#";
            $mm=$ques['mm'].$i."#";
            $om=$ques['om'].$score."#";
		}
	if($_SESSION['test-submit']==1)
	{
		$db->query("update users set subject='$sub',date='$date',om='$om',mm='$mm' where 		Username='$_SESSION[username]'");
		$_SESSION['test-submit']=0;
	}
	echo "</div>";
    echo "<div class='inner sub'><h2><span>Final Score : &nbsp;</span>"." $score"."&nbsp; out of&nbsp;".$i."</h2>";
	echo "<button style=margin-bottom:2em><a href='index.php'>Return to Home</a></button>";
	echo "</div>";
  }
  else
    header('location:index.php');  
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