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
 <h2>   Enter News Here:</h2>
    </strong></center>

  <form id="newsform" name="form1" method="post" action="news.php">
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
  <table width="623" height="382" border="0" align="center">
      <tr >
      <th colspan="2" align="center" valign="middle" scope="col"><h3>NEWS PANEL<h3></th>
    </tr>
    <tr>
      <td width="156" align="center" ><strong>News Title:</strong></td>
      <td width="451" >
        <input name="title" type="text"  size="78" />
      </td>
    </tr>
    <tr>
      <td align="center" ><strong>News In Detail:</strong></td>
      <td >
         <textarea name="details"  cols="60" rows="15"></textarea>
      </td>
    </tr>
    <tr >
      <td colspan="2" align="center">
        <input type="submit" name="button" id="button" value="Submit" />
      </td>
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