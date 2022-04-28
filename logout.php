<h3>Goodbye :)</h3>
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['passwd']);
session_destroy();
sleep(5);
header('Location: login.php');
?>