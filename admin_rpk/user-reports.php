<?
ini_set(display_errors, On);
//error_reporting(2047);
error_reporting(E_ALL^ E_NOTICE);
session_start();

include("includes/site-functions.php");
$sectionID="other";
$sql="";
$errMsg="";
$stg="";


// connect to database
$mysqlID=dbConnect();

// search user records
if ($_POST["submitAction"]=="searchUsers") {
	
	
	
	
	
	
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript">
    <!--
    // FUNCTION: POPUP EMAIL
    function popupEmail(eURL) {
        newWindow=window.open(eURL,"newWindow","width=640,height=480");
        newwindow.focus();
    }
    //-->
    </script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    </style>
</head>



<?
// display any errors
if (strlen($errMsg)>0) echo "<span style=\"font-size:10pt; color:#CC0000;\"><b>OOPS!</b><ul>".$errMsg."</ul></span>\n";
?>


<?

//call component refresh script if valid submission
 if ($reloadz==true&&$validated==true){
echo "<script language='JavaScript'>updaterx()</script>";
$reloadz=false;
}

              
              

?>




<?
$allStages=array("precontemplation","contemplation","preparation","action");

   /*
$allMilestones=array(
    1=>array("Logged in",1,"BFR",3,"Body Guy",61),
    2=>array("Cost benefits",130,"Late effects",132,"Addiction info",19,"Barriers to quitting",22),
    3=>array("Chemical in cigs",131,"Social norms",199,"Pharmaco DA",106),
    4=>array("Positive Impact",25,"Goal setting",199,"Smoker type",12,"Barriers to quitting",22),
    5=>array("Readiness",14,"Social support",15,"Relaxation",16,"Goals tracking",17),
    6=>array("Stimulus control",18,"Barriers to quitting",19,"Goals tracking",20,"Worries",21),
    7=>array("Goals tracking",22,"Tracking successes",23,"Pharmaco reminder",24),
    8=>array("Decisional balance",25),
    9=>array("Readiness",26));
    
    
   
 
 Each stage needs a different $allMilestones array
 stage1
*/

  
 
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
    4=>array("Why think about quitting",241,"Some small steps",242),
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


    
     $allContent1=array(//pre
"/health_bodyguy.php"=>'011',"/you_profile1.php"=>'012',"/health_dependency.php"=>121,"/health_manual-3g2.php"=>231,"/health_manual-1e.php"=>131,"/health_manual-2h.php"=>'132',"/health_manual-1f.php"=>142,"/health_manual-3i.php"=>151,"/health_tips-relaxation.php"=>152,"/health_manual-1g2.php"=>161,"/health_manual-1e2.php"=>171
);

     $allContent2=array(//con
   	"/health_bodyguy.php"=>'011',"/you_profile1.php"=>'012',""=>221,""=>222,""=>231,
    "/health_manual-2g.php"=>241,"/health_manual-2i.php"=>242,"/health_tips-socialSupport.php"=>251,"/health_tips-relaxation.php"=>152, "/health_manual-2f2.php"=>261,"/health_manual-2h.php"=>262, ""=>271,"/health_manual-2f.php"=>281
    );
    
    
     $allContent3=array(//prep
  	"/health_bodyguy.php"=>'011',"/you_profile1.php"=>'012',"/health_pharmo.php"=>313,"/health_dependency.php"=>314,"/health_manual-3g.php"=>324,""=>325, "Small steps"=>331,"/health_manual-3f.php"=>332,""=>333,""=>341,"/health_manual-3g.php"=>324, ""=>351,""=>352
    );
 
    
    
    
$idSTR="";
$idSTR2="";

if(isset($_POST["do2"]) ){
$idSTR=$_POST["idSTR"];
    $idSTR2=$_POST["idSTR2"];
}else{

while (list($k,$v)=each($_POST["allUsers"])) {
    if (strlen($idSTR)>0){ 
    	$idSTR.=" OR ";
    	$idSTR2.=" OR ";
   		 }
    
    $idSTR.="id=".$k."";
    $idSTR2.="userID=".$k."";
    
}

}

 //echo "<br> idString: - $idSTR";


if (strlen($idSTR)>0) {
	
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE ".$idSTR."", $mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            //$tmpSTR=ereg_replace("\(id=","",$idSTR);
            //$tmpSTR=ereg_replace("\) OR ",",",$tmpSTR);
        }

    }
    
    
    
    // move milestone
if ( isset($_POST["moveMile"])&&$_POST["moveMile"]=="Move" ) {
	
	$_POST["moveMile"]="deset";

unset($_POST["moveMile"]);


 $sqlz="SELECT startDate FROM PFHMilestones WHERE userID={$_POST["idz"]} AND stageID={$_POST["stageID"]} AND active=1";
    
     

$resultz=mysql_query($sqlz, $mysqlID);

$theDate=mysql_fetch_row($resultz);





////////////////////

			$nowz=time();
			
			
			$priorChange= $theDate[0];
			
			$pastChange=$nowz-$priorChange;
			
			echo "past change - ". $priorChange;
			echo "now  - ".$nowz;
			echo "sqlz  - ".$sqlz;
			
			if($pastChange>86400){
			
			$sqlmva="INSERT INTO PFHMilestones(userID, stageID, milestone, startDate, active)  VALUES ";
			$sqlmva.="({$_POST["idz"]}, {$_POST["stageID"]}, {$_POST["moveto"]}, {$nowz}, 1) ";	
			
			$resultmva=mysql_query($sqlmva, $mysqlID);
			
			if($resultmva){
				
			$sqlmvb="UPDATE PFHMilestones SET active=0 WHERE userID={$_POST["idz"]} AND id={$_POST["priorID"]}";
			
			
			$resultmvb=mysql_query($sqlmvb, $mysqlID);
			
			echo $sqlmva;	
			
			}else{
				
			echo  "NOPE!";
			}

			}

/////////////////////

$sqlmva="";

echo "and now - ".$sqlmva;	


 			
}


echo "<br> POST";
              print_r($_POST);
              //print_r($_POST["allUsers"]);
    
  echo $sqlmva;  
   /////////////////////// 
    
     /*
    //get stage info    
     $idStageSTR="";
      
    $sql2="SELECT startDate, stage, id, userID FROM PFHStages WHERE active=1 AND ( {$idSTR2} )";
    
     echo "sql2: $sql2<br>";
     
    $resultID2=mysql_query($sql2,$mysqlID);
    
    if ($resultID2) {
    	
    	*/
    	
    	/*
        if (mysql_num_rows($resultID2)>0) {
            $tmpSTR=ereg_replace("\(id=","",$idSTR);
            $tmpSTR=ereg_replace("\) OR ",",",$tmpSTR);
        }   
      */
      
      /*  
        
 while ($row=mysql_fetch_array($resultID2, MYSQL_ASSOC))  {
 	echo "resultz<br>";
 	
    //if (mysql_num_rows($resultID2)>1) {$idStageSTR.=" OR ";}
    
    $idStageSTR.= "(userID={$row["userID"]} AND stageID={$row["id"]})"; 
    
  
    
    echo "idstageString: {$row["id"]}<br>";
   
}
           
        
    } else{
    	 echo "no go";
    }
    
    
    
    
    
    echo "idstageString: $idStageSTR<br>";
    
    //get milestone info
    $sql3="SELECT * FROM PFHMilestones WHERE  active=1 AND ( {$idStageSTR} )";
    
    echo "sql3: $sql3";

$resultID3=mysql_query($sql3, $mysqlID);

if ($resultID3) {
        if (mysql_num_rows($resultID3)>0) {
            $tmpSTR=ereg_replace("\(id=","",$idSTR);
            $tmpSTR=ereg_replace("\) OR ",",",$tmpSTR);
        }   
                
    }  
    
    */
    
}
?>







