<?php
include_once("adminpanel.php");
?>
<html >
<head>
<script type="text/javascript">
function validateprevilege()
{
  if(previlege.password.value=="" || previlege.salary.value=="" || previlege.designation.value=="" ||previlege.access.value=="" )
   { alert('Some of the fields are found to be empty...Please fill them!!!!');
     return false;
   }
}
</script>

</head>

<body>

<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->

<?php
  $usrid=$_POST['userid'];
  
  $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
      
   $q0="select * from softwarefirm.firmdetails where softwarefirm.firmdetails.id='$usrid'";
   $res0=mysql_query($q0);
   $r0=mysql_fetch_array($res0);
   
   if($r0=="0")
     $status=1; //no account exists ; create new
   else
     $status=2; // account already exist...overwrite...
   
?>

<form name="previlege" action="userfeedfirmdetails.php" method="post" onSubmit="return validateprevilege()">
<table width="321" border="1" align="center">
  <tr>
    <td colspan="2">Please set the user preveleges<input type="hidden" name="stat" value="<?php echo $status; ?>"></td>
  </tr>
  <tr>
    <td width="161">&nbsp;</td>
    <td width="144">&nbsp;</td>
  </tr>
  <tr>
    <td>User ID</td>
    <td><?php echo $usrid; ?><input type="hidden" name="userid" value="<?php echo $usrid; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>    <input type="text" name="password" id="password" value="<?php echo $r0[1]; ?>"></td>
  </tr>
  <tr>
    <td>Salary</td>
    <td>    <input type="text" name="salary" id="salary" value="<?php echo $r0[2]; ?>"></td>
  </tr>
  <tr>
    <td>Designation</td>
    <td><input type="text" name="designation" id="designation" value="<?php echo $r0[3]; ?>"></td>
  </tr>
  <tr>
    <td>Access Level ( 0 ~ 9 )</td>
    <td><input type="text" name="access" id="access" value="<?php echo $r0[4]; ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input type="submit" name="userset" id="userset" value="Set User"></td>
    <td align="center"><input type="button" name="cancel" id="cancel" value="Cancel" onClick="window.location='userchoose.php'"></td>
  </tr>
</table>
</form>
<!---------------------------------------------------------->




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

