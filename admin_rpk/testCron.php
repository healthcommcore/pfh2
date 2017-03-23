<?php
ini_set(display_errors, On);
error_reporting(2047);
error_reporting(E_ALL);



$mysqlID=mysql_connect("hccweb2.dfci.harvard.edu","scripts","scripts");
 mysql_select_db("publicWebserver",$mysqlID);
 
 
 
 
   $weke=time()-(86400*7);
    $weke2=time()-(86400*7*2);
    $weke3=time()-(86400*7*3);
    
    $lastLogin=0;
 
    $noShowsID=array();
    $noShowsMin=array();
    $noShowsMax=array();
   
    $stoppedID=array();
    $stoppedMin=array();
    $stoppedMax=array();
    
    $regularID=array();
    $regularMin=array();
    $regularMax=array();
    
    $noPriorEmail=array();
 
 
 
 
 
 
 
 
 
 
$sqla1="SELECT DISTINCT firstName, lastName, username, email, ml.userID, ml.id, milestone, ml.startDate, steps, MAX(sessionDateTime) ";
$sqla1.="FROM PFHUserInfo AS user, PFHMilestones AS ml, PFHSessions AS ses, PFHStages AS stg ";
$sqla1.="WHERE user.id=ml.userID AND ml.userID = ses.userID AND ml.userID = stg.userID ";
$sqla1.="AND ml.stageID = stg.id AND ml.active =1 ";
$sqla1.="AND stg.active =1 AND stg.stage =1 AND milestone <7 ";
$sqla1.="AND ses.userID IN ( SELECT userID FROM PFHSessions ";
$sqla1.="GROUP BY userID ";
$sqla1.="HAVING MAX(sessionDateTime) >{$weke2} ) ";
$sqla1.="GROUP BY ml.userID ";


 echo $sqla1;



		$result1=mysql_query($sqla1, $mysqlID);

		if(!$result1)
			{
				echo "no go";
			exit();	
			}
		
			echo "go on";
		if (mysql_num_rows($result1)==0) {
			
			$sysMsg="no users have been active in the past two weeks";
		    }
		else{
			
					while($stage1=mysql_fetch_array($result1, MYSQL_ASSOC))
					{	
			        print_r($stage1); 
			        echo "<BR>";
						
						
					$stepsRay1=array();
					
					$useridRay1[]=$stage1["userID"];
					$milestoneRay1[]=$stage1["milestone"];
					$mileId[]=$stage1["id"];
					$steps1[]=$stage1["steps"];
					$startDate1[]=$stage1["startDate"];
					}

			
			
			}
			
			
			
			
	  echo "<BR>";
		   echo "milestone array";   
		   
		   print_r($milestoneRay1);		
			
			
			
			
	
	foreach($milestoneRay1 AS $key=>$val){
	

	
		//get date and type for the last email sent to user
		$sqlemail_1="SELECT * FROM PFHEmail WHERE userID={$useridRay1[$key]} ORDER by date DESC LIMIT 1";

         echo "$sqlemail_1 <BR>";
    
		$result_email_1=mysql_query($sqlemail_1, $mysqlID);
	
		if(!$result_email_1)
			{
				
			 echo "nai<BR>";
			
		  	$noPriorEmail[]=$useridRay1[$key];
		  	
		  	$lastEmailDate1=0;
			$emailType1=0;	
			}
		else{
				$email_1=mysql_fetch_array($result_email_1, MYSQL_ASSOC);
		
				$lastEmailDate1=$email_1["userID"];
				$emailType1=$email_1["milestone"];	
				
			}
			
 			echo "\$email_1 <BR>";
 			print_r($email_1);
			
			
	
	
			$stepsRay1[$key]=explode(", ", $steps1[$key]);
				
			echo "value: $val:<br> ";
			
	}		
			
			
		

	$sqlall="SELECT *, user.id AS archID,  MIN(sessionDateTime), MAX(sessionDateTime)"; 
$sqlall.="FROM PFHUserInfo AS user ";
$sqlall.="LEFT JOIN PFHStages AS stgs ON stgs.userID = user.id AND stgs.active=1 ";
$sqlall.="LEFT JOIN PFHMilestones AS mls ON mls.stageID = stgs.id AND mls.active=1 ";
$sqlall.="LEFT JOIN PFHSessions AS ses ON ses.userID = user.id ";
$sqlall.="GROUP BY user.id";   

echo "<BR><BR><BR>". $sqlall;
   
			
			
			?>