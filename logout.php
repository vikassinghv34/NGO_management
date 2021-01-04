<?php

session_start();
session_destroy();
unset($_SESSION['ID']);
unset($_SESSION['user']);
header("Location:Login_with_backend.php");
exit;

?>