<?php 
$ad=$_POST['fullname'];
$email=$_POST['email'];
$msg=$_POST['message'];
$msg=$msg."<BR>Submission PP.com: Name:".$ad."<BR>From:".$email;
$recipient = "pilotprosoft@gmail.com";
$subject = "New Message";
mail($recipient, $subject, $msg);
header("Location: https://www.pilotprosoft.com");
?>