<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(28);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_contemplation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">DID YOU KNOW?</span><br><br>
Thinking about quitting smoking is even more important for a person who had childhood cancer or a similar illness. Smoking can:
<ul>
<li>make it more likely for a new cancer to develop &#150; even if the first cancer wasn't in your lungs or even related to smoking. And most smoking-related cancers are <b>not</b> as curable as childhood cancers.</li>
<img src="images/guide/kate.gif" width=179 height=361 border=0 alt="" align="right" vspace=5 style="padding-left:20px; padding-bottom:16px;">
<li>set the stage for a new cancer if you had radiation treatment.</li>
<li>increase the late effects of some chemotherapy drugs. (Late effects are the kinds of health problems that occur long after treatment ends.) This can mean a higher risk of problems with your heart and circulation.</li>
</ul>
By thinking about quitting smoking, you're taking a big step toward protecting your health and helping to prevent a new cancer in the future. And remember, you'd also help protect the health of your family and those around you by not exposing them to secondhand smoke.<br><br>

<br>
<span class="manualHeader">THE AIR AROUND YOU</span><br><br>
Smoking isn't only dangerous to <b>your</b> health &#150; it can harm those around you, too. <a href="health_tips-2ndHand.php"> Secondhand smoke</a> (sometimes called ETS, or environmental tobacco smoke) has the same chemicals that a smoker inhales. It can cause lung cancer and other diseases in nonsmokers.<br><br>


<? echo showNextPrev("contemplation"); ?>



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
<? echo showSubpageLinks("contemplation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="news_cig-quiz.php"><img src="images/ads/ad_cigchemicals.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
