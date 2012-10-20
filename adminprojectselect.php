<?php
//include_once("userpanel.php");
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
<form action="userprojectupload.php" method="post" enctype="multipart/form-data">
<table width="482" border="1" align="center">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">File name format : &lt;UserID&gt;_&lt;Date&gt;_&lt;Time&gt;</td>
  </tr>
  <tr>
    <td width="59">&nbsp;</td>
    <td width="173">&nbsp;</td>
    <td width="228">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Please choose file to be downloaded</td>
    <td><input type="file" name="project"></td>
  </tr>
   <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" value="Download" ></td>
  </tr>
</table>
</form>
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