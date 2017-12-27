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
    <a href="companycommon.php">Back to Home</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

 <center>
 <table align="center"  height="50%" width="50%" cellpadding="0" cellspacing="25" class="table"  >
  <form action=" " method="post">
 <tr>
  <th align="justify" >Company ID</th><td><input class="textbox"  type="text" name="company_id" placeholder="Company ID"required autofocus/></td>
   </tr>
   <tr>
   <th align="justify">Company Name</th><td> <input class="textbox" type="text" name="company_name" placeholder="Company Name" required /></td>
   </tr>
  
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
	 $mailid="";
	  
	 $con=mysql_connect("localhost","root") or die("Connection error !!!");
	  $db=mysql_select_db("tender management",$con) or die("Cannot connect to Database ...");
	 
	   $companyname=$_POST['company_name'];
	   $companyid=$_POST['company_id'];
	    $rs5=mysql_query("select mail_id from company where company_id=$companyid and company_name='$companyname'") or die(mysql_error());
         while($row5=mysql_fetch_array($rs5)){
     $mailid=$row5['mail_id'];
	 
	 }

	 $tender_id=$_POST['tender_id'];
	 $tender_name=$_POST['tender_name'];
	 $flag=0;
    if(isset($_POST['bridgetender'])){
	  $rs=mysql_query("select bridge_id,bcompany_id from bridgecompany1 where bridge_id=$tender_id and bcompany_id=$companyid") or die(mysql_error());
	  
	  
	  while($row=mysql_fetch_array($rs)){
	   $bridge_id=$row['bridge_id'];
	   $bcompany_id=$row['bcompany_id'];
	   
	   if(($tender_id==$bridge_id)&&($companyid==$bcompany_id)){
	   
	    $rs1=mysql_query("delete from bridgecompany1 where bridge_id=$tender_id and bcompany_id=$bcompany_id") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  bridge tender is successfully cancelled by ".$companyname." Company. Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online Bridge Tender Cancelled By Company Conformation  ...",$msg);
	    
	  
	   
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
	  $rs=mysql_query("select school_id,schoolcompany_id from schoolcompany  where school_id=$tender_id and schoolcompany_id=$companyid") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $school_id=$row['school_id'];
	   $schoolcompany_id=$row['schoolcompany_id'];
	   if(($tender_id==$school_id)&&($companyid==$schoolcompany_id)){
	    $rs1=mysql_query("delete from schoolcompany where school_id=$tender_id and schoolcompany_id=$companyid") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  School tender is  successfully cancelled by ".$companyname."   Company . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online School Tender Cancelled By Company Conformation  ...",$msg);
	    
	  
	   
	   echo"<script>alert('School Tender Cancelled succesfully !!!')</script>";
	   $flag1=1;
	   break;
	   
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
	  $rs=mysql_query("select railway_id,railwaycompany_id from railwaycompany  where railway_id=$tender_id and railwaycompany_id=$companyid") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $railway_id=$row['railway_id'];
	   $railwaycompany_id=$row['railwaycompany_id'];
	   if(($tender_id==$railway_id)&&($railwaycompany_id==$companyid)){
	    $rs1=mysql_query("delete from railwaycompany where railway_id=$tender_id and railwaycompany_id=$companyid") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  Railway Maintenance tender is successfully cancelled by ".$companyname." company . Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

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
	  $rs=mysql_query("select slum_id,slumcompany_id from slumcompany  where slum_id=$tender_id and slumcompany_id=$companyid") or die(mysql_error());
	  while($row=mysql_fetch_array($rs)){
	   $slum_id=$row['slum_id'];
	   $slumcompany_id=$row['slumcompany_id'];
	   if(($tender_id==$slum_id)&&($companyid=$slumcompany_id)){
	    $rs1=mysql_query("delete from slumcompany where slum_id=$tender_id and slumcompany_id=$companyid") or die(mysql_error());
	  // Mail sent to admin
	$msg = " \n Hi!!!\n		Welcome to Online Tender ".$tender_name." !!!  Slum Clearance tender is  successfully cancelled by ".$companyname." company. Here you can find tenders easily. Keep Going ... \n		Thank you.\n\n\n With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,250);

   // send email
  mail($mailid,"Online Slum Clearance Tender Cancelled By Company Conformation  ...",$msg);
	    
	  
	   
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
