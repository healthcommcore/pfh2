<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(49);
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

<span class="manualHeader">WORRYING ABOUT WEIGHT</span><br><br>

<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
$dietNOTES=$HTTP_POST_VARS["list1"];
$dietCHECKS="";
for ($i=1; $i<9; $i++) {
$dietCHECKS.=$HTTP_POST_VARS["chk".$i];
}
$mysqlID=dbConnect();
$resultID=mysql_query("UPDATE PFHUserInfo SET dietCHECKS=\"".$dietCHECKS."\", dietNOTES=\"".addslashes($dietNOTES)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
dbClose();
echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>

Some smokers who are getting ready to quit worry about gaining weight. Some do gain weight after quitting, but it's usually no more than 5 to 10 pounds. Others gain no weight at all. Just remember that a few extra pounds are not nearly as dangerous to your health as smoking can be.<br><br>
Here are some tips for keeping off extra pounds when quitting smoking. Add your own ideas to the list, and look at the tips page on controlling your <a href="health_tips-weight.php">weight</a> for more help.<br><br>

<OBJECT width=341 height=705 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list13.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=705 bgcolor="#FBFAE9" name="myList" src="images/flash/list13.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
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

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum_quitdate2.gif" border=0 alt=""></a><br>
    <a href="health_tips-memory.php"><img src="images/ads/new/ad-7.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


