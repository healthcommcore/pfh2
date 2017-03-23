<?php
ini_set(display_errors, On);
error_reporting(2047);
error_reporting(E_ALL);



$mysqlID=mysql_connect("hccweb2.dfci.harvard.edu","scripts","scripts");
 mysql_select_db("publicWebserver",$mysqlID);
    
    

$allStages=array("precontemplation","contemplation","preparation","action");

 

  
 $allMilestones1=array(//pre
1=>array("Body guy",'011',"Personal Health Profile",'012'),
2=>array("Are you dependent",121,"People and Places",231),
3=>array("Why think about quitting",131,"What are your worries?",'132'),
4=>array("Why think about quitting",131,"Some small steps",142),
5=>array("Friends and family",151,"Relaxation tips",152),
6=>array("positive thinking",161),
7=>array("Barriers",171),
8=>array(),
9=>array());
   
 
     $allMilestones2=array(//con
   	1=>array("Body guy",'011',"Personal Health Profile",'012'),
	2=>array("Are you dependent",221,"What are your worries",222),
    3=>array("People and Places",231),
    4=>array("Why think about quitting",241,"Some small steps",142),
    5=>array("Friends and family",251,"Relaxation tips",152),
    6=>array("What gets in way",261,"What are your worries",262),
    7=>array("Barriers tracking",271),
    8=>array("what's good, what's bad",281),
    9=>array()
    );
    
    
     $allMilestones3=array(//prep
  	1=>array("Body guy",'011',"Personal Health Profile",'012',"Pharmaco DA",313,"Addiction info",314),
	2=>array("Kicking old habits",324,"When, where, why?",325),
    3=>array("Small steps",331,"Cutting out cravings",332,"What are your worries",333),
    4=>array("Update goals",341,"Avoid triggers",342),
    5=>array("Quitting game plan",351,"Why think about quitting",352),
    6=>array(),
    7=>array(),
    8=>array(),
    9=>array()
    );

    
    $numz="";
    $printout="";
   
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
    
   

 function doMilestones(){
 	
 /*
 	
This function checks users by stage.
For each stage the function gets
 			 all users within the stage, 
 			 the date/time and type of the latest email sent to the user
 			 the milestone information for the particular user.
 			 
For all users who have been in their current milestone for >= 7 days, the function then checks if they have seen all the steps 
		-  If yes
			calls email send and moves them to the next stage
 	 	- If they haven't seen all the steps:
 	 		calls the function to send a reminder if they haven't yet been sent one
 	 		calls email send and moves them to the next stage if they have been sent a reminder 
 	 		 and logged in since then
 	 		
 	 		
 	 	 
 	
 	*/
   	
   	global $allMilestones1,$allMilestones2,$allMilestones3,$numz,$printout,$weke, $lastLogin;
   	
   	

 $numz="\n\n Log of cron milestone check/change function run at ".date("r", time())."\n";
 $numz.="-----------------------------------------------------------------------------------\n\n";
      
      
    
//stage1


//Get data on users who are in stage 1 and have logged in within the past 2 weeks

/*
$sqla1="SELECT DISTINCT ml.userID, milestone, steps FROM PFHMilestones AS ml, PFHSessions AS ses WHERE ml.userID=ses.userID AND active =1 AND stageID=1 AND milestone<7  AND ses.userID IN (SELECT userID FROM `PFHSessions` GROUP BY userID HAVING MAX( sessionDateTime ) >{$weke2})";
*/

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
			     				
						
					$stepsRay1=array();
					
					$useridRay1[]=$stage1["userID"];
					$milestoneRay1[]=$stage1["milestone"];
					$mileId[]=$stage1["id"];
					$steps1[]=$stage1["steps"];
					$startDate1[]=$stage1["startDate"];
					}

			
			
			}
		    
		



	$i=0;

	foreach($milestoneRay1 AS $key=>$val){
	

	
		//get date and type for the last email sent to user
$sqlemail_1="SELECT * FROM PFHEmail WHERE userID={$useridRay1[$key]} ORDER by date DESC LIMIT 1";

 
    
		$result_email_1=mysql_query($sqlemail_1, $mysqlID);
	
		if(!$result_email_1)
			{
			
		  	$noPriorEmail[]=$useridRay1[$key];
		  	
		  	$lastEmailDate1=0;
			$emailType1=0;	
			}
		else{
				$email_1=mysql_fetch_array($result_email_1, MYSQL_ASSOC);
		
				$lastEmailDate1=$email_1["userID"];
				$emailType1=$email_1["milestone"];	
				
			}
			
	
	
			$stepsRay1[$key]=explode(", ", $steps1[$key]);
				
			echo "value: $val:<br> ";
			
			
			
		
			//make sure that user has been in this milestone for at least a week
			if($startDate1[$key]<=$weke){		
			
			//compare steps seen with required
			$diff=array_diff($allMilestones1[$val], $stepsRay1[$key]);
			
			
			//act on users who have seen all steps for this milestone
			if(count($diff)==0)
			  {
				
					//[to do]send email with milestone change $milestoneRay1[$key] to ({$milestoneRay1[$key]}+1)
					
						$nowz=time();
						
						$sqla2="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate, active)  VALUES ";
						$sqla2.="('{$usdRay1[$key]}', '1', ({$milestoneRay1[$key]}+1), {$nowz}, 1) ";	
						
						$result2a=mysql_query($sqla2, $mysqlID);
						
						
						$sqla2b="UPDATE PFHMilestones SET active=0 WHERE userID='{$usdRay1[$key]}' AND id=mileID{[$val]}";
						
						
						$result2ab=mysql_query($sqla2, $mysqlID);
						
						
						if(!$result2a){
						$printout.="ERROR!! Query ".$sqla2." did not go through".mysql_error()."\n\n";	
						
						}elseif(!$result2ab){
							
						$printout.="ERROR!! Query ".$sqla2b." did not go through".mysql_error()."\n\n";		
							
						}else{
							
						$printout.=$sqla2."and ".$sqla2b." - successful\n";	
						
						$i++;	
						
							}
			
				
				 }else{
				  	
							 //act on users who have not seen all the steps for this milestone			
						
					
							if($emailType1[$key]=="reminderType"&&$emailDate1[$key]<"lastLoginDate"&&$emailDate1[$key]<=$weke){
							/*user has been sent reminder email prior to last login and more than a week ago so move to next milestone and send standard email
							*/
								
						
						 //[to do]send email with milestone change $milestoneRay1[$key] to ({$milestoneRay1[$key]}+1)
						
								$nowz=time();
								
								$sqla2="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate)  VALUES ";
								$sqla2.="('{$useridRay1[$key]}', '1', ({$milestoneRay1[$key]}+1), {$nowz}) ";	
								
								$result2a=mysql_query($sqla2, $mysqlID);
								
								
								
								if(!$result2a){
								$printout.="ERROR!! Query ".$sqla2." did not go through".mysql_error()."\n\n";	
								
								}else{
									
								$printout.=$sqla2." - successful\n";	
								$i++;
								}			
								
								
							}else{
							
						//[to do]send reminder email for milestone $milestoneRay1[$key] 	
											
									}
			
				
					
				
			
		
	 }//end else from if(count($diff)==0)
	 
	
   }//end if($startDate1[$key]<=$weke)
   
	
} //end foreach($milestoneRay1 AS $key=>$val)