<body bgcolor="#D9E6A8">
<a name="top"></a>
<table border=1 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>





		<!-- Nest 1 -->
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br>
            <a href="javascript:history.back();">BACK to &#8220;search users&#8221;</a><br><br>

<!-- Nest 1_1 -->
<table border=0 cellpadding=3 cellspacing=2 >
<tr>
<td width=11><img src="images/blank.gif" width=200 height=1 border=0 alt=""></td>

    <td align="right" style="background-color: White; border: thin solid Black; width: 130px;">
	
   <a href="mailInfo.php?idSTR=<?=urlencode(substr($tmpSTR,0,-1))?>"><b>export Mailing Info</b></a>	
	</td>
    <td width=11><img src="images/blank.gif" width=10 height=1 border=0 alt=""></td>

    <td width="250" align="right" style="background-color: White; border: thin solid Black; width: 250px;">
	
	
 <b>Email ALL:</b> <select name="emailType" size=1>
    <option value="">login reminder</option>
    </select> <input type="button" value="go" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;" onClick="popupEmail('emailPreview.php?weekNum=1&stage=1&quitDate=0&numPosts=0');">
	
	
	</td>
</tr>
</table>
<!--End Nest 1_1 -->

<br>
<hr><br>
<?
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            	
            	//print_r($specs);
            	//////////////////////////////
            	
            	
            	
            	 
    //get stage info    
     $idStageSTR="";
      
    $sql2="SELECT startDate, stage, id, userID FROM PFHStages WHERE active=1 AND (userID={$specs['id']} )";
    
     //echo "sql2: $sql2<br>";
     
	 $thisUserID=$specs['id'];
	 
    $resultID2=mysql_query($sql2,$mysqlID);
    
    if ($resultID2) {
    	
    	
    	
    	/*
        if (mysql_num_rows($resultID2)>0) {
            $tmpSTR=ereg_replace("\(id=","",$idSTR);
            $tmpSTR=ereg_replace("\) OR ",",",$tmpSTR);
        }   
      */
      
        
        
 while ($stagez=mysql_fetch_array($resultID2,MYSQL_ASSOC))  {
 	//echo "resultz<br>";
 	
 	$stg=$stagez["stage"];
	$stgID=$stagez["id"];
 	$stageStart=$stagez["startDate"];
   $thisStageStartDate=date("n/j/y",$stageStart);
}
           
        
    } else{
    	// echo "no go";
    }
    
    
    
    
   
    
    //get milestone info
    //$sql3="SELECT * FROM PFHMilestones WHERE  active=1 AND (userID={$specs['id']} )";
    $sql3="SELECT * FROM PFHMilestones WHERE userID={$specs['id']} AND stageID={$stgID}";
    
     $milestoneIDz=array();
     $milestonez=array();
     $milestoneDatez=array();
     $stepz=array();
   // echo "sql3: $sql3";

