
<?php
 error_reporting(0);
  session_start();
   $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
  if($uaccess==1)
    include_once("userpanel.php");
 else if($uaccess==0)
 {   include_once("adminpanel.php");
     $uid=$_POST['tid'];
	 $upwd=$_POST['tpwd'];
 }
?>   

<html>
<head>
<style type="text/css">
body,td,th {
	color: #333;
}

.table_heading {
	font-family: "Times New Roman", Times, serif;
	color: #F00;
    font-size:24px;
}
</style>
</head>

<body>

<!--
 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">         
          
<!-------------------------------------------------------->
<?php    
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
       
    $q1="select * from softwarefirm.personal,softwarefirm.firmdetails where softwarefirm.personal.id='$uid' and softwarefirm.firmdetails.id='$uid' and softwarefirm.firmdetails.password='$upwd'";
   $res1=mysql_query($q1);
   $r1=mysql_fetch_array($res1);
   
   
   $q2="select * from softwarefirm.firmdetails,softwarefirm.personal where softwarefirm.personal.id='$uid' and softwarefirm.firmdetails.id='$uid' and softwarefirm.firmdetails.password='$upwd'";
   $res2=mysql_query($q2);
   $r2=mysql_fetch_array($res2);
   
   $q3="select * from softwarefirm.projectdetails,softwarefirm.pid where softwarefirm.pid.id='$uid' and softwarefirm.projectdetails.projectid=softwarefirm.pid.projectid";
   $res3=mysql_query($q3);
   $r3=mysql_fetch_array($res3);
   
 ?>  
   
   
<form name="profileedit" action="profilesave.php" method="post" >
  <p>&nbsp;</p>
  <table width="669" border="1" align="center" cellspacing="0" >
    <tr >
      <td colspan="2"><div align="center" class="table_heading" id="table_heading" ><strong>PERSONAL DETAILS</strong></div></td>
    </tr>
    <tr >
      <td colspan="2">&nbsp;</td>
    </tr><tr >
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr >
      <td colspan="2"><div align="center"><img src="Photos/<?php echo $uid; ?>.jpg" alt="" name="userimage" width="228" height="196" align="center"></div></td>
    </tr>
    <tr >
      <td colspan="2"><div align="center">
        <input type="file" name="photo">
      </div></td>
    </tr>
    <tr >
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr >
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="228" align="center" ><strong>Name</strong></td>
      <td width="293" align="center" ><?php echo $r1[1]; ?> <input type="hidden" name="nam" value="<?php $r1[1] ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Age</strong></td>
      <td align="center" ><?php echo $r1[2]; ?></td>
    </tr>
    <tr>
      <td align="center" ><strong>Date of Birth</strong></td>
      <td align="center" ><?php echo $r1[3]; ?></td>
    </tr>
    <tr>
      <td align="center" ><strong>Sex</strong></td>
      <td align="center" ><?php echo $r1[4]; ?></td>
    </tr>
    <tr>
      <td align="center" ><strong>Address</strong></td>
      <td align="center" ><input type="text" name="address" value="<?php echo $r1[5]; ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Contact</strong></td>
      <td align="center" ><input type="text" name="contact" value="<?php echo $r1[6]; ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Education Qualification</strong></td>
      <td align="center" ><input type="text" name="education" value="<?php echo $r1[7] ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Curriculum Vitae</strong></td>
      <td align="center" ><input type="file" name="cv"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="309" border="1" align="center" cellspacing="0">
    <tr >
      <td colspan="2"><div align="center" class="table_heading"><strong>FIRM DETAILS</strong></div></td>
    </tr>
    <tr >
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="84" align="center" ><strong>User ID</strong></td>
      <td width="148" align="center" ><?php echo $r2[0]; ?><input type="hidden" name="userid" value="<?php echo $r2[0]; ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Password</strong></td>
      <td align="center" ><input type="text" name="password" value="<?php echo $r2[1]; ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Designation</strong></td>
      <td align="center" ><input type="text" name="designation" value="<?php echo $r2[3]; ?>"></td>
    </tr>
    <tr>
      <td align="center" ><strong>Salary</strong></td>
      <td align="center" ><input type="text" name="salary" value="<?php echo $r2[2]; ?>"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="481" border="1" align="center" cellspacing="0">
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
	  echo "<td align='center' >".$r3[2]."</td>";
	  echo "<td align='center' >".$r3[3]."</td>";
	  echo "<td align='center' >".$r3[4]."</td>";
	  echo "<td align='center' >".$r3[5]."</td>";
	  echo "</tr>";
   }  while($r3=mysql_fetch_array($res3)); 
   ?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0" align="center">
    <tr>
      <td width="94" align="center" valign="middle"><input type="button" onClick="<?php if($uaccess==0) 
	    echo "window.location='profilechoose.php'"; 
	  else if($uaccess==1)
	    echo "window.location='userhome.php'"; ?>"  value="Return without Saving"></td>
      <td width="96" align="center" valign="middle"><input name="edit" type="submit" id="edit" value="Save Profile"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
</form>

<!--   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  --> 


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
echo "<center>";
include_once("Footer.html");
echo "</center>"; 
?>

