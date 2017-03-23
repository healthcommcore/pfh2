<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(110);
$showWide=0;
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

<span class="manualHeader">HOW TO USE ZYBAN</span><br><br>


1. Set a quit date.<br><br>

2. Start taking Zyban 8 to 14 days before your quit date. Zyban pills must be taken whole. Do not crush, chew, or divide the pills. They may be taken with or without food. <br><br>

3. For the first 3 days, take 1 pill in the morning. Starting on the fourth day, take a second pill at night. Be sure to take the pills at least 8 hours apart. <br><br>

4. Quit smoking on your quit date and continue taking 2 Zyban pills each day.<br><br>

5. Treatment is recommended for 7 to 12 weeks. You should take your prescription
for as long as your doctor recommends.<br><br>

6. If you have trouble sleeping, you may be taking Zyban too close to
bedtime. Try taking your second pill in the late afternoon or early evening. Be sure to take the pills at least 8 hours apart. <br><br>

7. If you forget a dose, skip it and wait to take your next dose at the regular time.  <br><br>

8. Alcohol consumption should be kept to a minimum while taking Zyban. <br><br>





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
        <a href="health_pharmo-zyban.php" class="manualSubLink"><b>3. Zyban</b></a><br>
            <table border=0 cellpadding=0 cellspacing=2 style="padding-top:5px; padding-left:8px; padding-bottom:10px; padding-right:5px;">
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><b>Instructions</b></td></tr>
            </table><br>
        <a href="health_pharmo-request.php" class="manualSubLink">4. Instructions for Requesting Medication</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_tips-sleep.php"><img src="images/ads/new/ad-5.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
