<?php

require_once ('hamza56.php');

$db = new hamza56();

$un = $_POST['email'];
$pass = $_POST['pwd'];
$pass = md5($_POST['pwd']);

$db->create_user($un, $pass);

print_r($_POST);

?>