<?php
if(!isset($_SESSION['uid']))
    echo "<script type='text/javascript'> window.location='index.php'</script>";
include_once("adminpanel.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
 <h2>   Employee List:</h2>
    </strong></center>
<?php

$con = mysql_connect("localhost","at","at");
mysql_select_db("softwarefirm",$con);

$q1="select id, name from softwarefirm.personal";
$res=mysql_query($q1);
$r=mysql_fetch_array($res);
echo "<form action='newprojectentry.php' method='post'>";
echo "<table width='150' height='75' border='0' align='center'>";
echo "<tr>
       <th>Select</th>
	   <th>User ID</th>
	   <th>Name</th>
	  </tr>";
do
	 {  echo "<tr>";
	    echo "<td align='center' ><input type='checkbox' name='employee[]' value=".$r[0]."></td>";
		echo "<td align='center' ><strong >".$r[0]."</strong></td>";
		echo "<td align='center' >".$r[1]."</td>";
		echo "</tr>";
	 }  while($r=mysql_fetch_array($res)); 
echo "</table>
<center><input type='submit' value='Submit'/></center>
</form>";
?>

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