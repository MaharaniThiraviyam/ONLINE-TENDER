<?php
 include("admincancelheader.php");
 session_start();
 ?>
 <style>

   input[type=radio]:checked + label {
  color:#CC0066;
  font-style: normal;
} 
  input:checked {
    height:20px;
    width: 20px;
	background:#009933;
	}
	.button
 {
  background-color:#CC0099;
  font-size: 23px;
  border-radius: 10px;
  font-family: "Kristen ITC";
  }
.table{
  font-family:Georgia;
  font-size:21px;
  }
  .textbox{
  font-family:Georgia;
  font-size:18px;
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
 
 <body>
 
<br>
   <div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="admincomman.php">Back to Home</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

 <center>
 <table align="center"  height="50%" width="50%" cellpadding="0" cellspacing="25" class="table"  >
  <form action=" " method="post">

   <tr>
  <th align="justify" >Tender ID</th><td><input class="textbox"  type="text" name="tender_id" placeholder="Tender ID"required autofocus/></td>
   </tr>
   <tr>
   <th align="justify">Tender Name</th><td> <input class="textbox" type="text" name="tender_name" placeholder="Tender Name" required /></td>
   </tr>
  
   <tr>
    <th align="center"></th><td align="justify"> <input  type="radio" name="bridgetender" value="yes" ><label for="electricity">Bridge Tedner</label></td>
    </tr>
   
   <tr>
   <th align="center"></th><td align="justify"> <input  type="radio" name="schooltender" value="yes" ><label for="bore_water">School Construction Tender</label></td>
    </tr>
	  <tr>
    <th align="center"></th><td align="justify"> <input  type="radio" name="slumtender" value="yes" ><label for="electricity">Slum Clearance Tender</label></td>
    </tr>
   
   <tr>
   <th align="center"></th><td align="justify"> <input  type="radio" name="railwaytender" value="yes" ><label for="bore_water">Railway Maintenance Tender</label></td>
    </tr>
 
  <tr>
<td> </td><td><input type="submit" name="cancel" value="CANCEL TENDER" class="button"></td>
 </tr>
 </form>
 </table>
 
 </center>
 </body>
 
  <?php
   
    if(isset($_POST['cancel'])){
	 $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	 
	   $adminname=$_SESSION['username'];
	   $adminid=$_SESSION['adminid'];
	   $mailid="";
	    $rs5=mysql_query("select mailid from admin where admin_id=$adminid and name='$adminname'") or die(mysql_error());
         while($row5=mysql_fetch_array($rs5)){
     $mailid=$row5['mailid'];
	 
	 }

	 $tender_id=$_POST['tender_id'];
	 $tender_name=$_POST['tender_name'];
	 $flag=0;
    if(isset($_POST['bridgetender'])){
	  $rs=mysql_query("select bridge_id,bridge_name from bridgetable where bridge_id=$tender_id and bridge_name='$tender_name'") or die(mysql_error());
	  
	  
	  while($row=mysql_fetch_array($rs)){
	   $bridge_id=$row['bridge_id'];
	   $bridge_name=$row['bridge_name'];
	   if(($tender_id==$bridge_id)&&($tender_name==$bridge_name)){
	  
	    $rs1=mysql_query("delete from bridgetable where bridge_id=$tender_id") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  bridge tender is cancelled successfully . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online Bridge Tender Cancelled Conformation  ...",$msg);
	    
	  
	   
	   echo"<script>alert('Bridge Tender Cancelled succesfully !!!')</script>";
	   $flag=1;
	   break;
	   
	   }
	   }
	   if($flag==0)
	    echo"<script>alert('Sorry !!! Cannot Cancel . Please check Tender ID ,Name and Tender type ...')</script>";
	  
	   }
	 
	  //Cancel School Tender
	  
	   if(isset($_POST['schooltender'])){
	   $flag1=0;
	  $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	  $rs=mysql_query("select school_id,school_name from schooltable  where school_id=$tender_id and school_name='$tender_name'") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $school_id=$row['school_id'];
	   $school_name=$row['school_name'];
	   if(($tender_id==$school_id)&&($tender_name==$school_name)){
	    $rs1=mysql_query("delete from schooltable where school_id=$tender_id") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  School tender is cancelled successfully . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online School Tender Cancelled Conformation  ...",$msg);
	    
	  
	   
	   echo"<script>alert('School Tender Cancelled succesfully !!!')</script>";
	   break;
	   $flag1=1;
	   }
	   }
	   if($flag1==0)
	    echo"<script>alert('Sorry !!! Cannot Cancel . Please check Tender ID ,Name and Tender type ...')
		</script>";
	  }
	   
	
	 //Cancel Railway Tender
	  
	   if(isset($_POST['railwaytender'])){
	   $flag2=0;
	  $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	  $rs=mysql_query("select station_id,station_name from railwaytable  where station_id=$tender_id and station_name='$tender_name'") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $station_id=$row['station_id'];
	   $station_name=$row['station_name'];
	   if(($tender_id==$station_id)&&($tender_name==$station_name)){
	    $rs1=mysql_query("delete from railwaytable where station_id=$tender_id") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  Railway Maintenance tender is cancelled successfully . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online Railway Maintenance Tender Cancelled Conformation  ...",$msg);
	    
	  
	   
	   echo"<script>alert('Railway Maintenance Tender Cancelled succesfully !!!')</script>";
	   $flag2=1;
	     break;
	 
	   }
	   }
	   if($flag2==0)
	    echo"<script>alert('Sorry !!! Cannot Cancel . Please check Tender ID ,Name and Tender type ...')</script>";
	  }
	 
	 
	  
	 //Cancel Slum Tender
	  
	   if(isset($_POST['slumtender'])){
	   $flag3=0;
	  $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	  $rs=mysql_query("select slum_id,slum_name from slumtable  where slum_id=$tender_id and slum_name='$tender_name'") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $slum_id=$row['slum_id'];
	   $slum_name=$row['slum_name'];
	   if(($tender_id==$slum_id)&&($tender_name==$slum_name)){
	    $rs1=mysql_query("delete from slumtable where slum_id=$tender_id") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  Slum Clearance tender is cancelled successfully . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online Slum Clearance Tender Cancelled Conformation  ...",$msg);
	    
	  
	   
	   echo"<script>alert('Slum Clearance Tender Cancelled succesfully !!!')</script>";
	   $flag3=1;
	    break;
	  
	   }
	   }
	   if($flag3==0)
	    echo"<script>alert('Sorry !!! Cannot Cancel . Please check Tender ID ,Name and Tender type ...')</script>";
	  }
	 
	   
	   
	   
	  }
	   
	   
	   
	  
	  ?>