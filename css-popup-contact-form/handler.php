<?php
// the message
if (isset($_GET['submit'])) {
$name = $_GET['name'];
$email = $_GET['email'];
$msg = $email + $name;
} else {
    $msg = "No";
}

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$header = "From: samuel.leahy12@gmail.com";

// send email
if(!mail("sarahmandon@outlook.com","RSVP",$msg,$header)){
    var_dump(error_get_last()['message']);
} else {
    echo "Hello";
}
?>