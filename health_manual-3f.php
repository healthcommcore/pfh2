<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(44);
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

<span class="manualHeader">CUTTING OUT CRAVINGS</span><br><br>

<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
$cutCravingsNOTES=$HTTP_POST_VARS["list1"];
$mysqlID=dbConnect();
$resultID=mysql_query("UPDATE PFHUserInfo SET cutCravingsNOTES=\"".addslashes($cutCravingsNOTES)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
dbClose();
echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>

When you deal with cravings for a cigarette, you're not alone. These cravings can be strong for everyone, especially in the beginning. But if you know how to handle your cravings <b>before</b> they hit, you'll be much better at fighting them.<br><br>
The next time you crave a cigarette, remember these <b>4 Ds</b>:
<ul>
<li><b>Delay.</b> Instead of reaching for a cigarette right away, wait 5 minutes. The urge will pass whether you smoke or not. Count to 200, try some <a href="health_tips-relaxation.php">relaxation techniques</a>, or call a friend  &#150;  anything to delay lighting that cigarette.</li>
<li><b>Drink water.</b> When a craving hits, drink a large glass of water. Drinking 6 to 8 glasses of water a day will keep you feeling full and hydrated. It also helps to flush the nicotine from your system.</li>
<li><b>Deep breathe.</b> Take deep breaths when you get the urge to smoke. Inhale through your nose, hold the breath while counting to 3, and then exhale slowly through your mouth. Do this 4 or 5 times.</li>
<li><b>Do something else.</b> Keep your mind off smoking by doing something you enjoy. See a movie, go for a walk, <a href="health_tips-activity.php">exercise</a>, visit a friend, work on a hobby or project, or go for a drive.</li>
</ul>
Can you think of some other ways you can tame your cravings? Write them here and talk about them in the PFH Forum:<br><br>

<OBJECT width=341 height=400 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list10.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=400 bgcolor="#FBFAE9" name="myList" src="images/flash/list10.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
</OBJECT><br><br>


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

    <a href="news_cost-benefits.php"><img src="images/ads/ad_costben.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


