<?php
include_once("Header.html");
?>

<html>
<head>
<script language="javascript" type="text/javascript">
  function warn()
  { if(registrationform.nam.value=="")
     { registrationform.nam.value=prompt("Please enter a valid name! Eg: Antony John","");
	   return false;
	 }
	 if(registrationform.sex[0].checked == false && registrationform.sex[1].checked == false)
     { alert("Please select one of the sex!");
	   return false;
	 }
	 if(registrationform.address.value=="")
     { registrationform.address.value=prompt("Please enter a valid address!","");
	   return false;
	 }
	 if(registrationform.contact.value=="")
     { registrationform.contact.value=prompt("Please enter a valid contact!","");
	   return false;
	 }
	 if(registrationform.education.value=="")
     { alert("Please select one of the education qualifications!");
	   registrationform.education.value=registrationform.education.value;
	   return false;
	 }
  }
</script>

<style type="text/css">
body,td,th {
	color: #333;
	font-family: "Verdana, Arial, Helvetica, sans-serif";
	font-size: 16px;
}
#templatemo_main .content_box .content_box_content form table {
	font-size: 10px;
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
 <h2>   Registration</h2>
    </strong></center>
    
    
<form name="registrationform" action="feed.php" method="post" onSubmit="return warn()" enctype="multipart/form-data">
  <table width="683" height="618" border="1" align="center" cellspacing="0" >
    <tr>
      <td colspan="5" align="center" >Please fill in the form with your details</td>
      </tr>
    <tr>
      <td align="center" >&nbsp;</td>
      <td colspan="4" align="center" >&nbsp;</td>
    </tr>
    <tr>
      <td width="206" height="42" align="center" ><strong>Name</strong></td>
      <td colspan="4" align="center" ><input name="nam" type="text" size="70" /></td>
    </tr>
    <tr>
      <td height="43" align="center" ><strong>Sex</strong></td>
      <td colspan="2" align="center" valign="middle" ><input type="radio" name="sex" value="male" />
      Male</td>
      <td colspan="2" align="center" valign="middle" ><input type="radio" name="sex" value="female" />
      Female</td>
    </tr>
    <tr>
      <td align="center" ><strong>Date of Birth </strong></td>
      <td colspan="2" align="center">Year<select name="year" />
	      <?php
	      for($y=1900; $y<=2099; $y++)
		  {  echo "<option value='$y'>$y</option>";
		  }
		  ?>
	    </td>
	  <td align="center">Month<select name="month" />
	      <?php
	      for($m=1; $m<=12; $m++)
		  {  echo "<option value='$m'>$m</option>";
		  }
		  ?></td>
	  <td align="center">Day<select name="day" />
	      <?php
	      for($d=1; $d<=31; $d++)
		  {  echo "<option value='$d'>$d</option>";
		  }
		  ?></td>
    </tr>
    <tr>
      <td height="50" align="center" ><strong>Address</strong></td>
      <td colspan="4" align="center" ><textarea name="address" cols="54" rows="1"></textarea></td>
    </tr>
    <tr>
      <td height="48" align="center" ><strong>Contact</strong></td>
      <td colspan="4" align="center" ><input name="contact" type="text" size="70"/></td>
    </tr>
    <tr>
      <td height="48" align="center" ><strong>Education Qualification</strong></td>
      <td width="80" align="center" valign="middle" ><input type="radio" value="btech" name="education" />
      B Tech</td>
      <td width="64" align="center" valign="middle" ><input type="radio" value="bca" name="education" />
BCA</td>
      <td width="107" align="center" valign="middle" ><input type="radio" value="mtech" name="education" />
M Tech</td>
      <td width="110" align="center" valign="middle" ><input type="radio" value="mca" name="education" /> 
        MCA
</td>
    </tr>
    <tr>
      <td height="54" align="center" ><strong>Curriculum Vitae </strong>(doc file)</td>
      <td colspan="4" align="center" ><input type="file" name="cv" /></td>
    </tr>
    <tr>
      <td height="44" align="center" ><strong>Photo </strong>(jpg file)</td>
      <td colspan="4" align="center" ><input type="file" name="photo" /></td>
    </tr>
    <tr >
      <td height="45" colspan="2" align="center" valign="middle">&nbsp;</td>
      <td colspan="3" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr >
      <td colspan="2" align="center" valign="middle"><input type="submit" name="submit" value="Register" /></td>
      <td colspan="3" align="center" valign="middle"><input type="reset" name="reset" value="Reset" /></td>
      </tr>
  </table>

</form>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


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