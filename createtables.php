<?php
include_once("adminpanel.php");
?>
<html>
<head>
<script type="text/javascript">
 co
</script>
</head>

<body>
<div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->
<?php
   $con=mysql_connect("localhost","at","at");
   $dbcrt="CREATE DATABASE `softwarefirm`" ;
   $res0=mysql_query($dbcrt);


mysql_select_db("softwarefirm",$con);

  $t0="DROP DATABASE `softwarefirm`";

  $t1="CREATE TABLE  `softwarefirm`.`personal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)";

 $t2= "CREATE TABLE  `softwarefirm`.`firmdetails` (
  `id` int(10) unsigned NOT NULL,
  `password` varchar(45) NOT NULL,
  `salary` float NOT NULL,
  `designation` varchar(45) NOT NULL,
  `access` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ";


$t3="CREATE TABLE  `softwarefirm`.`pid` (
  `id` int(10)  NOT NULL ,
  `projectid` int(10)  NOT NULL ,
  PRIMARY KEY (`projectid`,`id`)
)";


$t4="CREATE TABLE  `softwarefirm`.`projectdetails` (
  `projectid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projectname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `progress` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`projectid`)
)";


$t5="CREATE TABLE `news` (
  `title` varchar(50) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`title`)
)";


$t6="CREATE TABLE `forum` (
  `commentid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) NOT NULL,
  `details` text NOT NULL,
  `id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`commentid`)
) ";
 
  
$t10="INSERT INTO softwarefirm.firmdetails(id,password,salary,designation,access) VALUES ( '0','admin','0','administrator','0')";
   
   $res1=mysql_query($t1);
   $res2=mysql_query($t2);
   $res3=mysql_query($t3);
   $res4=mysql_query($t4);
   $res5=mysql_query($t5);
   $res6=mysql_query($t6);
   $res10=mysql_query($t10);
   
   /*if($res1!=0 || $res2!=0 || $res3!=0 || $res4!=0 || $res5!=0 || $res6!=0 || $res10!=0)
      echo "Failed to create the database !!!!";
   else  "Database successfully set up";   */
   
   echo "Database successfully set up";
?>
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
