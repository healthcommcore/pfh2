<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(106);
$showWide=0;
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
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=400 valign="top"><img src="images/pageTitles/health_pharmo.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>



<? if ($HTTP_GET_VARS["showpage"]=="thankyou") { ?>


<table border=0 cellpadding=0 cellspacing=0 width=340>
<tr><td><img src="images/flash/dependentThanks.gif" width=340 height=50 border=0 alt=""></td></tr>
</table>
<table border=0 cellpadding=25 cellspacing=0 width=340 background="images/flash/dependentBg.gif">
<tr><td><img src="images/blank.gif" width=290 height=1 border=0 alt=""><br>

<? if (substr($HTTP_GET_VARS["answerStr"],0,1)=="1") { ?>
<div style="padding-right:15px;">
If you are pregnant or nursing, you cannot use Zyban or the patch. The medications may be harmful to a fetus or excreted in breast milk. Please talk to your doctor about other ways to stop smoking.
</div><br>
<? }?>

<? if (substr($HTTP_GET_VARS["answerStr"],1,1)=="1") { ?>
<div style="padding-right:15px;">
You may not be able to use Zyban or the patch, because they can increase your heart rate. Please talk to your doctor about your condition and whether or not you can use either of these medicines to stop smoking.
</div><br>
<? }?>

<? if (substr($HTTP_GET_VARS["answerStr"],2,1)=="1") { ?>
<div style="padding-right:15px;">
You may not be able to use Zyban or the patch, because using either of them with Wellbutrin can raise your blood pressure. Please talk to your doctor about your condition and whether or not you can use either of these medicines to stop smoking.
</div><br>
<? }?>


<? if (substr($HTTP_GET_VARS["answerStr"],6,1)=="1") { ?>
<div style="padding-right:15px;">
Because you have one or more of the conditions on this list, talk to your doctor about the possibility of using <a href="health_pharmo-zyban.php">Zyban</a>.
</div><br>
<? }?>

<? if (substr($HTTP_GET_VARS["answerStr"],6,1)=="2") { ?>
<div style="padding-right:15px;">
Because you don't have any of the conditions on this list, <a href="health_pharmo-patch.php">the patch</a> may be a good choice for you. But you should still talk to your doctor about it and other ways to quit smoking.
</div><br>
<? }?>


<? if (substr($HTTP_GET_VARS["answerStr"],7,1)=="3") { ?>
<div style="padding-right:15px;">
Because you've used both products in the past, you should talk to your doctor about the best quit-smoking aid for you right now.
</div><br>
<? }?>

<? if (substr($HTTP_GET_VARS["answerStr"],7,1)=="4") { ?>
<div style="padding-right:15px;">
Because you've used both products in the past, you should talk to your doctor about the best quit-smoking aid for you right now.
</div><br>
<? }?>


<?
// YES
if (substr($HTTP_GET_VARS["answerStr"],8,1)=="1") {
if ((substr($HTTP_GET_VARS["answerStr"],7,1)=="2") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="3") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="4")) {
?>
<div style="padding-right:15px;">
Because you have one or more of the conditions on this list, talk to your doctor about the best quit-smoking aid for you.
</div><br>
<?
}
if ((substr($HTTP_GET_VARS["answerStr"],7,1)=="1") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="3") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="4")) {
if (substr($HTTP_GET_VARS["answerStr"],9,1)=="1") {
?>
<div style="padding-right:15px;">
Because you have one or more of the conditions on these lists, talk to your doctor about quit-smoking strategies that don't involve medication. Some of them are covered on this site.
</div><br>
<?
}
}
}

// NO
if (substr($HTTP_GET_VARS["answerStr"],8,1)=="2") {
if ((substr($HTTP_GET_VARS["answerStr"],7,1)=="2") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="3") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="4")) {
?>
<div style="padding-right:15px;">
<a href="health_pharmo-patch.php">The patch</a> may be the best choice for you. Please talk about it with your doctor.
</div><br>
<?
}
if ((substr($HTTP_GET_VARS["answerStr"],7,1)=="1") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="3") || (substr($HTTP_GET_VARS["answerStr"],7,1)=="4")) {
?>
<div style="padding-right:15px;">
Because you have one or more of the conditions on this list, <a href="health_pharmo-patch.php">the patch</a> may still be a good choice for you if it's combined with some of the health change strategies on this site. Talk to your doctor about the best combination of quit-smoking strategies for you.
</div><br>
<?
}
if (substr($HTTP_GET_VARS["answerStr"],7,1)=="5") {
?>
<div style="padding-right:15px;">
Because you don't have any of the conditions on this list, <a href="health_pharmo-patch.php">the patch</a> may be the best choice for you.
</div><br>
<?
}
}
?>



<? if (substr($HTTP_GET_VARS["answerStr"],9,1)=="2") { ?>
<div style="padding-right:15px;">
Because you don't have any of the conditions on this list, <a href="health_pharmo-zyban.php">Zyban</a> may be the best choice for you. Please talk to your doctor about it.
</div><br>
<? } ?>

<?
if (substr($HTTP_GET_VARS["answerStr"],9,1)=="1") {
if ((substr($HTTP_GET_VARS["answerStr"],7,1)!="1") && (substr($HTTP_GET_VARS["answerStr"],7,1)!="3") && (substr($HTTP_GET_VARS["answerStr"],7,1)!="4")) {
if (substr($HTTP_GET_VARS["answerStr"],8,1)=="1") {
?>
<div style="padding-right:15px;">
Because you have one or more of the conditions on these lists, Zyban and the patch may not be good choices for you. Talk to your doctor about other quit-smoking strategies, and be sure to check out the site for tips and ideas.
</div><br>
<?
}
}
}
?>




</td></tr>
</table>
<table border=0 cellpadding=0 cellspacing=0 width=340>
<tr><td><img src="images/flash/dependentBottom.gif" width=340 height=20 border=0 alt=""></td></tr>
</table><br>


<? } else { ?>


<!-- <span class="manualHeader"></span><br><br> -->

Many people who quit smoking successfully say that quit-smoking medications made the difference. These medications include the patch, which is available over the counter, and Zyban, a prescription drug. As a Partnership for Health participant, you can request either of these for free.<br><br>

If you have a partner or spouse who smokes, the two of you might find it a lot easier to try quitting together. If he or she decides to quit with you, you'll both be eligible to receive these medications for free through the study.<br><br>

Please answer these questions to find out whether Zyban, the patch, or other quit-smoking methods are right for you. You can also check out the links on the right for more information.<br><br>

<OBJECT width=340 height=340 id="pharmo" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/pharmo.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=340 height=340 name="pharmo" bgcolor=#FBFAE9 src="images/flash/pharmo.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>


<? } ?>







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
        <b>1. Quit-smoking Medications home</b><br><br>
        <a href="health_pharmo-patch.php" class="manualSubLink">2. The Patch</a><br><br>
        <a href="health_pharmo-zyban.php" class="manualSubLink">3. Zyban</a><br><br>
        <a href="health_pharmo-request.php" class="manualSubLink">4. Instructions for Requesting Medication</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br>
    <a href="health_manual-2g.php"><img src="images/ads/ad_benefits.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
