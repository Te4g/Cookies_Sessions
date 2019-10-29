<?php
require_once 'inc/head.php';
session_unset();
setcookie('cart', "", time() - 3600);
?>
<h1>You have been logged out.</h1>
