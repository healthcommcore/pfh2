<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(8);
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
            
<span class="manualHeader">YOUR NICOTINE DEPENDENCE</span><br><br>


<? if (($userSpecs["isAddicted"]==1) && ($userSpecs["stage"]==1)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that you may be physically dependent on nicotine.</b><br><br>
This can make it harder to quit smoking, but not impossible! You might find that medication is helpful. It can make withdrawal symptoms more manageable and really helps smokers quit.<br><br>

Even though you don't want to quit smoking now, this might be a good time to think about some <a href="health_manual-1f.php">small things</a> you could try, just to see what it might be like to quit someday.<br><br>

If you do decide you are ready to quit over the next 6 months, Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>. There may be a medication that is right for you, if and when you're ready to quit.<br><br>
<? } ?>


<? if (($userSpecs["isAddicted"]==1) && ($userSpecs["stage"]==2)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that you may have a physical dependence on nicotine.</b><br><br>
This can make it harder to quit smoking, but not impossible! You might find that medication is especially helpful. It can lessen withdrawal symptoms and really helps smokers quit.<br><br>

If you decide you are ready to quit over the next 6 months, Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>. There may be a medication that is right for you, and it can help.<br><br>
<? } ?>


<? if (($userSpecs["isAddicted"]!=1) && ($userSpecs["stage"]==1)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that your smoking is more of a habit and less of an addiction.</b><br><br>
Maybe you don't smoke every day, or you only smoke a few cigarettes each day. But it's important to remember that there really is no safe number of cigarettes. Studies show that it's the overall length of time that someone smokes that harms the body, more than the number of cigarettes smoked each day. You might find quit-smoking medication to be helpful. It has been found to help smokers quit, even if they are not addicted to nicotine.<br><br>
 
Even though you don't want to quit smoking now, this might be a good time to think about the things that keep you from doing it. This will make it easier for you if you decide to quit in the future. There may also be some other <a href="health_manual-1g.php">health goals</a> you would like to work on setting. And be sure to check out the <a href="health_tips-activity.php">healthy tips</a> for childhood cancer survivors.<br><br>

If you do decide you are ready to quit over the next 6 months, Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>. There may be a medication that is right for you, if and when you're ready to quit.<br><br>
<? } ?>


<? if (($userSpecs["isAddicted"]!=1) && ($userSpecs["stage"]==2)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that your smoking is more of a habit and less of an addiction.</b><br><br>
Maybe you don't smoke every day, or you only smoke a few cigarettes each day. But it's important to remember that there really is no safe number of cigarettes. Studies show that it's the overall length of time that someone smokes that harms the body, more than the number of cigarettes smoked each day. You might find quit-smoking medication to be helpful. It has been found to help smokers quit, even if they are not addicted to nicotine.<br><br>

If you do decide you are ready to quit over the next 6 months, Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>. There may be a medication that is right for you, and it can help.<br><br>
<? } ?>

<? if (($userSpecs["isAddicted"]!=1) && ($userSpecs["stage"]>2)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that your smoking is more of a habit and less of an addiction.</b><br><br>
Maybe you don't smoke every day, or you only smoke a few cigarettes each day. But it's important to remember that there really is no safe number of cigarettes. Studies show that it's the overall length of time that someone smokes that harms the body, more than the number of cigarettes smoked each day. Quit-smoking medication has been found to help smokers quit, even if they are not addicted to nicotine. You may want to consider using one of these medications as you move forward in your quitting process. Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>.<br><br>

Now might also be a good time to think about <a href="health_manual-3g.php">kicking old habits</a> &#150; the kinds of things that make you want to smoke. Identifying them ahead of time makes quitting much easier!<br><br>
<? } ?>

<? if (($userSpecs["isAddicted"]==1) && ($userSpecs["stage"]>2)) { ?>
<img src="images/bfr/page6<?=ucfirst($userSpecs["gender"])?>.jpg" align="right" vspace=5 style="padding-left:20px; padding-bottom:10px;">
<b>Your smoking pattern suggests that your smoking is more of a habit and less of an addiction.</b><br><br>
Maybe you don't smoke every day, or you only smoke a few cigarettes each day. But it's important to remember that there really is no safe number of cigarettes. Studies show that it's the overall length of time that someone smokes that harms the body, more than the number of cigarettes smoked each day. Quit-smoking medication has been found to help smokers quit, even if they are not addicted to nicotine. You may want to consider using one of these medications as you move forward in your quitting process. Partnership for Health can provide you with free <a href="health_pharmo-patch.php">nicotine patches</a> or <a href="health_pharmo-zyban.php">Zyban</a>.<br><br>

Now might also be a good time to think about how to <a href="health_manual-3f.php">deal with cravings</a>. By knowing what to do ahead of time, it can make quitting much easier!<br><br>
<? } ?>



<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile7.php"><b>7. Next steps</b></a><br><br>
<div align="right">
<a href="you_profile5.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<a href="you_profile2.php" class="manualFooterLink">2</a>&nbsp;
<a href="you_profile3.php" class="manualFooterLink">3</a>&nbsp;
<a href="you_profile4.php" class="manualFooterLink">4</a>&nbsp;
<a href="you_profile5.php" class="manualFooterLink">5</a>&nbsp;
<b>6</b>&nbsp;
<a href="you_profile7.php" class="manualFooterLink">7</a>&nbsp;
<a href="you_profile7.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
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
        <b>6. Your nicotine dependence</b><br><br>
        <a href="you_profile7.php" class="manualSubLink">7. Next steps</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br>
    <a href="health_pharmo.php"><img src="images/ads/new/ad_pharmquiz.gif" border=0 alt=""></a><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>