$resultID3=mysql_query($sql3, $mysqlID);

if ($resultID3) {
          
           while($milestonezGet=mysql_fetch_array($resultID3,MYSQL_ASSOC)){
           	
           	
           	 $milestonez[]=$milestonezGet["milestone"];
           	 $milestonez2[$milestonezGet["milestone"]]=$milestonezGet["milestone"];
           	 
           	 $milestoneIDz[]=$milestonezGet["id"];
           	 $milestoneDatez[]=$milestonezGet["startDate"];
           	 $milestoneStatez[]=$milestonezGet["active"];
           	 
           	 
           	 
           	 $stepz1[$milestonezGet["milestone"]]=$milestonezGet["steps"];//explode(", ", $milestonez["steps"]);	
           	
           }
           
           
           
           	
           	 $thisMilestone=0;
           	 $thisMilestoneID=0;
           	 $thisMilestoneStartDate=0;
           	 
           
           foreach ($milestoneIDz AS $key=>$val){
           	if( $milestoneStatez[$key]==1) {
           		
           		
           	 $thisMilestone=$milestonez[$key];
           	 $thisMilestoneID=$milestoneIDz[$key];
           	 $thisMlStartDate=$milestoneDatez[$key];
           	 $thisMilestoneStartDate=date("n/j/y",$thisMlStartDate);
           	
           }
            	
         }    	
            
}    
       echo "this milestone: $thisMilestone - stageId $stgID";  
       
       $_SESSION['lastChange']=$thisMlStartDate;
       
       
          //get session info
    $sql4="SELECT userID, MIN(sessionDateTime), MAX(sessionDateTime), MAX(logoutTime), COUNT(sessionDateTime)  FROM PFHSessions WHERE (userID={$specs['id']} ) GROUP BY userID";
    
   //echo "sql4: $sql4";

$resultID4=mysql_query($sql4, $mysqlID);

if ($resultID4) {
        
                
   
           while($sess=mysql_fetch_array($resultID4,MYSQL_ASSOC)){
           	
           	//print_r($sess);
           	
           	 $firstLogin=$sess["MIN(sessionDateTime)"];
           	 $lastLogin=$sess["MAX(sessionDateTime)"];
           	 $lastLogout=$sess["MAX(logoutTime)"];
           	 $numLogins=$sess["COUNT(sessionDateTime)"];
           	
           	
           }
            	
         }  
            	
            	///////////////////////
            	
            	//$stagez=mysql_fetch_array($resultID2,MYSQL_ASSOC);
            	
            	//$milestonez=mysql_fetch_array($resultID3,MYSQL_ASSOC);
            	
            	
            	
            	//$stepz=explode(", ", $milestonez["steps"]);	
            	
            	
            	
                $weekNum=floor((time()-$specs["startdate"])/604800)+1;
                
               // $stg=$stagez["stage"];
                
               //$thisMilestone=$milestonez["milestone"];
               
               if($lastLogout!=0){
               $lastInLength=ceil(($lastLogout-$lastLogin)/60)." mins";
               }else{
               	$lastInLength= "Unknown";
               }
                
               
               
       
               
               
     $sql5="SELECT MIN(hitTime), filename  FROM PFHPages WHERE (userID={$specs['id']}) AND (hitTime>{$stageStart}) GROUP BY filename";
    
  //echo "sql5: $sql5 <br><br>";
