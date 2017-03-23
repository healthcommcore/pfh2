<?
//ini_set(display_errors, On);
//error_reporting(2047);
//error_reporting(E_ALL);


include("includes/site-functions_rpk.php");
$sectionID="health";
contentViewed(61);
$showWide=1;

milestone(011);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
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
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt="">
    
    <? 
echo  $_SESSION["stageID"]."<br>"; 
echo  $_SESSION["userID"]."<br>";
echo  $_SESSION["mstn"]."<br>";
print_r( $_SESSION["mstnContent"]) ."<br>";

?> 
    </td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=592 valign="top"><img src="images/pageTitles/health_bodyguy.gif" width=592 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=517 valign="top" class="column2Text"><img src="images/blank.gif" width=517 height=1 border=0 alt=""><br>

As a childhood cancer survivor, you may know a bit about how treatments can cause <a href="news_late-effects.php">late effects</a>, but do you know about the relationship between smoking and these late effects? Smoking and long-term effects of treatment can affect nearly every organ and system in the body.<br><br>
<!-- Click on the buttons below to learn how each part is affected by late effects, smoking, and the combination of the two. -->

<!-- When you took the PFH survey, you said that you were treated with chemotherapy. Click on the body part or system below to learn how you can be affected by the combination of smoking and the late effects of chemotherapy.<br><br> -->

<? if ($userSpecs["gender"]=="m") { ?>
<OBJECT width=475 height=540 id="bodyguy" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/bodyguy3.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=475 height=540 bgcolor="#FBFAE9" name="bodyguy" src="images/flash/bodyguy3.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>
<? } else { ?>
<OBJECT width=475 height=540 id="bodygal" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/bodygal3.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=475 height=540 bgcolor="#FBFAE9" name="bodygal" src="images/flash/bodygal3.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>
<? } ?>

            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=50><img src="images/blank.gif" width=50 height=1 border=0 alt=""></td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>

