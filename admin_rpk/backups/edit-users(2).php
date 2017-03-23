<?
include("includes/site-functions.php");
$sectionID="other";
$errMsg="";

// connect to database
$mysqlID=dbConnect();


// UPDATE USER STATS
if ($HTTP_POST_VARS["submitPage"]=="updateStats") {
    $HTTP_POST_VARS["startdate"]=mktime(1,0,0,$HTTP_POST_VARS["startMonth"],$HTTP_POST_VARS["startDay"],$HTTP_POST_VARS["startYear"]);
    if (strlen($HTTP_POST_VARS["treatmentRadiation"])<1) $HTTP_POST_VARS["treatmentRadiation"]=0;
    if (strlen($HTTP_POST_VARS["treatmentChemotherapy"])<1) $HTTP_POST_VARS["treatmentChemotherapy"]=0;
    if (strlen($HTTP_POST_VARS["treatmentSurgery"])<1) $HTTP_POST_VARS["treatmentSurgery"]=0;
    if (strlen($HTTP_POST_VARS["treatmentUnknown"])<1) $HTTP_POST_VARS["treatmentUnknown"]=0;
    if (strlen($HTTP_POST_VARS["firstName"])<1) $errMsg.="<li>Please be sure to include the user's first name.</li>\n";
    if (strlen($HTTP_POST_VARS["lastName"])<1) $errMsg.="<li>Please be sure to include the user's last name.</li>\n";
    if (strlen($HTTP_POST_VARS["username"])<1) $errMsg.="<li>Make sure the username has been filled out. Thanks.</li>\n";
    if (strlen($HTTP_POST_VARS["password"])<1) $errMsg.="<li>Make sure the password has beenf illed out. Thanks.</li>\n";
    if (strlen($HTTP_POST_VARS["email"])<1) $errMsg.="<li>Please include an email address.</li>\n";
//    if (($HTTP_POST_VARS["startMonth"]<1) || ($HTTP_POST_VARS["startDay"]<1) || ($HTTP_POST_VARS["startYear"]<2005)) $errMsg.="<li>Be sure to fill out a complete start date.</li>\n";
    if (($HTTP_POST_VARS["treatmentRadiation"]<1) && ($HTTP_POST_VARS["treatmentChemotherapy"]<1) && ($HTTP_POST_VARS["treatmentSurgery"]<1) && ($HTTP_POST_VARS["treatmentUnknown"]<1)) $errMsg.="<li>Please pick a treatment type.</li>\n";
    if ($HTTP_POST_VARS["smokingIncreasesProblems"]<1) $errMsg.="<li>Does the user agree that smoking may increase the user's chances of developing health problems?</li>\n";
    if ($HTTP_POST_VARS["isAddicted"]<1) $errMsg.="<li>Please indicate whether or not the user is addicted to nicotine.</li>\n";
    if ($HTTP_POST_VARS["friendsSmoke"]<1) $errMsg.="<li>Please indicate whether or not the user's friends and family smoke.</li>\n";
    if ($HTTP_POST_VARS["stage"]<1) $errMsg.="<li>Please indicate the user's stage of change.</li>\n";
    if (strlen($errMsg)<1) {
        $sql="UPDATE PFHUserInfo SET ";
        $sql.="firstName=\"".$HTTP_POST_VARS["firstName"]."\", ";
        $sql.="lastName=\"".$HTTP_POST_VARS["lastName"]."\", ";
        $sql.="username=\"".$HTTP_POST_VARS["username"]."\", ";
        $sql.="password=\"".$HTTP_POST_VARS["password"]."\", ";
        $sql.="email=\"".$HTTP_POST_VARS["email"]."\", ";
        $sql.="startdate=".$HTTP_POST_VARS["startdate"].", ";
        $sql.="gender=\"".$HTTP_POST_VARS["gender"]."\", ";
        $sql.="treatmentRadiation=".$HTTP_POST_VARS["treatmentRadiation"].", ";
        $sql.="treatmentChemotherapy=".$HTTP_POST_VARS["treatmentChemotherapy"].", ";
        $sql.="treatmentSurgery=".$HTTP_POST_VARS["treatmentSurgery"].", ";
        $sql.="treatmentUnknown=".$HTTP_POST_VARS["treatmentUnknown"].", ";
        $sql.="smokingIncreasesProblems=".$HTTP_POST_VARS["smokingIncreasesProblems"].", ";
        $sql.="isAddicted=".$HTTP_POST_VARS["isAddicted"].", ";
        $sql.="friendsSmoke=".$HTTP_POST_VARS["friendsSmoke"].", ";
        $sql.="stage=".$HTTP_POST_VARS["stage"]." ";
        $sql.="WHERE id=".$HTTP_POST_VARS["userID"];
        $resultID=mysql_query($sql,$mysqlID);
        header("Location: edit-users.php?savedOK=1&userID=".$HTTP_POST_VARS["userID"]);
        exit();
    }
}