$numz.=$i." user(s) moved in stage1\n";	
	



//Stage2

$sqlb1="SELECT DISTINCT ml.userID, milestone, steps FROM PFHMilestones AS ml, PFHSessions AS ses, PFHStages as stg WHERE ml.userID=ses.userID AND ml.userID=stg.userID AND AND ml.stageID=stg.id AND active =1 AND stage=2 AND milestone<7  AND ses.userID IN (SELECT userID FROM `PFHSessions` GROUP BY userID HAVING MAX( sessionDateTime ) >{$weke2})";

$sqlb1="SELECT DISTINCT ml.userID, milestone, steps, MAX( sessionDateTime )  ";
$sqlb1.="FROM PFHMilestones AS ml, PFHSessions AS ses, PFHStages AS stg ";
$sqlb1="WHERE ml.userID = ses.userID AND ml.userID = stg.userID ";
$sqlb1="AND ml.stageID = stg.id AND ml.active =1 ";
$sqlb1="AND stg.active =1 AND stage =7 AND milestone <7 ";
$sqlb1="AND ses.userID IN ( SELECT userID FROM PFHSessions ";
$sqlb1="GROUP BY userID ";
$sqlb1="HAVING MAX(sessionDateTime) >1141702684 ) ";
$sqlb1="GROUP BY ml.userID ";






