<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(112);
$showWide=0;

$errMsg="";
$showThanks=0;
if ($HTTP_POST_VARS["submitAction"]=="mailForm") {
    if (strlen($HTTP_POST_VARS["participantAddress"])<1) $errMsg.="<li>Please fill out your mailing address in the field provided.</li>\n";
    if (strlen($errMsg)<1) {
        $emailTo="pfh@hcc-web.org";
        $emailSubject="Need consent form";
        $emailTxt="<i>username: <b>".$userSpecs["username"]."</b></i><br><br>".$userSpecs["firstName"]." ".$userSpecs["lastName"]." needs a medication consent form sent to:<br><br><b>".ereg_replace(chr(13),"<br>",$HTTP_POST_VARS["participantAddress"])."</b><br>";
        include("includes/email.php");
        $showThanks=1;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>

<body bgcolor="#FFFFFF">
<? include("includes/header.php"); ?>

<!-- MAIN CONTENT -->
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <!-- ======== -->
    <!-- COLUMN 1 -->
    <!-- ======== -->
    <td width=155 valign="top"><img src="images/allAboutYou2.jpg" width=155 height=96 border=0 alt=""><br>
<? include("includes/greenbar.php"); ?>
    &nbsp;</td>
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=400 valign="top"><img src="images/pageTitles/health_pharmo.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">MAIL</span><br><br>
<? if (strlen($errMsg)>0) { ?>
    <ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } ?>
<? if ($showThanks!=1) { ?>
I would prefer to receive the consent form and other information by mail. Please send them to:<br><br>

<form name="form1" method="POST" action="health_pharmo-request2.php">
<input type="hidden" name="submitAction" value="mailForm">
<table border=0 cellpadding=0 cellspacing=0>
<tr><td><img src="images/guide/qdateTop2.gif" width=325 height=90 border=0 alt=""></td></tr>
<tr>
    <td align="center" background="images/guide/qdateMiddle.gif"><br>
    <textarea name="participantAddress" rows=4 cols=28><?=$HTTP_POST_VARS["participantAddress"]?></textarea><br><br>
    &nbsp;</td>
</tr>
<tr><td><img src="images/guide/qdateBottom.gif" width=325 height=10 border=0 alt=""></td></tr>
<tr><td align="center"><img src="images/blank.gif" width=140 height=1 border=0 alt="" align="left"><input type="image" src="images/guide/qdateSubmit.gif" width=102 height=25 border=0 alt=""></td></tr>
</table>
</form><br><br>

<? } else { ?>

Thank you for submitting your address! We will mail the consent form and other information to:<br><br>

<pre>
<?=$HTTP_POST_VARS["participantAddress"]?>
</pre><br>


<? } ?>





            <? $footerWidth=280; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table></td>
    <td width=22 valign="top"><img src="images/blank.gif" width=22 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 3 -->
    <!-- ======== -->
    <td width=170 valign="top" class="column3Text">
    <table border=0 cellpadding=0 cellspacing=0 width=170>
    <tr bgcolor="#FBFAE9">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="health_pharmo.php" class="manualSubLink">1. Quit-smoking Medications home</a><br><br>
        <a href="health_pharmo-patch.php" class="manualSubLink">2. The Patch</a><br><br>
        <a href="health_pharmo-zyban.php" class="manualSubLink">3. Zyban</a><br><br>
        <a href="health_pharmo-request.php" class="manualSubLink"><b>4. Instructions for Requesting Medication</b></a><br>
            <table border=0 cellpadding=0 cellspacing=2 style="padding-top:5px; padding-left:8px; padding-bottom:10px; padding-right:5px;">
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><b>Mail</b></td></tr>
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><a href="health_pharmo-request3.php" class="manualSubLink">Download consent form</a></td></tr>
            </table><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href=""><img src="images/ads/new/ad_forum.gif" width=170 height=250 border=0 alt=""></a><br>
    <img src="images/white.gif" width=170 height=18 border=0 alt=""><br><br>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