// ADD NEW USER
if ($HTTP_POST_VARS["submitPage"]=="addUser") {
    $HTTP_POST_VARS["startdate"]=mktime(1,0,0,$HTTP_POST_VARS["startMonth"],$HTTP_POST_VARS["startDay"],$HTTP_POST_VARS["startYear"]);
    if (strlen($HTTP_POST_VARS["treatmentRadiation"])<1) $HTTP_POST_VARS["treatmentRadiation"]=0;
    if (strlen($HTTP_POST_VARS["treatmentChemotherapy"])<1) $HTTP_POST_VARS["treatmentChemotherapy"]=0;
    if (strlen($HTTP_POST_VARS["treatmentSurgery"])<1) $HTTP_POST_VARS["treatmentSurgery"]=0;
    if (strlen($HTTP_POST_VARS["treatmentUnknown"])<1) $HTTP_POST_VARS["treatmentUnknown"]=0;
    if (strlen($HTTP_POST_VARS["firstName"])<1) $errMsg.="<li>Please be sure to include the user's first name.</li>\n";
    if (strlen($HTTP_POST_VARS["lastName"])<1) $errMsg.="<li>Please be sure to include the user's last name.</li>\n";
    if (strlen($HTTP_POST_VARS["username"])<1) $errMsg.="<li>Make sure the username has been filled out. Thanks.</li>\n";
    if (strlen($HTTP_POST_VARS["password"])<1) $errMsg.="<li>Make sure the password has beenf illed out. Thanks.</li>\n";
    if (strlen($HTTP_POST_VARS["email"])<1) $errMsg.="<li>Please include an email address.</li>\n";
    if (($HTTP_POST_VARS["startMonth"]<1) || ($HTTP_POST_VARS["startDay"]<1) || ($HTTP_POST_VARS["startYear"]<2005)) $errMsg.="<li>Be sure to fill out a complete start date.</li>\n";
    if (($HTTP_POST_VARS["treatmentRadiation"]<1) && ($HTTP_POST_VARS["treatmentChemotherapy"]<1) && ($HTTP_POST_VARS["treatmentSurgery"]<1) && ($HTTP_POST_VARS["treatmentUnknown"]<1)) $errMsg.="<li>Please pick a treatment type.</li>\n";
    if ($HTTP_POST_VARS["smokingIncreasesProblems"]<1) $errMsg.="<li>Does the user agree that smoking may increase the user's chances of developing health problems?</li>\n";
    if ($HTTP_POST_VARS["isAddicted"]<1) $errMsg.="<li>Please indicate whether or not the user is addicted to nicotine.</li>\n";
    if ($HTTP_POST_VARS["friendsSmoke"]<1) $errMsg.="<li>Please indicate whether or not the user's friends and family smoke.</li>\n";
    if ($HTTP_POST_VARS["stage"]<1) $errMsg.="<li>Please indicate the user's stage of change.</li>\n";
    if (strlen($errMsg)<1) {
        $sql="INSERT INTO PFHUserInfo (firstName,lastName,username,password,email,startdate,gender,treatmentRadiation,treatmentChemotherapy,treatmentSurgery,treatmentUnknown,smokingIncreasesProblems,isAddicted,friendsSmoke,stage) VALUES(";
        $sql.="\"".$HTTP_POST_VARS["firstName"]."\",";
        $sql.="\"".$HTTP_POST_VARS["lastName"]."\",";
        $sql.="\"".$HTTP_POST_VARS["username"]."\",";
        $sql.="\"".$HTTP_POST_VARS["password"]."\",";
        $sql.="\"".$HTTP_POST_VARS["email"]."\",";
        $sql.=$HTTP_POST_VARS["startdate"].",";
        $sql.="\"".$HTTP_POST_VARS["gender"]."\",";
        $sql.=$HTTP_POST_VARS["treatmentRadiation"].",";
        $sql.=$HTTP_POST_VARS["treatmentChemotherapy"].",";
        $sql.=$HTTP_POST_VARS["treatmentSurgery"].",";
        $sql.=$HTTP_POST_VARS["treatmentUnknown"].",";
        $sql.=$HTTP_POST_VARS["smokingIncreasesProblems"].",";
        $sql.=$HTTP_POST_VARS["isAddicted"].",";
        $sql.=$HTTP_POST_VARS["friendsSmoke"].",";
        $sql.=$HTTP_POST_VARS["stage"].")";
        $resultID=mysql_query($sql,$mysqlID);
        header("Location: edit-users.php?savedOK=1&userID=".mysql_insert_id());
        exit();
    }
}

