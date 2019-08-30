<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);




$pp->mail('sarahmandon@outlook.com'); // ← Your email here

echo $pp->process($_POST);
?>

<?php
// the message
$msg = "First line of text\nSecond line of text";

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