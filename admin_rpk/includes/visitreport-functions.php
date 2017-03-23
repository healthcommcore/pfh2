<?
$timeIn=0;
$timeOut=0;
$timeSpent=0;
$sessID=0;
$noLogout="";

$pageTrack=array();


$sql1="SELECT * FROM PFHSessions WHERE userID={$userID}";

$resultID1=mysql_query($sql1, $mysqlID);



while ($timez=mysql_fetch_array($resultID1, MYSQL_ASSOC)){
	
	$sessID=$timez["sessionID"];
	
	$timeIn=$timez["sessionDateTime"];
	$timeOut=$timez["logout"];
	
	if($timeOut==0){
		$noLogout="notOut";
	}else{
	$timeSpent=$timeOut	- $timeIn;
	}
	
	
	
}

if($noLogout=="notOut"){
	
$sql2="SELECT ( MAX(hitTime)-MIN(hitTime) ) FROM PFHPagesNu WHERE userID={$userID} AND sessionID={$sessID} ORDER BY hitTime DESC";	

$resultID2=mysql_query($sql1, $mysqlID);



while ($trax=mysql_fetch_row($resultID2)){
	
	
	
	$timeSpent=$trax[0];


		}
	
	}

?>