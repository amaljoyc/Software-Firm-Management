<?php
include_once("Header.html");
?>

<html>
<head>

</head>

<body>


<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->
<?php 

   $nam = $_POST['nam'];
   $age=(int)date(Y)-(int)$dob_y;       //     <<<<<<<<<<<<<<<<< find difference between current year and date of birth
   $dob_y=$_POST['year'];
   $dob_m=$_POST['month'];
   $dob_d=$_POST['day'];
   $dob=$dob_y."-".$dob_m."-".$dob_d;
   $sex=$_POST['sex'];
   $addr=$_POST['address'];
  //if($addr=="")
    //{  echo "<script type='text/javascript' >alert('Address field cannot be empty !!!'); <!--/script>";
	//   header("location:registration.php");
	//   //echo "<script type='text/javascript' >window.location='registration.php';  <!/script>";
	//}
   $cntct=$_POST['contact'];
   $edu=$_POST['education'];
   $con=mysql_connect("localhost","at","at");
   mysql_select_db("softwarefirm",$con);
   $q0=mysql_query("select max(id) from softwarefirm.personal"); //finding last id from the table
   $temp=mysql_fetch_array($q0);
   $id=$temp[0]+1;             // picking up next id
	  
   $q1="insert into softwarefirm.personal values ($id,'$nam','$age','$dob','$sex','$addr','$cntct','$edu')";
   $res=mysql_query($q1);
   
   
   move_uploaded_file($_FILES['cv']['tmp_name'],"CurriculumVitae//$id.doc");
   move_uploaded_file($_FILES['photo']['tmp_name'],"Photos//$id.jpg");
   
   
   echo "<script> alert('Your details have been successfully saved !!!!!!!'); 
        window.location='index.php'; </script>";
   
   
?>
<!---------------------------------------------------------->




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

