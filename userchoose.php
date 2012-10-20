

<?php
include_once("adminpanel.php");
?>   


<html>
<head>

</head>

<body>


 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content"> 



<!-------------------------------------------------->

<?php
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   $q0="select id from softwarefirm.personal";
   $res0=mysql_query($q0);
?>


<form action="userset.php" method="post">

<table width="506" height="93" border="0" align="center">
  <tr>
    <td colspan="3"  align="center"><strong>Please choose an ID to be set:</strong></td>
  </tr>
  <tr>
    <td  align="center" ><div align="center"><strong>ID</strong>
<select name="userid">
  <?php
    while($r0=mysql_fetch_array($res0))
   {
      echo "<option value='$r0[0]' >".$r0[0]."</option>";
   }  
   ?>
</select>
    </td>
    <td><div align="center">
      <input name="button4" type="submit" id="load" value="Load" />
     <td><input type="button" name="cancel" id="cancel" value="Cancel" onClick="window.location='adminhome.php'">
     </td>
    </div></td>
  </tr>
</table>
</form>


<!------------------------------------------------------->
		  <br/><br/>
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
