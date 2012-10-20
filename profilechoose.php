<?php 
     session_start();
   $_SESSION['nm']=$_REQUEST['userid'];
   $_SESSION['psw']=$_REQUEST['password'];
?>



<?php
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
          
<!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->



<?php
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   $q0="select id from softwarefirm.personal";
   $res0=mysql_query($q0);
?>



<form action="profileview.php" method="post">

<table width="506" height="93" border="1" align="center">
  <tr>
    <td colspan="4"  align="center"><strong>Please choose an ID to be viewed:</strong></td>
  </tr>
  <tr>
    <td ><div align="center"><strong>ID</strong>
<select name="tuserid">
  <?php
    while($r0=mysql_fetch_array($res0))
   {
      echo "<option value='$r0[0]' >".$r0[0]."</option>";
   }  
   ?>
</select>
    </div></td>
    <td ><div align="center"><strong>Password
      </strong>
      <input type="password" name="tpassword" id="tpassword" />
    </div></td>
    <td width="93" ><div align="center">
      <input name="load" type="submit" id="load" value="Load" /></td>  <td>    <input name="cancel" type="button" id="cancel" value="Cancel" onclick="window.location='adminmore.php'" />
    </div></td>
  </tr>
</table>
    <input type="hidden" name="type" value="0"  />   
</form>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

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