<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
$email=$_POST['email'];
$message=$_POST['message'];

$subject="=?utf-8?B?".base64_encode("Test")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n" ;
  //
  mail( "vahe_badalyan@inbox.ru", $subject,$message, $headers );;
 
  //      ^
  //  Replace with your email 
  headers('Location: ../index.html');
?>