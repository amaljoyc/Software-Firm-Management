<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>

<?php
error_reporting(0);
session_start();

 include_once("userpanel.php");
unset($_SESSION['id']);
unset($_SESSION['upsw']);
unset($_SESSION['uaccss']);
   echo "<script type='text/javascript'>  window.location='index.php'; </script>";
?>

<h2>Session has been deleted..</h2>
</body>
</html>