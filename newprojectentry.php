<?php
 include_once("adminpanel.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Project Entry</title>

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

<strong><center>
 <h2>   Register New Projects Here:</h2>
    </strong></center>

<?php

if (isset($HTTP_POST_VARS)) {
    $empid = $HTTP_POST_VARS["employee"];
}

?>

<form  action = "newprojectentry1.php" method="post">
<table width="530" height="417" border="0" align="center">
  <tr >
    <th colspan="2" scope="col"><h3>NEW PROJECT ENTRY<h3></th>
  </tr>
  <tr>
    <td align="center" ><strong> Employees Required:</strong></td>
    <td align="center" ><a href="selectemployees.php">Select Employees from list</a></td>
  </tr>
  <tr>
    <th align="center"  scope="col">Project Name:</th>
    <td align="center" >
    <input name="pname" type="text" size="58"/></td>
  </tr>
  <tr>
    <td align="center" ><strong>Starting Date:</strong></td>
    <td align="center" >
      <input name="sdate" type="text" size="58"/></td>
  </tr>
  <tr>
    <td align="center" ><strong>Progress:</strong></td>
    <td align="left" ><p>
      <label>
        <input type="radio" name="progress" value="active" id="RadioGroup1_0" />
        Active
      </label>
      <br />
      <label>
        <input type="radio" name="progress" value="inactive" id="RadioGroup1_1" />
        Inactive</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td align="center" ><strong>Details:</strong></td>
    <td align="center" ><label for="textarea"></label>
    <textarea name="details" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
  
  <!------------------------hidden items array follows------------------->
      
	  <? for ($i=0; $i<count($empid); $i++) {?>
         <input type="hidden" name="employeeid[]" value="<? echo $empid[$i] ?>">
      <? } ?>
  <!----------------------------------------------------------------------->
      
    <td colspan="2" align="center" ><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
</table>
</form>

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
</body>
</html>

<?php
echo "<center>";
include_once("Footer.html");
echo "</center>";
?>