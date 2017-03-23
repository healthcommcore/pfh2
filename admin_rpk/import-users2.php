<?
include("includes/site-functions.php");
$sectionID="other";
$mysqlID=dbConnect();

// INSERT NEW RECORDS
if ($HTTP_POST_VARS["submitAction"]=="insertRecord1") {
    $fieldCount1=0;
    $fieldCount2=0;
    while (list($k,$v)=each($HTTP_POST_VARS)) {
        if ($k!="submitAction") {
            if (substr($k,0,4)!="MI__") {
                if ($fieldCount1>0) {
                    $fieldsList1.=",";
                    $valsList1.=",";
                }
                $fieldsList1.=$k;
                $valsList1.="\"".$v."\"";
                $fieldCount1++;
            } else {
                $k=substr($k,4);
                if ($fieldCount2>0) {
                    $fieldsList2.=",";
                    $valsList2.=",";
                }
                $fieldsList2.=$k;
                $valsList2.="\"".$v."\"";
                $fieldCount2++;
            }
        }
    }
    $sql1="INSERT INTO PFHSurveyData (".$fieldsList1.") VALUES (".$valsList1.")";
    $resultID1=mysql_query($sql1,$mysqlID);
    $sql2="INSERT INTO PFHMailingInfo (".$fieldsList2.") VALUES (".$valsList2.")";
    $resultID2=mysql_query($sql2,$mysqlID);

    $isAddicted=2;
    if (intval($HTTP_POST_VARS["F5"])<31) $isAddicted=1;
    $friendsSmoke=2;
    if (intval($HTTP_POST_VARS["F6"])==1) $friendsSmoke=1;
    $stage=1;
    
      /*
    
    if (intval($HTTP_POST_VARS["G2"])==1) {
        $stage=2;
        if (intval($HTTP_POST_VARS["G1"])>0) $stage=3;
    }
    
    */
    
    //rpk - corrected stage setting 

     if (intval($HTTP_POST_VARS["G3"])==1) {
        $stage=2;
        if (intval($HTTP_POST_VARS["G1"])>0) $stage=3;
    }
    else if ( intval($HTTP_POST_VARS["G2"])==1&&intval($HTTP_POST_VARS["G1"])>0 ) {
        $stage=2;
      
    }   
    

    
    
    
    $allGenders=array("x","m","f");
    $allSites=array("abc","DFCI","MSKCC","PMH","SJ");
    $sql3="INSERT INTO PFHUserInfo (studyID,username,password,firstName,lastName,gender,email,treatmentRadiation,treatmentChemotherapy,treatmentSurgery,treatmentUnknown,smokingIncreasesProblems,isAddicted,friendsSmoke,stage) VALUES (";
    $sql3.="\"".$HTTP_POST_VARS["studyID"]."\",";
    $sql3.="\"".$allSites[intval($HTTP_POST_VARS["MI__siteID"])].$HTTP_POST_VARS["webID"]."\",";
    $sql3.="\"".$allSites[intval($HTTP_POST_VARS["MI__siteID"])].$HTTP_POST_VARS["webID"]."\",";
    $sql3.="\"".$HTTP_POST_VARS["MI__firstName"]."\",";
    $sql3.="\"".$HTTP_POST_VARS["MI__lastName"]."\",";
    $sql3.="\"".$allGenders[$HTTP_POST_VARS["A1"]]."\",";
    $sql3.="\"".$HTTP_POST_VARS["A8"]."\",";
    $sql3.=intval($HTTP_POST_VARS["A14a"]).",";
    $sql3.=intval($HTTP_POST_VARS["A14b"]).",";
    $sql3.=intval($HTTP_POST_VARS["A14c"]).",";
    $sql3.=intval($HTTP_POST_VARS["A14d"]).",";
    $sql3.=intval($HTTP_POST_VARS["D5"]).",";
    $sql3.=$isAddicted.",";
    $sql3.=$friendsSmoke.",";
    $sql3.=$stage.")";
    $resultID3=mysql_query($sql3,$mysqlID);
    
    
    

    header("Location: import-users2.php");
    exit();
}