$resultID5=mysql_query($sql5, $mysqlID);


     $allPages=array();
     $allPagesHitTime=array();
   
     if ($resultID5) {  

     	
     		if (mysql_num_rows($resultID5)==0) {
            
            $errMsg="There is no pages information for this user - {$userID}";	
            	
            } else{
             while($getPages=mysql_fetch_array($resultID5, MYSQL_ASSOC)){	
             	
             $allPages[]=$getPages["filename"];	
             $allPagesHitTime[]=$getPages["MIN(hitTime)"];	
            	
            }
               
            }
     }
               
               
     //print_r($allPages);  
     //echo "<br><br>";    
     
      /// print_r($allPagesHitTime);  
     //echo "<br><br>";  
     
     //$allThisStage=array();
     
    
     
     foreach($allPages as $key=>$val) {
     	 $setx=$allPagesHitTime[$key];
     	
     	if (array_key_exists ($val, ${allContent.$stg} ) ){
     	
     	$allThisStage[$setx]=${allContent.$stg}[$val];
     	}
     }   
               
    //print_r($allThisStage);             
?>
            
            

   <table width="720" border="0" cellspacing="0" cellpadding="0" align="left" style="position: relative; left: 2px;">
            <tr>
                <td valign="top">
                
                
					<?echo "here ". $thisMilestone;?>
					
					<!--  -->
					<span style="font-size:10pt; font-weight:bold;">Intervention Status Report for:</span><br>
			
			<!-- Nest 2 -->
            <table border=1 cellpadding=4 cellspacing=0 width=670 bgColor="#FFFFE0">
             <tr bgcolor="#006666">
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=50 height=1 border=0 alt=""><br>ID</td>
                <td width=100% valign="top" class="reportLabels"><img src="images/blank.gif" width=120 height=1 border=0 alt=""><br>Name</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Username</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Import date </td>
                 <td valign="top" class="reportLabels"><img src="images/blank.gif" width=210 height=1 border=0 alt=""><br>Stage</td>
                              
            </tr>
            <tr>
                <td valign="top"><?=$specs["id"]?></td>
                <td valign="top"><?=$specs["lastName"].", ".$specs["firstName"]?></td>
                <td valign="top"><?=$specs["username"]?></td>
                <td valign="top"><?=date("n/j/y",$specs["startdate"])?></td>
                <td valign="top"><b><?=strtoupper($allStages[$stg-1])?><? echo " (Since {$thisStageStartDate})";?></b></td>
              
            </tr>
            </table><br>
            <!-- End Nest 2 -->
            
			
			<!-- Nest 3 -->
             <table border=1 cellpadding=4 cellspacing=0  bgColor="#FFFFE0">
             <tr bgcolor="#006666">
             
             
             <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Total logins</td>
                 <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>First login</td>
                  <td colspan="2" valign="top" class="reportLabels"><img src="images/blank.gif" width=120 height=1 border=0 alt=""><br>Last login - Date/Time Spent</td>
               
            </tr>
            <tr>
                <td valign="top"><?=$numLogins?></td>
                <td valign="top"><?=date("n/j/y",$firstLogin)?></td>
                 <td valign="top"><?=date("n/j/y",$lastLogin)?> for <?=$lastInLength?></td></tr>
				 </table>
				<br><br> 
				 
				 
				<!--  
				 </td>
            </tr>
            </table><br> -->
            <!-- Nest 3 -->
					
					
					
					
					
					<!--  -->
					
					
					
                
                
                
                <table border=0 cellpadding=0 cellspacing=4>  
                
				          
                <? 
               // print_r($stepz1); 
               
                
                for ($i=0; $i<3; $i++) { ?>
                <tr>
                    <? for ($j=0; $j<3; $j++) { ?>
                    <? $sessionIndex=(($j*3)+$i+1); 
                    
                    
                $innerRayLength=count(${allMilestones.$stg}[$sessionIndex]); 
				                    
                    ?>
                    
                    
                    <td valign="top">
                    
                    <table border=1 cellpadding=8 cellspacing=0 width=175>
                    <tr bgcolor="#<? if ($sessionIndex==$thisMilestone) { echo "FFE000"; } else { echo ($sessionIndex<$thisMilestone) ? "FFFFFF" : "E0E8F0"; } ?>">
                        <td valign="top" width=170<? echo ($sessionIndex==$thisMilestone) ? " style=\"color:#000000;\"" : ""; ?>><b><? echo ($sessionIndex==$thisMilestone) ? "Milestone ".$sessionIndex." (Since {$thisMilestoneStartDate})" : "Milestone ".$sessionIndex; ?>:</b><br>
                        
          <? 
             //if (array_key_exists($sessionIndex, $milestonez)) {
             	
             $stepz=explode(", ", $stepz1[$sessionIndex]);	
             
             //////////////
             
            // echo $stepz; 
     
             
             /////////           	
             //}
				
				for($zx=0;$zx<$innerRayLength;$zx+=2){
          ?>              
                        
                        <? if (strlen(${allMilestones.$stg}[$sessionIndex][$zx])>0) {  	
 	 $codez=${allMilestones.$stg}[$sessionIndex][$zx+1]; 	
 	 
 	 echo "$codez"; 
 	 
 	 
 	 $iconTag="";
 	 if(in_array($codez, $stepz)){$iconTag="go2";}
 	 elseif(in_array($codez, $allThisStage)){
 	 	//$kez=array_search($codez, $allThisStage)
 	 	//''if($kez)
 	 	$iconTag="post"; 
                        }
 	 else{$iconTag="stop";}
 	 
 	 //(in_array($codez, $stepz)) ? "go2" : "stop"; 
 	?>
 
  <img src="images/icon_<? echo $iconTag; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=${allMilestones.$stg}[$sessionIndex][$zx]?>
                        <? } else { echo "&nbsp;"; } ?><br>
                        <? } ?>
                        </td>
                        
				
                        
                    </tr>
                    </table><img src="images/blank.gif" width=1 height=5 border=0 alt=""></td>
                   
                    
                    
                    <? } ?>
                </tr>
                <? } ?>
                </table>
                
                
				 
				
				<!-- MOVE SESSION -->
                <hr>
                Move from milestone <?=$thisMilestone?> to <?=($thisMilestone+1)?>

                <!-- SEND EMAIL -->
                <hr>
                
                 <form name="form2" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
                 
                
                  <input type="hidden" name="moveMile" value="Move">
				 <input type="hidden" name="do2" value="yes">
				 <input type="hidden" name="idSTR" value="<?=$idSTR?>">
				 <input type="hidden" name="idSTR2" value="<?=$idSTR?>">
				 <input type="hidden" name="priorChange" value="<?=$thisMlStartDate?>">
				 
				 
				 
				 <input type="hidden" name="idz" value="<?=$thisUserID?>">
				 <input type="hidden" name="stageID" value="<?=$stgID?>">
				 <input type="hidden" name="moveto" value="<?=($thisMilestone+1)?>">
				  <input type="hidden" name="priorID" value="<?=$thisMilestoneID?>">
				 
				 
				 
                <table border=0 cellpadding=0 cellspacing=0>
                <tr>
                    <td valign="top"><input type="radio" name="" value=1></td>
                    <td valign="top">Send milestone <?=($thisMilestone+1)?> email</td>
                </tr>
                <tr>
                    <td valign="top"><input type="radio" name="" value=2></td>
                    <td valign="top">Send reminder email</td>
                </tr>
                <tr>
                    <td valign="top"><input type="radio" name="" value=1></td>
                    <td valign="top">Send special email (choose)<br>
                    <select name="emailType" size=1>
                    <option value=""></option>
                    </select></td>
                </tr>
                
                <tr>
                    <td valign="top"><input type="submit" name="go" value="Move"></td>
                </tr>
                </table><br>
                
            </form>
				
                
                
                </td>
                <td><img src="images/blank.gif" width=15 height=1 border=0 alt="">
				

				
				
				</td>

                <td valign="top">
				
				
               
                <hr>
				
				
                
                &nbsp;</td>
            </tr>
            </table> 
			<br><br>
			
 <td>
					
					
					
					</td>
            
            
           
           
<?
            }
        //}
    //}
    //remove below when done
//} else {
?>




          <!--  <br>
            <span style="font-size:10pt; color:#CC0000;"><b>OOPS! No participants selected.</b></span><br><br>-->
<?
//}
?>


	
  
           
            &nbsp;</td>
        </tr></table>
        
	<hr><br><br>
              <a href="#top">&lt; back to top</a><br>
		
    <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>  
        
    &nbsp;</td>
</tr>
</table>

</body>
</html>
<? dbClose(); ?>

