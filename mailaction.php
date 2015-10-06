<?php
//initializing the variables for the mail function
$my_mail_address = "your_email@here.com"; //you edit this to where you want the mail to be sent
$mail_subject = "i am a viewer of your site";
$name = $_POST['nm'];
$lname = $_POST['ln'];
$email = $_POST['em'];
$msg = $_POST['msg'];
//creating the final message that will be sent to you
$message = "First Name: ".$name."\nLast Name: ".$lname."\ne-mail: ".$email."\nmessage\n".$msg;
//sending the mail
if(mail($my_mail_address,$mail_subject,$message)){
	echo ('<meta http-equiv="refresh" content="0;url=mail.php" />');
}else{
	echo ('failed');
	}
?>


