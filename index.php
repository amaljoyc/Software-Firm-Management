
<?php
include_once("Header.html");
?>

<html>
<head>
<title>Home</title>
</head>

<body>

<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->

<?php
	
	
	$con = mysql_connect("localhost","at","at");
	mysql_select_db("softwarefirm",$con);
	
	$q2="select * from softwarefirm.news";
	 $res=mysql_query($q2);
	 $r1=mysql_fetch_array($res);
	 $r2=mysql_fetch_array($res);
	?>
<h2>Think, Build and Innovate</h2>
                
                  <p>&nbsp;</p>
                  <p>
                  
                  <?php
                      include("Image Slider/slider.php");
                  ?>
                  </p>
                  
                  <div class="col_w340 float_l"> 
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   
                    
                    <table width="300" height="351" border="1" bgcolor="#EFE66B">
                    <center>
                      <tr><th width="276" height="50"  scope="col" background="images/newsbg.gif"></th></tr>
                
                              <tr align="center">
                                <td height="124" ><p><h4><?php echo($r1[0]); ?></h4></p>
                                  <a href="news.php">[more]</a><br>
                                  </p></td>
                              </tr>
                              <tr align="center">
                                <td height="150" ><p><h4><?php echo($r2[0]); ?></h4></p>
                                  <a href="news.php">[more]</a><br>
                                  </p></td>
                              </tr>
                            
                      </centre>  
                    </table>
                 
                  <p>&nbsp;</p>
                  
              
</div>
                <div class="col_w340 float_r">
                <p>&nbsp;</p>
                	<h3>Our Vision</h3>
<p> Firm Management is not merely another company producing hordes of softwares every year. It is more than a center of learning and home to a diverse community of innovators and entrepreneurs. In every block of our company, you'll find unique people who are passionate about learning, building and collaborating on groundbreaking technologies.</p>
    <div class="cleaner h30"></div>
    
    <form action="redirect.php" method="post">
<table width="312" height="171"  border="1">
  <tr >
    <th colspan="2" align="center" valign="middle" scope="col"><h3>Log In<h3></th>
  </tr>
  <tr>
    <td align="center" >User ID:</td>
    <td align="center" >
    <input name="userid" type="text" id="userid" size="35" /></td>
  </tr>
  <tr>
    <td align="center" >Password:</td>
    <td align="center" >
    <input name="password" type="password" id="password" size="35" /></td>
  </tr>
  <tr >
    <td align="right" ><input name="register" type="button" value="Register" size="35" onClick="window.location='registration.php'" /></td>
    <td align="right"><input type="submit" name="Login" id="button" value="Log In" /></td>
  </tr>
</table>
</form>
   
                </div>
                
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
<?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>       
</body>
</html>