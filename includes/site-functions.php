<?

 $mysqlID="";
//$publicPages=array();

/*
// CHECK DOMAIN/PATH CONSISTENCY
if ($_SERVER["HTTP_HOST"]=="pfhonline.org") {
    header("Location: http://www.pfhonline.org".$_SERVER["PHP_SELF"]);
    exit();
}
if ($_SERVER["REQUEST_URI"]=="/") {
    header("Location: index.php");
    exit();
}

*/

session_start();

// FUNCTION: DB CONNECT
function dbConnect() {
    $mysqlID=mysql_connect("hccweb2.dfci.harvard.edu","scripts","scripts");
    mysql_select_db("publicWebserver",$mysqlID);
    return $mysqlID;
}


// FUNCTION: DB CLOSE
function dbClose() {
    GLOBAL $mysqlID;
    mysql_close($mysqlID);
}
$mysqlID=dbConnect();



// FUNCTION: CONTENT VIEWED
function contentViewed($cvID) {
    GLOBAL $mysqlID;
    $resultTMP=mysql_query("UPDATE PFHUserInfo SET contentViewed=CONCAT(SUBSTRING(contentViewed,1,".($cvID-1)."),\"1\",SUBSTRING(contentViewed,".($cvID+1).")) WHERE id=".$_SESSION["userID"],$mysqlID);
}




// FUNCTION: MILESTONE - tracks the viewing of milestone content		
function milestone($stepID) {
    GLOBAL $mysqlID;
	
$stg=$_SESSION["stage"];
$thismlstn=$_SESSION["milestone"];
	

 
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
	2=>array("Are you dependent",221,"What are your worries",'023'),
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

 
	
	
	$doRun=false;
	
	if(in_array($stepID, ${allMilestones.$stg}[$thismlstn])){
		$doRun=true;
	}
	
	
	
	
	
	if($doRun){
	
	  $mstnContent=array();
	 	 
	 $mstnContent= $_SESSION["mstnContent"];
	
	 
	 
	if(!in_array($stepID, $mstnContent)){ 
	 
	 $sqla="UPDATE PFHMilestones SET steps=CONCAT(steps, ', ', '$stepID') WHERE userID={$_SESSION["userID"]} AND stageID={$_SESSION["stageID"]} AND id={$_SESSION["milestoneID"]}"; 
	 
	 
	 $result=mysql_query($sqla, $mysqlID);
	 
	 $sqlb="SELECT steps FROM PFHMilestones WHERE userID={$_SESSION["userID"]} AND stageID={$_SESSION["stageID"]} AND id={$_SESSION["milestoneID"]}";
	 
	 $result=mysql_query($sqlb, $mysqlID);
	 
	 $stepz=mysql_fetch_row($result);
	 
	  $_SESSION["mstnContent"]=explode(", ", $stepz[0]);
	 
	
			}
			
	    }
			 
}		
			

  $publicPages=array("/index.php","/logout.php","/logonThankyou.php","/logonFirstThankyou.php","/logonFirst.php","/logonChange.php","/logonRequest.php");
  

  
  
// VERIFY SESSION VARIABLE: USERID

	if (strlen($_SESSION["userID"])<1) {
    // 1) check querystring and cookie for userID
		    if (strlen($_GET["userID"])>0) {
		        $_SESSION["username"]=$_GET["username"];
		        $_SESSION["userID"]=$_GET["userID"];
		        $_SESSION["stageID"]=$_GET["stageID"];
		    } elseif (strlen($_COOKIE["userID"])>0) {
		       $_SESSION["username"]=$_COOKIE["username"];
		        $_SESSION["userID"]=$_COOKIE["userID"];
		        $_SESSION["stageID"]=$_COOKIE["stageID"];
		    }
    // 2) check REFERER for userID
    if (strlen($_SESSION["userID"])<1) {
        $urlParts=parse_url($_SERVER["HTTP_REFERER"]);
        if ($urlParts["query"]) {
            $queryParts=split("&",$urlParts["query"]);
            while (list($k,$v)=each($queryParts)) {
                if (substr($v,0,7)=="userID=") {
                    header("Location: ".$_SERVER["PHP_SELF"]."?".$v."&".$queryParts[$k+1]);
                    exit();
                }
            }
        }
    }
    
  
    
    
    // USERID NOT FOUND: return to login page
    if ((strlen($_SESSION["userID"])<1) && (!in_array($_SERVER["PHP_SELF"],$publicPages))) {
?>


<html>
<head><title></title></head>
<body onLoad="document.form1.submit();">
<form name="form1" method="POST" action="http://dev.pfhonline.org/index.php">
<input type="hidden" name="refererURL" value="<?=$_SERVER["PHP_SELF"]?>">
</form>
</body>
</html>

<?
        exit();
    }
    
   
}



$weekNum=0;

