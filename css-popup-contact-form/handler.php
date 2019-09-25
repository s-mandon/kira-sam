<?php
// define variables and set to empty values
$name = $message = $email = $accept = "";

if (isset($_POST["submit"])){
       $name = test_input($_POST["name"]);
       $message = test_input($_POST["message"]);
       $email = test_input($_POST["email"]);
       $accept = test_input($_POST["accept"]);

    }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
} ?>

<?php

if(isset($_POST["accept"])){
	$accept=$_POST["accept"];
} else {
	$accept="No Button Selected";
}
?>

<?php
$email_from = $email;
$email_subject = "New RSVP";
$email_body = "WHAT'S UP u got a new RSVP from $name at $email.\n
                    \n Fingers crossed they're not coming! Jk they said:\n 
                    \n $message
                    \n $accept"; 
?>
                            
<?php
                          
$to = "sarahmandon@outlook.com";
$headers = "From: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>