// DELETE USER
if ($HTTP_POST_VARS["submitPage"]=="deleteUser") {
    $resultIDTMP=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$HTTP_POST_VARS["userID"],$mysqlID);
    if ($resultIDTMP) {
        if (mysql_num_rows($resultIDTMP)>0) {
            $specsTMP=mysql_fetch_array($resultIDTMP,MYSQL_ASSOC);
        }
    }
    if (strlen($specsTMP["studyID"])>0) {
        $sql="DELETE FROM PFHUserInfo WHERE studyID=\"".$specsTMP["studyID"]."\"";
        $resultID=mysql_query($sql,$mysqlID);
        $sql="DELETE FROM PFHSurveyData WHERE studyID=\"".$specsTMP["studyID"]."\"";
        $resultID=mysql_query($sql,$mysqlID);
        $sql="DELETE FROM PFHMailingInfo WHERE studyID=\"".$specsTMP["studyID"]."\"";
        $resultID=mysql_query($sql,$mysqlID);
    }
    header("Location: edit-users.php");
    exit();
}

// LOAD USER SPECS
if (strlen($errMsg)<1) {
    if (strlen($HTTP_GET_VARS["userID"])>0) {
        $HTTP_POST_VARS["submitPage"]="loadUser";
        $HTTP_POST_VARS["userID"]=$HTTP_GET_VARS["userID"];
    }
    if ($HTTP_POST_VARS["submitPage"]=="loadUser") {
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$HTTP_POST_VARS["userID"],$mysqlID);
        if ($resultID) {
            if (mysql_num_rows($resultID)>0) {
                $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
                $HTTP_POST_VARS=$specs;
                $HTTP_POST_VARS["userID"]=$specs["id"];
            }
        }
    }
    if ($HTTP_GET_VARS["savedOK"]==1) $errMsg="<li style=\"color:#0000FF\">Data saved successfully.</li>\n";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SET START DATE
    function setStartdate(m,d,y) {
        document["form2"]["startMonth"].options[m].selected=true;
        document["form2"]["startDay"].options[d].selected=true;
        document["form2"]["startYear"].options[(y-2004)].selected=true;
    }
    
    // FUNCTION: ADD USER
    function addUser() {
        document["form1"]["submitPage"].value="newUser";
        document["form1"].submit();
    }

    // FUNCTION: DELETE USER
    function deleteUser() {
        var si=document["form1"]["userID"].selectedIndex;
        var uName=document["form1"]["userID"].options[si].text;
        if (confirm("Do you really want to delete "+uName+"?")) {
            document["form1"]["submitPage"].value="deleteUser";
            document["form1"].submit();
        }
    }
    //-->
    </script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
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

            <a href="index.php">BACK to admin home</a><br><br><br>

            <span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">EDIT USERS</span><br>
            <form name="form1" method="POST" action="edit-users.php">
            <input type="hidden" name="submitPage" value="loadUser">
            <select name="userID" size=1>
