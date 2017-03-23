<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(9);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/you_profile.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>
            
<span class="manualHeader">NEXT STEPS</span><br><br>


<img src="images/bfr/page7<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">

<? if ($userSpecs["stage"]==1) { ?>
<b>From your answers, it seems that you aren't ready to quit smoking.</b><br><br>
That's OK. We still hope that you will spend time on the Partnership for Health site. There are healthy tips for childhood cancer survivors, lots of interactive exercises, the PFH forum, and more.<br><br>
Next, visit the <a href="health_manual-1a.php">Guide to Healthy Decisions</a> for more information for smokers who aren't ready to quit.<br><br>
<? } ?>

<? if ($userSpecs["stage"]==2) { ?>
<b>From your answers, it seems that you're thinking about quitting smoking.</b><br><br>
Maybe you aren't ready to do it right now, or you might not be sure about what to do next. Remember, if you eventually do decide that you want to quit, you can request free quit-smoking medication from Partnership for Health.<br><br>
Next, visit the <a href="health_manual-2a.php">Guide to Your Goals</a> for some next steps, interactive exercises about your health, and more.<br><br>
<? } ?>

<? if ($userSpecs["stage"]>2) { ?>
<b>From your answers, it seems that you're ready to quit smoking.</b><br><br>
So you've already taken a big step in getting control of your own health and future! You can do it, and Partnership for Health can help. You may find that quit-smoking medication can make your quit more successful &#150; and you can get it at no cost from Partnership for Health.<br><br>
Next, visit the <a href="health_manual-3a.php">Guide to Getting Ready</a>, created just for smokers who are ready to quit. It's got helpful tips for dealing with cravings, withdrawal symptoms, and more.<br><br>
<? } ?>


<br>
<div align="right">
<a href="you_profile6.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<a href="you_profile2.php" class="manualFooterLink">2</a>&nbsp;
<a href="you_profile3.php" class="manualFooterLink">3</a>&nbsp;
<a href="you_profile4.php" class="manualFooterLink">4</a>&nbsp;
<a href="you_profile5.php" class="manualFooterLink">5</a>&nbsp;
<a href="you_profile6.php" class="manualFooterLink">6</a>&nbsp;
<b>7</b>&nbsp;
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
    <tr bgcolor="#F7F3F9">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="you_profile1.php" class="manualSubLink">1. Profile home</a><br><br>
        <a href="you_profile2.php" class="manualSubLink">2. Some basic facts about cancer treatment</a><br><br>
        <a href="you_profile3.php" class="manualSubLink">3. Something to think about</a><br><br>
        <a href="you_profile4.php" class="manualSubLink">4. How ready you are to quit smoking</a><br><br>
        <a href="you_profile5.php" class="manualSubLink">5. What you think of your risk</a><br><br>
        <a href="you_profile6.php" class="manualSubLink">6. Your nicotine dependence</a><br><br>
        <b>7. Next steps</b><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/ad_forum_quitting.gif" border=0 alt=""></a><br>
    <a href="health_manual-1g2.php"><img src="images/ads/new/ad-3.jpg" border=0 alt=""></a><br>


    &nbsp;</td>
</tr>
</table>

</body>
</html>
