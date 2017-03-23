<?
include("includes/site-functions.php");
$sectionID="other";
$errMsg="";

// HANDLE FORM SUBMIT
if ($HTTP_POST_VARS["submitAction"]=="sendEmail") {
    $HTTP_POST_VARS["startdate"]=mktime(1,0,0,$HTTP_POST_VARS["startMonth"],$HTTP_POST_VARS["startDay"],$HTTP_POST_VARS["startYear"]);
    if (strlen($HTTP_POST_VARS["email"])<1) $errMsg.="<li>Please include an email address.<br>\n";
    if (($HTTP_POST_VARS["startMonth"]<1) || ($HTTP_POST_VARS["startDay"]<1) || ($HTTP_POST_VARS["startYear"]<2005)) $HTTP_POST_VARS["startdate"]=0;
    if ($HTTP_POST_VARS["stage"]<1) $errMsg.="<li>Please indicate the user's stage of change.<br>\n";
    if ($HTTP_POST_VARS["weekNum"]<1) $errMsg.="<li>Please indicate the current week number.<br>\n";

    if (strlen($errMsg)<1) {
        // LOAD USER SPECS
        $mysqlID=dbConnect();
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=14",$mysqlID);
        if ($resultID) {
            if (mysql_num_rows($resultID)>0) {
                $userSpecs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            }
        }
        dbClose();
        $weekNum=floor((time()-$userSpecs["startdate"])/604800)+1;
        if ($weekNum>11) $weekNum=12;
        $quitDate=$userSpecs["quitDate"];

        // construct email
        include("includes/all-emails.php");
        $emailTxt="<b>Hello ".$userSpecs["firstName"]."!</b><br><br>";
        $emailTxt.=emailMSG($HTTP_POST_VARS["weekNum"],$HTTP_POST_VARS["stage"],$quitDate,$HTTP_POST_VARS["numPosts"]);
        $emailTxt.="<br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following address into your Web browser's address bar: <b>http://www.pfhonline.org</b></span><br>";

        $emailTo=$HTTP_POST_VARS["email"];
        $emailSubject="PFH Message";
        include("includes/email.php");
        $errMsg="<li><b>EMAIL SENT!!</b><br>\n";
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
    // FUNCTION: SET START DATE
    function setStartdate(m,d,y) {
        document["form1"]["startMonth"].options[m].selected=true;
        document["form1"]["startDay"].options[d].selected=true;
        document["form1"]["startYear"].options[(y-2004)].selected=true;
    }
    
    function popupEmail(eURL) {
        newWindow=window.open(eURL,"newWindow","width=640,height=480");
        newwindow.focus();
    }
    function previewEmail() {
        var si=document["form1"].userID.selectedIndex;
        if (si>(0-1)) {
            var pID=document["form1"].userID.options[si].value;
            var emailChecked=(0-1);
            for (var i=0; i<document["form1"].emailID.length; i++) {
                if (document["form1"].emailID[i].checked) emailChecked=i;
            }
            if (emailChecked<0) {
                alert("Please select an email from the list.");
            } else {
                var tmpURL="emailPreview3.php?emailData="+pID+","+document["form1"].emailID[emailChecked].value;
                popupEmail(tmpURL);
            }
        } else {
            alert("Please select a participant from the list.");
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
<form name="form1" method="POST" action="edit-email.php">
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br><br><br>


<span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">1) SELECT Participant:</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="userID" size=1>
<?
$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE studyID>0 ORDER BY startdate DESC",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($userSpecs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            if ((strlen(trim($userSpecs["firstName"]))>0) && (strlen(trim($userSpecs["lastName"]))>0)) {
                echo "<option value=".$userSpecs["id"].">".$userSpecs["lastName"].", ".$userSpecs["firstName"];
                if (strlen($userSpecs["studyID"])>0) echo " &nbsp;(study ID: ".$userSpecs["studyID"].")";
                echo "</option>\n";
            }
        }
    }
}
dbClose();
?>
</select><br><br><br>


<span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">2) SELECT E-mail:</span><br><br>
<input type="radio" name="emailID" value="1,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=1&stage=1&quitDate=0&numPosts=0');">WEEK 1, precontemplation</a><br>
<input type="radio" name="emailID" value="1,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=1&stage=2&quitDate=0&numPosts=0');">WEEK 1, contemplation</a><br>
<input type="radio" name="emailID" value="1,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=1&stage=3&quitDate=0&numPosts=0');">WEEK 1, preparation</a><br>
<input type="radio" name="emailID" value="1,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=1&stage=4&quitDate=0&numPosts=0');">WEEK 1, action</a><br>
<br><hr><br>

<input type="radio" name="emailID" value="2,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=2&stage=1&quitDate=0&numPosts=0');">WEEK 2, precontemplation</a><br>
<input type="radio" name="emailID" value="2,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=2&stage=2&quitDate=0&numPosts=0');">WEEK 2, contemplation</a><br>
<input type="radio" name="emailID" value="2,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=2&stage=3&quitDate=0&numPosts=0');">WEEK 2, preparation</a><br>
<input type="radio" name="emailID" value="2,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=2&stage=4&quitDate=0&numPosts=0');">WEEK 2, action</a><br>
<br><hr><br>

