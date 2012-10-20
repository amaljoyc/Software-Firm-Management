<?php
 session_start();
   $uid=$_SESSION['uid'];
  $upwd=$_SESSION['upsw'];
  $uaccess=$_SESSION['uaccss'];
 include_once("userpanel.php");
?>   



<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript">
  get

</script>
</head>

<body>


 <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">         
          
<!-------------------------------------------------------->
<?php

  $fileid=$uid."_".date(d)."-".date(m)."-".date(Y)."_".date(G)."-".date(i)."-".date(s);
  
  move_uploaded_file($_FILES['project']['tmp_name'],"ProjectUploads//$fileid.rar");
  
  echo "Project Successfully Uploaded....."; 
  
?>
  

</body> 
</html>

<?php
echo "<center>";
include_once("Footer.html");
echo "</center>"; 
?>