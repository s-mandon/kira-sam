<?php
// define variables and set to empty values
$fname = $lname = $diet = $song = $email = $accept = $plus1 = $message = "";

if (isset($_POST["submit"])){
       $fname = test_input($_POST["fname"]);
       $lname = test_input($_POST["lname"]);
       $diet = test_input($_POST["diet"]);
       $email = test_input($_POST["email"]);
       $song = test_input($_POST["song"]);


    }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
} ?>

<?php
if (isset($_POST['accept'])) {
   $accept = "Accept";
} else {
   $accept = "Decline";
}
?>

<?php
if (isset($_POST['plus1'])) {
  $plus1 = "Yes please!";
} else {
  $plus1 = "No thank you!";
}
?>

<?php
$email_from = $email;
$email_subject = "New RSVP";
$email_body = "GOOD DAY KIRA, Computron here. You have received a new RSVP from $fname $lname at $email.
                    \n Below is what they've responded with! Nothing weird I hope!\n 
                    \n Accept / Decline: $accept
                    \n Plus 1?: $plus1
                    \n Dietary Requirements: $diet
                    \n Song addition: $song";
?>
                            
<?php                        
$to = "sarahmandon@outlook.com";
$headers = "From: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>

<?php 
$to= $email;
$headers = "RSVP Confirmation \r\n";
$subject="RSVP Confirmation";
$message;
?>
<?php
if (isset($_POST['accept'])) {
   $message = "Yes confirmation";
 } else {
   $message = "no confirmation";
 }
mail($to,$email_subject,$message,$headers);
//Use the mail function to send the confirmation email?>

<?php
header("Location:/resources/thankyou.html");
?>