<?php
 include("schoolcompanyheader.php");
 session_start();
 ?>
 <style>
 input[type=radio]:checked + label {
  color:#CC0066;
  font-style: normal;
} 
  input:checked {
    height: 17px;
    width: 20px;
	background:#009933;
	}
 label{
 font-family:Segoe Print;
 font-size:18px;
 color:#CC0066;
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
  .label4{
   padding-right:70px;
   }
.label5{
   padding-right:40px;
   }
  .label6{
   padding-right:10px;
   
   }
.label7{
   padding-right:55px;
   }
  .label8{
   padding-right:70px;
   }

   
       
 input[type=text], input[type=password],input[type=number] {
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
img.avatar1{
    width: 20%;
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

   .basic{
   font-family:"Copperplate Gothic Light";
   font-size:18px;
   }
   .textbox1{
   font-family:"Lucida Fax";
   font-size:18px;
 }
  .login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  border-color:#FF0066;
  background-color:#FFCCCC;
 font-size: 22px;
 }

 .textbox{
   font-family:"Lucida Fax";
   font-size:18px;
   background-color:#FFFFFF;
   color:#000000;
   }


 .image1{
   position:absolute;
   left:30px;
	 
 
   }
   .image2{
     position:absolute;
     right:100px;
	 
	 }
	.image4{
	  position:absolute;
     right:50px;
	 }
	.dropbtn {
  background-color:#009900;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:7%;
	border-bottom-color:#FFFFFF;
	border:double;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
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
<br>
   <div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="companycommon.php">Back to Home</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

    <img src="images/schoolcompany3.gif" class="image4"/>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/images_5.jpg" alt="School Tender" title="School Tender" id="wows0_0"/></li>
		<li><img src="data0/images/images_23.jpg" alt="Class Room" title="Class Room" id="wows0_1"/></li>
		<li><img src="data0/images/technology_img25.jpg" alt="Smart Classrooms" title="Smart Classrooms" id="wows0_2"/></li>
		<li><img src="data0/images/images_14.jpg" alt="Lab Facility" title="Lab Facility" id="wows0_3"/></li>
		<li><img src="data0/images/images_16.jpg" alt="" title="" id="wows0_4"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/schoolcricket1461229074800.jpg" alt="javascript slider" title="Play Ground" id="wows0_5"/></a></li>
		<li><img src="data0/images/istock_000043083726_medium630x390.jpg" alt="Canteen Facility" title="Canteen Facility" id="wows0_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="School Tender"><span><img src="data0/tooltips/images_5.jpg" alt="School Tender"/>1</span></a>
		<a href="#" title="Class Room"><span><img src="data0/tooltips/images_23.jpg" alt="Class Room"/>2</span></a>
		<a href="#" title="Smart Classrooms"><span><img src="data0/tooltips/technology_img25.jpg" alt="Smart Classrooms"/>3</span></a>
		<a href="#" title="Lab Facility"><span><img src="data0/tooltips/images_14.jpg" alt="Lab Facility"/>4</span></a>
		<a href="#" title=""><span><img src="data0/tooltips/images_16.jpg" alt=""/>5</span></a>
		<a href="#" title="Play Ground"><span><img src="data0/tooltips/schoolcricket1461229074800.jpg" alt="Play Ground"/>6</span></a>
		<a href="#" title="Canteen Facility"><span><img src="data0/tooltips/istock_000043083726_medium630x390.jpg" alt="Canteen Facility"/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript slideshow</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	<br>
	<img src="images/bridgecompany1.gif" class="image1">
	<img src="images/schoolcompany2.gif" class="image2">
		<br><br><br><br><br><br><br><font face="Kristen ITC" size="+2" color="#FF0066"><b><center>WELCOME TO SCHOOL TENDER !!!</center></b></font>
    <br><br><br><br><br>
	<pre><h2 class="flash"><font face="Maiandra GD">	General Instructions </font></h2></pre>
	<font face="Lucida Calligraphy" size="+1">
	<ul type="disc">
	 <li>Initial amount (Rs.10,000) should be paid by company.</li>
	 <li>Tender must be completed before the deadline. Otherwise that company tender is canceled.</li>
	 <li>If tender is dropped by the company , then initial amount will not refund by the Organization.</li>
	</font> 	 
	<br>
	<h2 class="flash"><font face="Maiandra GD"><center>SCHOOL TENDER DETAILS</center></font></h2>
	
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img1.4.jpg"  class="avatar">
	  <img src="images/schoolcompany.gif"  class="avatar">

    </div>

    <div class="container">
	<center>
      <label class="label2"><b>Company ID</b></label>
      <input type="text" placeholder="Enter Company ID" name="companyid" required><br>
      
	  <label class="label2"><b>Company Name</b></label>
      <input type="text" placeholder="Enter Company Name" name="companyname" required><br>
      <label class="label3"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br>
    
	   <label class="label1"><b>School ID</b></label>
      <input type="text" placeholder="Enter School Id" name="schoolid" required><br>
	
	  <label class="label4"><b>Estimated Days</b></label>
      <input type="number" placeholder="Estimated Days" name="estimated_days" required><br>
    
	  <label class="label5"><b>Estimated Workers</b></label>
      <input type="number" placeholder="Estimated Workers" name="estimated_workers" required><br>
 	</center>
	  <pre>
	  <label  class="label6"><b> Initial Amount Paid</b></label>              <input type="radio"  name="amount_paid" value="yes"  ><font family="Georgia" size="+2">Yes<input type="radio" name="amount_paid" value="no" >No<br></font></pre>
	
 	<center>
	  <label class="label7"><b>Estimated Cost &#x20B9;</b></label>
      <input type="number" placeholder="Enter estimated cost" name="estimated_cost" required><br>
 </center>
  <pre>
	  <label  class="label6"><b>Agree terms and Conditions</b></label>     <input type="radio"  name="agree" value="yes" ><font face="Georgia" size="+1">Yes<input type="radio" name="agree"  value="no">No<br></font></pre>
	
	 
	 <center> <button type="submit" name="register">Register</button><br>
      <input type="checkbox" checked="checked"> Remember me</center>
	  </center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</body>
</html>


 <?php
 
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");
$rs=mysql_query("select school_id,school_name,no_of_floors,total_classes,no_of_cateens,physicslab,chemistrylab,computerlab,zoologylab,ground,no_of_workers,no_of_days,starting_date,end_date,initialcost,totalcost,city,state,open_date,close_date from schooltable") or die(mysql_error());
    
   while($row=mysql_fetch_array($rs)){
    echo"<button onClick=document.getElementById('id01').style.display='block' style=width:auto;background-color:#CC00CC>Register</button>";

    // Display basic details
	echo"<table cellpadding=3 cellspacing=0 align=center class=basic >
	<tr><th align=justify> *   School ID</th><td align=ceneter class=textbox1>: $row[school_id]</td></tr>
	<th align=justify> *   School Name </th><td align=ceneter class=textbox1>: $row[school_name]</td></tr>
	<tr><th align=justify> *   Total Class Rooms</th><td align=ceneter class=textbox1>: $row[total_classes]</td></tr>
	<th align=justify> *   Physics Lab Faclity </th><td align=ceneter class=textbox1>: $row[physicslab]</td></tr>
	<th align=justify> *   Chemistry Lab Faclity </th><td align=ceneter class=textbox1>: $row[chemistrylab]</td></tr>
	<th align=justify> *   Computer Lab Faclity </th><td align=ceneter class=textbox1>: $row[computerlab]</td></tr>
	<th align=justify> *   Zoology Lab Faclity </th><td align=ceneter class=textbox1>: $row[zoologylab]</td></tr>
	<th align=justify> *   City </th><td align=ceneter class=textbox1>: $row[city]</td></tr>
	<th align=justify>*   State </th><td align=ceneter class=textbox1>: $row[state]</td></tr>
	<th align=justify> *   Tender Open Date </th><td align=ceneter class=textbox1>: $row[open_date]</td></tr>
	<th align=justify>*   Tender Close Date </th><td align=ceneter class=textbox1>: $row[close_date]</td></tr>

	</table>";
    
	// Display details in table
    echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=93% height=15% border=2>
   <tr><th align=center>Number of Floors </th><th align=center>Number of Canteens</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Tender Starting Date   (yyyy-mm-dd)</th><th align=center>Tender End Date   (yyyy-mm-dd)</th><th align=center>Initialcost</th><th align=center>Total cost</th>";
 
   
   echo"<tr><td class=textbox align=center>$row[no_of_floors]</td><td class=textbox align=center>$row[no_of_cateens]</td><td class=textbox align=center>$row[no_of_workers]</td><td class=textbox align=center>$row[no_of_days]</td><td class=textbox align=center>$row[starting_date]</td><td class=textbox align=center>$row[end_date]</td><td class=textbox align=center>$row[initialcost]</td><td class=textbox align=center>$row[totalcost]</td></tr>";
     echo"</table><br><hr/><br><br>";   
  
   }
   
   ?>
   
  
  


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


<?php  //Store the value in DB
 
 if(isset($_POST['register'])){
  $flag=0;$register=0;
  $companyid=$_POST['companyid'];
  $schoolid=$_POST['schoolid'];
  $companyname=$_POST['companyname'];
  $password2=$_POST['password'];
   $password=md5($password2);//Encryption
 
  $estimated_days=$_POST['estimated_days'];
  $estimated_workers=$_POST['estimated_workers'];
  $estimated_cost=$_POST['estimated_cost'];
 
  $initial_cost=$_POST['amount_paid'];
  $estimated_cost=$_POST['estimated_cost'];
  $agree=$_POST['agree'];
  
    $con=mysql_connect("localhost","root") or die("Connection error !!! ");
    $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
    $rs5=mysql_query("select school_id,schoolcompany_id from schoolcompany where school_id=$schoolid and schoolcompany_id=$companyid");
	 while($row5=mysql_fetch_array($rs5)){
	  $schoolid1=$row5['school_id'];
	  $schoolcompany_id1=$row5['schoolcompany_id'];
    	
	 if(($schoolid==$schoolid1)&&($companyid==$schoolcompany_id1))
	 	 $register=1;
	
	  }
	 
 if($register==1){
    echo "<script>alert('Hey !!! You are already register for this School Tender ...')</script>";
	}

 else{
   
    $rs1=mysql_query("select company_id,company_name,password,mail_id from company") or die(mysql_error());//from company table
  
  
   
   while($row1=mysql_fetch_array($rs1)){
    $company_id1=$row1['company_id'];
    $companyname1=$row1['company_name'];
	$password1=$row1['password'];
	$mailid=$row1['mail_id'];
    
	if(($companyname==$companyname1) &&($password==$password1)&&($company_id1==$companyid)){
	
	$flag=1;
	$mailid=$row1['mail_id'];
      }
	
	  
	}
	  
  
   if($flag==1){
   	  $rs=mysql_query("insert into schoolcompany values($schoolid,$companyid,$estimated_days,$estimated_workers,'$initial_cost',$estimated_cost,'$agree','$password')") or die(mysql_error());
   
   if($rs){      
     // Mail sent to company 
	$msg = " \n Hi,\n		Congrats !!!Welcome to Online Tender ".$companyname." !  is successfully for School tender . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,150);

   // send email
  mail($mailid,"Online School Tender Registeration  ...",$msg);
	 
	   echo"<script>alert('Register succesfully !!!')</script>";
	    
   }
   }
   else
       echo"<script>alert('Sorry Password Mismatch. Cannot Register !!!')</script>";
	}  
  }  
?>

