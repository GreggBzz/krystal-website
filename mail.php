<?php

/* Subject and Email Variables */

	$emailSubject = 'Contact from Website';
	$webMaster = 'kroseledoux@yahoo.com';
	
/* Data Gather Variables */

	$emailfield = $_POST['email'];
	$namefield = $_POST['name'];
	$commentsfield = $_POST['comments'];
	
	$body = <<<EOD
<br><hr><br>
Email: $email <br>
Name: $name <br>
Comments: $comments <br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail ($webMaster, $emailSubject, $body, $headers);
	
	
/* Results Rendered HTML */

	$theResults = <<<EOD
<html>
<head>
<meta name='description' content='Fine art painting from Krystal Rose Ledoux' />
<meta name='keywords' content='painting,scranton,creative,krystal ledoux,rose art,bad habits' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/kldx_style.css"/>
<title>Krystal Ledoux Painting - Contact Me</title>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
  <div id="top_main"></div>
  <div id="main">
    <div id="lightbox_content" style="margin-left: 180px; float:left">
      <p>Your information has been sent successfully. </p>
      <p>Thank you for your interest in paintings by Krystal Ledoux.<br />
      </p>
      <p>Krystal Ledoux<br />
        610 329 1386
        <br />
      krystal@krystalledoux.com<br />
      <br />
      </p>
      <form id="contact" name="contform" method="post" action="js/mail.php">
      </form>
      <p><br />
      </p>
    </div>
    <div id="right" style="vertical-align:top; float:right">
      <div style="margin-top:55px;"><img src="images/sig.jpg" alt="signature" vspace="5" /></div>
      <div id="navbar"><strong><a href="work.html">work</a> | <a href="exhibit.html">exhibitions</a> | <a href="about.html">about me</a> | <a href="contact.html">contact</a></strong></div>
      <div id="text"></div>
        
    </div>
 <div align="center" style="position:relative; z-index:1; margin-top:250px;height:353px;"></div>
   
  </div>
  <!-- end main div-->
  <div id="bottom_main"></div>
  <p align="center" style="font-size:smaller">Copyright© Krystal Ledoux Painting 2009. | <a href="/contact.html">Contact</a>&nbsp; | krystal@krystalledoux.com | 610 329 1386</p>
</div>
</body>
</html>
EOD;
echo "$theResults";

?>
