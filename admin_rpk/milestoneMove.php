
<?php
     include("includes/site-functions.php");

$sql="";
$errMsg="";

// connect to database
$mysqlID=dbConnect();



          $nowz=time();
			
			$sqlmva="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate, active)  VALUES ";
			$sqla.="('{$usdRay1[$key]}', '1', ({$milestoneRay1[$key]}+1), {$nowz}, 1) ";	
			
			$resultmva=mysql_query($sqlmva, $mysqlID);
			
			
			$sqlmvb="UPDATE PFHMilestones SET active=0 WHERE userID='{$usdRay1[$key]}' AND id=mileID{[$val]}";
			
			
			$resultmvb=mysql_query($sqla2, $mysqlID);
			
			
			if(!$resultmva){
			$printout.="ERROR!! Query ".$sqlmvb." did not go through".mysql_error()."\n\n";	
			
			}elseif(!$resultmvb){
				
			$printout.="ERROR!! Query ".$sqla2b." did not go through".mysql_error()."\n\n";		
				
			}else{
				
			$printout.=$sqla2."and ".$sqla2b." - successful\n";	
			$i++;	
				
					}





















?>