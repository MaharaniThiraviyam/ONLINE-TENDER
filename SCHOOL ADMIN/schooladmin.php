  <?php
    include("schooladminsearchheader.php");
	session_start();
	?>
	<style>
  .button
 {
  background-color:#FF0099;
  font-size: 30px;
  border-radius: 10px;
  font-family: "Kristen ITC";
  
  }
  .textbox { 
    background: white; 
    border: 1px solid #0099CC; 
    border-radius: 5px; 
    box-shadow: 0 0 5px 3px #CC0066; 
    color:#000000; 
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
 .image1{
      position:absolute;
	  left:30px;
	  width:300px;
   }
 .image2{
    position:relative;
     top:400px;
	 width:250px;
   }
   .image3{
    position:relative;
   	  top:700px;
	  width:250px; 
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
    from {color: #FF0066;}
    to {color: black;}
</style>
 
 <body>
 <br /><br />
 <font face="Segoe Script" size="+3" color="#660000"><b><marquee behavior="scroll" direction="left"> WELCOME TO SCHOOL TENDER !!!</marquee></b></font>
 <br /><br /><br />
  <form  action="" method="post" >
 <img class="image1" src="images/signup.gif" />
 <img class="image2" src="images/bridgeadmin6.gif"/>
 <img class="image3" src="images/bridgeadmin7.gif"/>
 <table align="right"  height="50%" width="60%" cellpadding="0" cellspacing="25" class="signup" bordercolor="#CCCCFF" bgcolor="#FF66FF" >
   <tr>
  <th align="center" >School ID </th><td><input class="textbox" type="text" name="school_id" required autofocus/></td>
   </tr>
   <tr>
   <th align="center">School Name</th><td> <input class="textbox" type="text" name="school_name" required /></td>
   </tr>
   <tr>
   <th align="center">Number of Floors</th><td><input class="textbox" type="text" name="no_of_floors" required/></td>
   </tr>
   <tr>
   <th align="center">Number of Class per Floors</th><td><input class="textbox" type="text" name="no_of_classes_floors" required /></td>
    </tr>
	 <tr>
   <th align="center">Total Number of Classrooms</th><td><input class="textbox" type="text" name="total_classes" required/></td>
   </tr>
   <tr>
   <th align="center">Number of Canteens</th><td> <input class="textbox" type="text" name="no_of_canteens" required /></td>
   </tr>
   <tr>
   <th align="center">Physics Lab Needed</th>
    <td> <input type="radio" name="physicslab" value="yes" checked />YES</td>
    <td> <input  type="radio" name="physicslab" value="no">NO</td>
   </tr>
   <tr>
   <th align="center">Chemistry Lab Needed</th>
     <td> <input  type="radio" name="chemistrylab" value="yes" checked />YES</td>
     <td> <input  type="radio" name="chemistrylab" value="no" >NO</td>
   </tr>
   <tr>
   <th align="center">Computer Lab Needed</th>
     <td> <input  type="radio" name="computerlab" value="yes" checked />YES</td>
     <td> <input  type="radio" name="computerlab" value="no" >NO</td>
   </tr>
   <tr>
   <th align="center">Zoology Lab needed</th>
    <td> <input  type="radio" name="zoologylab" value="yes" checked>YES</td>
    <td> <input  type="radio" name="zoologylab" value="no" >NO</td>
  
   </tr>
  <th align="center">Type of Ground</th>
   <td>
    <select class="textbox"name="ground"><option  value="indoor" >Indoor Ground </option>
	<option  value="outdoor">Outdoor Ground </option>
	<option  value="both">Both type Ground </option>
	
	</select>
	
  </td>
   </tr>
  
   <tr>
   <th align="center">Estimated Number of Workers</th><td><input class="textbox" type="text" name="no_of_workers" required/></td>
   </tr>
  <tr>
   <th align="center">Tender Starting Date </th><td align="center"><input class="textbox" type="date" name="starting_date"></td>
    </tr>
	<tr>
	 <th align="center">Tender End Date </th><td align="center"><input class="textbox" type="date" name="end_date"></td>
    </tr>
	
	
   <tr>
   <th align="center">Initial cost  &#8377;</th><td><input class="textbox" type="text" name="initialcost" required/></td>
    </tr>
	<tr>
   <th align="center">Estimated Total cost   &#x20B9;</th><td><input class="textbox" type="text" name="totalcost" required/></td>
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
   <th><input class="button" type="submit" name="registerschool" value="REGISTER"></th>
   <td><input class="button" type="button" name="viewschool" value="View School Tender Details" onClick="control()"></td>
   </tr>
   </table>
   </form>
 

</body>
<?php
   
    if(isset($_POST['registerschool'])){
	 $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	 
	  $adminname=$_SESSION['username'];
	   $adminid=$_SESSION['adminid'];
	   $mailid="";
	    $rs5=mysql_query("select mailid from admin where admin_id=$adminid and name='$adminname'");
   while($row5=mysql_fetch_array($rs5)){
     $mailid=$row5['mailid'];
	 
	 }
  
	  $school_id=$_POST['school_id'];
	  $school_name=$_POST['school_name'];
	  $no_of_floors=$_POST['no_of_floors'];
	  $no_of_classes_floors=$_POST['no_of_classes_floors'];
	  $total_classes=$_POST['total_classes'];
	  $no_of_canteens=$_POST['no_of_canteens'];
	  
	  $physicslab=$_POST['physicslab'];
	  $chemistrylab=$_POST['chemistrylab'];
	  $computerlab=$_POST['computerlab'];
	  $zoologylab=$_POST['zoologylab'];
	  $ground=$_POST['ground'];
	  
	  
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
	  
	  $rs=mysql_query("insert into schooltable values($school_id,'$school_name',$no_of_floors,$no_of_classes_floors,$total_classes,$no_of_canteens,'$physicslab','$chemistrylab','$computerlab','$zoologylab','$ground',$no_of_workers,$no_of_days,'$starting_date','$end_date',$initialcost,$totalcost,'$city','$state','$open_date','$end_date')") or die(mysql_error());
	  if($rs){   
	  	  // Mail sent to company 
	$msg = " \n	Congrats !!! Hi,\n 		".$adminname." ! Your  School Tender  ".$school_name."   !!! details are Register Successfully. \n Thanks for registering Online Tender. Keep Going ... All The Best ...\n		Thank you.\n\n\n  With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"School Tender Details Registeration Conformation (Online Tender)",$msg);     
   
	   echo"<script>alert('School details are Register succesfully !!!')</script>";
	    
         }
	  
	    } 
	   }
	  
	  ?>
	  
 <script>
 function control(){
  window.location.href="schooladminsearch.php";
  
  }
  </script>	  