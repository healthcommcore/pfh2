<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(45);
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_preparation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">KICKING OLD HABITS</span><br><br>
Even smokers who are physically dependent on nicotine sometimes smoke only out of habit. Many smoke when they do a certain activity just because they associate the activity with smoking. To help break the links between your smoking and your activities, think about what you're doing when you smoke, and what could take the place of lighting that cigarette. Here are a few examples to get you started.

<ul>
<li><i><b>I always have a cigarette with my coffee.</b></i><br>
<b>What I can do instead:</b> Eat a low-calorie snack or take a walk when I drink my coffee.</li>

<li><i><b>I always smoke when I go out with <a href="health_tips-socialSupport.php">friends</a>.</b></i><br>
<b>What I can do instead:</b> Go out with friends who don't smoke, or ask friends to help by not offering me cigarettes.</li>

<li><i><b>I always smoke when I surf the Web.</b></i><br>
<b>What I can do instead:</b> Declare my computer a smoke-free area. Or give myself limited smoke breaks <b>away</b> from the computer, so I have to get up to smoke and I can come back when I'm done smoking. Move ashtrays and lighters away from the computer.</li>

<li><i><b>I always smoke on my break at work.</b></i><br>
<b>What I can do instead:</b> Take a short walk with a co-worker who doesn't smoke.</li>
</ul><br>



<? echo showNextPrev("preparation"); ?>


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
<? echo showSubpageLinks("preparation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_quitting.gif" border=0 alt=""></a><br>
    <a href="health_pharmo.php"><img src="images/ads/new/ad_pharm.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


