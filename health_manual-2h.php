<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(35);
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_contemplation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">WHAT ARE YOUR WORRIES ABOUT QUITTING SMOKING?</span><br><br>
<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
    $worriesNOTES1=$HTTP_POST_VARS["list1"];
    $worriesNOTES2=$HTTP_POST_VARS["list2"];
    $mysqlID=dbConnect();
    $resultID=mysql_query("UPDATE PFHUserInfo SET worriesNOTES1=\"".addslashes($worriesNOTES1)."\", worriesNOTES2=\"".addslashes($worriesNOTES2)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
    dbClose();
    echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>

Many people who think about quitting smoking worry about having cravings and how to handle them. Or what will happen when they are around <a href="health_tips-socialSupport.php">other smokers</a>. The thing to remember is that most people have only minor problems, and some have no problems at all.<br><br>
List your worries about quitting smoking &#150; <b>any</b> that you can think of &#150; on the left-hand side below. Then think about some solutions in the right-hand side. We've filled in the first few for you as examples.<br><br>

<OBJECT width=341 height=425 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list8.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=425 bgcolor="#FBFAE9" name="myList" src="images/flash/list8.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
</OBJECT><br><br>


Remember, these problems are temporary. Nicotine withdrawal doesn't last long at all &#150; and having it is actually a good sign, because it means your body is getting used to functioning without nicotine!<br><br>



<? echo showNextPrev("contemplation"); ?>

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
<? echo showSubpageLinks("contemplation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_quitting.gif" border=0 alt=""></a><br>
    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
