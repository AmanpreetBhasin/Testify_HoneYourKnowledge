<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if(($_SERVER['REQUEST_METHOD'] == 'POST')) 
{ 
  	ob_start();
  	session_start();
  	$email=$_POST["email"];
  	$db=new mysqli("localhost","root","","project2");
  	$n=$db->query("select Email,Name from users where Email='$email'");
  	if(mysqli_num_rows($n)>0)
  	{	 
		$cookie_value=mt_rand(1000,9999);
		$cookie_value=md5($cookie_value);
  		$name=mysqli_fetch_assoc($n);
  		$n=$db->query("update users set random_string='$cookie_value' where Email='$email'");
    	$_SESSION["remail"]=$email;
  		error_reporting(0);	
		$mail = new PHPMailer(true);                            
		try 
		{
    		$mail->SMTPOptions = array(
    		'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    		)
    		);
    		//$mail->SMTPDebug = 2;
    		$mail->isSMTP(); 
    		$mail->Host = 'smtp.gmail.com';
    		$mail->SMTPAuth = true;  
    		$mail->Username = 'amanpreetsingh8855@gmail.com';   #email id 
    		$mail->Password = 'Gtbit@8855';    #pasword    
    		$mail->SMTPSecure = 'tls';
    		$mail->Port = 587;
    		$mail->setFrom('amanpreetsingh8855@gmail.com', 'Quiz');   #email id
    		$mail->addAddress($email, $name[Name]);
    		$mail->isHTML(true);
    		$mail->Subject = 'Passwosrd Reset Request';
    		$mail->Body    = "The link to reset your password<br>";
    		$mail->Body   .= "<a href='forget3.php?reset=$cookie_value'>forget3.php?reset=$cookie_value</a>";
			$mail->send();
            
            header("location:forget.php?y=Password Reset Link sent to your registered email id");
		} 
		catch (Exception $e) 
		{
		}
	?>
	<?php
	} 
  	else
    	header("location:forget.php?x=Email is not registered");
}
else
{
  header("location:index.php");
}
?>