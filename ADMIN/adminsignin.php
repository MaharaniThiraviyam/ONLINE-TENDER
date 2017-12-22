<?php
 include("adminheader.php");
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
    from {color: red;}
    to {color: black;}
}

button {
    background-color:#CC0066;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border:double;
    cursor: pointer;
   
}


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
    background-color: rgba(0,0,0,0.1); /* Black w/ opacity */
    padding-top: 60px;
}



/* The Close Button (x) */
.close {
    position: absolute;
    right:55px;
    top:20;
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


body{
	margin:0;
	background:#FFFFFF;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	border:double;
	border-color:#FFFFFF;
	background:url(images/admin.jpg) no-repeat center;
	
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:110%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
	
	
}
.login-html .tab{
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	font-family:Segoe Print;
	font-size:24px;
	color:#FF0099;
 
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;

	
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	border-color:#FFFFFF;
	background:rgba(255,255,255,.1);
	text-align:center;
	font-family:MS Reference Sans Serif;
  font-size:16px;
  
}

.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#FFFFFF;
	font-family:Maiandra GD;
	font-size:14px;
}
.login-form .group .button{
	background:#1161ee;
	font-family:Kristen ITC;
	font-size:21px;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;

	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
	
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
	
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
	color:#FFFFFF;
	font-family:Segoe Print;

}

</style>
<html>
<body>
 <br><br>
  <h3 align="right" ><a href="index.php">Back to Home</a></h3>

<center>
<h1 class="flash"><font face="High Tower Text">WARM WELCOME TO ADMIN LOGIN .....</font></h1><br>
<button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">ADMIN</button>
</center>
<div id="id01" class="modal">

<div class="login-wrap">
	<div class="login-html">
	 <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close" style="color:#FF0000">&times;</span>
    	
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		<form class="modal-content animate" action="" method="post">
		 
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label" >Username</label>
					<input id="user" type="text" class="input" placeholder="enter username" name="username1" required autofocus >
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  id="pass" type="password" class="input" data-type="password" placeholder="enter password" name="password1"  required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="sign in" name="signin">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>				</div>
			</div>
  </form>
			<form action="" method="post">
			<div class="sign-up-htm">
				
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" placeholder="enter username" name="username" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="enter password" name="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="repeat password" name="password_repeat" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" class="input" placeholder="enter email" name="mailid" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Mobile Number</label>
					<input id="pass" type="text" class="input" placeholder="enter mobile number" name="mobile" maxlength="10" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Location</label>
					<input id="pass" type="text" class="input" placeholder="enter city name" name="location"  required>
				</div>
				
				<div class="group">
				    
					<input type="submit" class="button"  value="sign up" name="signup">
				</div>
							<!--	<div class="hr"></div>-->
				<div class="foot-lnk">
				    <hr /><br />
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</div>

</body>
</html>




<?php
  
 if(isset($_POST['signin'])){
        
		
    $username=$_POST['username1'];
	$password1=$_POST['password1'];
	$pass=md5($password1);
	$con=mysql_connect("localhost","root") or die("Connection error !!!");
	$db=mysql_select_db("tender management",$con) or die(" Cannot connect to Database ...");
	
	
	$rs=mysql_query("select admin_id,name,password from admin where name='$username' and password='$pass'");
	 $row=mysql_fetch_array($rs);
	 $admin_id=$row[0];
	 $adname=$row[1];
     $adpass=$row[2]; 
	 
    

   if(($username==$adname)&&($pass==$adpass)){  
		session_start();
		$_SESSION['adminid']=$admin_id;
		$_SESSION['username']=$username;
        echo " <script>window.location = 'admincomman.php';</script>";

		 }	  
	else{
	   echo"<script>alert('Sorry ... Invalid Username or Password !!!')</script>";
    }		
  }
 
 
 else if(isset($_POST['signup'])){
 
  $id=0;
  $username=$_POST['username'];
  $mailid=$_POST['mailid'];
  $password=$_POST['password'];
  $repeat=$_POST['password_repeat'];
  $mobile=$_POST['mobile'];
  $location=$_POST['location'];
  
  //echo $username." ".$password;
  if($password==$repeat){
  $passwordmd5=md5($password);
  
   $con=mysql_connect("localhost","root") or die("Connection error !!! ");
   $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
   	$rs1=mysql_query("select * from admin");
	if($rs1){
	  while($row=mysql_fetch_array($rs1)){
	   $id=$row['admin_id'];
	   }
	   $id=$id+1;
	   }
	   else
	   $id=1;

   $rs=mysql_query("insert into admin values($id,'$username','$mailid','$passwordmd5',$mobile,'$location')") or die(mysql_error());
   
   if($rs){ 
       echo"<script>alert('Your Admin ID : +'$id)</script>";
	   echo"<script>alert('SignUp succesfully !!!')</script>";
	   
	   // Mail sent to company 
	$msg = " \n Hi,\n		Congrats !!!Welcome to Online Tender ".$username." !  is successfully Signup . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,150);

   // send email
  mail($mailid,"Online Tender Admin Signup Confirmation ...",$msg);
	    
   }
   }
   else
       echo"<script>alert('Sorry Password Mismatch. Cannot Signup!!!')</script>";
	  
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