$result2=mysql_query($sqlb1, $mysqlID);

while($stage2=mysql_fetch_array($result2, MYSQL_ASSOC)){
$stepsRay2=array();

$useridRay2[]=$stage2["userID"];
$milestoneRay2[]=$stage2["milestone"];
$steps2[]=$stage2["steps"];
$startDate2[]=$stage2["startDate"];


}


$j=0;

foreach($milestoneRay2 AS $key2=>$val2){
	$stepsRay2[$key2]=explode(", ", $steps2[$key2]);
	
	echo "value: $val2:<br> ";

	
		//make sure that user has been in thsi milestone for at least a week
	if($startDate2[$key]<=$weke){
		
	
	
	
	
	$diff2=array_diff($allMilestones2[$val2], $stepsRay2[$key2]);
	
	
	if(count($diff2)==0){
	
	$nowz=time();
	$sqlb2="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate)  VALUES ('{$useridRay2[$key2]}', '2', ({$milestoneRay2[$key2]}+1), {$nowz}) ";	
	
	$result2b=mysql_query($sqlb2, $mysqlID);
	
	if(!$result2b){
	$printout.="ERROR!! Query ".$sqlb2." did not go through".mysql_error()."\n\n";	
	
	}else{
		
	$printout.=$sqlb2." - successful\n";	
		
	$j++;	
			}
	
		
		}
	
	}

}

$numz.=$j." user(s) moved in stage2 \n";




//Stage3
$sqlc1="SELECT * FROM PFHMilestones WHERE stageID=3 AND milestone<7";


$result3=mysql_query($sqlc1, $mysqlID);

while($stage3=mysql_fetch_array($result3, MYSQL_ASSOC)){
$stepsRay3=array();

$useridRay3[]=$stage3["userID"];
$milestoneRay3[]=$stage3["milestone"];
$steps3[]=$stage3["steps"];
$startDate3[]=$stage3["startDate"];
}




$k=0;

foreach($milestoneRay3 AS $key3=>$val3){
	$stepsRay3[$key3]=explode(", ", $steps3[$key3]);
	
	echo "value: $val3:<br> ";
	
	
	
		//make sure that user has been in thsi milestone for at least a week
	if($startDate3[$key]<=$weke){
		
	
	

	
	$diff3=array_diff($allMilestones3[$val3], $stepsRay3[$key3]);
	
	if(count($diff3)==0){
	
		$nowz=time();
	$sqlc2="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate)  VALUES ('{$useridRay3[$key3]}', '3', ({$milestoneRay3[$key3]}+1), {$nowz}) ";	
	
	$result3a=mysql_query($sqlc2, $mysqlID);
	
	if(!$result3a){
	$printout.="ERROR!! Query ".$sqlc2." did not go through".mysql_error()."\n\n";
		
	}else{
		
	$printout.=$sqlc2." - successful\n";	
	$k++;	
		
				}
	
	
	
	print_r($diff3);
	echo "<br>". count($diff3).":<br> ";
	echo "<br> Milestone: ". $milestoneRay3[$key3].":<br> ";
	echo "<br> SQL: ". $sqlc2.":<br> ";
	
		
		}

	
	}
	
}


$numz.=$k." user(s) moved in stage3\n\n\n";
$numz.="Queries and results:\n";

echo "userId: ";
print_r($useridRay3)."<br>";
echo "Milestone: ";
print_r($milestoneRay3)."<br>";
echo "Steps[0]: ";
print_r($stepsRay3[0])."<br>";
echo "Mile 3: ";
print_r($allMilestones3[3])."<br>";
echo "<br> ";
  var_dump($allMilestones3[3]); 