<?
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (id>9) ORDER BY username",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
?>
            <option value="<?=$specs["id"]?>"<? if ($HTTP_POST_VARS["userID"]==$specs["id"]) echo " selected"; ?>><?=$specs["username"]?></option>
<?
        }
    }
}
?>
            </select> <input type="submit" value="edit"> <input type="button" value="new" onClick="addUser();"> <input type="button" value="delete" onClick="deleteUser();"><br>
            </form><br>

<? if (strlen($errMsg)>0) echo "<ul style=\"font-size:12pt; color:#CC0000; font-weight:bold;\">".$errMsg."</ul>\n"; ?>
<? if (($HTTP_POST_VARS["userID"]>0) || ($HTTP_POST_VARS["submitPage"]=="newUser") || ($HTTP_POST_VARS["submitPage"]=="addUser")) { ?>
            <form name="form2" method="POST" action="edit-users.php">
<? if (($HTTP_POST_VARS["submitPage"]=="newUser") || ($HTTP_POST_VARS["submitPage"]=="addUser")) { ?>
            <input type="hidden" name="submitPage" value="addUser">
<? } else { ?>
            <input type="hidden" name="submitPage" value="updateStats">
            <input type="hidden" name="userID" value="<?=$HTTP_POST_VARS["userID"]?>">
<? } ?>
            <table border=0 cellpadding=4 cellspacing=0 width=780>
            <tr><td align="right" valign="top" width=160><img src="/images/blank.gif" width=160 height=1></td><td width=610 valign="top" style="color:#000000; font-size:13pt;"><b>USER: <?=$HTTP_POST_VARS["username"]?></b><br><img src="/images/blank.gif" width=610 height=5 border=0 alt=""></td></tr>
            <tr><td align="right" valign="top"><b>first name:&nbsp;</b></td><td valign="top"><input type="text" name="firstName" value="<?=$HTTP_POST_VARS["firstName"]?>" size=18></td></tr>
            <tr><td align="right" valign="top"><b>last name:&nbsp;</b></td><td valign="top"><input type="text" name="lastName" value="<?=$HTTP_POST_VARS["lastName"]?>" size=18></td></tr>
            <tr><td align="right" valign="top"><b>username:&nbsp;</b></td><td valign="top"><input type="text" name="username" value="<?=$HTTP_POST_VARS["username"]?>" size=12></td></tr>
            <tr><td align="right" valign="top"><b>password:&nbsp;</b></td><td valign="top"><input type="text" name="password" value="<?=$HTTP_POST_VARS["password"]?>" size=12></td></tr>
            <tr><td align="right" valign="top"><b>email:&nbsp;</b></td><td valign="top"><input type="text" name="email" value="<?=$HTTP_POST_VARS["email"]?>" size=24></td></tr>
            <tr>
                <td align="right" valign="top"><b>start date:&nbsp;</b></td>
                <td valign="top">
                <select name="startMonth" size=1>
                <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
                <? $allMonths=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); ?>
                <? for ($i=1; $i<13; $i++) { ?>
                <option value=<?=$i?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("n",$HTTP_POST_VARS["startdate"])==$i)) echo " selected"; ?>><?=$allMonths[$i-1]?></option>
                <? } ?>
                </select>&nbsp;
                <select name="startDay" size=1>
                <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
                <? for ($i=1; $i<32; $i++) { ?>
                <option value=<?=$i?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("j",$HTTP_POST_VARS["startdate"])==$i)) echo " selected"; ?>><?=$i?></option>
                <? } ?>
                </select>&nbsp;
                <select name="startYear" size=1>
                <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
                <? $allYears=array("2005","2006","2007","2008"); ?>
                <? for ($i=0; $i<count($allYears); $i++) { ?>
                <option value=<?=$allYears[$i]?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("Y",$HTTP_POST_VARS["startdate"])==$allYears[$i])) echo " selected"; ?>><?=$allYears[$i]?></option>
                <? } ?>
                </select>&nbsp;
                <a href="javascript:setStartdate(<?=date("n",time())?>,<?=date("j",time())?>,<?=date("Y",time())?>);"><i>set to today's date</i></a></td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>gender:&nbsp;</b></td>
                <td valign="top">
                <select name="gender" size=1>
                <option value="m"<? if ($HTTP_POST_VARS["gender"]=="m") echo " selected"; ?>>male</option>
                <option value="f"<? if ($HTTP_POST_VARS["gender"]=="f") echo " selected"; ?>>female</option>
                </select></td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>treatments:&nbsp;</b></td>
                <td valign="top">
                <input type="checkbox" name="treatmentRadiation" value=1<? if ($HTTP_POST_VARS["treatmentRadiation"]==1) echo " checked"; ?>>radiation &nbsp;
                <input type="checkbox" name="treatmentChemotherapy" value=1<? if ($HTTP_POST_VARS["treatmentChemotherapy"]==1) echo " checked"; ?>>chemotherapy &nbsp;
                <input type="checkbox" name="treatmentSurgery" value=1<? if ($HTTP_POST_VARS["treatmentSurgery"]==1) echo " checked"; ?>>surgery &nbsp;
                <input type="checkbox" name="treatmentUnknown" value=1<? if ($HTTP_POST_VARS["treatmentUnknown"]==1) echo " checked"; ?>>unknown/unsure</td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>&quot;Smoking may increase my chances of developing health problems.&quot;&nbsp;</b></td>
                <td valign="top">
                <input type="radio" name="smokingIncreasesProblems" value=1<? if ($HTTP_POST_VARS["smokingIncreasesProblems"]==1) echo " checked"; ?>>completely disagree<br>
                <input type="radio" name="smokingIncreasesProblems" value=2<? if ($HTTP_POST_VARS["smokingIncreasesProblems"]==2) echo " checked"; ?>>somewhat disagree<br>
                <input type="radio" name="smokingIncreasesProblems" value=3<? if ($HTTP_POST_VARS["smokingIncreasesProblems"]==3) echo " checked"; ?>>somewhat agree<br>
                <input type="radio" name="smokingIncreasesProblems" value=4<? if ($HTTP_POST_VARS["smokingIncreasesProblems"]==4) echo " checked"; ?>>completely agree</td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>addicted:&nbsp;</b></td>
                <td valign="top">
                <input type="radio" name="isAddicted" value=1<? if ($HTTP_POST_VARS["isAddicted"]==1) echo " checked"; ?>>yes &nbsp;
                <input type="radio" name="isAddicted" value=2<? if ($HTTP_POST_VARS["isAddicted"]==2) echo " checked"; ?>>no</td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>friends and family smoke?:&nbsp;</b></td>
                <td valign="top">
                <input type="radio" name="friendsSmoke" value=1<? if ($HTTP_POST_VARS["friendsSmoke"]==1) echo " checked"; ?>>yes &nbsp;
                <input type="radio" name="friendsSmoke" value=2<? if ($HTTP_POST_VARS["friendsSmoke"]==2) echo " checked"; ?>>no</td>
            </tr>
            <tr>
                <td align="right" valign="top"><b>stage:&nbsp;</b></td>
                <td valign="top">
                <select name="stage" size=1>
                <option value=1<? if ($HTTP_POST_VARS["stage"]=="1") echo " selected"; ?>>precontemplation</option>
                <option value=2<? if ($HTTP_POST_VARS["stage"]=="2") echo " selected"; ?>>contemplation</option>
                <option value=3<? if ($HTTP_POST_VARS["stage"]=="3") echo " selected"; ?>>preparation</option>
                <option value=4<? if ($HTTP_POST_VARS["stage"]=="4") echo " selected"; ?>>action</option>
                </select></td>
            </tr>
            <tr>
                <td align="right" valign="top">&nbsp;</td>
                <td valign="top"><br><br>
                <input type="submit" value="Submit/Update">&nbsp;
                <input type="button" value="Cancel/Clear" onClick="document.location='edit-users.php';"><br>
                &nbsp;</td>
            </tr>
            </table>            
            </form><br><br>
<? } ?>


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

