<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Panel</title>
<meta name="keywords" content="green field, one page, full site, free css template, CSS, HTML" />
<meta name="description" content="Green Field is a full-site template from templatemo.com for free of charge." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->

<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />

<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />

<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->

<!--////// END  \\\\\\\-->



<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/piroBox.1_2.js"></script>

<script type="text/javascript">

$(document).ready(function() {

	$().piroBox({

			my_speed: 600, //animation speed

			bg_alpha: 0.5, //background opacity

			radius: 4, //caption rounded corner

			scrollImage : false, // true == image follows the page, false == image remains in the same open position

			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox

			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox

			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox

			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.

			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)

	});

});

</script>

<!--////// END  \\\\\\\-->


</head>
<body>
<br />
<br />

<div id="templatemo_wrapper">

	<div id="templatmeo_header">
    
        <div id="templatemo_menu">
            <ul>
                <li><a href="userhome.php">Home</a></li>
                <li><a href="userviewprojects.php">Assignments</a></li>
                <li><a href="userprojectselect.php">Submit Project</a></li>
                <li><a href="profileview.php">Profile</a></li>
                <li><a href="forum2.php">Forum</a></li>
                <li><a href="logout.php">Log Out</a></li>
                
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    	<div id="site_title">
        	<h1>Firm Management</h1>
           
            <div id="social_box">
            	<a href="http://www.facebook.com/templatemo"><img src="images/facebook.jpg" alt="facebook" /></a>
                <a href="http://www.facebook.com/templatemo"><img src="images/twitter.jpg" alt="twitter" /></a>
            </div>
        </div>
    </div> <!-- end of header -->
    
    
       
</body>
</html>