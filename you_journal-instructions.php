<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(13);
$showWide=1;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
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
    <td width=592 valign="top"><img src="images/pageTitles/you_journal.gif" width=592 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=517 valign="top" class="column2Text"><img src="images/blank.gif" width=517 height=1 border=0 alt=""><br>

<span class="manualHeader">INSTRUCTIONS</span><br>
<a href="you_journal.php">back to Your Journal</a><br><br>

Writing is a very personal process, so we've included tools to help you personalize your journal entries as much as possible.<br><br>

<table border=0 cellpadding=0 cellspacing=0>
<tr>
<td valign="top"><img src="images/blank.gif" width=100 height=1 alt=""><br>
<img src="images/icon_bold.gif" width=22 height=21 alt="">
<img src="images/icon_italic.gif" width=22 height=21 alt="">
<img src="images/icon_underline.gif" width=22 height=21 alt=""><br>
</td>
<td rowspan=99><img src="images/blank.gif" width=40 height=1 alt=""></td>
<td valign="top" class="column2Text">These buttons allow you to highlight words in bold or italics, or you can underline them for emphasis.</td>

</tr>
<tr><td colspan=3><img src="images/blank.gif" width=1 height=16 alt=""></td></tr>
<tr>
<td valign="top">
<img src="images/icon_left.gif" width=22 height=21 alt="">
<img src="images/icon_center.gif" width=22 height=21 alt="">
<img src="images/icon_right.gif" width=22 height=21 alt=""><br>
</td>
<td valign="top" class="column2Text">These buttons allow you to set up your writing so that it's aligned with the left side, right side, or center of the page.</td>

</tr>
<tr><td colspan=3><img src="images/blank.gif" width=1 height=16 alt=""></td></tr>
<tr>
<td valign="top">
<img src="images/icon_color.gif" width=86 height=61 alt=""><br>
</td>
<td valign="top" class="column2Text">This button allows you to choose what colors you want your words to be. You can highlight a word, a paragraph, or even your whole entry, and then just click on the color you like to change it.</td>
</tr>

<tr><td colspan=3><img src="images/blank.gif" width=1 height=16 alt=""></td></tr>
<tr>
<td valign="top">
<img src="images/icon_size.gif" width=44 height=19 alt=""><br>
</td>
<td valign="top" class="column2Text">This allows you to make your words larger or smaller for emphasis or personal preference. The size 12 font is considered standard.</td>
</tr>
<tr><td colspan=3><img src="images/blank.gif" width=1 height=16 alt=""></td></tr>

<tr>
<td valign="top">
<img src="images/icon_font.gif" width=78 height=19 alt=""><br>
</td>
<td valign="top" class="column2Text">This allows you to choose your font style. Click on the font you want to use for your whole entry before you begin typing, or highlight individual words or paragraphs you want to change after you write and then click on the font style.</td>
</tr>
</table><br>


















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
