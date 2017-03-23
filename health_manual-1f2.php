<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
//contentViewed(23);
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

<span class="manualHeader">SET AND TRACK GOALS</span><br><br>

Some smokers who aren't ready to quit are still interested in seeing what it would be like to cut down on their smoking. This can be helpful down the road, if you do eventually decide that you want to stop smoking.<br><br>
Try this exercise, even if you are not thinking of quitting anytime soon. The idea is to cut down a tiny bit on your number of daily cigarettes every week, and see how it feels. Use the tool below to keep track of your progress.<br><br>

Number of cigarettes I smoke each day: [choose number]<br><br>

<pre>
<?


$cigSTART=22;
if (strlen($HTTP_GET_VARS["cigStart"])>0) $cigSTART=$HTTP_GET_VARS["cigStart"];

// MODERATE/HEAVY SMOKERS
if ($cigSTART>6) {
    $numWeeks=1;
    $reduceBy=($cigSTART*.1);
    $cigEND=round($cigSTART-($reduceBy*7));
    if ($cigSTART>19) {
        $numWeeks=4;
        $reduceBy=($cigSTART*.15);
        $cigEND=round($cigSTART-($reduceBy*4));
    }
    // set bottom threshold
    if (($cigSTART>19) && ($cigEND<10)) $cigEND=10;
    if (($cigSTART<20) && ($cigEND<5)) $cigEND=5;
    // set daily recuction
    $dailyRedux=(($cigSTART-$cigEND)/($numWeeks*7));
    // set first day value value
    $cigSTART-=$dailyRedux;
    // step through all days, print target values
    $dayCount=0;
    for ($i=$cigSTART; $i>=$cigEND; $i-=$dailyRedux) {
        echo round($i)." ";
        $dayCount++;
        if ($dayCount==7) {
            echo "<br>";
            $dayCount=0;
        }
    }

// LIGHT SMOKERS
} else {
}
?>
</pre>
<br><br>
Weeks 1 and 2: Try to cut down to [10% to 15% of total above] cigarettes each day. 

Week 3 and 4: Try to cut down to [10% to 15% of Weeks 1 And 2 total] cigarettes each day.

Tracking: ?




Tips:

o Keep track of how many cigarettes you smoke each day on a small piece of paper tucked into your cigarette pack.
o Plan when you will smoke, and don't smoke until it's time. If you have the urge to smoke but it's not time yet, try to distract yourself.
o When you're smoking, think about whether or not you really want that cigarette at that moment. 



Contemplation (between "Some small steps" and "The next step" in Guide to Your Goals)
Some smokers who are thinking about quitting are interested in seeing what it would be like to cut down on their smoking. This can be helpful down the road, if you do eventually decide that you want to stop smoking.<br><br>
Try this goal-setting exercise, even if you are not thinking of quitting right away. The idea is to cut down a tiny bit on your number of daily cigarettes every two weeks, and see how it feels. Use the tool below to keep track of your progress.<br><br>

Number of cigarettes I smoke each day: [choose number]

Weeks 1 and 2: Try to cut down to [10% to 15% of total above] cigarettes each day. 
Week 3 and 4: Try to cut down to [10% to 15% of Weeks 1 And 2 total] cigarettes each day.

Tracking: ?



Are you finding this easier than you thought it would be? You may be ready to start getting ready to quit! Visit the Guide to Getting Ready to learn more.


Tips:

o Keep track of how many cigarettes you smoke each day on a small piece of paper tucked into your cigarette pack.
o Plan when you will smoke, and don't smoke until it's time. If you have the urge to smoke but it's not time yet, try to distract yourself.
o When you're smoking, think about whether or not you really want that cigarette at that moment. 





Preparation (between "Nicotine fading" and "Soothing your symptoms" in Guide to Getting Ready)
Another great way to get ready to kick the smoking habit is to cut back on the number of cigarettes you smoke each day. It will show you that quitting is really within your reach!<br><br>
Try this goal-setting exercise. The idea is to cut down on your daily number of cigarettes each week, and see how it feels. Use the tool below to chart your progress. Note: This exercise works best with a Quit Date that is four weeks from when you start keeping track.<br><br>

Number of cigarettes I smoke each day: [choose number]

Week 1: Try to cut down to [10% to 15% of total above] cigarettes each day.
Week 2: Try to cut down to [10% to 15% of Week 1 total] cigarettes each day.
Week 3: Try to cut down to [10% to 15% of Week 2 total] cigarettes each day.
Week 4: Try to cut down to [10% to 15% of Week 3 total] cigarettes each day.

Tips:

o Keep track of how many cigarettes you smoke each day on a small piece of paper tucked into your cigarette pack.
o Plan when you will smoke, and don't smoke until it's time. If you have the urge to smoke but it's not time yet, try to distract yourself.
o When you're smoking, think about whether or not you really want that cigarette at that moment. 
o Each time you open a pack of cigarettes, take out a few and throw them away. If you don't have them, you can't smoke them. 







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

    <a href="news.php"><img src="images/ads/new/ad-4.gif" border=0 alt=""></a><br>
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
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forumNEW2.gif" border=0 alt=""></a><br><br>
<? } else { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
<? } ?>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
