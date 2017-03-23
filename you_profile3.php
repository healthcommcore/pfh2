<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(5);
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


<span class="manualHeader">SOMETHING TO THINK ABOUT</span><br><br>

Smoking is an important thing for childhood cancer survivors to think about. Many survivors who smoke don't know that they are at a higher risk for developing a new cancer, even if the first cancer wasn't in the lungs. Smoking ups the chances of a new cancer developing. And smoking can make the late effects of some treatments more likely &#150; and more severe.<br><br>


<img src="images/bfr/page3<?=ucfirst($userSpecs["gender"])?>.jpg"><br><br>
<? if (($userSpecs["treatmentChemotherapy"]==1) && ($userSpecs["treatmentRadiation"]!=1) && ($userSpecs["treatmentSurgery"]!=1) && ($userSpecs["treatmentUnknown"]!=1)) { ?>
Chemotherapy can affect the heart and can lead to problems with the lungs. Smoking can seriously affect the way the heart and lungs work. This can make any late effects much more serious.<br><br>
<? } ?>

<? if (($userSpecs["treatmentRadiation"]==1) && ($userSpecs["treatmentChemotherapy"]!=1) && ($userSpecs["treatmentSurgery"]!=1) && ($userSpecs["treatmentUnknown"]!=1)) { ?>
Radiation can lead to future heart disease. The effects of the radiation depend on how much was given (the more radiation, the greater the chance for late effects). Radiation can also cause problems with the lungs or lung disease. Smoking can seriously affect the way the heart and lungs work. This can make any late effects much more serious.<br><br>
<? } ?>

<? if (($userSpecs["treatmentChemotherapy"]==1) && ($userSpecs["treatmentRadiation"]==1)) { ?>
Chemotherapy and radiation can both affect the way the heart works, and can lead to problems. Both therapies can also lead to late effects that involve the lungs and lung disease. Smoking can worsen any late effects and make problems with these body systems much more serious.<br><br>
<? } ?>

<? if ($userSpecs["gender"]=="f") { ?>
For women, the late effects of some treatments combined with smoking can make it more likely for them to develop cervical cancer. Women who have had a childhood cancer and who smoke also up their chances of bladder cancer.<br><br>
<? } ?>




<br><span class="manualNext">Next Up:</span><br><br>
<a href="you_profile4.php"><b>4. How ready you are to quit smoking</b></a><br><br>
<div align="right">
<a href="you_profile2.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="you_profile1.php" class="manualFooterLink">1</a>&nbsp;
<a href="you_profile2.php" class="manualFooterLink">2</a>&nbsp;
<b>3</b>&nbsp;
<a href="you_profile4.php" class="manualFooterLink">4</a>&nbsp;
<a href="you_profile5.php" class="manualFooterLink">5</a>&nbsp;
<a href="you_profile6.php" class="manualFooterLink">6</a>&nbsp;
<a href="you_profile7.php" class="manualFooterLink">7</a>&nbsp;
<a href="you_profile4.php" class="manualFooterLink"><b>Next</b></a>&nbsp;
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
        <b>3. Something to think about</b><br><br>
        <a href="you_profile4.php" class="manualSubLink">4. How ready you are to quit smoking</a><br><br>
        <a href="you_profile5.php" class="manualSubLink">5. What you think of your risk</a><br><br>
        <a href="you_profile6.php" class="manualSubLink">6. Your nicotine dependence</a><br><br>
        <a href="you_profile7.php" class="manualSubLink">7. Next steps</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>
