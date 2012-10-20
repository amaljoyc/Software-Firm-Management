<?php
 session_start();
   $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
include_once("userpanel.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Home...</title>
</head>

<body >
<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->


<strong><center>
 <h2>   Welcome..... </h2>
    </strong></center>
    <table width="200" border="0" align="center">
    <tr>
       <td><img src="photos/<?php echo $uid; ?>.jpg"  width="200" height="250" border="0" align="middle"/></td>
      </tr>
       <tr>&nbsp;</tr>
    <tr>&nbsp;</tr>
    <tr>
       <td><center>User Type : Normal User </center></td>
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
</body>
</html>
<?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>