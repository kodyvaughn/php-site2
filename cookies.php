<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: login.php");
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile("lib/header.html"); ?>
This is where you would be able to purchase cookies.
<?php readfile("lib/footer.html"); ?>
</body>
</html>
