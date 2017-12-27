<?php
 include("contactheader.php");
 ?>
 <style>
 input[type=text], input[type=password],input[type=number],textarea {
    width:40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-family:"Georgia";
	font-size:18px;
	
}
 /* Set a style for all buttons */
  label{
 font-family:Segoe Print;
 font-size:18px;
 color:#CC3300;
 }
 
  .label1{
   padding-right:125px;
   }
  .label2{
   padding-right:70px;
   }
   .label3{
   padding-right:125px;
   }
  

button {
    background-color:#009900;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
	border:double;
	
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color:#FF0000;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;

    margin: 5% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
	height:80%;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


 .login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  border-color:#FF0000;
  background-color:#FF3333;
  font-size: 22px;
 }
 .textbox{
   font-family:"Lucida Fax";
   background-color:#FFFFFF;
   color:#000000;
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
    from {color:#CC0066;}
    to {color: black;}

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
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<h3 align="right"><a href="index.php">Back</a></h3>
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/contact1.jpg" alt="Contact Us" title="Contact Us" id="wows0_0"/></li>
		<li><img src="data0/images/contact2.jpg" alt="Email" title="Email" id="wows0_1"/></li>
		<li><img src="data0/images/contact3.jpg" alt="" title="" id="wows0_2"/></li>
		<li><img src="data0/images/contact4.jpg" alt="Phone" title="Phone" id="wows0_3"/></li>
		<li><img src="data0/images/contact5.png" alt="Location" title="Location" id="wows0_4"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/contact6.png" alt="image slider" title="" id="wows0_5"/></a></li>
		<li><img src="data0/images/contact7.jpg" alt="" title="" id="wows0_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Contact Us"><span><img src="data0/tooltips/contact1.jpg" alt="Contact Us"/>1</span></a>
		<a href="#" title="Email"><span><img src="data0/tooltips/contact2.jpg" alt="Email"/>2</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/contact3.jpg" alt=""/>3</span></a>
		<a href="#" title="Phone"><span><img src="data0/tooltips/contact4.jpg" alt="Phone"/>4</span></a>
		<a href="#" title="Location"><span><img src="data0/tooltips/contact5.png" alt="Location"/>5</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/contact6.png" alt=""/>6</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/contact7.jpg" alt=""/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css image gallery</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	 <br /><br /><br /><br />
	 <center><h2 class="flash" >CONTACT US</h2></center>
	 <BR />
	<table class="login" width="50%" border="2" align="center" cellpadding="2" cellspacing="3">
	<tr><th align="center" class="textbox"> Email ID</th><td align="center" class="textbox">onlinetendertesting@gmail.com</td></tr>
	<tr><th align="center" class="textbox">Contact Number</th><td align="center" class="textbox">9876543210</td></tr>
	<tr><th align="center" class="textbox">Address</th><td align="center" class="textbox">5A,Infotech,Madurai -625 001.</td>
	</tr>
	</table><br /><br /><br />
	 <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/contactus.jpg"  class="avatar">
	 
    </div>

    <div class="container">
	<center>
 
	
	
	  
	  <label class="label2"><b>Company Name</b></label>
      <input type="text" placeholder="Enter Company Name" name="companyname" required><br>
      <label class="label3"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br>
	   <label class="label1"><b>Feed Back</b></label>
     <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea><br />
	 
    
	  <center> <button type="submit" name="submit">SUBMIT</button><br>
     </center>
    </div>

  </form>

	
</body>
</html>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
 
 if(isset($_POST['submit'])){
  echo"<script> alert(' Thanks For Your Feedback !!!')</script>";
  }
  ?>
