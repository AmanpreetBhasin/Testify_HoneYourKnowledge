<?php
session_start();
	require('final_index.php');
?>

<?php
                if(!isset($_SESSION["logged_in"]))
                {?>

<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Testify</h1>
					<h2>Hone your knowledge and prepare well for your exams</h2>
					<ul class="actions">
						<li><a href="login.php" class="button scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Huge Question base</h3>
							<p>Unlimited Multiple choice questions on <br /> every topic, absolutely free.</p>
						</div>
						<div>
							<h3>Questions as per your time</h3>
							<p>Choose the number of questions you<br /> want to attempt according to your time.</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Get instant results</h3>
							<p>Attempt the questions and click submit, <br /> to get instant answers and results.</p>
						</div>
						<div>
							<h3>Hone your knowledge</h3>
							<p>Increase your knowledge and prepare<br /> well in advance for all your exams.</p>
						</div>
					</div>
				</div>
			</section>
<?php
              }
              ?>


            <?php
                if(isset($_SESSION["logged_in"]))
                {?>
               <section id="main" class="wrapper style1 special">
                   <!--<?php if(isset($_SESSION["logged_in"])) {?> 
                        <div class="name">
                            <h4>Welcome, <br><?php echo $_SESSION["logged_in"]; ?></h4>
                        </div>
                    <?php } ?>-->
                   <div class="inner navig" id="dash">
					   <h2>WELCOME TO YOUR DASHBOARD</h2>
				   </div>
				   <div class="inner navig">
                       <button id="performance" onclick="showTab(this.id)">Previous Test Record</button>
                        <button id="test" onclick="showTab(this.id)">Take a new Test</button>
                       <button id="graph" onclick="showTab(this.id)">Performance Graph</button>
                   </div>
				<div class="inner hide" id="test_time">
					<form method="post" role="form" onsubmit=" return check()" action="showtime.php">
                            <h2>Select The Subject</h2>
                            <select class="choice" name="subject">
                              <option disabled selected>--Choose One Subject--</option>
                        <?php
                            $db=new mysqli("localhost","root","","project2");
                            $n=$db->query("select subject from question group by subject");
                            if($n->num_rows>0)
                            while($options=mysqli_fetch_assoc($n))
                            {
                          		echo "<option>$options[subject]</option>";
                            }
                            ?>
                              </select>
                                <h2>Number Of Question</h2>
                                <select class="question" name="question">
                              <option disabled selected>--Number Of Question--</option>
                                    <option>5</option>
									<option>10</option>
									<option>15</option>
                                </select>
                                <button type="submit">Start Test</button>
                            </form>
				</div>
                   <div class="inner hide" id="previous_data">
				   	<?php
				 		$db=new mysqli("localhost","root","","project2");
                        $n=$db->query("select subject from question group by subject");
                        if($n->num_rows>0)
						{
							echo "<select id='choose'>";
				 			echo "<option selected disabled>--CHOOSE SUBJECT--</option>";
                        	while($options=mysqli_fetch_assoc($n))
                        	{
                          		echo "<option>$options[subject]</option>";
                        	}
				 			echo "</select>";
						}
						 echo "<div>";
						 echo "<table id='previous_data2'></table>";
						 echo "<h4 id='previous_data_head'></h4>";
						 echo "</div>";
				 	?>
				   </div>
                   <div class="inner hide chart-container" id="previous_graph">
					   <?php
				 		$db=new mysqli("localhost","root","","project2");
                        $n=$db->query("select subject from question group by subject");
                        if($n->num_rows>0)
						{
							echo "<select id='choose1'>";
				 			echo "<option selected disabled>--CHOOSE SUBJECT--</option>";
                        	while($options=mysqli_fetch_assoc($n))
                        	{
                          		echo "<option>$options[subject]</option>";
                        	}
				 			echo "</select>";
						}
				 	?>
				   	<canvas id="line-chartcanvas" class="hide"></canvas>
					<h4 id='previous_graph_head'></h4>
				   </div>
			</section>
              <?php
              }
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
			<script src="assets/js1/jquery.min.js"></script>
    		<script src="assets/js1/Chart.min.js"></script>
			<script>
			document.querySelector('#choose').addEventListener("change",function()
			{
				document.querySelector('#choose').blur();
				var obj, dbParam,xmlhttp;
    			var x=document.querySelector('#choose').value;
				var y='<?php echo $_SESSION['username'];?>';
				var count=0;
				console.log(y);
				obj = { "table":"users","y":y};
    			dbParam = JSON.stringify(obj);
    			xmlhttp = new XMLHttpRequest();
    			xmlhttp.onreadystatechange = function() 
    			{
    				var newcontent='';
					var heading='No tests given by the candidate';
        			document.querySelector('#previous_data2').innerHTML=newcontent;
        			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        			{
        				var de=JSON.parse(xmlhttp.responseText);
						console.log(de)
						if(de[0].subject!=null)
						{
							sub=de[0].subject;
							sub=sub.split("#");
							date=de[0].date;
							date=date.split("#");
							om=de[0].om;
							om=om.split("#");
							mm=de[0].mm;
							mm=mm.split("#");
							newcontent='<tr><th>Date</th><th>Subject</th><th>Marks Secured</th><th>Maximum Marks</th></tr>'
							for(i=0;i<sub.length;i++)
							{
								if(sub[i]==x)
								{
									newcontent +='<tr><td>'+date[i]+'</td><td>'+sub[i]+'</td><td>'+om[i]+'</td><td> '+mm[i]+'</tr>';
									count=count+1;
								}
							}
							if(count==0)
							{
								newcontent="";
								heading='No tests record found in this subject';
							}
							else
								{
									heading="";
								}
         					}
						}
     				document.querySelector('#previous_data2').innerHTML=newcontent;
					document.querySelector('#previous_data_head').innerHTML=heading;
     				}
     				xmlhttp.open("GET", "choose.php?x=" + dbParam, true);
     				xmlhttp.send();
			});
			</script>
		<script>
			document.querySelector('#choose1').addEventListener("change",function()
			{
				per=[]
				date1=[]
				document.querySelector('#choose1').blur();
				var obj, dbParam,xmlhttp;
    			var x=document.querySelector('#choose1').value;
				var y='<?php echo $_SESSION['username'];?>';
				var count=0;
				obj = { "table":"users","y":y};
    			dbParam = JSON.stringify(obj);
    			xmlhttp = new XMLHttpRequest();
    			xmlhttp.onreadystatechange = function() 
    			{
    				var newcontent='';
					var heading='No tests given by the candidate';
        			document.querySelector('#previous_data2').innerHTML=newcontent;
        			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        			{
        				var de=JSON.parse(xmlhttp.responseText);
						if(de[0].subject!=null)
						{
							sub=de[0].subject;
							sub=sub.split("#");
							date=de[0].date;
							date=date.split("#");
							om=de[0].om;
							om=om.split("#");
							mm=de[0].mm;
							mm=mm.split("#");
							for (var i = 0; i <sub.length; i++) 
							{			
								if (sub[i]==x) 
								{
									per.push((om[i]/mm[i])*100)
									date1.push(date[i].slice(0,10));
									count=count+1
								}
							}
							if(count>0)
								{
									var ctx = $("#line-chartcanvas");
								var data = {
								labels : date1,
								datasets : [
								{	
									label : "Percentage Scored",
									data : per,
									backgroundColor : "white",
									borderColor : "#25a2c3",
									fill : false,
									lineTension : 0.3,
									pointRadius : 5,
									color : "white",
									borderWidth :0
								}
								]
							};
							var options = {
							title : {
							display : true,
							position : "top",
							text : "Performance Graph",
							fontSize : 22,
							fontColor : "#fff"
							},
							legend : {
							display : true,
							position : "bottom",
							labels : {
								fontColor:"#fff"
							}
							},
							scales:{
								yAxes:[
									{
										ticks:
										{fontColor:"#fff",beginAtZero:true,fontSize:14},
										gridLines:{
										 zeroLineColor: "white"}
									}],
								xAxes:[
									{ticks:
									 {fontColor:"#fff",beginAtZero:true,fontSize:14},
									 gridLines:{
										 borderColor:"white",
										 fontColor:"white",
										 color:"white",
										 zeroLineColor: "white"
									 }
									}]
							}							
							};
							var chart = new Chart( ctx, {
							type : "line",
							data : data,
							options : options,
							} );
							}
							if(count==0)
								{
								heading='No tests record found in this subject';
								document.querySelector('#line-chartcanvas').classList.add("hide");
								}
							else
								{
								heading="";
							document.querySelector('#line-chartcanvas').classList.remove("hide");
         					}
						}
						}
					document.querySelector('#previous_graph_head').innerHTML=heading;
     				}
     				xmlhttp.open("GET", "choose.php?x=" + dbParam, true);
     				xmlhttp.send();
			});

</script>

	</body>
</html>
