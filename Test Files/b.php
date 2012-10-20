
<?php 

$_SESSION['n']=$_REQUEST['name'];
echo $_SESSION['n'];
//include ("c.php");
echo "<form action='c.php' method='post'>";
echo "<input type='submit' name='Proceed'>";
echo "</form>";
include "c.php";
?>