// LOAD USER SPECS
if ((strlen($_SESSION["userID"])>0) && (!in_array($_SERVER["PHP_SELF"], $publicPages))) {
    GLOBAL $mysqlID;
    $sqlall="SELECT *, user.stage AS stage, user.id AS thisUserID, MIN(sessionDateTime), MAX(sessionDateTime) FROM PFHUserInfo AS user, PFHStages AS stgs, PFHMilestones AS mls, PFHSessions AS ses WHERE user.id={$_SESSION["userID"]} AND stgs.userID=user.id AND stgs.active=1 AND mls.stageID=stgs.id AND mls.active=1 AND ses.userID=user.id  GROUP BY user.id"; 
    $resultIDall=mysql_query($sqlall, $mysqlID);
	    if ($resultIDall) {
	        if (mysql_num_rows($resultIDall)>0) {
	            $userSpecs=mysql_fetch_array($resultIDall,MYSQL_ASSOC);
	        }
	    }
	    
	    
	 $nowz=time();
	 
    $sql6="INSERT INTO PFHPages (userID, sessionID, filename, hitTime) VALUES ({$_SESSION["userID"]}, '{$_SESSION["sessID"]}', '{$_SERVER["PHP_SELF"]}', {$nowz})";
    $resultID6=mysql_query($sql6, $mysqlID);
    
    $weekNum=floor((time()-$userSpecs["startdate"])/604800)+1;
    if ($weekNum>11) $weekNum=12;
    
    $quitDate=$userSpecs["quitDate"];
    
    $thisMilestone=$userSpecs["milestone"];
}





// FUNCTION: TO-DO LIST
function toDoList() {
    GLOBAL $userSpecs, $mysqlID;
    $reportCARD=array();
    $allStages=array("precontemplation","contemplation","preparation","action");
    $allMilestones=array(
        "a1"=>array(10,"you_prosCons.php","How you feel about smoking"),
        "a2"=>array(11,"you_journal.php","Your Journal"),
    
        // stage 1, precontemplation
        "b1"=>array(19,"health_manual-1c.php","Guide to Healthy Decisions: Are You Physically Dependent on Cigarettes?"),
        "b2"=>array(21,"health_manual-1e.php","Guide to Healthy Decisions: Why Think about Quitting?"),
        "b3"=>array(22,"health_manual-1e2.php","Guide to Healthy Decisions: Quitting Smoking: What Gets in Your Way?"),
        "b4"=>array(23,"health_manual-1f.php","Guide to Healthy Decisions: Some Small Steps"),
        "b5"=>array(24,"health_manual-1g.php","Guide to Healthy Decisions: Change is Good"),
        "b6"=>array(25,"health_manual-1g2.php","Guide to Healthy Decisions: Positive Thinking"),
        // stage 2, contemplation
        "c1"=>array(29,"health_manual-2c.php","Guide to Your Goals: Are You Physically Dependent on Cigarettes?"),
        "c2"=>array(31,"health_manual-2e.php","Guide to Your Goals: Whys, Wheres, and Whens of Your Smoking"),
        "c3"=>array(32,"health_manual-2f.php","Guide to Your Goals: What's Good About Smoking?  What's Bad?"),
        "c4"=>array(33,"health_manual-2f2.php","Guide to Your Goals: Quitting Smoking: What Gets in Your Way?"),
        "c5"=>array(34,"health_manual-2g.php","Guide to Your Goals: Why Think More Seriously About Quitting?"),
        "c6"=>array(35,"health_manual-2h.php","Guide to Your Goals: What are Your Worries about Quitting Smoking?"),
        "c7"=>array(36,"health_manual-2i.php","Guide to Your Goals: Some Small Steps"),
        "c8"=>array(37,"health_manual-2j.php","Guide to Your Goals: The Next Step"),
        // stage 3, preparation
        "d1"=>array(43,"health_manual-3e.php","Guide to Getting Ready: Soothing Your Symptoms"),
        "d2"=>array(44,"health_manual-3f.php","Guide to Getting Ready: Cutting Out Cravings"),
        "d3"=>array(47,"health_manual-3i.php","Guide to Getting Ready: Help from Friends and Family"),
        "d4"=>array(48,"health_manual-3j.php","Guide to Getting Ready: Exercise"),
        "d5"=>array(49,"health_manual-3k.php","Guide to Getting Ready: Worrying About Weight"),
        "d6"=>array(50,"health_manual-3l.php","Guide to Getting Ready: Setting a Quit Date!"),
        // stage 4, action
        "e1"=>array(52,"health_manual-4b.php","Guide to Action: Taming Cravings"),
        "e2"=>array(53,"health_manual-4b2.php","Guide to Action: People and Places"),
        "e3"=>array(55,"health_manual-4d.php","Guide to Action: Healthy Snacking"),
        "e4"=>array(56,"health_manual-4e.php","Guide to Action: Exercise"),
        "e5"=>array(58,"health_manual-4g.php","Guide to Action: Celebrate the New You!"),
        "e6"=>array(59,"health_manual-4h.php","Guide to Action: Reward Yourself"),
    
        "f1"=>array(61,"health_bodyguy.php","Your Body"),
        "f2"=>array(105,"health_dependency.php","Are You Physically Dependent on Cigarettes?"),
        "f3"=>array(106,"health_pharmo.php","Quit-smoking Medications"),
        "f4"=>array(115,"/forum/viewforum.php?f=1","Forums"),
        "f5"=>array(130,"news_cost-benefits.php","Your Money and Your Life"),
        "f6"=>array(131,"news_cig-quiz.php","Do You Know What You're Smoking?"));
        
        
        
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            while (list($k,$v)=each($allMilestones)) {
                $stageKey="b";
                if ($userSpecs["stage"]==2) $stageKey="c";
                if ($userSpecs["stage"]==3) $stageKey="d";
                if ($userSpecs["stage"]==4) $stageKey="e";
                if ((substr($k,0,1)=="a") || (substr($k,0,1)=="f") || (substr($k,0,1)==$stageKey)) {
                    if (substr($specs["contentViewed"],($v[0]-1),1)=="0") {
                        $reportCARD[]="<li><a href=\"".$v[1]."\">".$v[2]."</a></li>\n";
                    }
                }
            }
        }
    }
    return($reportCARD);
}
?>