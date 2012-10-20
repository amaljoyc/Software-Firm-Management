
<?php
include_once("adminpanel.php");
?>   


<html>
<head>
<title>Portfolio</title>
</head>

<body>

 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content"> 



<!-------------------------------------------------->

<div id="templatemo_menu">
  <div align="center" >
  <br/><br/>
    <table width="422" border="1">
      <tr>
        <td><input name="button4" type="button" onClick="window.location='confirmreset.php'" value="Set Up Database"></td>
        <td><input name="button2" type="button" onClick="window.location='viewall.php'" value="View All Users">      </td>
        <td><input name="button" type="button" onClick="window.location='profilechoose.php'" value="View Profile">   </td>
        <td><input name="button6" type="button" onClick="window.location='newsentry.php'" value="Add News">   </td>
     </tr>
    </table>
  </div>
</div> <!-- end of templatemo_menu -->



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
