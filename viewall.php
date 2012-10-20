<?php
include_once("adminpanel.php");
?>

<html>
<head>

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
          
<!-------------------------------------------------------->
<?php    
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   $q1="select * from softwarefirm.personal";
   $res=mysql_query($q1);
   $r=mysql_fetch_array($res);

   
   

echo "<table width='700' border='0' align='center'>";
echo "<tr>
        <th align='center'>User ID</th>
		<th align='center'>Name</th>
		<th align='center'>Age</th>
		<th align='center'>Date of Birth</th>
		<th align='center'>Sex</th>
		<th align='center'>Address</th>
		<th align='center'>Contact</th>
		<th align='center'>Education Qualification</th>
		</tr>";
		
do   {
      echo "<tr> ";
	  echo "<td align='center'>".$r[0]."</td>";
	  echo "<td align='center'>".$r[1]."</td>";
	  echo "<td align='center'>".$r[2]."</td>";
	  echo "<td align='center'>".$r[3]."</td>";
	  echo "<td align='center'>".$r[4]."</td>";
	  echo "<td align='center'>".$r[5]."</td>";
	  echo "<td align='center'>".$r[6]."</td>";
	  echo "<td align='center'>".$r[7]."</td>";
	  echo "</tr align='center'>";
   }while($r=mysql_fetch_array($res));
   
echo "</table>";
 ?>  
 
<!---------------------------------------------------------->
<br/><br/>
<center><input type="button" value="Back" onClick="window.location='adminmore.php'" /></center>
 <div class="cleaner h30"></div>
                 <h2></h2>
            	<a class="gototop" href="#top"></a>
                <div class="cleaner"></div>
        </div> <!-- end of content box content -->
        </div> 
        <!-- end of a content box -->
        </div>     -->
        
</body>
</html>

 <?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>
