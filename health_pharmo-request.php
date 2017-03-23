<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(111);
$showWide=0;

$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM PFHMailingInfo WHERE studyID=".$userSpecs["studyID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        $siteID=$specs["siteID"];
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

<span class="manualHeader">INSTRUCTIONS FOR REQUESTING MEDICATION</span><br><br>

<? if ($siteID==1) { ?>

If you'd like free nicotine patches or Zyban, you can download and print a consent form, or we can mail you a packet with all of the information and the form included. In either case, you'll need to read and sign the consent form and mail it back to us, letting us know which medication you'd like to receive.<br><br>
We'll send your doctor a form asking him or her to tell us whether you can use the medication. The form reminds the doctor of the risks and side effects, and that he or she will be responsible for monitoring your care. If your doctor signs the form, we will mail him or her the correct supply. You'll need to go to the doctor's office to pick it up. If you and your doctor decide that you need to continue your medication beyond what Partnership for Health will provide, you'll need to buy it yourself.<br><br>
<b>Please choose one:</b><br><br>
I'd like to have the information and consent form <a href="health_pharmo-request2.php">mailed to me.</a><br><br>
I'll <a href="health_pharmo-request3.php">print out</a> the information and consent form myself.<br><br>

<? } elseif ($siteID==2) { ?>

If you'd like free nicotine patches or Zyban, you can download and print a consent form, or we can mail you a packet with all of the information and the form included. In either case, you'll need to read and sign the consent form and mail it back to us, letting us know which medication you'd like to receive.<br><br>
We'll send your doctor a form asking him or her to tell us whether you can use the medication. The form reminds the doctor of the risks and side effects, and that he or she will be responsible for monitoring your care. If your doctor signs the form, we will mail him or her the correct supply. You'll need to go to the doctor's office to pick it up. If you and your doctor decide that you need to continue your medication beyond what Partnership for Health will provide, you'll need to buy it yourself.<br><br>
<b>Please choose one:</b><br><br>
I'd like to have the information and consent form <a href="health_pharmo-request2.php">mailed to me.</a><br><br>
I'll <a href="health_pharmo-request4.php">print out</a> the information and consent form myself.<br><br>

<? } elseif ($siteID==3) { ?>

If you'd like free nicotine patches or Zyban, you can download and print a consent form, or we can mail you a packet with all of the information and the form included. In either case, you'll need to read and sign the consent form and mail it back to us, letting us know which medication you'd like to receive.<br><br>
We'll send your doctor a form asking him or her to tell us whether you can use the medication. The form reminds the doctor of the risks and side effects, and that he or she will be responsible for monitoring your care. If your doctor signs the form, we will mail him or her the correct supply. You'll need to go to the doctor's office to pick it up. If you and your doctor decide that you need to continue your medication beyond what Partnership for Health will provide, you'll need to buy it yourself.<br><br>
<b>Please choose one:</b><br><br>
I'd like to have the information and consent form <a href="health_pharmo-request2.php">mailed to me.</a><br><br>
I'll <a href="health_pharmo-request5.php">print out</a> the information and consent form myself.<br><br>

<? } else { ?>

If you'd like free nicotine patches or Zyban, please contact us directly at <a href="mailto:pfh@hcc-web.org">pfh@hcc-web.org</a>. 
We will send you a consent form, which you will need to read, sign, and mail back to us. 
After that, we'll send your doctor a form asking him or her to tell us whether you can use the medication. 
The form reminds the doctor of the risks and side effects, and that he or she will be responsible for monitoring your care.<br><br>

If your doctor signs the form, we will mail him or her the correct supply.
You'll need to go to the doctor's office to pick it up. 
If you and your doctor decide that you need to continue your medication beyond what Partnership for Health will provide, you'll need to buy it yourself.<br><br>

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
        <b>4. Instructions for Requesting Medication</b><br>
<!--
            <table border=0 cellpadding=0 cellspacing=2 style="padding-top:5px; padding-left:8px; padding-bottom:10px; padding-right:5px;">
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><a href="health_pharmo-request2.php" class="manualSubLink">Mail</a></td></tr>
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><a href="health_pharmo-request3.php" class="manualSubLink">Download consent form</a></td></tr>
            </table><br>
-->
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_manual-3g.php"><img src="images/ads/ad_dealwtriggers.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
