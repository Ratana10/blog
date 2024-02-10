<?php

session_start();
// unset($_SESSION['userId']);
// unset($_SESSION['username']);

$_SESSION = array();
session_destroy();

header('Refresh: 2; URL = login.php');
