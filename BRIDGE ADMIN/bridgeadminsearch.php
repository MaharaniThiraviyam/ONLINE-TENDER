<?php
 include("bridgeadminheader.php");
 ?>
 <style type="text/css">
 .login{
  font-family: "Imprint MT Shadow";
  color:#000000;
  border-color:#FF0000;
  background-color:#FFCC99;
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
    from {color:red;}
    to {color: black;}

 </style>
 <body>
 <table align="center" border="0" cellpadding="0" cellspacing="0" width="60%" height="10%">
 <tr><td align="center"><img src="images/bridgeadmin6.gif" height="80%" width="50%"></td>
 <td align="center"><img src="images/bridgeadminsearch1.gif" heigh="100%" width="50%"</td>
 </tr>
 </table>
 <br>
 <h2 class="flash"><font face="Kristen ITC"><center>BRIDGE TENDER DETAILS</center></font></h2>
  </body>
 <?php
 
  $con=mysql_connect("localhost","root") or die("Connection failed !!! Unable to connect ...");
  $db=mysql_select_db("tender management",$con) or die("Sorry !!! Cannot found Database ...");
  $rs=mysql_query("select bridge_id,bridge_name,no_of_workers,no_of_days,start_date,end_date,initial_cost,estimated_total,city,state from bridgetable") or die(mysql_error());
  
  echo" <br><table class=login align=center cellpadding=0 cellspacing=0 width=90% height=15% border=2>
 
   <tr><th align=center>Bridge ID </th><th align=center>Bridge Name</th><th align=center>Number of Workers</th><th align=center>Number of Days</th><th align=center>Tender Starting Date</th><th align=center>Tender End Date</th><th align=center>Initialcost</th><th align=center>Total cost</th><th align=center>City</th><th align=center>State</th>";
   while($row=mysql_fetch_array($rs)){
   
   echo"<tr><td class=textbox align=center>$row[0]</td><td class=textbox align=center>$row[1]</td><td class=textbox align=center>$row[2]</td><td class=textbox align=center>$row[3]</td><td class=textbox align=center>$row[4]</td><td class=textbox align=center>$row[5]</td><td class=textbox align=center>$row[6]</td><td class=textbox align=center>$row[7]</td><td class=textbox align=center>$row[8]</td><td class=textbox align=center>$row[9]</td></tr>";
   }
   
    echo"</table>";   
   ?>
   
  
 