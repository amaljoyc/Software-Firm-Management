<?php
session_start();

$userid=$_POST['userid'];;
$userpassword=$_POST['password'];
$useraccess=0;
 if($userid==0 && $userpassword=="admin")  // administrator
 {       $_SESSION['uid'] = $userid;
         $_SESSION['upsw'] = $userpassword;
         $_SESSION['uaccss'] = 0;
	     header("location:adminmore.php");
 }
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   
    $q1="select password,access from softwarefirm.firmdetails where softwarefirm.firmdetails.id='$userid'";
    $res1=mysql_query($q1);
    $r1=mysql_fetch_array($res1);
   
   
if($userpassword==$r1[0])
{ $useraccess=$r1[1];     
  $_SESSION['uid'] = $userid;
  $_SESSION['upsw'] = $userpassword;
  $_SESSION['uaccss'] = $useraccess;
  if($useraccess==0)  // administrator
     header("location:adminhome.php");
  else if($useraccess==1)  //user
     header("location:userhome.php");
  else header("location:index.php");
}
else
{ echo "<script type='text/javascript'>
        alert(' Invalid User........Please check the UserID and Password !!!!');
		</script>";
   echo "<script type='text/javascript'>  window.location='index.php'; </script>";
}
?>