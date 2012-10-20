<?php
 error_reporting(0);
 session_start();
 include_once("header.html");
?>   
  
  <html>
  <head>
  <title>News in detail</title>
  </head>
  
	<style type="text/css">
  strong {
	  color: #333;
  }
  </style>
  
  <body>
  
  <div id="templatemo_main">
		  
		<div class="content_box">
			<div id="home"></div>
			<div class="content_box_content">
			
  <p>
	<!-------------------------------------------------------->
	
	
	<h2><center>News In Detail</center></h2>
	<?php
	
	$title = $_POST['title'];
	$details = $_POST['details'];
	
	$con = mysql_connect("localhost","at","at");
	mysql_select_db("softwarefirm",$con);
	if($title!="" and $details!="") {
	    $q1="insert into softwarefirm.news values('$title','$details')";
	    mysql_query($q1);
	}
	
	$q2="select * from softwarefirm.news";
	 $res=mysql_query($q2);
	 $r=mysql_fetch_array($res);
	?>
	
	</p>
  <p>&nbsp;</p>
  <p>
  <table width="623" height="382" border="0" align="center">
  <?php
	 do
	 {  echo "<tr>";
		echo "<td align='center' ><strong >".$r[0]."</strong></td>";
		echo "<td align='center' >".$r[1]."</td>";
		echo "</tr>";
		//echo "<tr><td colspan='2'><center>-----------------------------------------------------------------</td></center></tr>";
		echo "<tr><td colspan='2'><hr></td></tr>";
	 }  while($r=mysql_fetch_array($res)); 
	 ?>
   </table>  
	 
   
	<!---------------------------------------------------------->
	
  </p>
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
