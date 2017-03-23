<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(31);
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

<span class="manualHeader">WHYS, WHERES, AND WHENS OF YOUR SMOKING</span><br><br>

<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
$whenSmokeNOTES1=$HTTP_POST_VARS["list1"];
$whenSmokeNOTES2=$HTTP_POST_VARS["list2"];
$whenSmokeNOTES3=$HTTP_POST_VARS["list3"];
$mysqlID=dbConnect();
$resultID=mysql_query("UPDATE PFHUserInfo SET whenSmokeNOTES1=\"".addslashes($whenSmokeNOTES1)."\", whenSmokeNOTES2=\"".addslashes($whenSmokeNOTES2)."\", whenSmokeNOTES3=\"".addslashes($whenSmokeNOTES3)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
dbClose();
echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>
You might have many reasons for smoking, and it can be hard to realize exactly what those reasons are. But understanding why, where, and when you smoke can be the key to figuring out those reasons &#150; and can help put you on the path toward quitting.<br><br>
Some smokers always have a cigarette when they finish a meal. Others, when they're on the phone. Some might smoke when they're bored, and others when they're angry. Some always take a smoke break at work, and others may light up in the car. Even those who smoke every once in a while gradually get used to smoking in certain situations, like when they're out with friends, when they're drinking, or when they've had a bad day. These triggers can become really powerful cues to smoke.<br><br>
To help remind you when and where you smoke, and how you're feeling when you get a craving, try keeping a smoking diary.<br><br>
Whenever you smoke, write down the following:<br><br>

<OBJECT width=341 height=760 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list19b.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=760 bgcolor="#FBFAE9" name="myList" src="images/flash/list19b.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
</OBJECT><br><br>

By getting to know the things that make you want to smoke, you'll learn how to be prepared and plan things to do instead of smoking. You'll be taking the first steps toward becoming smoke-free.<br><br>


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

    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br>
    <a href="news.php"><img src="images/ads/new/ad-4.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