$allUsers=array();
$resultID=mysql_query("SELECT * FROM PFHSurveyData",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            $allUsers[$specs["webID"]]=999;
        }
    }
}
$resultID=mysql_query("SELECT * FROM PFHMailingInfo",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            $allUsers[$specs["webID"]]=999;
        }
    }
}

$nowz=time();

 $sql4="INSERT INTO PFHStages (userID, stage, startDate) VALUES ($userID, $stage, $nowz)";

//$resultID4=mysql_query($sql4,$mysqlID);

dbClose();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: POPUP EMAIL
    function popupEmail(eURL) {
        newWindow=window.open(eURL,"newWindow","width=640,height=480,scrollbars=1");
        newwindow.focus();
    }
    // FUNCTION: TOGGLE EMAIL
    function toggleEmail(formID,emailID,emailSTR) {
        if (document[formID]["includeEmail"].checked) {
            document["form11"]["allEmail['"+emailID+"']"].value=emailSTR;
        } else {
            document["form11"]["allEmail['"+emailID+"']"].value="";
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

            <a href="index.php">BACK to admin home</a><br><br><br>

            <span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">UPLOAD CSV FILES</span><br>
            <i>If things don't look quite right, <a href="import-users.php">go back and upload again</a>.</i><br>
            <i>When you're finished importing data, <a href="edit-users.php">VERIFY the new accounts</a> in the Edit Users admin tool.</i><br>
            
            <hr><br>
<?
// PARTICIPANT SPECS
$allQuestions=array(
    "User ID"=>array(107,array("webID","studyID","dateStr","totalTime","interviewerID","timeStr")),
    "Background/Screener"=>array(190,array("A1","A2","A3a","A3b","A4","A5","A6","A7","A7a","A7b","A8","A8a","A8b","A9","A10","A10a","A11","A11a","A12","A12a","A13","A14a","A14b","A14c","A14d","A15","A16")),
    "Internet"=>array(53,array("B1","B2","B3","B4","B5")),
    "Health Care"=>array(75,array("C1","C2","C3","C4","C5","C7","C7a","C7b")),
    "Risk"=>array(35,array("D1","D2","D3","D4","D5","D6")),
    "Beliefs"=>array(48,array("E1","E1a","E2a","E2b","E2c","E2d","E2e","E2f","E2g","E3a","E3b","E4a","E4b","E4c","E4d","E5a","E5b","E5c")),
    "Habits"=>array(47,array("F1_ft","F1_in","F2","F3","F4","F5","F5a","F6","F7","F8","F9","F9a","F10","F10a")),
    "Stage"=>array(42,array("G1","G2","G3","G4a","G4b")),
    "Behaviors"=>array(66,array("H2a","H2b","H2c","H2d","H2e","H2f","H2g")));

$rowCount=0;
$allEmailCODE="";
$showEmailALL=0;
$exportCODE="";
$parseLines=0;
$allLines1=file("/var/www/html/PFH/admin/surveyData.csv");
$allLines2=file("/var/www/html/PFH/admin/mailingInfo.csv");
$allFields1=array();
$allFields2=array();
while (list($k,$v)=each($allLines1)) {
    if (strlen(trim($v))>0) {
        if ($HTTP_POST_VARS["ignore1st"]==1) {
            if ($rowCount>0) $parseLines=1;
        } else {
            $parseLines=1;
        }
        if ($parseLines>0) {
            // split SURVEY ANSWERS string by commas
            $allFields1[$k]=array();
            $fieldIndex1=0;
            $v1=ereg_replace("\"\"","&quot;",$v);
            $lineParts1=split(",",trim($v1));
            $lpIndex1=0;
            $numParts1=count($lineParts1);
            while ($lpIndex1<$numParts1) {
                $thisStr1=trim($lineParts1[$lpIndex1]);
                if ((substr($thisStr1,0,1)=="\"") && (substr($thisStr1,-1)!="\"")) {
                    $lpIndex1++;
                    if ($lpIndex1<$numParts1) {
                        while (($lpIndex1<$numParts1) && (substr(trim($lineParts1[$lpIndex1]),-1)!="\"")) {
                            $thisStr1.=", ".trim($lineParts1[$lpIndex1]);
                            $lpIndex1++;
                        }
                        if ($lpIndex1<$numParts1) $thisStr1.=", ".trim($lineParts1[$lpIndex1]);
                    }
                }
                if ((substr($thisStr1,0,1)=="\"") && (substr($thisStr1,-1)=="\"")) $thisStr1=substr($thisStr1,1,-1);
                $allFields1[$k][$fieldIndex1]=$thisStr1;
                $fieldIndex1++;
                $lpIndex1++;
            }

            // split MAILING INFO string by commas
            $allFields2[$k]=array();
            $fieldIndex2=0;
            $v2=ereg_replace("\"\"","&quot;",$allLines2[$k]);
            $lineParts2=split(",",trim($v2));
            $lpIndex2=0;
            $numParts2=count($lineParts2);
            while ($lpIndex2<$numParts2) {
                $thisStr2=trim($lineParts2[$lpIndex2]);
                if ((substr($thisStr2,0,1)=="\"") && (substr($thisStr2,-1)!="\"")) {
                    $lpIndex2++;
                    if ($lpIndex2<$numParts2) {
                        while (($lpIndex2<$numParts2) && (substr(trim($lineParts2[$lpIndex2]),-1)!="\"")) {
                            $thisStr2.=", ".trim($lineParts2[$lpIndex2]);
                            $lpIndex2++;
                        }
                        if ($lpIndex2<$numParts2) $thisStr2.=", ".trim($lineParts2[$lpIndex2]);
                    }
                }
                if ((substr($thisStr2,0,1)=="\"") && (substr($thisStr2,-1)=="\"")) $thisStr2=substr($thisStr2,1,-1);
                $allFields2[$k][$fieldIndex2]=$thisStr2;
                $fieldIndex2++;
                $lpIndex2++;
            }

            // assemble email list
            if ($allFields1[$k][96]==1) {
                $allSites=array("abc","DFCI","MSKCC","PMH","SJ");
                $allEmailCODE.="<input type=\"hidden\" name=\"allEmail['".$allSites[$allFields2[$k][8]].$allFields1[$k][0]."']\" value=\"".$allFields1[$k][16]."\">\n";
            }

            // HIDDEN FORM FIELDS
            echo "\n\n";
            echo "<!-- USER: ".$allFields1[$k][0]." -->\n";
            if (!$allUsers[$allFields1[$k][0]]) {
                if ($allFields1[$k][96]!="I1") {
                    echo "<form name=\"form".$allFields1[$k][1]."\" method=\"POST\" action=\"import-users2.php\">\n";
                    echo "<input type=\"hidden\" name=\"submitAction\" value=\"insertRecord1\">\n";
                    $questionIndex=0;
                    reset($allQuestions);
                    while (list($k4,$v4)=each($allQuestions)) {
                        while (list($k5,$v5)=each($v4[1])) {
                            echo "<input type=\"hidden\" name=\"".$v5."\" value=\"".$allFields1[$k][$questionIndex]."\">\n";
                            $questionIndex++;
                        }
                    }
                    echo "<input type=\"hidden\" name=\"MI__webID\" value=\"".$allFields2[$k][7]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__studyID\" value=\"".$allFields1[$k][1]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__siteID\" value=\"".$allFields2[$k][8]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__firstName\" value=\"".$allFields2[$k][0]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__lastName\" value=\"".$allFields2[$k][1]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__address1\" value=\"".$allFields2[$k][2]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__address2\" value=\"".$allFields2[$k][3]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__city\" value=\"".$allFields2[$k][4]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__state\" value=\"".$allFields2[$k][5]."\">\n";
                    echo "<input type=\"hidden\" name=\"MI__zip\" value=\"".$allFields2[$k][6]."\">\n";
                }
            }

            // CONFIRMATION TABLE
            if ($allFields1[$k][96]!="I1") {
                if (!$allUsers[$allFields1[$k][0]]) {
                    if ($allFields1[$k][96]==0) echo "<span  style=\"color:#333333; font-size:9pt;\">Study ID: ".$allFields1[$k][1].", &nbsp;Site ID: ".$allFields2[$k][8]."<br>";
                    if ($allFields1[$k][96]==1) echo "<span  style=\"color:#990066; font-size:9pt;\">Study ID: ".$allFields1[$k][1].", &nbsp;Site ID: ".$allFields2[$k][8]."<br>";
                    if ($allFields1[$k][96]==0) echo "<b>PRINT INTERVENTION</b></span><br><div style=\"color:#990066; padding-left:10px; padding-top:5px;\">";
                    if ($allFields1[$k][96]==1) echo "<b>WEB INTERVENTION</b></span><br><div style=\"color:#990066; padding-left:10px; padding-top:5px;\">";
                    echo $allFields2[$k][0]." ".$allFields2[$k][1]."<br>\n";
                    if (strlen(trim($allFields2[$k][2]))>0) echo $allFields2[$k][2]."<br>\n";
                    if (strlen(trim($allFields2[$k][3]))>0) echo $allFields2[$k][3]."<br>\n";
                    echo $allFields2[$k][4].", ".$allFields2[$k][5]." ".$allFields2[$k][6]."<br>\n";
                    echo "</div><br>\n";
                } else {
                    if ($allFields1[$k][96]==0) {
                        echo "<span  style=\"color:#333333; font-size:9pt;\">Study ID: ".$allFields1[$k][1].", &nbsp;Site ID: ".$allFields2[$k][8].", &nbsp;Web ID: ".$allFields1[$k][0]."<br>";
                        echo "<b>PRINT INTERVENTION</b> (stored in database)</span><br><div style=\"color:#666699; padding-left:10px; padding-top:5px;\">";
                        echo $allFields2[$k][0]." ".$allFields2[$k][1]."<br>\n";
                        if (strlen(trim($allFields2[$k][2]))>0) echo $allFields2[$k][2]."<br>\n";
                        if (strlen(trim($allFields2[$k][3]))>0) echo $allFields2[$k][3]."<br>\n";
                        echo $allFields2[$k][4].", ".$allFields2[$k][5]." ".$allFields2[$k][6]."<br>\n";
                        echo "</div><br><hr><br>\n\n";

                        $mysqlID=dbConnect();
                        $resultID_TMP=mysql_query("SELECT * FROM PFHMailingInfo WHERE (studyID=\"".$allFields1[$k][1]."\")",$mysqlID);
                        if ($resultID_TMP) {
                            if (mysql_num_rows($resultID_TMP)>0) {
                                $specsTMP=mysql_fetch_array($resultID_TMP,MYSQL_ASSOC);
                                if (strlen($exportCODE)>0) $exportCODE.=",";
                                $exportCODE.=$specsTMP["webID"];
                            }
                        }
                        dbClose();
                    }

                    if ($allFields1[$k][96]==1) {
                        echo "<span  style=\"color:#990066; font-size:9pt;\">Study ID: ".$allFields1[$k][1].", &nbsp;Site ID: ".$allFields2[$k][8].", &nbsp;Web ID: ".$allFields1[$k][0]."<br>";
                        echo "<b>WEB INTERVENTION</b> (stored in database)</span><br>\n";

                        echo "<table border=0 cellpadding=0 cellspacing=0 width=100%><tr>\n";
                        echo "<td valign=\"top\" style=\"color:#990066; padding-left:10px; padding-top:5px;\">";
                        echo $allFields2[$k][0]." ".$allFields2[$k][1]."<br>\n";
                        if (strlen(trim($allFields2[$k][2]))>0) echo $allFields2[$k][2]."<br>\n";
                        if (strlen(trim($allFields2[$k][3]))>0) echo $allFields2[$k][3]."<br>\n";
                        echo $allFields2[$k][4].", ".$allFields2[$k][5]." ".$allFields2[$k][6]."</td>\n";
                        echo "<td valign=\"top\" align=\"right\">";

                        $userID_TMP=0;
                        $mysqlID=dbConnect();
                        $resultID_TMP=mysql_query("SELECT * FROM PFHUserInfo WHERE (studyID=\"".$allFields1[$k][1]."\")",$mysqlID);
                        if ($resultID_TMP) {
                            if (mysql_num_rows($resultID_TMP)>0) {
                                $specsTMP=mysql_fetch_array($resultID_TMP,MYSQL_ASSOC);
                                $userID_TMP=$specsTMP["id"];
                            }
                        }
                        dbClose();
                        $allSites=array("abc","DFCI","MSKCC","PMH","SJ");
                        $tmpUsername=$allSites[intval($allFields2[$k][8])].$allFields1[$k][0];
                        echo "<form name=\"form".$allSites[$allFields2[$k][8]].$allFields1[$k][0]."\">\n";
                        echo "<input type=\"button\" value=\"Preview WELCOME Email\" style=\"background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;\" onClick=\"popupEmail('emailPreview2.php?firstName=".urlencode(trim($allFields2[$k][0]))."&username=".urlencode(trim($tmpUsername))."&userID=".$userID_TMP."');\"><br><img src=\"images/blank.gif\" width=1 height=4 border=0><br>\n";
                        echo "send welcome email for this participant <input type=\"checkbox\" name=\"includeEmail\" value=1 checked onClick=\"toggleEmail('form".$allSites[$allFields2[$k][8]].$allFields1[$k][0]."','".$allSites[$allFields2[$k][8]].$allFields1[$k][0]."','".$allFields1[$k][16]."');\"></form></td>\n";
                        $showEmailALL=1;
                        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>\n";
                        echo "<br><hr><br>\n\n";
                    }

                }

            }

            if (!$allUsers[$allFields1[$k][0]]) {
                if ($allFields1[$k][96]!="I1") {
                    echo "<table border=1 cellpadding=4 cellspacing=0 width=755><tr bgcolor=\"#FFFFFF\">\n";
                    reset($allQuestions);
                    while (list($k3,$v3)=each($allQuestions)) {
                        echo "<td valign=\"top\" style=\"color:#000000; font-size:9pt; font-family:arial;\"><b>".$k3."</b></td>\n";
                    }
                    if ($allFields1[$k][96]==0) echo "</tr>\n<tr bgcolor=\"#B4E6FA\">\n";
                    if ($allFields1[$k][96]==1) echo "</tr>\n<tr bgcolor=\"#FAE694\">\n";
                    $questionIndex=0;
                    reset($allQuestions);
                    while (list($k4,$v4)=each($allQuestions)) {
?>            <td valign="top" style="color:#333333; font-size:8pt; font-family:arial;"><img src="images/blank.gif" width=<?=$v4[0]?> height=1><br> <?
                        while (list($k5,$v5)=each($v4[1])) {
                            echo $v5.": <b>".$allFields1[$k][$questionIndex]."</b><br>\n";
                            $questionIndex++;
                        }
                    echo "&nbsp;</td>\n";
                    }
                    echo "</tr>\n</table><br>\n";
                    echo "<div align=\"right\"><input type=\"submit\" value=\"save this user\" style=\"background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>\n";
                    echo "</form><hr><br>\n\n";
                }
            }


        }
        $rowCount++;
    }
}
?>

<? if ($showEmailALL>0) { ?>
<form name="form11" method="POST" action="sendWelcomeEmails.php">
<?=$allEmailCODE?>
<input type="submit" value="Send WELCOME Emails" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;">
</form>
<? } ?>
<? if (strlen($exportCODE)>0) { ?>
<form name="form12">
<input type="button" value="Export PRINT INTERVENTION Mailing Info" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;" onClick="document.location='mailInfo3.php?idSTR=<?=$exportCODE?>';">
</form>
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

