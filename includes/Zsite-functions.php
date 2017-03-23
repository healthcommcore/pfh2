<?
// CHECK DOMAIN/PATH CONSISTENCY
//if ($_SERVER["HTTP_HOST"]=="hccweb1") {
//    header("Location: http://dev.pfhonline.org".$_SERVER["PHP_SELF"]);
//    exit();
//}
if ($_SERVER["REQUEST_URI"]=="/") {
    header("Location: index.php");
    exit();
}

// FUNCTION: DB CONNECT
function dbConnect() {
    $mysqlID=mysql_connect("dfci.harvard.edu","scripts","scripts");
    mysql_select_db("publicWebserver",$mysqlID);
    return $mysqlID;
}
// FUNCTION: DB CLOSE
function dbClose() {
    GLOBAL $mysqlID;
    mysql_close($mysqlID);
}

// FUNCTION: CONTENT VIEWED
function contentViewed($cvID) {
    $mysqlID=dbConnect();
    $resultTMP=mysql_query("UPDATE PFHUserInfo SET contentViewed=CONCAT(SUBSTRING(contentViewed,1,".($cvID-1)."),\"1\",SUBSTRING(contentViewed,".($cvID+1).")) WHERE id=".$_SESSION["userID"],$mysqlID);
    dbClose();
}

// VERIFY SESSION VARIABLE: USERID

if ($HTTP_GET_VARS["user"]=="karen") $_SESSION["userID"]=18;
if (strlen($_SESSION["userID"])<1) {
    // 1) check querystring and cookie for userID
    if (strlen($HTTP_GET_VARS["userID"])>0) {
        $_SESSION["username"]=$HTTP_GET_VARS["username"];
        $_SESSION["userID"]=$HTTP_GET_VARS["userID"];
        $_SESSION["stageID"]=$HTTP_GET_VARS["stageID"];
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
    $publicPages=array("/index.php","/logout.php","/logonThankyou.php","/logonFirstThankyou.php","/logonFirst.php","/logonChange.php","/logonRequest.php");
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


// LOAD USER SPECS
if ((strlen($_SESSION["userID"])>0) && (!in_array($_SERVER["PHP_SELF"],$publicPages))) {
    $mysqlID=dbConnect();
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $userSpecs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        }
    }
    $resultID=mysql_query("INSERT INTO PFHPages (userID,filename,hitTime) VALUES (".$_SESSION["userID"].",\"".$_SERVER["PHP_SELF"]."\",".time().")",$mysqlID);
    dbClose();
    $weekNum=floor((time()-$userSpecs["startdate"])/604800)+1;
    if ($weekNum>11) $weekNum=12;
    $quitDate=$userSpecs["quitDate"];
}



// FUNCTION: TO-DO LIST
function toDoList() {
    GLOBAL $userSpecs;
    $mysqlID=dbConnect();
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
    dbClose();
    return($reportCARD);
}
?>