<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(7);
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
            
<span class="manualHeader">WHAT YOU THINK OF YOUR RISK</span><br><br>


<? if ($userSpecs["smokingIncreasesProblems"]<2) { ?>
<b>Your answers to the survey suggest that you're not worried about how smoking will affect your health.</b><br><br>
It's true that not everyone who smokes will develop health problems because of their smoking. But studies do show that smokers are much more likely to have many kinds of health problems. For example, people who smoke are more likely to develop lung disease, heart disease, certain cancers, and even gum disease.<br><br>

<img src="images/bfr/page5<?=ucfirst($userSpecs["gender"])?>.jpg"><br><br>
Many childhood cancer survivors have had treatments that affect the <a href="health_bodyguy.php">same organs</a> that are harmed by smoking. This means that by smoking, you are increasing your risk of late effects even more. There is some good news, though! If you decide to quit smoking in the future, here's what will happen:<br><br>
<ul>
<li>You'll lower your risk for many diseases.</li>
<li>Your blood pressure will become lower almost right away.</li>
<li>Your lungs will work up to 30% better within a few months of quitting.</li>
<li>After being smoke-free for 10 years, your risk of lung cancer will be only 50% of what it was when you were a smoker.</li>
</ul>
And if the long-term effects of quitting smoking aren't important to you right now, you may want to think about some of the immediate benefits of quitting:
<ul>
<li>Your sense of smell and taste get much sharper within one week of quitting.</li>
<li>Many people who quit smoking have more energy within a few months.</li>
<li>Lots of spare cash! Check out <a href="news_cost-benefits.php">Your Money and Your Life</a> for an idea of just how expensive smoking really is.</li>
</ul><br>
<? } ?>

<? if (($userSpecs["smokingIncreasesProblems"]==2) || ($userSpecs["smokingIncreasesProblems"]==3)) { ?>
<b>Your answers to the survey suggest that you're not sure about what smoking may be doing to your body.</b><br><br>
It's true that not everyone who smokes will develop health problems because of their smoking. But studies show that smokers are much more likely to have many kinds of health problems. For example, people who smoke are more likely to develop lung disease, heart disease, certain cancers, and even gum disease.<br><br>

<img src="images/bfr/page5<?=ucfirst($userSpecs["gender"])?>.jpg"><br><br>
Many childhood cancer survivors have had treatments that affect the <a href="health_bodyguy.php">same organs</a> that are harmed by smoking. This means that by smoking, you are increasing your risk of late effects even more. There is some good news, though! If you decide to quit smoking in the future, here's what will happen:<br><br>
<ul>
<li>You'll lower your risk for many diseases.</li>
<li>Your blood pressure will become lower almost right away.</li>
<li>Your lungs will work up to 30% better within a few months of quitting.</li>
<li>After being smoke-free for 10 years, your risk of lung cancer will be only 50% of what it was when you were a smoker.</li>
</ul><br>
<? } ?>


<? if ($userSpecs["smokingIncreasesProblems"]>3) { ?>
<b>Your answers to the survey suggest that you are worried about how smoking affects your health, both now and in the future.</b><br><br>
Your worry is understandable, because smoking does cause many health problems, including lung disease, heart disease, certain cancers, and even gum disease.<br><br>

<img src="images/bfr/page5<?=ucfirst($userSpecs["gender"])?>.jpg"><br><br>
Many childhood cancer survivors have had treatments that affect the <a href="health_bodyguy.php">same organs</a> that are harmed by smoking. This means that by smoking, you are increasing your risk of late effects even more. The good news is that if you decide to quit smoking, then:<br><br>
<ul>
<li>You'll lower your risk for many diseases.</li>
<li>Your blood pressure will become lower almost right away.</li>
<li>Your lungs will work up to 30% better within a few months of quitting.</li>
<li>After being smoke-free for 10 years, your risk of lung cancer will be only 50% of what it was when you were a smoker.</li>
</ul><br>
<? } ?>




<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile6.php"><b>6. Your nicotine dependence</b></a><br><br>
<div align="right">
<a href="you_profile4.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<a href="you_profile2.php" class="manualFooterLink">2</a>&nbsp;
<a href="you_profile3.php" class="manualFooterLink">3</a>&nbsp;
<a href="you_profile4.php" class="manualFooterLink">4</a>&nbsp;
<b>5</b>&nbsp;
<a href="you_profile6.php" class="manualFooterLink">6</a>&nbsp;
<a href="you_profile7.php" class="manualFooterLink">7</a>&nbsp;
<a href="you_profile6.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
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
        <b>5. What you think of your risk</b><br><br>
        <a href="you_profile6.php" class="manualSubLink">6. Your nicotine dependence</a><br><br>
        <a href="you_profile7.php" class="manualSubLink">7. Next steps</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="you_journal.php"><img src="images/ads/new/ad-2.jpg" border=0 alt=""></a><br>


    &nbsp;</td>
</tr>
</table>

</body>
</html>
