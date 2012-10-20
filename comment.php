<?php
 error_reporting(0);
   session_start();
  $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
  if($uaccess==0)
  { include_once("adminpanel.php");
  }
  else
    include_once("userpanel.php");
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comments!!!</title>
</head>

<body>

  
  <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">         
          
<!-------------------------------------------------------->

<?php
$sub = $_GET['subject'];    ////////////////////////////////////////////
?>
<p>
<form action="forum2.php" method="post">
  <table width="495" height="235" border="1" align="center">
  <tr>
    <th colspan="2"  scope="col">ADD COMMENT</th>
    </tr>
  
  <tr>
    <td align="center" >Description :</td>
    <td align="center" >
    <textarea name="details" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    
    
    <input type="hidden" name="subject" value="<?php echo $sub; ?>" />
    <input type="hidden" name="id" value="<?php echo $uid; ?>" />
    <td colspan="2" align="center" ><input type="submit" name="button" id="button" value="ADD" /></td>
    </tr>
</table>
</form>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="cleaner h30"></div>
                  <h2></h2>
            	<a class="gototop" href="#top"></a>
                <div class="cleaner"></div>
        </div> <!-- end of content box content -->
     </div>       
        <!-- end of a content box -->
       </div>       -->
</body>
</html>


<?php
echo "<center>";
include_once("Footer.html");
echo "</center>"; 
?>