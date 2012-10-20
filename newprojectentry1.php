<?php
include_once("adminpanel.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Project Entry1</title>

<style type="text/css">
body,td,th {
	color: #333;
}
</style>

</head>

<body>
<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->

<strong><center>
 <h2>   Registration Complete:</h2>
    </strong></center>
<p>
  <?php

$empid = $_POST['employeeid'];
$pname = $_POST['pname'];
$sdate = $_POST['sdate'];
$progress = $_POST['progress'];
$details = $_POST['details'];

$con = mysql_connect("localhost","at","at");
mysql_select_db("softwarefirm",$con);

$q1="insert into softwarefirm.projectdetails values(0, '$pname', '$sdate', '$progress', '$details')";
mysql_query($q1);


$q2 = "select projectid from softwarefirm.projectdetails where projectname = '$pname'";
$res = mysql_query($q2);
$r = mysql_fetch_array($res);

for ($i=0; $i<count($empid); $i++) {
     $q1="insert into softwarefirm.pid values(".$empid[$i].",".$r[0].")";
     mysql_query($q1);
}


?>
</p>
<table width="633" height="173" border="0" align="center">
  <tr>
    <th colspan="2"  scope="col"><p><strong>Your entry has been successfully registered.</strong></p>
    <p><strong>Do you want to enter more</strong>??</p></th>
  </tr>
  <tr>
    <td align="center" ><strong><a href="newprojectentry.php">YES</a></strong></td>
    <td align="center" ><strong><a href="adminhome.php">NO</a></strong></td>
  </tr>
</table>
<p>&nbsp;</p>

<!---------------------------------------------------------->


 <div class="cleaner h30"></div>
                <h2></h2>
            	<a class="gototop" href="#top"></a>
                <div class="cleaner"></div>
        </div> <!-- end of content box content -->
      </div> 
        <!-- end of a content box -->
        </div>
        </div>
</body>
</html>

<?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>