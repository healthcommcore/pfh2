<?
include("includes/site-functions.php");
$sectionID="home";
$allLetters=array("","a","b","c","d");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: </title>
    
    <style type="text/css">
    BODY {background:#FFFFFF url(images/bgtile.gif) repeat-y; color:#696B6A; font-size:9pt; font-family:Georgia,New York,Times New Roman,times,serif; margin:0px;}
    TD,DIV {color:#696B6A; font-size:9pt; font-family:Georgia,New York,Times New Roman,times,serif;}

    A {color:#D4834E; text-decoration:none;}
    .yoursiteList {padding-left:12px; padding-right:10px;}

    .navLink {color:#7984B0; font-size:8pt; font-family:verdana,arial,sans-serif;}
    .column1Text {color:#FFFFFF; font-size:8pt; font-family:verdana,arial,sans-serif;}
    .column1Link {color:#FFFF00; font-size:8pt; font-family:verdana,arial,sans-serif; text-decoration:none;}
    .column2Text {color:#3E3F3D; font-size:9pt; line-height:14pt;}
    .calloutText {color:#505050; font-size:8pt; line-height:11pt; font-family:arial,sans-serif;}
    .column3Text {color:#6D789C; font-size:8pt; font-family:verdana,arial,sans-serif;}

    .footerText {color:#787878; font-size:7pt; font-family:verdana,arial,sans-serif; line-height:10pt;}
    .footerLink {color:#E09060; font-size:8pt; font-family:verdana,arial,sans-serif; text-decoration:none;}

    .subnav1 {position:absolute; visibility:hidden; top:78px; left:335px;}
    .subnav2 {position:absolute; visibility:hidden; top:78px; left:440px;}
    .subnav3 {position:absolute; visibility:hidden; top:78px; left:545px;}
    .subnav4 {position:absolute; visibility:hidden; top:78px; left:650px;}
    .subnavText {color:#7196CD; font-size:8pt; font-family:verdana,arial,sans-serif; line-height:11pt;}
    .subnavLink {color:#7196CD; font-size:8pt; font-family:verdana,arial,sans-serif; text-decoration:none;}
    </style>
</head>


<body bgcolor="#FFFFFF">
<!-- HEADER -->
<table border=0 cellpadding=0 cellspacing=0 background="images/bgHeader_home.gif"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
<tr>
    <td width=270 rowspan=4><img src="images/blank.gif" width=270 height=98 border=0 alt=""></td>
    <td width=500 align="right"><img src="images/blank.gif" width=500 height=1 border=0 alt=""><br>
    <img src="images/blank.gif" width=325 height=25 border=0 alt="" usemap="#topNav"></td>
</tr>
<tr><td><img src="images/blank.gif" width=1 height=10 border=0 alt=""></td></tr>
<tr>
    <td align="right">
    <table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr>
        <td width=105><a href="news.php"><img src="images/nav/btn_newsOther.gif" width=105 height=37 border=0 alt=""></a></td>
        <td width=104><a href="community.php"><img src="images/nav/btn_communityOther.gif" width=104 height=37 border=0 alt=""></a></td>
        <td width=104><a href="health.php"><img src="images/nav/btn_healthOther.gif" width=104 height=37 border=0 alt=""></a></td>
        <td width=105><a href="you.php"><img src="images/nav/btn_youOther.gif" width=105 height=37 border=0 alt=""></a></td>
        <td width=12><img src="images/blank.gif" width=12 height=37 border=0 alt=""></td>
    </tr>
    </table></td>
</tr>
<tr><td><img src="images/blank.gif" width=1 height=21 border=0 alt=""></td></tr>
</table></td></tr></table>
<map name="topNav">
<area shape="poly" coords="65,0,121,0,113,24,65,24" href="home2<?=$allLetters[$_SESSION["stageID"]]?>.php">
<area shape="poly" coords="122,0,189,0,181,24,114,24" href="logout.php">
<area shape="poly" coords="190,0,238,0,230,24,182,24" href="faq.php">
<area shape="poly" coords="239,0,325,0,317,24,231,24" href="contact.php">
</map>


<!-- MAIN CONTENT -->
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <!-- COLUMN 1 -->
    <td width=155 valign="top"><img src="images/logoBottom.gif" width=155 height=101 border=0 alt=""><br>
    <img src="images/allAboutYou.jpg" width=155 height=137 border=0 alt=""><br>
        <table border=0 cellpadding=12 cellspacing=0>
        <tr>
            <td valign="top" class="column1Text" bgcolor="#7C9F54"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Do you live, work, or hang out with another smoker? That might make quitting more challenging, but not impossible. Read about the ways you can work around it &#150; if and when you decide to quit.<br>
            &nbsp;</td>
        </tr></table><img src="images/ruleLeft.gif" width=155 height=1 border=0 alt=""><br>
    &nbsp;</td>

    <!-- spacer -->
    <td width=23 valign="top"><img src="images/logoBottom2.gif" width=23 height=80 border=0 alt=""></td>

    <!-- COLUMN 2 -->
    <td width=400 valign="top"><img src="images/pageTitles/home_youre-thinking-about-quitting.gif" width=400 height=99 border=0 alt=""><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<!--
            <table border=0 cellpadding=1 cellspacing=0 align="right" width=150 style="margin-left:15px; margin-bottom:20px;"><tr bgcolor="#666666"><td>
            <table border=0 cellpadding=0 cellspacing=0>
            <tr bgcolor="#FFFFFF">
                <td><img src="images/consuela.jpg" width=150 height=97 border=0 alt=""><br>
                <img src="images/nextup.gif" width=150 height=37 border=0 alt=""><br>
                <div class="calloutText" style="padding:12px;">
The first two times I tried to quit smoking, I went cold turkey and didn't tell anyone. What a disaster! The third time, I used the patch and leaned on friends for help. It made all the difference.<br>
                </div>
                &nbsp;</td>
            </tr>
            </table></td></tr></table>
-->
<b>You're thinking about quitting&#133;</b><br><br>

&#133; and that's great! But we know that thinking about quitting doesn't mean you're necessarily ready to quit. That's OK &#150; we're ready only when you are! Quitting smoking takes a strong commitment, and you really have to want to do it to make it work.<br><br>

<img src="images/counselor.gif" width=180 height=334 border=0 alt="" align="right" style="padding-left:20px; padding-top:3px;  padding-bottom:16px;">
Many smokers who are toying with the idea of quitting say that nicotine cravings are the thing they'd be most nervous about. And that's understandable &#150; nicotine is very, very addictive. But did you know that Partnership for Health offers nicotine replacement therapy (like the patch or gum) and Zyban free of charge? Take this quick quiz to see which quit-smoking aid would be best for you, should you ever decide to kick the habit!<br><br>

And if you're the type who isn't dependent on nicotine, but feels like you need cigarettes to help handle stress or anxiety? Well, we've got a quiz for you, too &#150; and it's full of helpful answers that might make the idea of quitting smoking less scary.  <br><br>


            <? $footerWidth=280; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table></td>

    <!-- spacer -->
    <td width=22 valign="top"><img src="images/blank.gif" width=22 height=1 border=0 alt=""></td>

    <!-- COLUMN 3 -->
    <td width=170 valign="top" class="column3Text">
    <img src="images/ads/new/ad_forum.gif" width=170 height=250 border=0 alt=""><br><br>
    <img src="images/ads/ad2.gif" width=170 height=250 border=0 alt=""><br><br>
    &nbsp;</td>
</tr>
</table>



</body>
</html>
