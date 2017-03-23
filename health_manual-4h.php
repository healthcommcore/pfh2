<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(59);
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_action.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>


<span class="manualHeader">REWARD YOURSELF</span><br><br>

<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
$rewardsNOTES1=$HTTP_POST_VARS["list1"];
$rewardsNOTES2=$HTTP_POST_VARS["list2"];
$rewardsNOTES3=$HTTP_POST_VARS["list3"];
$rewardsNOTES4=$HTTP_POST_VARS["list4"];
$mysqlID=dbConnect();
$resultID=mysql_query("UPDATE PFHUserInfo SET rewardsNOTES1=\"".addslashes($rewardsNOTES1)."\", rewardsNOTES2=\"".addslashes($rewardsNOTES2)."\", rewardsNOTES3=\"".addslashes($rewardsNOTES3)."\", rewardsNOTES4=\"".addslashes($rewardsNOTES4)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
dbClose();
echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>

Another way to celebrate the new you is to reward yourself on a regular basis. 
Set anniversary dates  &#150;  after one week and then one month of being smoke-free, for example. 
Take the money you would have spent on cigarettes in that time and treat yourself to something. 
You can go out to dinner with a friend, buy yourself something, treat yourself to an event, whatever you like! 
Check out the page on <a href="news_cost-benefits.php">cost savings</a> to give you some ideas.<br><br>

<OBJECT width=341 height=780 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list15.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=780 bgcolor="#FBFAE9" name="myList" src="images/flash/list15.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
</OBJECT><br><br>


<? echo showNextPrev("action"); ?>

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
<? echo showSubpageLinks("action"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_tips-sleep.php"><img src="images/ads/new/ad-5.gif" border=0 alt=""></a><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
