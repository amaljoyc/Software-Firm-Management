<?php
$sub = $_POST['subject'];
$det = $_POST['details'];
$uid = $_POST['id'];  
  
  $con = mysql_connect("localhost","at","at");
  mysql_select_db("softwarefirm",$con);
  
      $q1="insert into softwarefirm.forum values(0,'$sub','$det','$uid')";
      mysql_query($q1);
echo "<script type='text/javascript'> window.location='forum1.php'</script>";
?>