<table border=0 cellpadding=0 cellspacing=0>
<tr>
    <td valign="top">
    <input type="radio" name="emailID" value="3,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=1&quitDate=0&numPosts=0');">WEEK 3, precontemplation</a><br>
    <input type="radio" name="emailID" value="3,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=2&quitDate=0&numPosts=0');">WEEK 3, contemplation</a><br>
    <input type="radio" name="emailID" value="3,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=3&quitDate=0&numPosts=0');">WEEK 3, preparation</a><br>
    <input type="radio" name="emailID" value="3,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=4&quitDate=0&numPosts=0');">WEEK 3, action</a><br>
    &nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td valign="top">
    <input type="radio" name="emailID" value="3,1,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=1&quitDate=0&numPosts=3');">WEEK 3, precontemplation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="3,2,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=2&quitDate=0&numPosts=3');">WEEK 3, contemplation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="3,3,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=3&quitDate=0&numPosts=3');">WEEK 3, preparation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="3,4,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=3&stage=4&quitDate=0&numPosts=3');">WEEK 3, action <i>(with Forum posts)</i></a><br>
    &nbsp;</td>
</tr>
</table><hr><br>

<input type="radio" name="emailID" value="4,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=4&stage=1&quitDate=0&numPosts=0');">WEEK 4, precontemplation</a><br>
<input type="radio" name="emailID" value="4,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=4&stage=2&quitDate=0&numPosts=0');">WEEK 4, contemplation</a><br>
<input type="radio" name="emailID" value="4,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=4&stage=3&quitDate=0&numPosts=0');">WEEK 4, preparation</a><br>
<input type="radio" name="emailID" value="4,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=4&stage=4&quitDate=0&numPosts=0');">WEEK 4, action</a><br>
<br><hr><br>


<table border=0 cellpadding=0 cellspacing=0>
<tr>
    <td valign="top">
    <input type="radio" name="emailID" value="5,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=1&quitDate=0&numPosts=0');">WEEK 5, precontemplation</a><br>
    <input type="radio" name="emailID" value="5,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=2&quitDate=0&numPosts=0');">WEEK 5, contemplation</a><br>
    <input type="radio" name="emailID" value="5,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=3&quitDate=0&numPosts=0');">WEEK 5, preparation</a><br>
    <input type="radio" name="emailID" value="5,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=4&quitDate=0&numPosts=0');">WEEK 5, action</a><br>
    &nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td valign="top">
    <input type="radio" name="emailID" value="5,1,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=1&quitDate=0&numPosts=3');">WEEK 5, precontemplation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="5,2,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=2&quitDate=0&numPosts=3');">WEEK 5, contemplation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="5,3,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=3&quitDate=0&numPosts=3');">WEEK 5, preparation <i>(with Forum posts)</i></a><br>
    <input type="radio" name="emailID" value="5,4,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=5&stage=4&quitDate=0&numPosts=3');">WEEK 5, action <i>(with Forum posts)</i></a><br>
    &nbsp;</td>
</tr>
</table><hr><br>

<table border=0 cellpadding=0 cellspacing=0>
<tr>
    <td valign="top">
    <input type="radio" name="emailID" value="201,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=201&stage=1&quitDate=0&numPosts=0');">QUIT DATE 1 WEEK AWAY</a><br>
    <input type="radio" name="emailID" value="202,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=202&stage=2&quitDate=0&numPosts=0');">QUIT DATE 2 WEEKS AWAY</a><br>
    <input type="radio" name="emailID" value="203,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=203&stage=3&quitDate=0&numPosts=0');">QUIT DATE 3 WEEKS AWAY</a><br>
    <input type="radio" name="emailID" value="204,4,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=204&stage=4&quitDate=0&numPosts=0');">QUIT DATE 4 WEEKS AWAY</a><br>
    &nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td valign="top">
    <input type="radio" name="emailID" value="201,1,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=201&stage=1&quitDate=0&numPosts=3');">QUIT DATE 1 WEEK AWAY, <i>(with Set and Track Goals reminder)</i></a><br>
    <input type="radio" name="emailID" value="202,2,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=202&stage=2&quitDate=0&numPosts=3');">QUIT DATE 2 WEEKS AWAY, <i>(with Set and Track Goals reminder)</i></a><br>
    <input type="radio" name="emailID" value="203,3,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=203&stage=3&quitDate=0&numPosts=3');">QUIT DATE 3 WEEKS AWAY, <i>(with Set and Track Goals reminder)</i></a><br>
    <input type="radio" name="emailID" value="204,4,0,3"><a href="javascript:popupEmail('emailPreview.php?weekNum=204&stage=4&quitDate=0&numPosts=3');">QUIT DATE 4 WEEKS AWAY, <i>(with Set and Track Goals reminder)</i></a><br>
    &nbsp;</td>
</tr>
</table><hr><br>

<input type="radio" name="emailID" value="301,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=301&stage=1&quitDate=0&numPosts=0');">Set Quit Date Encouragement, example A</a><br>
<input type="radio" name="emailID" value="301,2,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=302&stage=2&quitDate=0&numPosts=0');">Set Quit Date Encouragement, example B</a><br>
<input type="radio" name="emailID" value="301,3,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=303&stage=3&quitDate=0&numPosts=0');">Set Quit Date Encouragement, example C</a><br>
<br><hr><br>

<input type="radio" name="emailID" value="105,1,0,0"><a href="javascript:popupEmail('emailPreview.php?weekNum=105&stage=1&quitDate=0&numPosts=0');">ANY WEEK, has NEVER visited the site</a><br>
<br><br>

<span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">3) <a href="javascript:previewEmail();">PREVIEW E-mail</a> <i>(and send)</i></span><br><br>



            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>
</form>
</body>
</html>