echo "<br> ";
  var_dump($stepsRay3[0]); 
echo "<br><br> ";
echo time();



//write output to file

$fileopen=fopen("/var/www/html/PFH2/logs/cron-milestones.txt", "a+");
$writeresult=fwrite($fileopen, $numz);
$writeresult=fwrite($fileopen, $printout);
fclose($fileopen);


   }//end doMilestones


?> 






<?php

if($writeresult){
echo "yay<br>";	
}


$array1 = array(0=>131, 1=>132);
$array2 = array('0' => "131", 1=>"132");

$array2b=implode(",", $array2 );
$array2c=explode(",", $array2b );
$result = array_diff($array1, $array2c);

print_r(Count($result));
?> 



<?

 function getLogins(){
 
 global $weke2, $noShowsID, $noShowsMin, $noShowsMax, $stoppedID, $stoppedMin, $stoppedMax, $regularID, $regularMin, $regularMax;
 
 
 
 //$sql01="SELECT userID, MAX(sessionDateTime) FROM `PFHSessions` AS ss GROUP BY ss.userID HAVING (MAX(sessionDateTime)> $weke2})"; 
 
 $sub1="SELECT DISTINCT uze.id FROM PFHUserInfo AS uze LEFT JOIN PFHSessions AS ses ON uze.id = ses.userID";
 
 
 $sql2a="SELECT userID, MIN(sessionDateTime) , MAX(sessionDateTime) FROM PFHSessions WHERE userID IN ({$sub1}) GROUP BY userID";
 
 
 $sql2c="SELECT * FROM PFHEmail WHERE userID=({$sub1})";
 
 SELECT * FROM PFHMilestones AS ml, PFHSessions AS ses WHERE ml.userID=ses.userID AND active =1 AND stageID=1 AND milestone<7  AND ses.userID IN (SELECT userID FROM `PFHSessions` GROUP BY userID HAVING MAX( sessionDateTime ) >1139947855) 
 ///Run queries
 	$resultID2a=mysql_query($sql2a, $mysqlID);

	while( $logInz=mysql_fetch_array($resultID2a, MYSQL_ASSOC) )
	{
		if($logInz["MIN(sessionDateTime)"]==0){
			
			//never logged in 
			$noShowsID[]=$logInz["userID"];
			$noShowsMin[]=$logInz["MIN(sessionDateTime)"];
			$noShowsMax[]=$logInz["MAX(sessionDateTime)"];
			

		}elseif($logInz["MAX(sessionDateTime)"]<=$weke3){
			
			//stopped logged in 
			$stoppedID[]=$logInz["userID"];
			$stoppedMin[]=$logInz["MIN(sessionDateTime)"];
			$stoppedMax[]=$logInz["MAX(sessionDateTime)"];
			

		}elseif($logInz["MAX(sessionDateTime)"]>=$weke2){
			
			//on track
			$regularID[]=$logInz["userID"];
			$regularMin[]=$logInz["MIN(sessionDateTime)"];
			$regularMax[]=$logInz["MAX(sessionDateTime)"];
			

		}
		
		
		
		
		
		
	}//end while( $logInz=mysql_fetch_array($resultID2a, MYSQL_ASSOC) )
		
}//end functiongetLogins


doEmail(){
	
	
	
}//end doEmail()
 
 
 if($latestLogin>$weke2){
 	
 	doMilestones();
 	
 			}
 
  
   )
   
   
 $sqlall="SELECT *, user.id AS archID,  MIN(sessionDateTime), MAX(sessionDateTime)"; 
$sqlall.="FROM PFHUserInfo AS user ";
$sqlall.="LEFT JOIN PFHStages AS stgs ON stgs.userID = user.id AND stgs.active=1 ";
$sqlall.="LEFT JOIN PFHMilestones AS mls ON mls.stageID = stgs.id AND mls.active=1 ";
$sqlall.="LEFT JOIN PFHSessions AS ses ON ses.userID = user.id ";
$sqlall.="GROUP BY user.id";   

echo "<BR>" $sqlall;
   
   

?>