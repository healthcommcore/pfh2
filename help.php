<?
include("includes/site-functions.php");
$sectionID="other";
contentViewed(151);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Help</title>
    
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
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
    .answers {position:absolute; visibility:hidden;}
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
    <td width=592 valign="top"><img src="images/pageTitles/other_help.gif" width=592 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=517 valign="top" class="column2Text">
            
            <table border=0 cellpadding=0 cellspacing=0>
            <tr>
                <td valign="top" class="column2Text"><img src="images/blank.gif" width=500 height=1 border=0 alt=""><br>
                <span class="manualHeader"><b>How to Use the Partnership for Health Site</b></span><br><br>
                Roll over the items below to learn about the different features on the site's pages. 
                If you have questions about the site that this page doesn't answer, please <a href="mailto:pfh@hcc-web.org">email Katie</a>.<br><br>
                &nbsp;</td>
                <td valign="top"><img src="images/blank.gif" width=17 height=70 border=0 alt=""></td>
            </tr>
            </table><img src="images/help.jpg" width=350 height=470 border=0 alt="" usemap="#helpMap"><br><br>


<!-- ANSWER 1 -->
<div id="answer1" class="answers" style="top:440px; left:270px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Logo:</b><br>
    Click here anytime to return to the home page.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 2 -->
<div id="answer2" class="answers" style="top:500px; left:295px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Green Bar:</b><br>
    This section always features updated, personalized information about you and your health. Places that we suggest you visit are written in yellow. Click on those words to get there.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 3 -->
<div id="answer3" class="answers" style="top:450px; left:345px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Top Navigation:</b><br>
    These are the four main sections of the site. By clicking on a button, it will show you the different articles, resources, tools, and exercises that make up that section.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 4 -->
<div id="answer4" class="answers" style="top:490px; left:375px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Red Links:</b><br>
    Clicking on red type will take you to a page with more information.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 5 -->
<div id="answer5" class="answers" style="top:460px; left:365px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>&#8220;Ads&#8221;:</b><br>
    All boxes on the right-hand side of the page can be clicked on. They will take you to more information on other pages of the site.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 6 -->
<div id="answer6" class="answers" style="top:505px; left:345px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Footer Links:</b><br>
    These links appear at the bottom of every page on the site. Click on these links to return to the home page, log out of the site, learn more about the project and the policies of the site, or contact Partnership for Health.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 7 -->
<div id="answer7" class="answers" style="top:620px; left:315px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>Right-hand Sub-navigation:</b><br>
    Clicking on words in this list will take you directly to that specific page. When you click on words in these lists, new, bulleted lists may also appear right beneath them. These can also be clicked on, to bring you to other pages that pertain to that same subject.<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<!-- ANSWER 8 -->
<div id="answer8" class="answers" style="top:455px; left:340px;">
<table border=0 cellpadding=2 cellspacing=0><tr bgcolor="#000000"><td>
<table border=0 cellpadding=14 cellspacing=0 width=280>
<tr>
    <td width=280 bgcolor="#AB4A4D" valign="top" class="helpText" style="padding-left:18px; padding-right:18px;">
    <b>&#8220;Next Up&#8221; Links:</b><br>
    After reading to the end of the page, you can move to the next page of information in one of three ways: by clicking on the line beneath "Next Up:", by clicking on the next number in line, or by clicking on the word "Next".<br>
    &nbsp;</td>
</tr>
</table></td></tr></table></div>

<map name="helpMap">
<area shape=rect coords="15,45,120,100" onMouseover="showAnswer('1');" onMouseout="hideAnswer('1');">
<area shape=rect coords="12,110,80,300" onMouseover="showAnswer('2');" onMouseout="hideAnswer('2');">
<area shape=rect coords="135,55,325,95" onMouseover="showAnswer('3');" onMouseout="hideAnswer('3');">
<area shape=rect coords="90,260,240,300" onMouseover="showAnswer('4');" onMouseout="hideAnswer('4');">
<area shape=rect coords="250,280,330,390" onMouseover="showAnswer('5');" onMouseout="hideAnswer('5');">
<area shape=rect coords="100,375,230,430" onMouseover="showAnswer('6');" onMouseout="hideAnswer('6');">
<area shape=rect coords="250,100,330,260" onMouseover="showAnswer('7');" onMouseout="hideAnswer('7');">
<area shape=rect coords="90,305,240,355" onMouseover="showAnswer('8');" onMouseout="hideAnswer('8');">
</map>



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
