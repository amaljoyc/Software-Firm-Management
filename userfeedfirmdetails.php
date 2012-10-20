

<?php
 include_once("adminpanel.php");
?>   

<html >
<head>
<title>Untitled Document</title>
</head>

<body>



 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content"> 



<!-------------------------------------------------->

<?php
   $status = $_GET['stat'];
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   
   $uid=$_POST['userid'];
   $psw=$_POST['password'];
   $sal=$_POST['salary'];
   $desig=$_POST['designation'];
   $accss=$_POST['access'];
   $status=$_POST['stat'];
   
   
      

   if ($status=="1")
   { $q2="INSERT INTO softwarefirm.firmdetails(id,password,salary,designation,access) VALUES ( '$uid','$psw','$sal','$desig','$accss')"; 
   $res2=mysql_query($q2);
   }
   else if($status=="2")
   { $q3="UPDATE softwarefirm.firmdetails SET password='$psw',salary='$sal',designation='$desig',access='$accss' WHERE softwarefirm.firmdetails.id='$uid'"; 
   $res3=mysql_query($q3);
   }
   
   if($res2==0 && $res3==0)
   { echo "<script type='text/javascript'> alert('Failed to set user previleges !!!'); 
                                           window.location='userchoose.php';      
		  </script>";
   }
   echo "<center";
   echo "<br/><br/>";
   echo " User Preveleges set successfully";
   echo "<br/><br/>";
   echo "<a href='mailto:?Subject=Software Firm Management'>Mail details to new user</a> ";
   echo "<br/><br/>";
   
   echo "<a href='adminhome.php' >Back</a>";
   echo "</center>";
?>

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
