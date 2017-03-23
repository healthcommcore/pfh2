<?
include("includes/site-functions.php");
$sectionID="other";
$sql="";
$errMsg="";

// connect to database
$mysqlID=dbConnect();


echo $mysqlID;


// search user records
if ($HTTP_POST_VARS["submitAction"]=="searchUsers") {
    // initialize variables
    $whereClause=array();

    // test for selected criteria
    $runSearch=0;
    $allFilters=array("startdate","id","name","username","stage","session","isLogged");
    reset($allFilters);
    while (list($k,$v)=each($allFilters)) {
        if ($HTTP_POST_VARS["searchBy_".$v]==1) $runSearch++;
        $whereClause[$v]="";
    }
    if ($runSearch<1) $errMsg.="<li>please CHECK OFF the left-column criteria for your search</li>\n";

    // error checking
    if ($HTTP_POST_VARS["searchBy_startdate"]==1) {
        if ($HTTP_POST_VARS["startdateCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Start date, or a <i>RANGE</i> of Start dates</li>\n";
        } else {
            if ($HTTP_POST_VARS["startdateCHOICE"]==1) {
                if (!ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$HTTP_POST_VARS["startdate1"])) {
                    $errMsg.="<li>the <i>specific</i> <b>Start date</b> field is not filled out correctly</li>\n";
                } else {
                    $targetTime0a=mktime(0,0,0,intval(substr($HTTP_POST_VARS["startdate1"],0,2)),intval(substr($HTTP_POST_VARS["startdate1"],3,5)),intval(substr($HTTP_POST_VARS["startdate1"],6,8)));
                    $targetTime0b=mktime(23,59,59,intval(substr($HTTP_POST_VARS["startdate1"],0,2)),intval(substr($HTTP_POST_VARS["startdate1"],3,5)),intval(substr($HTTP_POST_VARS["startdate1"],6,8)));
                    $whereClause["startdate"]="((startdate>".$targetTime0a.") && (startdate<".$targetTime0b."))";
                }
            }
            if ($HTTP_POST_VARS["startdateCHOICE"]==2) {
                if (!ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$HTTP_POST_VARS["startdateRANGE1"]) || !ereg("^[0-9]{2}/[0-9]{2}/[0-9]{2}$",$HTTP_POST_VARS["startdateRANGE2"])) {
                    $errMsg.="<li>the <b>Start date</b> <i>range</i> fields are not filled out correctly</li>\n";
                } else {
                    $targetTime1=mktime(0,0,0,intval(substr($HTTP_POST_VARS["startdateRANGE1"],0,2)),intval(substr($HTTP_POST_VARS["startdateRANGE1"],3,5)),intval(substr($HTTP_POST_VARS["startdateRANGE1"],6,8)));
                    $targetTime2=mktime(23,59,59,intval(substr($HTTP_POST_VARS["startdateRANGE2"],0,2)),intval(substr($HTTP_POST_VARS["startdateRANGE2"],3,5)),intval(substr($HTTP_POST_VARS["startdateRANGE2"],6,8)));
                    if ($targetTime1>$targetTime2) {
                        $tmpTIME=$targetTime1;
                        $targetTime1=$targetTime2;
                        $targetTime2=$tmpTIME;
                        $tmpRANGE=$HTTP_POST_VARS["startdateRANGE1"];
                        $HTTP_POST_VARS["startdateRANGE1"]=$HTTP_POST_VARS["startdateRANGE2"];
                        $HTTP_POST_VARS["startdateRANGE2"]=$tmpRANGE;
                    }
                    $whereClause["startdate"]="((startdate>=".$targetTime1.") AND (startdate<=".$targetTime2."))";
                }
            }
        }
    }
    if ($HTTP_POST_VARS["searchBy_id"]==1) {
        if ($HTTP_POST_VARS["idCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> ID number, or a <i>RANGE</i> of numbers</li>\n";
        } else {
            if ($HTTP_POST_VARS["idCHOICE"]==1) {
                if (strlen($HTTP_POST_VARS["id1"])<1) {
                    $errMsg.="<li>the <i>specific</i> <b>ID number</b> field is empty</li>\n";
                } else {
                    $whereClause["id"]="(user.id=\"".$HTTP_POST_VARS["id1"]."\")";
                }
            }
            if ($HTTP_POST_VARS["idCHOICE"]==2) {
                if ((strlen($HTTP_POST_VARS["idRANGE1"])<1) || (strlen($HTTP_POST_VARS["idRANGE2"])<1)) {
                    $errMsg.="<li>the <b>ID number</b> <i>range</i> is incomplete</li>\n";
                } else {
                    $whereClause["id"]="((id>=\"".$HTTP_POST_VARS["idRANGE1"]."\") AND (id<=\"".$HTTP_POST_VARS["idRANGE2"]."\"))";
                }
            }
        }
    }
    if ($HTTP_POST_VARS["searchBy_name"]==1) {
        if (strlen($HTTP_POST_VARS["name1"])<1) {
            $errMsg.="<li>the <b>Name</b> field is empty</li>\n";
        } else {
            $whereClause["name"]="((firstName LIKE \"%".$HTTP_POST_VARS["name1"]."%\") OR (lastName LIKE \"%".$HTTP_POST_VARS["name1"]."%\"))";
        }
    }
    if ($HTTP_POST_VARS["searchBy_username"]==1) {
        if (strlen($HTTP_POST_VARS["username1"])<1) {
            $errMsg.="<li>the <b>Username</b> field is empty</li>\n";
        } else {
            $whereClause["username"]="(username LIKE \"%".$HTTP_POST_VARS["username1"]."%\")";
        }
    }
    if ($HTTP_POST_VARS["searchBy_stage"]==1) {
        if ($HTTP_POST_VARS["stageCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Stage, or a <i>RANGE</i> of Stages</li>\n";
        } else {
            if ($HTTP_POST_VARS["stageCHOICE"]==1) $whereClause["stage"]="(stage=".$HTTP_POST_VARS["stage1"].")";
            if ($HTTP_POST_VARS["stageCHOICE"]==2) {
                if ($HTTP_POST_VARS["stageRANGE1"]>$HTTP_POST_VARS["stageRANGE2"]) {
                    $tmpRANGE=$HTTP_POST_VARS["stageRANGE1"];
                    $HTTP_POST_VARS["stageRANGE1"]=$HTTP_POST_VARS["stageRANGE2"];
                    $HTTP_POST_VARS["stageRANGE2"]=$tmpRANGE;
                }
                $whereClause["stage"]="((stage>=".$HTTP_POST_VARS["stageRANGE1"].") AND (stage<=".$HTTP_POST_VARS["stageRANGE2"]."))";
            }
        }
    }
    if ($HTTP_POST_VARS["searchBy_session"]==1) {
        if ($HTTP_POST_VARS["sessionCHOICE"]<1) {
            $errMsg.="<li>please indicate whether you're searching for a <i>SPECIFIC</i> Session, or a <i>RANGE</i> of Sessions</li>\n";
        } else {
            if ($HTTP_POST_VARS["sessionRANGE1"]>$HTTP_POST_VARS["sessionRANGE2"]) {
                $tmpRANGE=$HTTP_POST_VARS["sessionRANGE1"];
                $HTTP_POST_VARS["sessionRANGE1"]=$HTTP_POST_VARS["sessionRANGE2"];
                $HTTP_POST_VARS["sessionRANGE2"]=$tmpRANGE;
            }
            if ($HTTP_POST_VARS["sessionCHOICE"]==1) {
                $targetTime0=time()-($HTTP_POST_VARS["session1"]*604800);
                $whereClause["session"]="((startdate>".$targetTime0.") && (startdate<".($targetTime0+604800)."))";
            }
            if ($HTTP_POST_VARS["sessionCHOICE"]==2) {
                if ($HTTP_POST_VARS["sessionRANGE1"]>$HTTP_POST_VARS["sessionRANGE2"]) {
                    $tmpRANGE=$HTTP_POST_VARS["sessionRANGE1"];
                    $HTTP_POST_VARS["sessionRANGE1"]=$HTTP_POST_VARS["sessionRANGE2"];
                    $HTTP_POST_VARS["sessionRANGE2"]=$tmpRANGE;
                }
                $targetTime1=time()-($HTTP_POST_VARS["sessionRANGE1"]*604800);
                $targetTime2=time()-($HTTP_POST_VARS["sessionRANGE2"]*604800);
                $whereClause["session"]="((startdate>".$targetTime2.") && (startdate<".($targetTime1+604800)."))";
            }
        }
    }
    if ($HTTP_POST_VARS["searchBy_isLogged"]==1) {
        if ($HTTP_POST_VARS["isLoggedCHOICE"]<1) {
            $errMsg.="<li>Are you searching for participants who have already logged in, or for those who haven't?</li>\n";
        } else {
            $whereClause["isLogged"]="(isLogged=".(intval($HTTP_POST_VARS["isLoggedCHOICE"])-1).")";
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
            $sql="SELECT * FROM PFHUserInfo ".$whereSTR;
            $nuSql="SELECT * FROM PFHUserInfo AS user, PFHStages AS stgs, PFHMilestones AS mls WHERE stgs.active=1 AND 
mls.stageID=stgs.id AND mls.active=1 ".$whereSTR; 
        }
    }
}


echo $nuSql;
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
                <td width=100% valign="top" class="reportLabels"><img src="images/blank.gif" width=160 height=1 border=0 alt=""><br>Name</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=130 height=1 border=0 alt=""><br>Username</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=100 height=1 border=0 alt=""><br>Start date</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=130 height=1 border=0 alt=""><br>Stage</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=100 height=1 border=0 alt=""><br>Add to report</td>
            </tr>
<?
            $allStages=array("precontemplation","contemplation","preparation","action");
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
?>
            <tr>
                <td valign="top"><?=$specs["id"]?></td>
                <td valign="top"><?=$specs["lastName"].", ".$specs["firstName"]?></td>
                <td valign="top"><?=$specs["username"]?></td>
                <td valign="top"><?=date("n/j/y",$specs["startdate"])?></td>
                <td valign="top"><?=$allStages[$specs["stage"]-1]?></td>
                <td valign="top" align="center"><input type="checkbox" name="allUsers[<?=$specs["id"]?>]" value=1></td>
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

