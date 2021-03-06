<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(26);
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_precontemplation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>
            

<span class="manualHeader">YOU CAN DO IT</span><br><br>
Maybe you don't want to make health changes because you doubt you can make them work. Maybe you've tried to quit smoking already and been disappointed when you slipped. Or you might feel that you've been through enough, that you should live for today and enjoy smoking, rather than worry about any health habits and how they might affect you. <br><br>

Whatever's on your mind, you can share it in the Partnership for Health forums! Ask yourself these questions, and then talk about the answers with other PFH members.
<ul>
<li>What are some things I've done in the past that were very challenging?<br><b><a href="/forum/viewforum.php?f=1">Talk about them in the PFH forum</a>.</b></li>
<li>What choices have I made that were good for me?<br><b><a href="/forum/viewforum.php?f=1">Talk about them in the PFH forum</a>.</b></li>
<li>If I had help and support from someone who could relate to me, would making health changes seem easier?<br><b><a href="/forum/viewforum.php?f=1">Talk about it in the PFH forum</a>.</b></li>
</ul><br>


<? echo showNextPrev("precontemplation"); ?>


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
<? echo showSubpageLinks("precontemplation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_tips-memory.php"><img src="images/ads/new/ad-7.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
