<?php
 include("railwayadminheader.php");
 session_start();
 ?>
  <style>
  input[type=checkbox]:checked + label {
  color:#CC0066;
  font-style: normal;
} 
  input:checked {
    height: 30px;
    width: 30px;
	background:#009933;
	}
  .button
 {
  background-color:#009999;
  font-size: 30px;
  border-radius: 10px;
  font-family: "Kristen ITC";
  }
  .textbox { 
    background: white; 
    border: 1px solid #0099CC; 
    border-radius: 5px; 
    box-shadow: 0 0 5px 3px #003399;
    color: #000000; 
    outline: none; 
    height:25px; 
    width: 275px;
	text-align:center; 
   font-family:"Sitka Subheading";
    font-size:25px;
  } 
  .signup
  {
   text-align:center;
   font-family:"Sitka Subheading";
    font-size:24px;
    border-radius: 10px;
   }
   
 </style>
 
 <body>
 <br /><br />
 <font face="Lucida Handwriting" size="+3" color="#000066"><b><marquee behavior="scroll" direction="left"> <i>WELCOME TO RAILWAY MAINTENANCE TENDER !!!<i></marquee></b></font>
 <br /><br /><br />
 <table height="15%" width="100%" cellpadding="0" cellspacing="0" border="0">
 <tr>
 <td> <img  src="images/railwayadmin2.gif" /></td>
  <td><img  src="images/bridgeadmin6.gif"/></td>
  <td><img  src="images/slumadmin5.gif"/></td>

  </tr>
  </table>
  <br>
  <form  action="" method="post" >
 <!-- <a href="admincomman.php">Back to Admin Home</a>-->
  <table width="100%"bgcolor="#99FFFF">
  <tr>
  <td>
  <table align="center"  height="50%" width="60%" cellpadding="0" cellspacing="25" class="signup" bordercolor="#CCCCFF" bgcolor="#00FFFF" >
   <tr>
  <th align="center" >Railway Station ID </th><td><input class="textbox" type="text" name="station_id" required autofocus/></td>
   </tr>
   <tr>
   <th align="center">Railway Station Name</th><td> <input class="textbox" type="text" name="station_name" required /></td>
   </tr>
   <tr>
   <th align="center">Number of Platforms</th><td><input class="textbox" type="text" name="no_of_platforms" required/></td>
   </tr>
   <tr>
   <th align="center">Number of Railway Tracks </th><td><input class="textbox" type="text" name="no_of_tracks" required /></td>
    </tr>
	<tr>
   <th align="center">Number of Ticket Counters </th><td><input class="textbox" type="text" name="ticket_counters" required /></td>
    </tr>
	<tr>
   <th align="center">Number of Canteens </th><td><input class="textbox" type="text" name="no_of_canteens" required /></td>
    </tr>
	<tr>
   <th align="center">Number of Gates  </th><td><input class="textbox" type="text" name="no_of_gates" required /></td>
    </tr>
	

	
	 <tr>
     <th align="center">Select facility </th> <td align="justify"><input  type="checkbox" name="water" value="yes" ><label for="drainage"> Water Faclity</label></td>
    </tr>
    <tr>
    <th align="center"></th><td align="justify"> <input  type="checkbox" name="entrance" value="yes" ><label for="electricity">Entrance Maintenance</label></td>
    </tr>
   
   <tr>
   <th align="center"></th><td align="justify"> <input  type="checkbox" name="parking" value="yes" ><label for="bore_water">Parking Maintenance</label></td>
    </tr>
   
   <tr>
   <th align="center">Estimated Number of Workers</th><td><input class="textbox" type="text" name="no_of_workers" required/></td>
   </tr>
	<tr>
   <th align="center">Tender Starting Date </th><td align="center"><input class="textbox" type="date" name="starting_date"></td>
    </tr>
	<tr>
	 <th align="center">Tender End Date </th><td align="center"><input class="textbox" type="date" name="end_date"> </td>
    </tr>
	
	
   <tr>
   <th align="center">Initial cost  &#8377;</th><td><input class="textbox" type="text" name="initialcost" required/></td>
    </tr>
	<tr>
   <th align="center">Estimated Total cost &#x20B9;</th><td><input class="textbox" type="text" name="totalcost" required/></td>
   </tr>
   <tr>
   <th align="center">City </th><td><input class="textbox" type="text" name="city" required/></td>
   </tr>
   <tr>
   <th align="center">State</th><td><input class="textbox" type="text" name="state" required/></td>
    </tr>
	<tr>
   <th align="center">Tender Open Date </th><td align="center"><input class="textbox"type="date"  name="open_date">  
   </td>
    </tr>
	<tr>
   <th align="center">Tender Close Date </th><td align="center"><input class="textbox" type="date" name="close_date"> </td>
   </tr>
   
    
   <tr>
   <th ><input class="button" type="submit" name="registerrailway" value="REGISTER"></th>
   <td ><input class="button" type="button" name="viewrailway" value="View Railway Tender Details" onClick="control()
   "></td></tr>
   </tr>
   </table>
   </td></tr></table>
   </form>

 </body>
 
 
  <?php
   
    if(isset($_POST['registerrailway'])){
	 $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	   $adminname=$_SESSION['username'];
	   $adminid=$_SESSION['adminid'];
	   $mailid="";
	    $rs5=mysql_query("select mailid from admin where admin_id=$adminid and name='$adminname'");
       while($row5=mysql_fetch_array($rs5)){
     $mailid=$row5['mailid'];
	 
	 }
  
	  $station_id=$_POST['station_id'];
	  $station_name=$_POST['station_name'];
	  $no_of_platforms=$_POST['no_of_platforms'];
	  $no_of_tracks=$_POST['no_of_tracks'];
	  $ticket_counters=$_POST['ticket_counters'];
	  $no_of_canteens=$_POST['no_of_canteens'];
	  $no_of_gates=$_POST['no_of_gates'];
	  if(isset($_POST['water']))
	   $water=$_POST['water'];
	   else
	    $water="no";
	  
	  if(isset($_POST['entrance']))
	   $entrance=$_POST['entrance'];
	  else
	   $entrance="no";
	  
	   if(isset($_POST['parking']))
	    $parking=$_POST['parking'];
	  else
	    $parking="no";
	  
	  
	  $no_of_workers=$_POST['no_of_workers'];
	  
	  $starting_date=$_POST['starting_date']; 
	  $end_date=$_POST['end_date'];
	  
	  $initialcost=$_POST['initialcost'];
	  $totalcost=$_POST['totalcost'];
	  $city=$_POST['city'];
	  $state=$_POST['state'];
	  $open_date=$_POST['open_date'];
	  $close_date=$_POST['close_date'];
	  
	      // Date Validation ...
	  
	  $starting_date1=date_create("$starting_date");
	  $end_date1=date_create("$end_date");
	  $open_date1=date_create("$open_date");
	  $close_date1=date_create("$close_date");
	  
	 
	  $date1=date_diff($starting_date1,$end_date1);
	  $date2=date_diff($open_date1,$close_date1);
	  
	  $date1=$date1->format("%R%a");
	  $date2=$date2->format("%R%a");
	  $no_of_days=$date1;
	   
	   if($date1<0)
	      echo"<script>alert('Sorry ... Date is Incorrect . Please enter valid date for Starting Date and End Date ... Starting date should be earlier than End date .')</script>";
	   if($date2<0)
	       echo"<script>alert('Sorry ... Date is Incorrect . Please enter valid date for Tender Open Date and Tender Close Date ... Open date shouldbe eariler than Close date . ')</script>";
	  if($close_date1>$starting_date1)
	       echo"<script>alert('Sorry ... Date is Incorrect . Tender Open date should be earlier than Tender Starting date ...')</script>";
	 if(($date1>0)&&($date2>0)&&($starting_date1>$close_date1)){
	  
	 
	  $rs=mysql_query("insert into railwaytable values($station_id,'$station_name',$no_of_platforms,$no_of_tracks,$ticket_counters,$no_of_canteens,$no_of_gates,'$water','$entrance','$parking',$no_of_workers,$no_of_days,'$starting_date','$end_date',$initialcost,$totalcost,'$city','$state','$open_date','$close_date')") or die(mysql_error());
	  
	   if($rs){ 
	  // Mail sent to company 
	$msg = " \n	Congrats !!! Hi,\n 		".$adminname." ! Your  Railway Tender  ".$station_name."   !!! details are Register Successfully.\n  Thanks for registering Online Tender . Keep Going ... All The Best ...\n		Thank you.\n\n\n  With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Railway Tender Details Registeration Conformation (Online Tender)",$msg);          
	   echo"<script>alert('Railway Maintenance details are Register succesfully !!!')</script>";
	    
         }
	  
	    }
	  }
	  ?>
	  
	  <script>
	  function control(){
	   window.location.href="railwayadminsearch.php";
	  }
	  </script> 