<?php
 include("indexheader.php");
 ?>
 <style>
 .flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}
@keyframes flash {
    from {color:#0033FF;}
    to {color: black;}
}
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 40px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#FFFFFF;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body>
<div class="topnav">
  <a class="active" href="#home">HOME</a>
   <a href="adminsignin.php">ADMIN LOGIN</a>
  
  <a href="companysignin.php">COMPANY LOGIN</a>

  <a href="companysearch.php">TENDER SEARCH</a>
  <a href="resultcommon.php">RESULT ANNOUNCEMENT</a>
  <a href="contact.php">CONTACT US</a>
</div>
<br>


	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/tender1.jpg" alt="" title="" id="wows0_0"/></li>
		<li><img src="data0/images/tender2.jpg" alt="Bridge Tender" title="Bridge Tender" id="wows0_1"/></li>
		<li><img src="data0/images/tender3.jpg" alt="School Tender" title="School Tender" id="wows0_2"/></li>
		<li><img src="data0/images/tender4.jpg" alt="" title="" id="wows0_3"/></li>
		<li><img src="data0/images/tender5.jpg" alt="" title="" id="wows0_4"/></li>
		<li><img src="data0/images/tender6.jpg" alt="Slum Tender" title="Slum Tender" id="wows0_5"/></li>
		<li><img src="data0/images/tender7.jpg" alt="Railway Tender" title="Railway Tender" id="wows0_6"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/tender8.jpg" alt="carousel jquery" title="" id="wows0_7"/></a></li>
		<li><img src="data0/images/tender9.jpg" alt="" title="" id="wows0_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data0/tooltips/tender1.jpg" alt=""/>1</span></a>
		<a href="#" title="Bridge Tender"><span><img src="data0/tooltips/tender2.jpg" alt="Bridge Tender"/>2</span></a>
		<a href="#" title="School Tender"><span><img src="data0/tooltips/tender3.jpg" alt="School Tender"/>3</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/tender4.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/tender5.jpg" alt=""/>5</span></a>
		<a href="#" title="Slum Tender"><span><img src="data0/tooltips/tender6.jpg" alt="Slum Tender"/>6</span></a>
		<a href="#" title="Railway Tender"><span><img src="data0/tooltips/tender7.jpg" alt="Railway Tender"/>7</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/tender8.jpg" alt=""/>8</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/tender9.jpg" alt=""/>9</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
<marquee behavior="alt" direction="left"<center><h2 class=flash><font face="Copperplate Gothic"> WELCOME TO ONLINE TENDER</font></h2></center></marquee>
</body>
</html>
