<?php
 include_once("adminpanel.php");
?>

  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>News</title>
  
  <style type="text/css">
body,td,th {
	color: #2A0000;
}
#templatemo_main .content_box .content_box_content table tr td div {
	font-size: 20px;
	color: #F00;
}
  #templatemo_main .content_box .content_box_content table tr td {
	color: #00F;
}
  </style>

  </head>
  
  <body>
  
  <div id="templatemo_main">
    	
      <div class="content_box">
          <div id="home"></div>
          <div class="content_box_content">
          
<!-------------------------------------------------------->
<table width="582" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">MASTER RESET </div></td>
      </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="24" colspan="2"><div align="center">CAUTION!</div></td>
      </tr>
    <tr>
      <td colspan="2"><p>This will :</p></td>
      </tr>
    <tr>
      <td colspan="2">* Create fresh database if it doesn't exist.</td>
    </tr>
    <tr>
      <td colspan="2">* Delete all data from existing database and leaves empty tables.</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Recommentation:</td>
    </tr>
    <tr>
      <td colspan="2">Please backup required data before proceeding...</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Press 'Continue' to proceed with resetting and 'Abort' to return.</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="285"><div align="center">
        <input type="submit" name="continue" id="continue" value="Continue" onclick="window.location='createtables.php'" />
      </div></td>
      <td width="281"><div align="center">
        <input type="submit" name="continue2" id="continue2" value="Abort" onclick="window.location='adminmore.php'" />
      </div></td>
      </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      </tr>
  </table>
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