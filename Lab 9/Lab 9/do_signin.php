<?php

require_once ('hamza56.php');
$db = new hamza56();
$un = $_POST['email'];
$pass = $_POST['pwd'];

$pwd = md5($_POST['pwd']); // encryption

$db->signin($un, $pwd)
?>