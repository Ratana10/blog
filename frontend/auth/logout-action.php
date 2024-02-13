<?php

session_start();
// unset($_SESSION['userId']);
// unset($_SESSION['username']);

$_SESSION = array();
session_destroy();

header('Refresh: 1; URL = login.php');
