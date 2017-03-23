<?
set_time_limit(0);
include("includes/site-functions.php");
$sectionID="other";
$mysqlID=dbConnect();

// INSERT NEW RECORDS
if ($HTTP_POST_VARS["submitAction"]=="sendEmail") {
    $emailCount=0;
    while (list($k,$v)=each($HTTP_POST_VARS["allEmail"])) {
        if ($emailCount==0) {
            $username=substr($k,1,-1);
            $emailTo=$v;
        }
        $emailCount++;
    }
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (username=\"".$username."\")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $userSpecs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        }
    }
    // construct email
    include("includes/all-emails.php");
    $emailTxt="<b>Hello ".$userSpecs["firstName"]."!</b><br><br>";
    $emailTxt.=emailMSG(1,$userSpecs["stage"],0,0);
    $emailTxt=ereg_replace("PFH1322",urldecode($username),$emailTxt);
    $emailTxt=ereg_replace("logonFirst.php\?userID=14","logonFirst.php\?userID=".$userSpecs["id"],$emailTxt);
    $emailTxt.="<br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following address into your Web browser's address bar: <b>http://www.pfhonline.org</b></span><br>";
    $emailSubject="Welcome to PFH!";
    include("includes/email.php");
//    $errMsg="<li><b>EMAIL SENT!!</b></li>\n";

    unset($HTTP_POST_VARS["allEmail"]["'".$username."'"]);
    reset($HTTP_POST_VARS["allEmail"]);
//    $sql1="INSERT INTO PFHSurveyData (".$fieldsList1.") VALUES (".$valsList1.")";
//    $resultID1=mysql_query($sql1,$mysqlID);
}
dbClose();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript">
    <!--
    // FUNCTION: SEND EMAIL
    function sendEmail() {
        document['form1'].submit();
    }
    //-->
    </script>

    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    </style>
</head>


<?
if (count($HTTP_POST_VARS["allEmail"])>0) {
    $emailFound=0;
    while (list($k,$v)=each($HTTP_POST_VARS["allEmail"])) {
        if (strlen(trim($v))>0) {
            $emailFound++;
        } else {
            unset($HTTP_POST_VARS["allEmail"][$k]);
        }
    }
}
reset($HTTP_POST_VARS["allEmail"]);

if (count($HTTP_POST_VARS["allEmail"])>0) {
?>
<body bgcolor="#D9E6A8" onLoad="setTimeout('sendEmail()',500);">
<? } else { ?>
<body bgcolor="#D9E6A8">
<? } ?>

<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br><br><br>

            <span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">SENDING WELCOME EMAILS</span><br>
            
            <hr><br>

<? if (strlen($errMsg)>0) echo "<ul style=\"font-size:12pt; color:#CC0000; font-weight:bold;\">".$errMsg."</ul>\n"; ?>
<?
if (count($HTTP_POST_VARS["allEmail"])>0) {
    $emailCount=0;
    echo "<b>Email to send:</b><br>\n";
    echo "<form name=\"form1\" method=\"POST\" action=\"sendWelcomeEmails.php\">\n";
    echo "<input type=\"hidden\" name=\"submitAction\" value=\"sendEmail\">\n";
    echo "<ul>\n";
    while (list($k,$v)=each($HTTP_POST_VARS["allEmail"])) {
        $boldSTR1="";
        $boldSTR2="";
        if ($emailCount==0) {
            $boldSTR1="<b>";
            $boldSTR2="</b>";
        }
        echo "<li><input type=\"hidden\" name=\"allEmail[".$k."]\" value=\"".$v."\">".$boldSTR1.$v.$boldSTR2."</li>\n";
        $emailCount++;
    }
    echo "</ul>\n";
    echo "</form>\n";
} else {
    echo "No emails to send.<br><br>\n\n";
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

