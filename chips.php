<html>
<head>
<?php
require("lib/functions.php");

session_start();
if (!isset($_SESSION['username']))
    header("Location: login.php");
$product = 'chips';
if (!isset($_POST['choice']))
{
   
}
else if ($_POST['choice'] == 'Buy One')
{
    if (isset($_SESSION[$product]))
    $_SESSION[$product] += $_POST[$product];
    else
    $_SESSION[$product] = $_POST[$product];
}
else if ($_POST['choice'] == 'Remove One')
{
   if (isset($_SESSION[$product]))
   $_SESSION[$product] -= $_POST[$product];
   else
   $_SESSION[$product] = $_POST[$product];
}
else if ($_POST['choice'] == 'Remove All')
{
   $_SESSION[$product] = 0;
}
?>
<link href="lib/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<h2>Chips</h2>
<form method='POST'>
<input type='submit' name='choice' value='Buy One'>
<input type='submit' name='choice' value='Remove One'>
<input type='submit' name='choice' value='Remove All'>
</form>
In cart: <?php echoSession($product);?>
<?php readfile("lib/footer.html"); ?>
</body>
</html>
