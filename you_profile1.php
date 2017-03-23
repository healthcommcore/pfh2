<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(3);
milestone('012');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
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
    <td width=400 valign="top"><img src="images/pageTitles/you_profile.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span style="font-size:10pt; font-weight:bold;">Hi <?=$userSpecs["firstName"]?>!</span><br><img src="images/blank.gif" width=1 height=5 border=0 alt=""><br>
Welcome to your Partnership for Health profile! 
It's based on the answers you gave in the phone survey, and is created specifically for childhood cancer survivors. 
It gives us the chance to share information that may be helpful to you as you think about your health.<br><br>



<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile2.php"><b>2. Some basic facts about cancer treatment</b></a><br><br>
<div align="right">
<b>1</b>
<a href="you_profile2.php" class="manualFooterLink">2</a>
<a href="you_profile3.php" class="manualFooterLink">3</a>
<a href="you_profile4.php" class="manualFooterLink">4</a>
<a href="you_profile5.php" class="manualFooterLink">5</a>
<a href="you_profile6.php" class="manualFooterLink">6</a>
<a href="you_profile7.php" class="manualFooterLink">7</a>
<a href="you_profile2.php" class="manualFooterLink"><b>Next</b></a>
<br><br>
</div>



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
    <tr bgcolor="#F7F3F9">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <b>1. Profile home</b><br><br>
        <a href="you_profile2.php" class="manualSubLink">2. Some basic facts about cancer treatment</a><br><br>
        <a href="you_profile3.php" class="manualSubLink">3. Something to think about</a><br><br>
        <a href="you_profile4.php" class="manualSubLink">4. How ready you are to quit smoking</a><br><br>
        <a href="you_profile5.php" class="manualSubLink">5. What you think of your risk</a><br><br>
        <a href="you_profile6.php" class="manualSubLink">6. Your nicotine dependence</a><br><br>
        <a href="you_profile7.php" class="manualSubLink">7. Next steps</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>
