<?
include("includes/site-functions.php");
$sectionID="other";
$confirmFile=0;
$errMsg="";

// UPDATE USER STATS
if ($HTTP_POST_VARS["submitAction"]=="uploadFile") {
    $allErrors=array(
        0=>"There is no error, the file uploaded with success",
        1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
        2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        3=>"The uploaded file was only partially uploaded",
        4=>"No file was uploaded",
        6=>"Missing a temporary folder");
    if (($_FILES["surveyData"]["size"]<1) || (strlen($_FILES["surveyData"]["tmp_name"])<1)) $errMsg.="<li>Could not detect CSV file: <i>Survey Answers</i>. &nbsp;Please try again.</li>\n";
    if (($_FILES["mailingInfo"]["size"]<1) || (strlen($_FILES["mailingInfo"]["tmp_name"])<1)) $errMsg.="<li>Could not detect CSV file: <i>Mailing Info</i>. &nbsp;Please try again.</li>\n";
    if ($_FILES["surveyData"]["error"]>0) $errMsg.="<li>".$allErrors[$_FILES["surveyData"]["error"]]."</li>\n";
    if ($_FILES["mailingInfo"]["error"]>0) $errMsg.="<li>".$allErrors[$_FILES["mailingInfo"]["error"]]."</li>\n";
    if (strlen($errMsg)<1) {
        if (move_uploaded_file($_FILES["surveyData"]["tmp_name"],"/var/www/html/PFH/admin/surveyData.csv")) {
            $confirmFile++;
        } else {
            $errMsg.="<li>Could not copy CSV file: <i>Survey Answers</i> to the server. &nbsp;Please inform the system administrator.</li>\n";
        }
        if (move_uploaded_file($_FILES["mailingInfo"]["tmp_name"],"/var/www/html/PFH/admin/mailingInfo.csv")) {
            $confirmFile++;
        } else {
            $errMsg.="<li>Could not copy CSV file: <i>Mailing Info</i> to the server. &nbsp;Please inform the system administrator.</li>\n";
        }
    }
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
    // FUNCTION: SUBMIT CSV
    function submitCSV(row1ID) {
        document["form2"]["ignore1st"].value=row1ID;
        document["form2"].submit();
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
            The complete record of each participant's survey data stems from <b>TWO</b> separate data files (Survey Answers, and Mailing Info).<br><br>

            <form name="form1" enctype="multipart/form-data" method="POST" action="import-users.php">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            <input type="hidden" name="submitAction" value="uploadFile">
            <br>
            <table border=0 cellpadding=0 cellspacing=0>
            <tr>
                <td align="right">
                Survey Answers: <input type="file" name="surveyData"><br>
                Mailing Info: <input type="file" name="mailingInfo"><br><br>
                <input type="submit" value="Upload Data" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
            </tr>
            </table>
            </form><br>

<?
// ERROR-CHECK FILE STRUCTURE
if ($confirmFile==2) {
    // step through each line of Survey Answers data file
    $data1="";
    $lineCount1=0;
    $allLines1=file("/var/www/html/PFH/admin/surveyData.csv");
    while (list($k,$v)=each($allLines1)) {
        if (strlen(trim($v))>0) {
            $data1.=trim($v)."\n";
            $lineCount1++;
            $allFields[$k]=array();
            $fieldIndex=0;
            // split string by commas
            $v=ereg_replace("\"\"","&quot;",$v);
            $lineParts1=split(",",trim($v));
            // step through each field in record
            $lpIndex=0;
            $numParts=count($lineParts1);
            while ($lpIndex<$numParts) {
                $thisStr=trim($lineParts1[$lpIndex]);
                if ((substr($thisStr,0,1)=="\"") && (substr($thisStr,-1)!="\"")) {
                    $lpIndex++;
                    if ($lpIndex<$numParts) {
                        while (($lpIndex<$numParts) && (substr(trim($lineParts1[$lpIndex]),-1)!="\"")) {
                            $thisStr.=", ".trim($lineParts1[$lpIndex]);
                            $lpIndex++;
                        }
                        if ($lpIndex<$numParts) {
                            $thisStr.=", ".trim($lineParts1[$lpIndex]);
                        } else {
                            $errMsg.="<li>Check for missing quotes in row ".($k+1)." of <i>Survey Answers</i>.</li>\n";
                        }
                    } else {
                        $errMsg.="<li>Check for missing quotes in row ".($k+1)." of <i>Survey Answers</i>.</li>\n";
                    }
                }
                if ((substr($thisStr,0,1)=="\"") && (substr($thisStr,-1)=="\"")) $thisStr=substr($thisStr,1,-1);
                $allFields[$k][$fieldIndex]=$thisStr;
                $fieldIndex++;
                $lpIndex++;
            }
            if ($fieldIndex!=97) $errMsg.="<li>Incorrect number of fields (".$fieldIndex.", <i>expecting 97</i>) in row ".($k+1)." of <i>Survey Answers</i>. Please check the data for errors.</li>\n";
        }
    }
    
    // step through each line of Mailing Info data file
    $data2="";
    $lineCount2=0;
    $allLines2=file("/var/www/html/PFH/admin/mailingInfo.csv");
    while (list($k,$v)=each($allLines2)) {
        if (strlen(trim($v))>0) {
            $data2.=trim($v)."\n";
            $lineCount2++;
            $fieldIndex=0;
            // split string by commas
            $v=ereg_replace("\"\"","&quot;",$v);
            $lineParts2=split(",",trim($v));
            // step through each field in record
            $lpIndex=0;
            $numParts=count($lineParts2);
            while ($lpIndex<$numParts) {
                $thisStr=trim($lineParts2[$lpIndex]);
                if ((substr($thisStr,0,1)=="\"") && (substr($thisStr,-1)!="\"")) {
                    $lpIndex++;
                    if ($lpIndex<$numParts) {
                        while (($lpIndex<$numParts) && (substr(trim($lineParts2[$lpIndex]),-1)!="\"")) {
                            $thisStr.=", ".trim($lineParts2[$lpIndex]);
                            $lpIndex++;
                        }
                        if ($lpIndex<$numParts) {
                            $thisStr.=", ".trim($lineParts2[$lpIndex]);
                        } else {
                            $errMsg.="<li>Check for missing quotes in row ".($k+1)." of <i>Mailing Info</i>.</li>\n";
                        }
                    } else {
                        $errMsg.="<li>Check for missing quotes in row ".($k+1)." of <i>Mailing Info</i>.</li>\n";
                    }
                }
                if ((substr($thisStr,0,1)=="\"") && (substr($thisStr,-1)=="\"")) $thisStr=substr($thisStr,1,-1);
                if (($fieldIndex==7) && ($allFields[$k][0]!=$thisStr)) $errMsg.="<li>Web IDs (<i>".$allFields[$k][0]."/".$thisStr."</i>) don't match between files in row ".($k+1).". Please check the data for inconsistencies.</li>\n";
                $fieldIndex++;
                $lpIndex++;
            }
            if ($fieldIndex!=9) $errMsg.="<li>Incorrect number of fields (".$fieldIndex.", <i>expecting 9</i>) in row ".($k+1)." of <i>Mailing Info</i>. Please check the data for errors.</li>\n";
        }
    }

    if ($lineCount1!=$lineCount2) $errMsg.="<li>The data files do not contain the same number of records (<i>Survey Answers: ".$lineCount1.", Mailing Info: ".$lineCount2."</i>). Please check this and try again.</li>\n";
}
?>


<? if (strlen($errMsg)>0) { ?>
    <b style="color:#D00000; font-size:10pt;">ERRORS:</b>
    <ul style="color:#D00000; padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } elseif ($confirmFile==2) { ?>
    <b style="color:#0000D0; font-size:10pt;">SCAN RESULTS:</b>
    <ul style="color:#0000D0; padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><li>Files appear compatible. Review results below, then click button to IMPORT DATA.</li></ul><br>
<? } ?>


<? if ($confirmFile==2) { ?>
            <form name="form2" method="POST" action="import-users2.php">
            <input type="hidden" name="ignore1st" value=0>

            <span style="color:#333333; font-size:10pt;"><b>Survey Answers</b> &nbsp;(<i><?=$_FILES["surveyData"]["name"]?></i>)</span><br>
            File Type: <b><?=$_FILES["surveyData"]["type"]?></b>, &nbsp;File Size: <b><?=$_FILES["surveyData"]["size"]?></b><br>
            <textarea name="allLines1" rows=6 cols=72 wrap="off" style="font-size:8pt; font-family:Courier,fixed;"><?=$data1?></textarea><br><br>
            <span style="color:#333333; font-size:10pt;"><b>Mailing Info</b> &nbsp;(<i><?=$_FILES["mailingInfo"]["name"]?></i>)</span><br>
            File Type: <b><?=$_FILES["mailingInfo"]["type"]?></b>, &nbsp;File Size: <b><?=$_FILES["mailingInfo"]["size"]?></b><br>
            <textarea name="allLines2" rows=6 cols=72 wrap="off" style="font-size:8pt; font-family:Courier,fixed;"><?=$data2?></textarea><br><br><br>
            
            <? if (strlen($errMsg)<1) { ?>
            &nbsp;<b style="font-size:11pt;">Does this look right?</b><br><br>
            <table border=0 cellpadding=0 cellspacing=5 width=380>
            <tr>
                <td valign="top" class="column2Text"><input type="button" value="Yes, IMPORT DATA (start with 1st row)" onClick="submitCSV(0);" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
                <td rowspan=99>&nbsp;&nbsp;&nbsp;</td>
                <td rowspan=99 align="right" valign="top" class="column2Text"><input type="button" value="No, GO BACK" onClick="document.location='import-users.php';" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
            </tr>
            <tr>
                <td valign="top" class="column2Text"><input type="button" value="Yes, IMPORT DATA (ignore 1st row)" onClick="submitCSV(1);" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;"></td>
            </tr>
            </table>
            <? } ?>
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

