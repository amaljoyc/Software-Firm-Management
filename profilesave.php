

<?php
 error_reporting(0);
session_start();
 $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
  if($uaccess==1)
    include_once("userpanel.php");
 else if($uaccess==0)
   include_once("adminpanel.php");
    
?>   

<html>
<head>
<style type="text/css">
body,td,th {
	color: #333;
}

.table_heading {
	font-family: "Times New Roman", Times, serif;
	color: #F00;
    font-size:24px;
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
   
   $uid=$_POST['userid'];
   
   $adrs=$_POST['address'];
   $cntct=$_POST['contact'];
   $edu=$_POST['education'];
   
    $q1="UPDATE softwarefirm.personal SET address='$adrs',contact='$cntct',education='$edu' WHERE softwarefirm.personal.id='$uid'";
   $res1=mysql_query($q1);
   
   $psw=$_POST['password'];
   $sal=$_POST['salary'];
   $desig=$_POST['designation'];
   
   $q2="UPDATE softwarefirm.firmdetails SET password='$psw',salary='$sal',designation='$desig' WHERE  softwarefirm.firmdetails.id='$uid'" ;
   $res2=mysql_query($q2);
   unlink("CurriculumVitae//$uid.doc");
   move_uploaded_file($_FILES['cv']['tmp_name'],"CurriculumVitae//'$uid'.doc");
   unlink("Photos//$uid.jpg");
   move_uploaded_file($_FILES['photo']['tmp_name'],"Photos//'$uid'.jpg");
   
	
    if($res1!=0 && $res2!=0)
	 { echo "<script type='text/javascript'> alert('Changes in this profile has been successfully saved !!!'); </script>";
	   
	 }
	  
	 echo " <br/><br/>";
	 echo " <center>";
	  if($uaccess==0)
	   echo "<script type='text/javascript'> window.location='profilechoose.php'</script>";
	  //echo "header('location:profilechoose.php')";
	 else if($uaccess==1)
	    echo "<script type='text/javascript'> window.location='profileview.php'</script>";  
        // header("location:userhome.php");
	 echo "</center>";
 
	    
		    
	
	
	
	 
?>
   




<!--   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  --> 


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

