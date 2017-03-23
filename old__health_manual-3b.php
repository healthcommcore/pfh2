<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(40);
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

<span class="manualHeader">ARE YOU PHYSICALLY DEPENDENT ON CIGARETTES?</span><br><br>

<? if ($HTTP_GET_VARS["showpage"]=="thankyou") { ?>


        <table border=0 cellpadding=0 cellspacing=0 width=340>
        <tr><td><img src="images/flash/dependentThanks.gif" width=340 height=50 border=0 alt=""></td></tr>
        </table>
        <table border=0 cellpadding=25 cellspacing=0 width=340 background="images/flash/dependentBg.gif">
        <tr><td><img src="images/blank.gif" width=290 height=1 border=0 alt=""><br>

        <? if ($HTTP_GET_VARS["levelA"]=="high") { ?>
        <div style="padding-right:15px;">
        It looks like you have a high level of dependence on nicotine &#150; meaning you may be addicted to cigarettes.<br>
        <img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
        This can make it harder to quit, but not impossible!<br><br>
        You might want to think about trying Zyban or the patch. These are both proven ways to help smokers quit and stay quit. They take the edge off quitting, by helping to control cravings. And they are both available at no charge from Partnership for Health! <a href="health_pharmo.php">Learn more</a> about which method is right for you.
        </div>
        <? } ?>
        
        <? if ($HTTP_GET_VARS["levelA"]=="low") { ?>
        <div style="padding-right:15px;">
        It looks like you have a low level of dependence on nicotine.<br>
        <img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
        This means that you might not be addicted to cigarettes. But that doesn't mean that you don't feel a little dependent on them &#150; addiction can be both physical <i>and</i> psychological. For you, the psychological part seems to be what keeps you smoking.<br><br>
        Although there are effective <a href="health_pharmo.php">medications</a> that help people quit smoking, you might find it's more helpful to think about the things and feelings that keep you smoking. A lot of smokers say they smoke because of:
        <ul>
        <li>stress</li>
        <li>anxiety</li>
        <li>depression or the blahs</li>
        <li>worry about weight gain</li>
        </ul>
        Check out our section of Healthy Tips [link to index page] for great ideas on how to handle stress, anxiety, or depression without smoking. You'll also find information about how to maintain a healthy weight, effective relaxation techniques, and more.
        </div>
        <? } ?>
        
        
        <? if ($HTTP_GET_VARS["levelA"]=="medium") { ?>
        <div style="padding-right:15px;">
        It looks like you have a medium level of dependence on nicotine.<br>
        <img src="images/flash/dependentScale<?=$HTTP_GET_VARS["levelB"]?>.gif" width=265 height=175 border=0 alt=""><br><br>
        This may mean that you are physically <i>or</i> psychologically addicted to cigarettes &#150; or perhaps a bit of both. <br><br>
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
        &nbsp;</td></tr>
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



<br><span class="manualNext">Next Up:</span><br><br>
<a href="health_manual-3c.php"><b>The need for nicotine</b></a><br><br>
<div align="right">
<a href="health_manual-3a.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="health_manual-3a.php" class="manualFooterLink">1</a>&nbsp;
<a href="health_manual-3c.php" class="manualFooterLink">2</a>&nbsp;
<a href="health_manual-3c2.php" class="manualFooterLink">3</a>&nbsp;
<a href="health_manual-3d.php" class="manualFooterLink">4</a>&nbsp;
<a href="health_manual-3e.php" class="manualFooterLink">5</a>&nbsp;
<a href="health_manual-3f.php" class="manualFooterLink">6</a>&nbsp;
<a href="health_manual-3g.php" class="manualFooterLink">7</a>&nbsp;
<a href="health_manual-3h.php" class="manualFooterLink">8</a>&nbsp;
<a href="health_manual-3i.php" class="manualFooterLink">9</a>&nbsp;
<a href="health_manual-3j.php" class="manualFooterLink">10</a>&nbsp;
<a href="health_manual-3k.php" class="manualFooterLink">11</a>&nbsp;
<a href="health_manual-3l.php" class="manualFooterLink">12</a>&nbsp;
<a href="health_manual-3c.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
&nbsp;&nbsp;<br><br>
</div>

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
        <div style="margin:12px;" class="manualSubText">
        <a href="health_manual-3a.php" class="manualSubLink">1. You're ready to quit smoking</a><br><br>
        <a href="health_manual-3c.php" class="manualSubLink">2. The need for nicotine</a><br><br>
        <a href="health_manual-3d.php" class="manualSubLink">3. Nicotine fading</a><br><br>
        <a href="health_manual-3e.php" class="manualSubLink">4. Soothing your symptoms</a><br><br>
        <a href="health_manual-3f.php" class="manualSubLink">5. Cutting out cravings</a><br><br>
        <a href="health_manual-3g.php" class="manualSubLink">6. Kicking old habits</a><br><br>
        <a href="health_manual-3h.php" class="manualSubLink">7. Saying "so long" to stress</a><br><br>
        <a href="health_manual-3i.php" class="manualSubLink">8. Help from friends and family</a><br><br>
        <a href="health_manual-3j.php" class="manualSubLink">9. Exercise</a><br><br>
        <a href="health_manual-3k.php" class="manualSubLink">10. Worrying about weight</a><br><br>
        <a href="health_manual-3l.php" class="manualSubLink">11. Setting a Quit Date!</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_quitdate.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


