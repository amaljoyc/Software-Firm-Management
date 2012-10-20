
<?php
   error_reporting(0);
  session_start();

   $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
  

 include_once("userpanel.php");
?>   



<html>
<head>
<title>Untitled Document</title>
</head>

<body>



 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">         
          
<!-------------------------------------------------------->

<?php    
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   
 
   
   
      $q3="select * from softwarefirm.projectdetails,softwarefirm.pid where softwarefirm.pid.id='$uid' and softwarefirm.pid.projectid=softwarefirm.projectdetails.projectid";
   $res3=mysql_query($q3);
   $r3=mysql_fetch_array($res3);
   
 
?>   
<form>

 <table width="481" border="1s" align="center" cellspacing="0">
    <tr>
      <td colspan="5" ><div align="center" class="table_heading"><strong>PROJECT DETAILS</strong></div></td>
    </tr>
    <tr>
      <td colspan="5" >&nbsp;</td>
    </tr>
    <tr>
      <td width="103" align="center" ><strong>PROJECT ID</strong></td>
      <td width="66" align="center" ><strong>NAME</strong></td>
      <td width="101" align="center" ><strong>DATE</strong></td>
      <td width="97" align="center" ><strong>PROGRESS</strong></td>
      <td width="80" align="center" ><strong>DETAILS</strong></td>
    </tr>
    <?php
   do
   {  echo "<tr>";
      echo "<td align='center' >".$r3[0]."</td>";
	  echo "<td align='center' >".$r3[1]."</td>";
	  echo "<td align='center' >".$r3[2]."</td>";
	  echo "<td align='center' >".$r3[3]."</td>";
	  echo "<td align='center' >".$r3[4]."</td>";
	  echo "</tr>";
   }  while($r3=mysql_fetch_array($res3)); 
   ?>
  </table>
</form>


<!--  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  --> 


 <div class="cleaner h30"></div>
                  <h2></h2>
            	<a class="gototop" href="#top"></a>
                <div class="cleaner"></div>
        </div> <!-- end of content box content -->
      </div>       
        <!-- end of a content box -->
        </div>      


</body>
</html>

<?php
$test1=$_REQUEST['userid'];
echo $test1;
echo "<center>";
include_once("Footer.html");
echo "</center>"; 
?>