<?
include("includes/site-functions.php");
$sectionID="other";
$sql="";
$errMsg="";

// connect to database
$mysqlID=dbConnect();


//echo $mysqlID;


// search user records
if ($HTTP_POST_VARS["submitAction"]=="searchUsers") {
    // initialize variables
    $whereClause=array();

    // test for selected criteria
    $runSearch=0;
    $allFilters=array("startdate","id","name","username","stage","session","isLogged");
    reset($allFilters);
    while (list($k,$v)=each($allFilters)) {
        if ($_POST["searchBy_".$v]==1) $runSearch++;
        $whereClause[$v]="";
    }
    if ($runSearch<1) $errMsg.="<li>please CHECK OFF the left-column criteria for your search</li>\n";

    // error checking
    if ($_POST["searchBy_startdate"]==1) {
        if ($_POST["startdateCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Start date, or a <i>RANGE</i> of Start dates</li>\n";
        } else {
            if ($_POST["startdateCHOICE"]==1) {
                if (!ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$_POST["startdate1"])) {
                    $errMsg.="<li>the <i>specific</i> <b>Start date</b> field is not filled out correctly</li>\n";
                } else {
                    $targetTime0a=mktime(0,0,0,intval(substr($_POST["startdate1"],0,2)),intval(substr($_POST["startdate1"],3,5)),intval(substr($_POST["startdate1"],6,8)));
                    $targetTime0b=mktime(23,59,59,intval(substr($_POST["startdate1"],0,2)),intval(substr($_POST["startdate1"],3,5)),intval(substr($_POST["startdate1"],6,8)));
                    //$whereClause["startdate"]="((user.startdate>".$targetTime0a.") && (startdate<".$targetTime0b."))";
                     $whereClause["startdate"]="(user.startdate BETWEEN {$targetTime0a} AND {$targetTime0b})";
                    
                }
            }
            if ($_POST["startdateCHOICE"]==2) {
                if (!ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$_POST["startdateRANGE1"]) || !ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$_POST["startdateRANGE2"])) {
                    $errMsg.="<li>the <b>Start date</b> <i>range</i> fields are not filled out correctly</li>\n";
                } else {
                    $targetTime1=mktime(0,0,0,intval(substr($_POST["startdateRANGE1"],0,2)),intval(substr($_POST["startdateRANGE1"],3,5)),intval(substr($_POST["startdateRANGE1"],6,8)));
                    $targetTime2=mktime(23,59,59,intval(substr($_POST["startdateRANGE2"],0,2)),intval(substr($_POST["startdateRANGE2"],3,5)),intval(substr($_POST["startdateRANGE2"],6,8)));
                    if ($targetTime1>$targetTime2) {
                        $tmpTIME=$targetTime1;
                        $targetTime1=$targetTime2;
                        $targetTime2=$tmpTIME;
                        $tmpRANGE=$_POST["startdateRANGE1"];
                        $_POST["startdateRANGE1"]=$_POST["startdateRANGE2"];
                        $_POST["startdateRANGE2"]=$tmpRANGE;
                    }
                   // $whereClause["startdate"]="((startdate>=".$targetTime1.") AND (startdate<=".$targetTime2."))";
                   $whereClause["startdate"]="(user.startdate BETWEEN {$targetTime1} AND {$targetTime2})"; 
                    
                }
            }
        }
    }
    if ($_POST["searchBy_id"]==1) {
        if ($_POST["idCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> ID number, or a <i>RANGE</i> of numbers</li>\n";
        } else {
            if ($_POST["idCHOICE"]==1) {
                if (strlen($_POST["id1"])<1) {
                    $errMsg.="<li>the <i>specific</i> <b>ID number</b> field is empty</li>\n";
                } else {
                    $whereClause["id"]="(user.id='".$_POST["id1"]."')";
                }
            }
            if ($_POST["idCHOICE"]==2) {
                if ((strlen($_POST["idRANGE1"])<1) || (strlen($_POST["idRANGE2"])<1)) {
                    $errMsg.="<li>the <b>ID number</b> <i>range</i> is incomplete</li>\n";
                } else {
                    //$whereClause["id"]="((id>=\"".$_POST["idRANGE1"]."\") AND (id<=\"".$_POST["idRANGE2"]."\"))";
                    
                    $whereClause["id"]="(user.id BETWEEN {$_POST["idRANGE1"]} AND {$_POST["idRANGE2"]})";
                }
            }
        }
    }
    
    if ($_POST["searchBy_name"]==1) {
    	
        if (strlen($_POST["name1"])<1&&strlen($_POST["name2"])<1) {
            $errMsg.="<li>both the <b>First and Last Name</b> fields are empty</li>\n";
        } else {
        	
        	
		        	if(strlen($_POST["name1"])>1&&strlen($_POST["name2"])<1){
		        	 $whereClause["name"]="(firstName LIKE '%{$_POST["name1"]}%')" ;	
		        	}
		        	
		        	elseif(strlen($_POST["name2"])>1&&strlen($_POST["name1"])<1){
		        	 $whereClause["name"]="(lastName LIKE '%{$_POST["name2"]}%')" ;	
		        	}
		        	
		        	elseif(strlen($_POST["name1"])>1&&strlen($_POST["name2"])>1){
		        	 $whereClause["name"]="(firstName LIKE '%{$_POST["name1"]}%' AND lastName LIKE '%{$_POST["name2"]}%')" ;	
		        	}
        	
           
        }
    }
    
    
    
    if ($_POST["searchBy_username"]==1) {
        if (strlen($_POST["username1"])<1) {
            $errMsg.="<li>the <b>Username</b> field is empty</li>\n";
        } else {
            $whereClause["username"]="(user.username LIKE \"%".$_POST["username1"]."%\")";
        }
    }
    
    if ($_POST["searchBy_stage"]==1) {
        if ($_POST["stageCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Stage, or a <i>RANGE</i> of Stages</li>\n";
        } else {
            if ($_POST["stageCHOICE"]==1) $whereClause["stage"]="(stgs.stage=".$_POST["stage1"].")";
            if ($_POST["stageCHOICE"]==2) {
                if ($_POST["stageRANGE1"]>$_POST["stageRANGE2"]) {
                    $tmpRANGE=$_POST["stageRANGE1"];
                    $_POST["stageRANGE1"]=$_POST["stageRANGE2"];
                    $_POST["stageRANGE2"]=$tmpRANGE;
                }
                //$whereClause["stage"]="((stage>=".$_POST["stageRANGE1"].") AND (stage<=".$_POST["stageRANGE2"]."))";
                
                $whereClause["stage"]="(stgs.stage BETWEEN {$_POST["stageRANGE1"]} AND {$_POST["stageRANGE2"]})";
            }
        }
    }
    if ($_POST["searchBy_session"]==1) {
        if ($_POST["sessionCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Session, or a <i>RANGE</i> of Sessions</li>\n";
        } else {
            if ($_POST["sessionRANGE1"]>$_POST["sessionRANGE2"]) {
                $tmpRANGE=$_POST["sessionRANGE1"];
                $_POST["sessionRANGE1"]=$_POST["sessionRANGE2"];
                $_POST["sessionRANGE2"]=$tmpRANGE;
            }
            if ($_POST["sessionCHOICE"]==1) {
                $targetTime0=time()-($_POST["session1"]*604800);
                $whereClause["session"]="((startdate>".$targetTime0.") && (startdate<".($targetTime0+604800)."))";
            }
            if ($_POST["sessionCHOICE"]==2) {
                if ($_POST["sessionRANGE1"]>$_POST["sessionRANGE2"]) {
                    $tmpRANGE=$_POST["sessionRANGE1"];
                    $_POST["sessionRANGE1"]=$_POST["sessionRANGE2"];
                    $_POST["sessionRANGE2"]=$tmpRANGE;
                }
                $targetTime1=time()-($_POST["sessionRANGE1"]*604800);
                $targetTime2=time()-($_POST["sessionRANGE2"]*604800);
                $whereClause["session"]="((startdate>".$targetTime2.") && (startdate<".($targetTime1+604800)."))";
            }
        }
    }
    if ($_POST["searchBy_isLogged"]==1) {
        if ($_POST["isLoggedCHOICE"]<1) {
            $errMsg.="<li>Are you searching for participants who have already logged in, or for those who haven't?</li>\n";
        } else {
            $whereClause["isLogged"]="(isLogged=".(intval($_POST["isLoggedCHOICE"])-1).")";
        }
    }

    // build WHERE clause
    if (strlen($errMsg)<1) {
        $whereSTR="";
        reset($allFilters);
        while (list($k,$v)=each($allFilters)) {
            if (strlen($whereClause[$v])>0) {
               // if (strlen($whereSTR)>0) {
                    $whereSTR.=" AND ";
               // } else {
                 //   $whereSTR="WHERE ";
                //}
                $whereSTR.=$whereClause[$v];
            }
        }
        if (strlen($whereSTR)>0) {
            $ORIGsql="SELECT * FROM PFHUserInfo ".$whereSTR;
            $sql="SELECT *, MIN(sessionDateTime), MAX(sessionDateTime) FROM PFHUserInfo AS user, PFHStages AS stgs, PFHMilestones AS mls, PFHSessions AS ses WHERE stgs.userID=user.id AND stgs.active=1 AND mls.stageID=stgs.id AND mls.active=1 AND ses.userID=user.id ".$whereSTR." GROUP BY user.id"; 
        }
    }
}


echo $sql;
?>









<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript">
    <!--
    // FUNCTION: CHECK ALL
    function checkAll() {
        for (var i=0; i<document["form2"].length; i++) {
            if (document["form2"][i].name.substring(0,8)=="allUsers") document["form2"][i].checked=true;
        }
    }
    function clearAll() {
        for (var i=0; i<document["form2"].length; i++) {
            if (document["form2"][i].name.substring(0,8)=="allUsers") document["form2"][i].checked=false;
        }
    }

    // FUNCTION: SHOW RECORDS
    function showRecords() {
        var boxesChecked=false;
        
        for (var i=0; i<document["form2"].length; i++) {
            if (document["form2"][i].name.substring(0,8)=="allUsers") {
                if (document["form2"][i].checked) boxesChecked=true;
            }
        }
        if (!boxesChecked) {
            alert("Please check some boxes first - thanks.")
        } else {
            document["form2"].submit();
        }
    }
    //-->
    
    
    
    </script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    </style>
</head>


<body bgcolor="#D9E6A8">
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br><br>

<?
// create search box
include("includes/searchBox.php");

// display any errors
if (strlen($errMsg)>0) echo "<span style=\"font-size:10pt; color:#CC0000;\"><b>OOPS!</b><ul>".$errMsg."</ul></span>\n";

// display any search results
if (strlen($sql." ORDER BY startdate")>0) {
    $resultID=mysql_query($sql,$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
        	
        
?>
            <hr><br>
            <span style="font-size:10pt; font-weight:bold;">Results <i>(<?=mysql_num_rows($resultID)?> participant<? if (mysql_num_rows($resultID)>1) echo "s"; ?>)</i>:</span><br><br>
            
            
            <form name="form2" method="POST" action="user-reports.php">
            <table border=1 cellpadding=4 cellspacing=0 width=670 bgColor="#FFFFE0">
            <tr bgcolor="#006666">
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=50 height=1 border=0 alt=""><br>ID</td>
                <td width=100% valign="top" class="reportLabels"><img src="images/blank.gif" width=120 height=1 border=0 alt=""><br>Name</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Username</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Import date </td>
                 <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>First login</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=130 height=1 border=0 alt=""><br>Stage</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=70 height=1 border=0 alt=""><br>Last login</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=50 height=1 border=0 alt=""><br>Add to report</td>
            </tr>
<?
            $allStages=array("precontemplation","contemplation","preparation","action");
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            	
            		//print_r($specs);
?>
            <tr>
                <td valign="top"><?=$specs["userID"]?></td>
                <td valign="top"><?=$specs["lastName"].", ".$specs["firstName"]?></td>
                <td valign="top"><?=$specs["username"]?></td>
                <td valign="top"><?=date("n/j/y",$specs["startdate"])?></td>
                <td valign="top"><?=date("n/j/y",$specs["MIN(sessionDateTime)"])?></td>
                <td valign="top"><?=$allStages[$specs["stage"]-1]?></td>                
                <td valign="top"><?=date("n/j/y",$specs["MAX(sessionDateTime)"])?></td>
                <td valign="top" align="center"><input type="checkbox" name="allUsers[<?=$specs["userID"]?>]" value=1></td>
            </tr>
<?

            }
            
      
?>
            </table>
            <table border=0 cellpadding=13 cellspacing=0 width=745>
            <tr>
                <td align="right" valign="top" width=745>
                <a href="javascript:checkAll();">check all boxes</a>&nbsp;&nbsp;<br>
                <a href="javascript:clearAll();">clear all boxes</a>&nbsp;&nbsp;<br><img src="images/blank.gif" width=1 height=5 border=0 alt=""><br>
                <input type="button" value="Show Report" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;" onClick="showRecords();"></td>
            </tr>
            </table>
            </form>
<?
        }
    }
}
?>


            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
<? dbClose(); ?>

