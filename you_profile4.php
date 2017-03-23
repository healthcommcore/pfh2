<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(6);
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

<span class="manualHeader">HOW READY YOU ARE TO QUIT SMOKING</span><br><br>


<img src="images/bfr/page4<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<? if ($userSpecs["stage"]==1) { ?>
<b>Like a lot of smokers, your answers to the survey suggest that you are not ready to quit.</b><br><br>
That's OK &#150; all former smokers begin right where you are. And quitting smoking is a big commitment, so you want to be sure you're ready. Although you're not ready now, you may decide to make some other health <a href="health_manual-1g.php">changes</a>.<br><br>
<? } ?>

<? if ($userSpecs["stage"]==2) { ?>
<b>Like many smokers who have had childhood cancer, your answers show that you aren't quite ready to quit, but you may want to.</b><br><br>
It's not unusual for survivors to have mixed feelings about their smoking. It might help you to think about the pros and cons of your smoking, so check out the <a href="health_manual-2f.php">interactive exercise</a> on the site.<br><br> 
<? } ?>

<? if ($userSpecs["stage"]>2) { ?>
<b>Like many smokers, your answers to the survey questions suggest that you are ready to quit.</b><br><br>
That's great! You're already on the road to improving your health. Now you just need the tools to move forward. Partnership for Health has them for you here, from information about <a href="health_manual-3c.php">quit-smoking medications</a> to how to <a href="health_manual-3g.php">kick old habits</a>.<br><br>
<? } ?>






<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile5.php"><b>5. What you think of your risk</b></a><br><br>
<div align="right">
<a href="you_profile3.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<a href="you_profile2.php" class="manualFooterLink">2</a>&nbsp;
<a href="you_profile3.php" class="manualFooterLink">3</a>&nbsp;
<b>4</b>&nbsp;
<a href="you_profile5.php" class="manualFooterLink">5</a>&nbsp;
<a href="you_profile6.php" class="manualFooterLink">6</a>&nbsp;
<a href="you_profile7.php" class="manualFooterLink">7</a>&nbsp;
<a href="you_profile5.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
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
        <a href="you_profile2.php" class="manualSubLink">2. Some basic facts about cancer treatment</a><br><br>
        <a href="you_profile3.php" class="manualSubLink">3. Something to think about</a><br><br>
        <b>4. How ready you are to quit smoking</b><br><br>
        <a href="you_profile5.php" class="manualSubLink">5. What you think of your risk</a><br><br>
        <a href="you_profile6.php" class="manualSubLink">6. Your nicotine dependence</a><br><br>
        <a href="you_profile7.php" class="manualSubLink">7. Next steps</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

<?
$newPosts=0;
$lastPostTime=0;
$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM phpbb_posts ORDER BY post_time DESC",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        $lastPostTime=$specs["post_time"];
    }
}
if ($lastPostTime>0) {
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (lastViewedForum<".($lastPostTime-21600).") AND (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $newPosts=1;
        }
    }
}
if ($newPosts>0) { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forumNEW2.gif" border=0 alt=""></a><br>
<? } else { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
<? } ?>
    <a href="health_manual-1g2.php"><img src="images/ads/new/ad-3.jpg" border=0 alt=""></a><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>
