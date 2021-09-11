<?php
session_start();
// the message
$msg = $_POST['name']. "</br>" .$_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if (mail("hello@elvisben.me.ke","From API Documentation",$msg)) {
  $_SESSION['mail_succeed'] = true;
}else {
  $_SESSION['mail_fail'] = true;
}

header("Location:".$_SERVER['HTTP_REFERER']);
