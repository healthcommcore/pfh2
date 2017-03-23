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
<b>Yes, it's all about you. That's right.</b><br><br>
Check this space for new, personalized info <b>every</b> time you come to the site.<br>
 </td>
</tr></table><img src="images/ruleLeft.gif" width=155 height=1 border=0 alt=""><br>

<table border=0 cellpadding=12 cellspacing=0>
<tr>
<td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Based on your answers to the PFH survey, you:
<ul class="yoursiteList">
<li>Had ALL. x% of the people in PFH also had ALL.</li>
<li>Had chemotherapy. Just like % of the others on this site.</li>
<li>Smoke about a half a pack of cigarettes a day.</li>
</ul><br>
<a href="" class="column1Link">Read more</a> of your answers and learn the relationship between <a href="" class="column1Link">childhood cancer, cancer treatment, and smoking</a>.<br><br>
 </td>
</tr></table><br>
 </td>

<!-- spacer -->
<td width=23 valign="top"><img src="images/logoBottom2.gif" width=23 height=80 border=0 alt=""></td>

<!-- COLUMN 2 -->
<td width=400 valign="top"><img src="images/titleWelcome.gif" width=400 height=99 border=0 alt=""><br>
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr>
<td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
<td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<table border=0 cellpadding=1 cellspacing=0 align="right" width=150 style="margin-left:15px; margin-bottom:20px;"><tr bgcolor="#666666"><td>
<table border=0 cellpadding=0 cellspacing=0>
<tr bgcolor="#FFFFFF">
<td><img src="images/consuela.jpg" width=150 height=97 border=0 alt=""><br>
<img src="images/nextup.gif" width=150 height=37 border=0 alt=""><br>
<div class="calloutText" style="padding:12px;">
Based on your answers to the survey, we think you'd enjoy checking out our article about
<a href="health_tips-fertilityWomens.php">women's fertility</a> and childhood cancer treatment.<br>
</div>
 </td>
</tr>
</table></td></tr></table>
Hi! I'm Consuela Counselor. As people who had a childhood cancer or a similar illness, you and I have some health concerns many others do not. With <i>Partnership for Health</i>, you can explore and get help with the health issues you face. And I'll be with you every step of the way.<br><br>
By visiting our forums, you can see how others like you deal with the everyday issues of being a cancer survivor. You can post questions and add your own insights, and I'll weigh in on the issues, too. And check out our articles. Whether you're interested in health and exercise tips, or the late effects of your illness and its treatment, we have what you're looking for. From nutrition to fertility issues to treatment advances, it's all here.<br><br>
As someone who had a childhood cancer or a similar illness, being a smoker creates some unique health concerns for you. So no matter how you feel about smoking or quitting, we also have all the information you should know about what it means to your health. If you have any questions, send me an email! My goal is to help you be as healthy as you want to be!<br><br>





            <? $footerWidth=280; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table></td>

    <!-- spacer -->
    <td width=22 valign="top"><img src="images/blank.gif" width=22 height=1 border=0 alt=""></td>

    <!-- COLUMN 3 -->
    <td width=170 valign="top" class="column3Text">
    <OBJECT WIDTH="170" HEIGHT="165" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,19,0">
    <PARAM NAME=movie VALUE="images/ads/ad_body-guy.swf">
    <PARAM NAME=quality VALUE="high">
    <PARAM NAME="menu" value="false">
    <EMBED src="images/ads/ad_body-guy.swf" quality=high menu=false WIDTH="170" HEIGHT="165" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
    </OBJECT><br><img src="images/blank.gif" width=1 height=15 border=0 alt=""><br>
    <a href=""><img src="images/ads/new/ad_forum.gif" width=170 height=250 border=0 alt=""></a><br><br>
    <img src="images/ads/ad2.gif" width=170 height=250 border=0 alt=""><br><br>
    &nbsp;</td>
</tr>
</table>



</body>
</html>
