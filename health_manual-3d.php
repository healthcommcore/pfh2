<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(42);
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

<span class="manualHeader">NICOTINE FADING</span><br><br>
When getting ready to quit smoking, you might find it helpful to slowly cut back the amount of nicotine your body receives. This is called nicotine fading.<br><br>
Different brands of cigarettes have different amounts of nicotine. Start by changing your brand to one that has a lower nicotine content. If you smoke a high-nicotine brand, you'll need to switch more than once  &#150;  first to a medium-nicotine brand and then to a low-nicotine brand. <br><br>
Whatever process you use, there are some important dos and don'ts to follow when you're nicotine fading:<br><br>

<b>Do:</b>
<ul>
<li>make sure you buy the right type of brand  &#150;  one that's lower in nicotine than the brand you normally smoke.</li>
<li>try another brand if you don't like the first brand you choose. Just be sure it's lower in nicotine than the brand you normally smoke!</li>
<li>set a <a href="health_manual-3l.php">Quit Date</a> before you begin nicotine fading.</li>
</ul>

<b>Don't:</b>
<ul>
<li>smoke more cigarettes than you normally do.</li>
<li>inhale more often or more deeply.</li>
<li>go directly from a high-nicotine brand to a low one.</li>
</ul>

If you do it correctly, nicotine fading can help you lower the amount of nicotine in your body before you quit, which will make your withdrawal symptoms much easier to take!<br><br>




<? echo showNextPrev("preparation"); ?>



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
<? echo showSubpageLinks("preparation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="news.php"><img src="images/ads/new/ad-4.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum_quitdate2.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


