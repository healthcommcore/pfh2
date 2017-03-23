<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(16);
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
    <td width=400 valign="top"><img src="images/pageTitles/health_home.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>


Partnership for Health wants to help every survivor live a healthy life, and that starts with <b>you</b>.
Come to this section of the site for tips on how to be healthier in almost every aspect of your life. It's all here, from nutrition to exercise and stress management. Find out how smoking affects the health issues that are unique to you, learn about quit-smoking medications, and more. <br>
<?
$allGuides=array(
1=>"Guide to Healthy Decisions",
2=>"Guide to Your Goals",
3=>"Guide to Getting Ready",
4=>"Guide to Action");
?>
<ul>
<li><a href="health_tips-activity.php"><b>Healthy Tips</b></a><br>
From your emotional health to your physical health, we have tips for taking care of yourself from head to toe.</li>
<li><a href="health_manual-<?=$userSpecs["stage"]?>a.php"><b><?=$allGuides[$userSpecs["stage"]]?></b></a><br>
Need help setting or reaching healthy goals? We can help you, with plenty of activities and interactive tools.</li>
<li><a href="health_bodyguy.php"><b>Your Body</b></a><br>
What does smoking combined with late effects of treatment do to your body? Take a look and find out.</li>
<li><a href="health_pharmo.php"><b>Quit-smoking Medications</b></a><br>
Learn about medications that can make quitting a lot easier, and see if one is right for you.</li>
<li><a href="health_dependency.php"><b>Are You Dependent on Cigarettes?</b></a><br>
Find out by taking this quick quiz!</li>
</ul><br>


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
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_manual-4b.php"><img src="images/ads/new/ad_cravingshelp.gif" border=0 alt=""></a><br>
    <a href="health_manual-1g2.php"><img src="images/ads/new/ad-3.jpg" border=0 alt=""></a><br><br>

    &nbsp;</td>
</tr>
</table>

</body>
</html>

