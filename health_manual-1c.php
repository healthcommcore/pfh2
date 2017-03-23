<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(19);
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

<span class="manualHeader">ARE YOU PHYSICALLY DEPENDENT ON CIGARETTES?</span><br><br>

<? if ($HTTP_GET_VARS["showpage"]=="thankyou") { ?>


<table border=0 cellpadding=0 cellspacing=0 width=340>
<tr><td><img src="images/flash/dependentThanks.gif" width=340 height=50 border=0 alt=""></td></tr>
</table>
<table border=0 cellpadding=25 cellspacing=0 width=340 background="images/flash/dependentBg.gif">
<tr><td><img src="images/blank.gif" width=290 height=1 border=0 alt=""><br>

<? if ($HTTP_GET_VARS["levelA"]=="high") { ?>
<div style="padding-right:15px;">
It looks like you have a high level of dependence on nicotine &nbsp; &#150;  meaning you may be addicted to cigarettes.<br>
<img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
This can make it harder to quit, but not impossible!<br><br>
You might want to think about trying Zyban or the patch. These are both proven ways to help smokers quit and stay quit. They take the edge off quitting, by helping to control cravings. And they are both available at no charge from Partnership for Health! <a href="health_pharmo.php">Learn more</a> about whether one of these is right for you.
</div>
<? } ?>

<? if ($HTTP_GET_VARS["levelA"]=="low") { ?>
<div style="padding-right:15px;">
It looks like you have a low level of dependence on nicotine. 
<img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
This means that you might not be addicted to cigarettes. But that doesn't mean that you don't feel a little dependent on them &#150; addiction can be both physical and psychological.<br><br>
It may seem logical that only a few cigarettes once in a while can't do much harm, but there really is no such thing as a safe number of cigarettes. Studies show that it's the overall length of time that someone smokes that harms the body, more than the number of cigarettes smoked each day. And light or occasional smokers often become addicted to nicotine eventually. You may want to think about quitting, while you still have the choice. In other words, quitting would be much easier for you than for a heavier smoker, because you wouldn't have to deal with withdrawing from nicotine.<br><br>
For you, the psychological aspects seem to be what keep you smoking. Although there are effective <a href="health_pharmo.php">medications</a> that help people quit smoking, you might find it's more helpful to think about the things and feelings that keep you smoking. A lot of light smokers say they smoke because of:
<ul>
<li>stress</li>
<li>anxiety</li>
<li>depression or the blahs</li>
<li>worry about weight gain</li>
</ul>
Check out our section of <a href="health_tips-activity.php">Healthy Tips</a> for great ideas on how to handle stress, anxiety, or depression without smoking. You'll also find information about how to maintain a healthy weight, effective relaxation techniques, and more.
</div>
<? } ?>


<? if ($HTTP_GET_VARS["levelA"]=="medium") { ?>
<div style="padding-right:15px;">
It looks like you have a medium level of dependence on nicotine.<br>
<img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
This may mean that you are physically <i>or</i> psychologically addicted to cigarettes &nbsp; &#150;  or perhaps a bit of both. <br><br>
You might want to think about trying Zyban or the patch. These are both proven ways to help smokers quit and stay quit. They take the edge off quitting, by helping to control cravings. And they are both available at no charge from Partnership for Health! <a href="health_pharmo.php">Learn more</a> about which method is right for you.<br><br>
Another thing you could try is to think about the things and feelings that keep you smoking. A lot of smokers say they smoke because of:
<ul>
<li>stress</li>
<li>anxiety</li>
<li>depression or the blahs</li>
<li>worry about weight gain</li>
</ul>
Check out our section of <a href="health_tips-activity.php">Healthy Tips</a> for great ideas on how to handle stress, anxiety, or depression without smoking. You'll also find information about how to maintain a healthy weight, effective relaxation techniques, and more.
</div>
<? } ?>
&nbsp; </td></tr>
</table>
<table border=0 cellpadding=0 cellspacing=0 width=340>
<tr><td><img src="images/flash/dependentBottom.gif" width=340 height=20 border=0 alt=""></td></tr>
</table><br>


<? } else { ?>


Some smokers aren't sure. To help you think about it, answer these five questions.<br><br>

<OBJECT width=340 height=300 id="dependent" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/dependent.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=340 height=300 name="dependent" bgcolor=#FBFAE9 src="images/flash/dependent.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT><br><br>


<? } ?>


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

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
