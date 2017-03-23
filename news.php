<?
include("includes/site-functions.php");
$sectionID="news";
contentViewed(129);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: News & Info</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SHOW ANSWER
    function showAnswer(answerIndex) {
        document.getElementById("answer"+answerIndex).style.color="#706368";
    }
    //-->
    </script>
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
    <td width=400 valign="top"><img src="images/pageTitles/news_home.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>


Cancer research and treatment is changing all the time &#150; and Partnership for Health will keep you informed about it here!
Check this page for links to recent cancer news items.
This area of the site is also where you can read up on advances in the treatment of childhood cancer, and learn more about late effects of cancer treatment and how they relate to smoking.
Be sure to check the <a href="news_resources.php">Resources</a> section for helpful books, newsletters, Web sites, and other resources chosen just for childhood cancer survivors. <br><br>


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
    <tr bgcolor="#F2FAF6">
        <td valign="top"><img src="images/rightnav-header2b.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
<!--        <a href="news_archive.php?newsID=1">1. Secondary Cancers in Survivors</a><br><br> -->
        <a href="news_archive.php?newsID=2">1. Amputation's Effect on Survivors</a><br><br>
        <a href="news_archive.php?newsID=3">2. New Treatment for Stem Cell Transplants</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_tips-memory.php"><img src="images/ads/new/ad-7.gif" border=0 alt=""></a><br>
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




