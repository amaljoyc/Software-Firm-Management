<?php

  session_start();
    $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
?>


<?php
  //echo "<center>";
  include_once("adminpanel.php");
  //echo "</center>";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Home...</title>
</head>

<body >
<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->
<table width="320" border="1" align="center">
  <tr>
    <td colspan="3"><div align="center">Welcome....</div></td>
    </tr>
  <tr>
    <td width="25">&nbsp;</td>
    <td width="244">&nbsp;</td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><img src="photos/<?php echo $uid; ?>.jpg"  width="200" height="250" border="0" align="absmiddle"/></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">User Type : Administrator</div></td>
    <td>&nbsp;</td>
  </tr>
</table>

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
        </center>
</body>
</html>
<?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>