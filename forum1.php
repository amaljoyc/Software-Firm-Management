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
<title>Forum page 1</title>
</head>
  
  <body>
  
  <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">         
          
<!-------------------------------------------------------->
  
  
  <p>
  <?php
     
  $con = mysql_connect("localhost","at","at");
  mysql_select_db("softwarefirm",$con);	  

  
  $q2="select name,subject,details from softwarefirm.forum,softwarefirm.personal where forum.id = personal.id";
  $res=mysql_query($q2);
  $r=mysql_fetch_array($res);
  
  ?>
  <p>&nbsp; </p>
  <table width="623" height="382" border="1" align="center">
  <tr>
    <td align='center' ><strong> AUTHOR </strong></td>
    <td align='center' ><strong> SUBJECT </strong></td>
    <td align='center' ><strong> DESCRIPTION </strong></td>
    </tr>
  <tr>
  <?php
	 do
	 {  echo "<tr>";
	    echo "<td align='center' ><em>".$r[0]." says: </em></td>";
		echo "<td align='center' ><strong >".$r[1]."</strong></td>";
		echo "<td align='center' >".$r[2]."<p>";?>
		      <a href="comment.php?subject=<?php echo $r[1]; ?>">Comment</a></p>
	 <?php echo "</td>";
		echo "</tr>";
	 }  while($r=mysql_fetch_array($res)); 
	 ?>
   </table>  
   
  </p>
  <p>&nbsp; </p>
  
  <form action="forum2.php" method="post">
  <table width="495" height="235" border="1" align="center">
  <tr >
    <th colspan="2" scope="col">ADD NEW COMMENTS</th>
    </tr>
  <tr>
    <td width="99" align="center" >Subject :</td>
    <td width="380" align="center" >
    <input name="subject" type="text" id="textfield" size="58" /></td>
  </tr>
  <tr>
    <td align="center" >Description :</td>
    <td align="center" >
    <textarea name="details" id="textarea" cols="45" rows="5"></textarea></td>
  </tr>
  <tr >
    <input type="hidden" name="id" value="<?php echo $uid; ?>" />
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="ADD" /></td>
    </tr>
</table>
</form>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
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