<?
include("includes/site-functions.php");
$sectionID="news";
contentViewed(131);
$showWide=0;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: News & Info</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SHOW ANSWER
    var answerOn="";
    function showAnswer(aID) {
        if (answerOn.length>0) document.getElementById("answer"+answerOn).style.visibility="hidden";
        document.getElementById("answer"+aID).style.visibility="visible";
        answerOn=aID;
    }
    function hideAnswer(aID) {
        document.getElementById("answer"+aID).style.visibility="hidden";
    }
    //-->
    </script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
    @import url(includes/styles-ie.css);
    .answers {position:absolute; visibility:hidden; left:370px;}
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
    <td width=400 valign="top"><img src="images/pageTitles/news_cig-quiz.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<table border=0 cellpadding=0 cellspacing=0>
<tr>
<td valign="top" class="column2Text">Nicotine is usually talked about as the culprit when it comes to smoking and your health. But do you have any idea what some of the other chemicals and toxins are in each puff you take? Test your knowledge with these questions. You may be surprised by what your cigarettes have in common with other substances &#150;  substances you'd never think of breathing, eating, or drinking!</td>
<td><img src="images/blank.gif" width=20 height=190 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">1.
<b>Acetone is a toxic solvent found in cigarettes. It is also found in:</b>
<blockquote>
a) <a href="javascript:showAnswer('1');">fingernail polish remover</a><br>
b) <a href="javascript:showAnswer('1');">sunblock</a><br>
c) <a href="javascript:showAnswer('1');">both a and b</a><br>
d) <a href="javascript:showAnswer('1');">none of these</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=180 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">2.
<b>Ammonia, a poisonous gas, is found in:</b>
<blockquote>
a) <a href="javascript:showAnswer('2');">cigarettes</a><br>
b) <a href="javascript:showAnswer('2');">floor cleaner</a><br>
c) <a href="javascript:showAnswer('2');">both a and b</a><br>
d) <a href="javascript:showAnswer('2');">motor oil</a><br>
e) <a href="javascript:showAnswer('2');">none of these</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=180 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">3.
<b>The toxic gas hydrogen cyanide is found in which of these?</b>
<blockquote>
a) <a href="javascript:showAnswer('3');">cigarettes</a><br>
b) <a href="javascript:showAnswer('3');">insecticides</a><br>
c) <a href="javascript:showAnswer('3');">rat poison</a><br>
d) <a href="javascript:showAnswer('3');">a and c</a><br>
e) <a href="javascript:showAnswer('3');">b and c</a><br>
f) <a href="javascript:showAnswer('3');">all of the above</a><br>
g) <a href="javascript:showAnswer('3');">none of these</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=220 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">4.
<b>Benzene, a poisonous gas found in cigarettes, is also found in motor fuel, rubber cement, and dyes.</b>
<blockquote>
a) <a href="javascript:showAnswer('4');">true</a><br>
b) <a href="javascript:showAnswer('4');">false</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=160 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">5.
<b>Cadmium is a metallic element in cigarettes that increases the risk for kidney damage and lung cancer. It can also be found in:</b>
<blockquote>
a) <a href="javascript:showAnswer('5');">oil paint</a><br>
b) <a href="javascript:showAnswer('5');">batteries</a><br>
c) <a href="javascript:showAnswer('5');">both a and b</a><br>
d) <a href="javascript:showAnswer('5');">lighter fluid</a><br>
e) <a href="javascript:showAnswer('5');">none of these</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=200 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">6.
<b>Carbon monoxide is an easily detectable, harmless gas that is found in cigarettes.</b>
<blockquote>
a) <a href="javascript:showAnswer('6');">true</a><br>
b) <a href="javascript:showAnswer('6');">false</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=160 border=0 alt=""></td>
</tr>
</table><br>

<b>For more information about what you're smoking:</b>
<ul>
<li>Centers for Disease Control and Prevention: <a href="http://www.cdc.gov/tobacco/research_data/product/objective21-20revised.htm" target="_blank">"Toxic Chemicals in Tobacco Products"</a></li>
</ul><br><br>

<!-- ANSWER 1 -->
<div id="answer1" class="answers" style="top:400px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('1');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #1:</i><br>a) fingernail polish remover</b><br>
Acetone is a toxic solvent that shouldn't be swallowed or breathed in. It's the main ingredient in paint and fingernail polish removers, and one of over 400 ingredients found in cigarettes.<br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWER 2 -->
<div id="answer2" class="answers" style="top:580px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('2');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #2:</i><br>c) both a and b</b><br>
Ammonia is a poisonous gas when dissolved in water. It's a common liquid cleaning agent used in floor cleaners and detergents. It's also found in cigarettes. Ammonia is thought to boost the absorption of nicotine.<br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWER 3 -->
<div id="answer3" class="answers" style="top:760px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('3');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #3</i><br>f) all of the above</b><br>
Hydrogen cyanide is a gas used in rat and insect poisons, and it's also in cigarettes. It may be extremely toxic in high amounts. Breathing small amounts of this gas can cause several physical problems, including headache, dizziness, weakness, nausea, and vomiting. Breathing high amounts may cause gasping, irregular heartbeats, seizures, and fainting.<br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWER 4 -->
<div id="answer4" class="answers" style="top:980px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('4');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #4:</i><br>a) true</b><br>
Benzene is used in motor fuel, rubber cement, and dyes. This toxic chemical is also believed to cause cancer.<br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWER 5 -->
<div id="answer5" class="answers" style="top:1145px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('5');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #5:</i><br>c) both a and b</b><br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWER 6 -->
<div id="answer6" class="answers" style="top:1335px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#C2E3D9" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('6');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #6:</i><br>b) false</b><br>
Carbon monoxide is difficult to detect, because it has no color or odor. This toxic gas, which is in exhaust fumes from cars and lawnmowers, can also be found in cigarettes. Breathing carbon monoxide in large amounts can be dangerous, because it affects your system's ability to carry oxygen throughout your body.<br><br>
 </td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>







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

    <a href="health_manual-1g2.php"><img src="images/ads/new/ad-3.jpg" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br>
    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

            
            

</body>
</html>
