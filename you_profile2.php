<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(4);
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

<span class="manualHeader">SOME BASIC FACTS ABOUT CANCER TREATMENT</span><br><br>

Fifty years ago, kids who got cancer didn't usually survive to adulthood. Today, most children with cancer or similar illnesses are cured by surgery, radiation, chemotherapy, or a combination of these. But these treatments can cause long-term effects &#150; some that don't show up until years after treatment has ended. Some can even last throughout a person's life. These long-term effects are called <a href="news_late-effects.php">late effects</a>.<br><br>

<img src="images/bfr/page2<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
With surgery, radiation, and chemotherapy, the seriousness of the late effects is related to the dose (how much was given) and how much of the body was treated. Radiation to a large part of the body or high doses of chemotherapy will cause more serious late effects. Treatments given at a younger age are also more likely to affect normal growth and development later on. Every case is different in terms of late effects. But we do know that smoking can make the late effects of some treatments more likely and more severe.<br><br>




<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile3.php"><b>3. Something to think about</b></a><br><br>
<div align="right">
<a href="you_profile1.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<b>2</b>&nbsp;
<a href="you_profile3.php" class="manualFooterLink">3</a>&nbsp;
<a href="you_profile4.php" class="manualFooterLink">4</a>&nbsp;
<a href="you_profile5.php" class="manualFooterLink">5</a>&nbsp;
<a href="you_profile6.php" class="manualFooterLink">6</a>&nbsp;
<a href="you_profile7.php" class="manualFooterLink">7</a>&nbsp;
<a href="you_profile3.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
&nbsp;&nbsp;<br><br>
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
        <a href="you_profile1.php" class="manualSubLink">1. Profile home</a><br><br>
        <b>2. Some basic facts about cancer treatment</b><br><br>
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
    <a href="news.php"><img src="images/ads/new/ad-4.gif" border=0 alt=""></a><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>
