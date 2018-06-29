<?php 
session_start();
?>
<?php
session_start();

// Dont forget to check your variables
$email = $_POST["email"];
$password = $_POST["password"];

$user = "SELECT username FROM user_info WHERE email = '".$email."' and password = '".$password."'";
// Check the correct login (for example with a database)
if ($login_correct) {
    $_SESSION['username'] = $email;
    $_SESSION['logged'] = true;
    header("main.php");
    exit;
else {
    $_SESSION['logged'] = false;
    header("login.php");
    exit;


   }
}
?>