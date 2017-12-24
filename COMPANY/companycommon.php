<?php
 include("companycommonheader.php");
 session_start();
 
 ?>
 <style type="text/css">
 body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 80px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#FFFFFF;
  color: black;
}

.topnav a.active {
  background-color:#CC00CC;
  color: white;
}


.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}
@keyframes flash {
    from {color:blue;}
    to {color: black;}
}

.image1{
 position:absolute;
	  left:30px;
	  
 
   }
   .image2{
 position:absolute;
	 right:30px;
	  
 
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
<br />
<div class="topnav">
  <a class="active" href="#home">COMPANY HOME</a>
  <a href="companysearch.php">TENDER SEARCH</a>
  <a href="companycancel.php">TENDER CANCEL</a>
  <a href="logout.php">LOGOUT</a>
</div>
<br>


	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/common1.png" alt="Online Tenders" title="Online Tenders" id="wows0_0"/></li>
		<li><img src="data0/images/common2.jpg" alt="Bridge Tender" title="Bridge Tender" id="wows0_1"/></li>
		<li><img src="data0/images/common3.jpg" alt="" title="" id="wows0_2"/></li>
		<li><img src="data0/images/common4.jpg" alt="School Tender" title="School Tender" id="wows0_3"/></li>
		<li><img src="data0/images/common10.jpg" alt="" title="" id="wows0_4"/></li>
		<li><img src="data0/images/common5.jpg" alt="Slum Tender" title="Slum Tender" id="wows0_5"/></li>
		<li><img src="data0/images/common6.jpg" alt="" title="" id="wows0_6"/></li>
		<li><img src="data0/images/common7.jpg" alt="Railway Tender" title="Railway Tender" id="wows0_7"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/common8.jpg" alt="jquery slideshow" title="" id="wows0_8"/></a></li>
		<li><img src="data0/images/common9.jpg" alt="" title="" id="wows0_9"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Online Tenders"><span><img src="data0/tooltips/common1.png" alt="Online Tenders"/>1</span></a>
		<a href="#" title="Bridge Tender"><span><img src="data0/tooltips/common2.jpg" alt="Bridge Tender"/>2</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/common3.jpg" alt=""/>3</span></a>
		<a href="#" title="School Tender"><span><img src="data0/tooltips/common4.jpg" alt="School Tender"/>4</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/common10.jpg" alt=""/>5</span></a>
		<a href="#" title="Slum Tender"><span><img src="data0/tooltips/common5.jpg" alt="Slum Tender"/>6</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/common6.jpg" alt=""/>7</span></a>
		<a href="#" title="Railway Tender"><span><img src="data0/tooltips/common7.jpg" alt="Railway Tender"/>8</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/common8.jpg" alt=""/>9</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/common9.jpg" alt=""/>10</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	 <br><br />
 <!-- <h2 class="flash"><font face="Imprint MT Shadow">  <?php echo $_SESSION['username']." ... "; ?>  WELCOME TO E-TENDERS !!!</font></h2> -->
 <center> <h2 class="flash"><font face="Imprint MT Shadow">  <?php echo $_SESSION['companyname']." ... "; ?>  WELCOME TO E-TENDERS !!!</font></h2></center>

 <img src="images/companycommon5.gif" class="image1" />
 <img src="images/companycommon6.gif" class="image2" />
 <center><br /><br /><br />
 <table align="center" height="50%" width="60%" border="2" bordercolor="#666666">
  <tr>
   <td align="center"><font face="Segoe Print"  size="+2"><h4>BRIDGE TENDER DETAILS ...</font></h4></td><td align="center"><a href="bridgecompany.php"> <h4 class="flash">CLICK HERE</h4></a></td>
  </tr>
  <tr>
   <td align="center"><font face="Segoe Print" size="+2"><h4>SCHOOL CONSTRUCTION TENDER DETAILS ...</h4></font></td><td align="center"><a href="schoolcompany.php"> <h4 class="flash">CLICK HERE</h4></a></td>
  </tr>
  <tr>
    <td align="center"><font face="Segoe Print"  size="+2"><h4>SLUM CLEARANCE TENDER DETAILS ...</h4></font></td><td align="center"><a href="slumcompany.php"> <h4 class="flash">CLICK HERE</h4></a></td>
  </tr>	
  <tr>
  
   <td align="center"><font face="Segoe Print"  size="+2"><h4>RAILWAY MAINTAINANCE DETAILS ...</h4></font></td><td align="center"><a href="railwaycompany.php"><h4 class="flash">CLICK HERE</h4></a></td>
   </tr>
   </font>
   </table>
 
 
 </center>


</body>
</html>
