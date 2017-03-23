<?

//ini_set(display_errors, On);
//error_reporting(2047);
//error_reporting(E_ALL);

session_start();

include("includes/site-functions.php");
$sectionID="home";
contentViewed(150);

$newPosts=0;
$lastPostTime=0;
$mysqlID=dbConnect();
$resultID=mysql_query("SELECT post_time FROM phpbb_posts ORDER BY post_time DESC LIMIT 1",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        $lastPostTime=$specs["post_time"];
    }
}
if ($lastPostTime>0) {
    $resultID=mysql_query("SELECT id FROM PFHUserInfo WHERE (lastViewedForum<".($lastPostTime-21600).") AND (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $newPosts=1;
        }
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>Partnership for Health</title>
    <script language="javascript" src="includes/site-functions.js"></script>
    
    <script language="javascript">
    <!--
    // FUNCTION: MAIN NAV ON/OFF
    function navOn(sectionID) {
        document.images["nav"+sectionID].src="images/nav/btn_"+sectionID+sectionID.substring(0,1).toUpperCase()+sectionID.substring(1)+"-home.gif";
    }
    function navOff(sectionID) {
        document.images["nav"+sectionID].src="images/nav/btn_"+sectionID+"Other.gif";
    }

    
    
    //-->
    </script>
    <style type="text/css">
    BODY {background:#FFFFFF url(images/bgtile.gif) repeat-y; color:#696B6A; font-size:9pt; font-family:Georgia,New York,Times New Roman,times,serif; margin:0px;}
    TD,DIV {color:#696B6A; font-size:9pt; font-family:Georgia,New York,Times New Roman,times,serif;}

    A {color:#DE5E54; text-decoration:none;}
    A:hover {color:#404087; text-decoration:underline;}
    .yoursiteList {padding-left:12px; padding-right:10px;}

    .navLink {color:#7984B0; font-size:8pt; font-family:verdana,arial,sans-serif;}
    .column1Text {color:#FFFFFF; font-size:8pt; font-family:verdana,arial,sans-serif;}
    .column1Link {color:#FFD000; font-size:8pt; font-weight:bold; font-family:verdana,arial,sans-serif; text-decoration:none;}
    .column1Link:hover {color:#FFFF33; font-size:8pt; font-weight:bold; font-family:verdana,arial,sans-serif; text-decoration:underline;}
    .column2Text {color:#3E3F3D; font-size:9pt; line-height:14pt;}
    .calloutText {color:#505050; font-size:8pt; line-height:11pt; font-family:arial,sans-serif;}
    .column3Text {color:#6D789C; font-size:8pt; font-family:verdana,arial,sans-serif;}
    .greenBarTitle {color:#FFF040; font-size:9pt; font-weight:bold;}
    .countdownText {color:#CC3333; font-size:18pt; font-weight:bold; font-family:arial,verdana,sans-serif;}

    .footerText {color:#787878; font-size:7pt; font-family:verdana,arial,sans-serif; line-height:10pt;}
    .footerLink {color:#E09060; font-size:8pt; font-family:verdana,arial,sans-serif; text-decoration:none;}

    .subnav1 {position:absolute; visibility:hidden; top:78px; left:335px;}
    .subnav2 {position:absolute; visibility:hidden; top:78px; left:440px;}
    .subnav3 {position:absolute; visibility:hidden; top:78px; left:545px;}
    .subnav4 {position:absolute; visibility:hidden; top:78px; left:650px;}
    .subnavText {color:#7196CD; font-size:8pt; font-family:verdana,arial,sans-serif; line-height:11pt;}
    .subnavLink {color:#7196CD; font-size:8pt; font-family:verdana,arial,sans-serif; text-decoration:none;}
    </style>
</head>


<body bgcolor="#FFFFFF">
<!-- HEADER -->
<table border=0 cellpadding=0 cellspacing=0 background="images/bgHeader_home.gif"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
<tr>
    <td width=270 rowspan=4><img src="images/blank.gif" width=270 height=98 border=0 alt=""></td>
    <td width=500 align="right"><img src="images/blank.gif" width=500 height=1 border=0 alt=""><br>
    <img src="images/blank.gif" width=325 height=25 border=0 alt="" usemap="#topNav"></td>
</tr>
<tr><td><img src="images/blank.gif" width=1 height=10 border=0 alt=""></td></tr>
<tr>
    <td align="right">
    <table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr>
        <td width=104><a href="you.php" onMouseOver="navOn('you');" onMouseOut="navOff('you');"><img src="images/nav/btn_youOther.gif" width=104 height=37 border=0 alt="" name="navyou"></a></td>
        <td width=103><a href="health.php" onMouseOver="navOn('health');" onMouseOut="navOff('health');"><img src="images/nav/btn_healthOther.gif" width=103 height=37 border=0 alt="" name="navhealth"></a></td>
        <td width=103><a href="community.php" onMouseOver="navOn('community');" onMouseOut="navOff('community');"><img src="images/nav/btn_communityOther.gif" width=103 height=37 border=0 alt="" name="navcommunity"></a></td>
        <td width=104><a href="news.php" onMouseOver="navOn('news');" onMouseOut="navOff('news');"><img src="images/nav/btn_newsOther.gif" width=104 height=37 border=0 alt="" name="navnews"></a></td>
        <td width=15><img src="images/blank.gif" width=15 height=37 border=0 alt=""></td>
    </tr>
    </table></td>
</tr>
<tr><td><img src="images/blank.gif" width=1 height=21 border=0 alt=""></td></tr>
</table></td></tr></table>
<map name="topNav">
<area shape="poly" coords="12,0,67,0,59,24,12,24" href="help.php">
<area shape="poly" coords="68,0,123,0,115,24,60,24" href="home.php">
<area shape="poly" coords="124,0,190,0,182,24,116,24" href="logout.php">
<area shape="poly" coords="191,0,244,0,235,24,183,24" href="faq.php">
<area shape="poly" coords="245,0,325,0,325,24,236,24" href="contact.php">
</map>


<!-- MAIN CONTENT -->
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <!-- COLUMN 1 -->
    <td width=155 valign="top"><img src="images/logoBottom.gif" width=155 height=101 border=0 alt=""><br>
    <img src="images/allAboutYou.jpg" width=155 height=137 border=0 alt=""><br>
<? include("includes/greenbar.php"); ?>
    &nbsp;</td>

    <!-- spacer -->
    <td width=23 valign="top"><img src="images/logoBottom2.gif" width=23 height=80 border=0 alt=""></td>

    <!-- COLUMN 2 -->
<? if ($thisMilestone>10) $thisMilestone=10; ?>
    <td width=400 valign="top"><img src="images/pageTitles/homeTitle_w<?=$thisMilestone?>s<?=$userSpecs["stage"]?>.gif" width=400 height=100 border=0 alt=""><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>
<? include("includes/home_main-week".$thisMilestone.".php"); ?>

            <? $footerWidth=280; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table></td>

    <!-- spacer -->
    <td width=22 valign="top"><img src="images/blank.gif" width=22 height=1 border=0 alt=""></td>

    <!-- COLUMN 3 -->
    <td width=170 valign="top" class="column3Text">
<?
include("includes/home_ads.php");
?><br>
    &nbsp;</td>
</tr>
</table>



</body>
</html>
