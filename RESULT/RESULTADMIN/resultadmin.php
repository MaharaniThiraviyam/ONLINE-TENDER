<?php
  include("resultadminheader.php");
  session_start();

?>
<style>
.login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  font-size: 22px;
 }

 .textbox{
   font-family:"Lucida Fax";
   background-color:#FFFFFF;
   color:#000000;
   }
 
.title{
 font-family:Imprint MT Shadow;
 text-align:center;
 text-align:center;
 }
 .heading{
 font-family:Kristen ITC;
 text-align:center;
 color:#990033;
 }

.button1
{
background-color: #FF3399;
font-size: 34px;
color: #000000;
border-radius: 10px;
font-family: "monotype Corsiva";
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
    from {color:#FF0066;}
    to {color: black;}
</style>
<br /><br />
<form action="" method="post">
<h3 align="right"><a href="logout.php">Logout</a></h3>
<center>

<h2 class="flash"><font face="High Tower Text"> TENDER RESULTS (Click To View )</font></h2><br />
<input type="submit" name="result" value="Result" class="button1">
</center>
</form> 


<?php
   if(isset($_POST['result'])){
   $bridge_id=0;$school_id=0;$slum_id=0;$station_id=0;
   $resultbridgecom="";$resultschoolcom="";
   $resultslumcom="";$resultrailwaycom="";
   $flag=0;
   $city="";
   
   //Tender result calculation for Bridge
  $resultbridgecomid=0; 
  $company_id=0;$mobile=0;$mail="";$password="";
  $resultdays=0;$resultworkers=0;$resultestimated=0;
  $bridge_id=0;$bridge_name="";$close_date="";
  $resultbridge_name="";
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");

  $date=date("Y-m-d");//Current date for currentday calculation
  echo"<h2 class=title><br>RESULTS FOR TENDER CLOSE AT TODAY</h2>";
  $adminname=$_SESSION['username'];
  $adminid=$_SESSION['adminid'];
   
   
   $rs5=mysql_query("select location from admin where admin_id=$adminid and name='$adminname'");
   while($row5=mysql_fetch_array($rs5)){
     $city=$row5['location'];
	 
	 }
    
   $rs1=mysql_query("select bridge_id,bridge_name,no_of_workers,no_of_days,start_date,end_date,initial_cost,estimated_total,open_date,close_date from bridgetable where close_date=curdate() and city='$city'  ") or die(mysql_error());
    
       while($row=mysql_fetch_array($rs1)){

 	    $bridge_id=$row['bridge_id'];
	   
	     $bridge_name=$row['bridge_name'];
	    $no_of_workers=$row['no_of_workers'];
	    $no_of_days=$row['no_of_days'];
	    $start_date=$row['start_date'];
	    $end_date=$row['end_date'];
	    $initial_cost=$row['initial_cost'];
	    $estimated_total=$row['estimated_total'];
	    $open_date=$row['open_date'];
	    $close_date=$row['close_date'];
	    
	   
	   
	   $mincost=$estimated_total; // Assign estimated cost
	   $rs=mysql_query("select bridge_id,bcompany_id,days,workers,initialcost,estimated_cost,agree from bridgecompany1 where bridge_id=$bridge_id") or die(mysql_error());
	    while($row=mysql_fetch_array($rs)){
		  
		  $bcompany_id=$row['bcompany_id'];
		  $days=$row['days'];
		  $workers=$row['workers'];
		  $initialcost=$row['initialcost'];
		  $estimated_cost=$row['estimated_cost'];
		  $agree=$row['agree'];
		  
		   //Find Best Company for Tender
		  if(($days<=$no_of_days)&&($workers<=$no_of_workers)&&($initialcost=="yes")&&($estimated_cost<=$mincost)&&($agree=="yes")){
		   
		    $resultbridgecomid=$bcompany_id;
		     $mincost=$estimated_cost;
			$resultbridge_name=$bridge_name;
		 
		 }
		  
	 }
	  
	}  
   
	    //Select values from Company Table
   $rs2=mysql_query("select * from company where company_id=$resultbridgecomid ") or mysql_error();
  
   while($row1=mysql_fetch_array($rs2)){
   
   $resultbridgecom=$row1['company_name'];
   $company_id=$row1['company_id'];
   $password=$row1['password'];
   $mail=$row1['mail_id'];
   $mobile=$row1['mobile'];
  
   }

	  $rs=mysql_query("select bridge_id,bcompany_id,days,workers,initialcost,estimated_cost,agree from bridgecompany1 where bcompany_id=$resultbridgecomid and bridge_id=$bridge_id") or die(mysql_error());
	
  if(mysql_num_rows($rs)){
    echo"<h3 class=heading>BRIDGE TENDER DETAILS </h3>";
 
  echo"<center> Tender End Date : ".$date."  (yyyy-mm-dd) .<br>";
  echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2 
  bordercolor=#FF0000  bgcolor=#FFCC99 >
    <tr><th align=center>Bridge ID </th><th align=center>Bridge Company Name</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Initial Cost Paid</th><th align=center>Estimated Total cost</th><th align=center>Agree Conditions</th>";
   while($row=mysql_fetch_array($rs)){
   
   echo"<tr><td class=textbox align=center>$row[bridge_id]</td><td class=textbox align=center>$resultbridgecom</td><td class=textbox align=center>$row[workers]</td><td class=textbox align=center>$row[days]</td><td class=textbox align=center>$row[initialcost]</td><td class=textbox align=center>$row[estimated_cost]</td><td class=textbox align=center>$row[agree]</td></tr>";
   $resultdays=$row['days'];$resultworkers=$row['workers'];
   $resultestimated=$row['estimated_cost'];
   $bridge_id=$row['bridge_id'];
   
   
   }
 
   //Strore details in result table ...
   
   $rs3=mysql_query("insert into resulttable    values($bridge_id,'$resultbridge_name','$close_date',$resultbridgecomid,'$resultbridgecom','$password','$mail',$mobile,$resultdays,$resultworkers,'yes',$resultestimated,'yes')") or mysql_error();
   
    echo"</table><br><br>";  
	  $flag=1;
	
	
	// Mail sent to company 
	$msg = " \n		Congrats !!! Hi,\n ".$resultbridgecom." ! Your  company is selected for ".$resultbridge_name." tender. This tender comes under Bridge Construction Tender. Keep Going ... All The Best ...\n		Thank you.\n\n\n  With Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,200);

   // send email
  mail($mail,"Tender Result Announcement (Online Tender)",$msg);

    }
	
	
	//Result calculation for school  tender
  $resultschoolcomid=0; 
  $resultschoolcom="";  
  $company_id=0;$mobile=0;$mail="";$password="";
  $resultdays=0;$resultworkers=0;$resultestimated=0;
  $bridge_id=0;$bridge_name="";$close_date="";
  $resultschool_name="";
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");

  $date=date("Y-m-d");//Current date for currentday calculation
  	

   $rs1=mysql_query("select school_id,school_name,no_of_workers,no_of_days,starting_date,end_date,initialcost,totalcost,open_date,close_date from schooltable where close_date=curdate() and city='$city'") or die(mysql_error());
   
       while($row=mysql_fetch_array($rs1)){
        
 	    $school_id=$row['school_id'];
		
	    $school_name=$row['school_name'];
	    $no_of_workers=$row['no_of_workers'];
	    $no_of_days=$row['no_of_days'];
	    $start_date=$row['starting_date'];
	    $end_date=$row['end_date'];
	    $initial_cost=$row['initialcost'];
	    $estimated_total=$row['totalcost'];
	    $open_date=$row['open_date'];
	    $close_date=$row['close_date'];
	  
	
	   
	   
	   $mincost=$estimated_total; // Assign estimated cost
	   
	   $rs=mysql_query("select school_id,schoolcompany_id,days,workers,initialcost,estimated_cost,agree from schoolcompany where school_id=$school_id") or die(mysql_error());
	   
	    while($row=mysql_fetch_array($rs)){
		  $schoolcompany_id=$row['schoolcompany_id'];
		  
		  $days=$row['days'];
		  $workers=$row['workers'];
		  $initialcost=$row['initialcost'];
		  $estimated_cost=$row['estimated_cost'];
		  $agree=$row['agree'];
		  
		
		   //Find Best Company for Tender
		  if(($days<=$no_of_days)&&($workers<=$no_of_workers)&&($initialcost=="yes")&&($estimated_cost<=$mincost)&&($agree=="yes")){
		
		    $resultschoolcomid=$schoolcompany_id;
			$mincost=$estimated_cost;
			$resultschool_name=$school_name;
		 }
		  
	 }
	  
	}  
	 //Select values from Company Table
   $rs2=mysql_query("select * from company where company_id=$resultschoolcomid ") or mysql_error();;
   while($row1=mysql_fetch_array($rs2)){
   $resultschoolcom=$row1['company_name'];
   $company_id=$row1['company_id'];
   $password=$row1['password'];
   $mail=$row1['mail_id'];
   $mobile=$row1['mobile'];
   }
	  $rs=mysql_query("select school_id,schoolcompany_id,days,workers,initialcost,estimated_cost,agree from schoolcompany where schoolcompany_id=$resultschoolcomid and school_id=$school_id") or die(mysql_error());
	
  if(mysql_num_rows($rs)){
    echo"<h2 class=title> TENDER CLOSE AT TODAY</h2><h3 class=heading>SCHOOL TENDER DETAILS </h3>";
 
  echo"<center> Tender End Date : ".$date."  (yyyy-mm-dd) .<br>";
  echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2 
  bordercolor=#FF0000  bgcolor=#FFCC99 >
    <tr><th align=center>School ID </th><th align=center>School Company Name</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Initial Cost Paid</th><th align=center>Estimated Total cost</th><th align=center>Agree Conditions</th>";
   while($row=mysql_fetch_array($rs)){
   
   echo"<tr><td class=textbox align=center>$row[school_id]</td><td class=textbox align=center>$resultschoolcom</td><td class=textbox align=center>$row[workers]</td><td class=textbox align=center>$row[days]</td><td class=textbox align=center>$row[initialcost]</td><td class=textbox align=center>$row[estimated_cost]</td><td class=textbox align=center>$row[agree]</td></tr>";
   $resultdays=$row['days'];$resultworkers=$row['workers'];
   $resultestimated=$row['estimated_cost'];
   $school_id=$row['school_id'];
   
   
   }
 
   
   //Strore details in result table ...
   $rs3=mysql_query("insert into resulttable    values($school_id,'$resultschool_name','$close_date','$company_id','$resultschoolcom','$password','$mail',$mobile,$resultdays,$resultworkers,
   'yes',$resultestimated,'yes')") or mysql_error();
    echo"</table><br><br>";  
	
	  $flag=1;
	
		// Mail sent to company 
	$msg = "Congrats !!! \n Hi,\n ".$resultschoolcom." ! Your  company is selected for ".$resultschool_name." tender. This tender comes under School Construction Tender\n	Thank you.\n Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,200);

   // send email
  mail($mail,"Result Announcement",$msg);
 
    }

	
	//Result calculation for Railway  tender
	
  $resultrailwaycom="";  
  $company_id=0;$mobile=0;$mail="";$password="";
  $resultdays=0;$resultworkers=0;$resultestimated=0;
  $bridge_id=0;$bridge_name="";$close_date="";
 
  
   $resultrailwaycomid=0; 
 
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");

  $date=date("Y-m-d");//Current date for currentday calculation
  
  
   $rs1=mysql_query("select station_id,station_name,no_of_workers,no_of_days,starting_date,end_date,initialcost,totalcost,open_date,close_date from railwaytable where close_date=curdate() and city='$city'") or die(mysql_error());
   
       while($row=mysql_fetch_array($rs1)){
        
 	    $station_id=$row['station_id'];
		
	    $station_name=$row['station_name'];
	    $no_of_workers=$row['no_of_workers'];
	    $no_of_days=$row['no_of_days'];
	    $start_date=$row['starting_date'];
	    $end_date=$row['end_date'];
	    $initial_cost=$row['initialcost'];
	    $estimated_total=$row['totalcost'];
	    $open_date=$row['open_date'];
	    $close_date=$row['close_date'];
	  
	
	   
	   
	   $mincost=$estimated_total; // Assign estimated cost
	   $rs=mysql_query("select railway_id,railwaycompany_id,days,workers,initialcost,estimated_cost,agree from railwaycompany where railway_id=$station_id") or die(mysql_error());
	    while($row=mysql_fetch_array($rs)){
		  $railwaycompany_id=$row['railwaycompany_id'];
		  
		  $days=$row['days'];
		  $workers=$row['workers'];
		  $initialcost=$row['initialcost'];
		  $estimated_cost=$row['estimated_cost'];
		  $agree=$row['agree'];
		  
		   //Find Best Company for Tender
		  if(($days<=$no_of_days)&&($workers<=$no_of_workers)&&($initialcost=="yes")&&($estimated_cost<=$mincost)&&($agree=="yes")){
		
		    $resultrailwaycomid=$railwaycompany_id;
			$mincost=$estimated_cost;
			$resultrailway_name=$station_name;
		 }
		  
	 }
	  
	}  
	
	 //Select values from Company Table
   $rs2=mysql_query("select * from company where company_id=$resultrailwaycomid") or mysql_error();;
   while($row1=mysql_fetch_array($rs2)){
    $resultrailwaycom=$row1['company_name'];
  
   $company_id=$row1['company_id'];
   $password=$row1['password'];
   $mail=$row1['mail_id'];
   $mobile=$row1['mobile'];
   }
   
	  $rs=mysql_query("select railway_id,railwaycompany_id,days,workers,initialcost,estimated_cost,agree from railwaycompany where railwaycompany_id=$resultrailwaycomid and railway_id=$station_id") or die(mysql_error());
	
  if(mysql_num_rows($rs)){
    echo"<h2 class=title> TENDER CLOSE AT TODAY</h2><h3 class=heading>RAILWAY MAINTENANCE TENDER DETAILS </h3>";
 
  echo"<center> Tender End Date : ".$date."  (yyyy-mm-dd) .<br>";
  echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2 
  bordercolor=#FF0000  bgcolor=#FFCC99 >
    <tr><th align=center>Railway Tender ID </th><th align=center>Railway Company Name</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Initial Cost Paid</th><th align=center>Estimated Total cost</th><th align=center>Agree Conditions</th>";
   while($row=mysql_fetch_array($rs)){
   
   echo"<tr><td class=textbox align=center>$row[railway_id]</td><td class=textbox align=center>$resultrailwaycom</td><td class=textbox align=center>$row[workers]</td><td class=textbox align=center>$row[days]</td><td class=textbox align=center>$row[initialcost]</td><td class=textbox align=center>$row[estimated_cost]</td><td class=textbox align=center>$row[agree]</td></tr>";
   $resultdays=$row['days'];$resultworkers=$row['workers'];
   $resultestimated=$row['estimated_cost'];
   $railway_id=$row['railway_id'];
   
   
   }
 
   //Strore details in result table ...
   $rs3=mysql_query("insert into resulttable    values($station_id,'$resultrailway_name','$close_date','$resultrailwaycomid,'$resultrailwaycom','$password','$mail',$mobile,$resultdays,$resultworkers,
   'yes',$resultestimated,'yes')") or mysql_error();
    echo"</table><br><br>";   
	  $flag=1;
	
		// Mail sent to company 
	$msg = "Congrats !!! \n Hi,\n ".$resultrailwaycom." ! Your  company is selected for ".$resultrailway_name." tender. This tender comes under Railway Maintenance Tender\n	Thank you.\n Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,200);

   // send email
  mail($mail,"Result Announcement",$msg);

    }


   //Result calculation for Slum  tender
	
  $resultslumcom="";  
  $company_id=0;$mobile=0;$mail="";$password="";
  $resultdays=0;$resultworkers=0;$resultestimated=0;
  $bridge_id=0;$bridge_name="";$close_date="";
  $resultslum_name="";
  $resultslumcomid=0;
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");

  $date=date("Y-m-d");//Current date for currentday calculation
  
  
   $rs1=mysql_query("select slum_id,slum_name,no_of_workers,no_of_days,starting_date,end_date,initialcost,totalcost,open_date,close_date from slumtable where close_date=curdate() and city='$city'") or die(mysql_error());
   
       while($row=mysql_fetch_array($rs1)){
        
 	    $slum_id=$row['slum_id'];
		$slum_name=$row['slum_name'];
	    $no_of_workers=$row['no_of_workers'];
	    $no_of_days=$row['no_of_days'];
	    $start_date=$row['starting_date'];
	    $end_date=$row['end_date'];
	    $initial_cost=$row['initialcost'];
	    $estimated_total=$row['totalcost'];
	    $open_date=$row['open_date'];
	    $close_date=$row['close_date'];
	  
	
	   
	   
	   $mincost=$estimated_total; // Assign estimated cost
	   $rs=mysql_query("select slum_id,slumcompany_id,days,workers,initialcost,estimated_cost,agree from slumcompany where slum_id=$slum_id") or die(mysql_error());
	    while($row=mysql_fetch_array($rs)){
		
		  $slumcompany_id=$row['slumcompany_id'];
		  $days=$row['days'];
		  $workers=$row['workers'];
		  $initialcost=$row['initialcost'];
		  $estimated_cost=$row['estimated_cost'];
		  $agree=$row['agree'];
		  
		   //Find Best Company for Tender
		  if(($days<=$no_of_days)&&($workers<=$no_of_workers)&&($initialcost=="yes")&&($estimated_cost<=$mincost)&&($agree=="yes")){
           $resultslumcomid=$slumcompany_id;
		   
			$mincost=$estimated_cost;
			$resultslum_name=$slum_name;
			
		 }
		  
	 }
	  
	}  
	//Select values from Company Table
   $rs2=mysql_query("select * from company where company_id=$resultslumcomid") or mysql_error();;
   while($row1=mysql_fetch_array($rs2)){
   $company_id=$row1['company_id'];
   $resultslumcom=$row1['company_name'];
   $password=$row1['password'];
   $mail=$row1['mail_id'];
   $mobile=$row1['mobile'];
   }
	  $rs=mysql_query("select slum_id,slumcompany_id,days,workers,initialcost,estimated_cost,agree from slumcompany where slumcompany_id=$resultslumcomid and slum_id=$slum_id") or die(mysql_error());
	
  if(mysql_num_rows($rs)){
    echo"<h2 class=title> TENDER CLOSE AT TODAY</h2><h3 class=heading>SLUM CLEARANCE TENDER DETAILS </h3>";
 
  echo"<center> Tender End Date : ".$date."  (yyyy-mm-dd) .<br>";
  echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2 
  bordercolor=#FF0000  bgcolor=#FFCC99 >
    <tr><th align=center>Slum Tender ID </th><th align=center>Slum Company Name</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Initial Cost Paid</th><th align=center>Estimated Total cost</th><th align=center>Agree Conditions</th>";
   while($row=mysql_fetch_array($rs)){
   
   echo"<tr><td class=textbox align=center>$row[slum_id]</td><td class=textbox align=center>$resultslumcom</td><td class=textbox align=center>$row[workers]</td><td class=textbox align=center>$row[days]</td><td class=textbox align=center>$row[initialcost]</td><td class=textbox align=center>$row[estimated_cost]</td><td class=textbox align=center>$row[agree]</td></tr>";
   $resultdays=$row['days'];$resultworkers=$row['workers'];
   $resultestimated=$row['estimated_cost'];
   $slum_id=$row['slum_id'];
   
   
   }
 
    
   //Strore details in result table ...
   $rs3=mysql_query("insert into resulttable    values($slum_id,'$resultslum_name','$close_date',$resultslumcomid,'$resultslumcom','$password','$mail',$mobile,$resultdays,$resultworkers,
   'yes',$resultestimated,'yes')") or mysql_error();
    echo"</table><br><br>";   
	  $flag=1;
	
		// Mail sent to company 
	$msg = "Congrats !!! \n Hi,\n ".$resultslumcom." ! Your  company is selected for ".$resultslum_name." tender. This tender comes under Slum Clearance Tender.\n	Thank you.\n Regards,\n Online Tender Team	...";

  // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,200);

   // send email
  mail($mail,"Result Announcement",$msg);

    }

if($flag==0)
   echo "Sorry !!! No Tender is close in ".$city." city at Today ...";
    }
  ?>
