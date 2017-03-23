<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(10);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SHOW RESULTS
    function showResults() {
        var proCount=0;
        var conCount=0;
        for (var j=1; j<7; j++) {
            for (var i=1; i<6; i++) {
                if ((j/2)==Math.floor(j/2)) {
                    if (document["form1"]["q"+j][i-1].checked) conCount+=i;
                } else {
                    if (document["form1"]["q"+j][i-1].checked) proCount+=i;
                }
            }
        }
        var answerID=2;
        if ((proCount>(conCount+3)) && (proCount>7)) answerID=1;
        if ((conCount>(proCount+3)) && (conCount>7)) answerID=3;
        document.location="you_prosCons.php?showAnswer="+answerID;
    }
    //-->
    </script>
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
    <td width=400 valign="top"><img src="images/pageTitles/howyoufeel_title.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<? if (strlen($HTTP_GET_VARS["showAnswer"])>0) { ?>

<? if ($HTTP_GET_VARS["showAnswer"]==1) { ?>
<b>It looks like when it comes to smoking, you have more good feelings about it than bad ones.</b><br><br>
It might help you to learn about the special health risks that childhood cancer survivors face,
by reading about <a href="news_late-effects.php">late effects</a> and smoking.
You may also be interested in working on some other <a href="health_manual-1f.php">health habits</a>,
even if you're not ready to think about quitting smoking.<br><br>
<? } ?>
<? if ($HTTP_GET_VARS["showAnswer"]==2) { ?>
<b>It looks like when it comes to smoking, you are on the fence: you like some parts of it, but you also realize that it has some drawbacks.</b><br><br>
It might help you to learn about the special health risks that childhood cancer survivors face,
by reading about <a href="news_late-effects.php">late effects</a> and smoking.
You may also be interested in checking out the interactive page about
the <a href="health_manual-2f.php">pros and cons</a> of your smoking.<br><br>
<? } ?>
<? if ($HTTP_GET_VARS["showAnswer"]==3) { ?>
<b>It looks like when it comes to smoking, you see more drawbacks than good reasons to smoke.</b><br><br>
And you may not even know that childhood cancer survivors face big problems from smoking
due to <a href="news_late-effects.php">late effects</a> and how smoking affects the body.
Now might be a good time to think about some <a href="health_manual-2i.php">small steps</a> you might take
toward becoming a non-smoker.<br><br>
<? } ?>

<br>
<span style="color:#667080;"><i>Adapted from Velicer, W.F., DiClemente, C.C., Prochaska, J.O., & Brandenberg, N. (1985). A decisional balance measure for assessing and predicting smoking status. Journal of Personality and Social Psychology, 48, 1279-1289.</i></span><br><br>

<? } else { ?>

<form name="form1">
Some smokers have mixed feelings about their habit &#150; they know it's not good for them, but there are some things they really like about it. Take this short quiz to get a sense of how you really feel about your smoking. Please <!-- use the 1 to 5 scale to show --> select the answer that best conveys your personal perspective.<br><br>

<b>1. Smoking cigarettes relieves tension.</b><br><br>
<input type="radio" name="q1" value=1> not important<br>
<input type="radio" name="q1" value=2> slightly important<br>
<input type="radio" name="q1" value=3> moderately important<br>
<input type="radio" name="q1" value=4> very important<br>
<input type="radio" name="q1" value=5> extremely important<br><br><br>

<b>2. I'm embarrassed to have to smoke.</b><br><br>
<input type="radio" name="q2" value=1> not important<br>
<input type="radio" name="q2" value=2> slightly important<br>
<input type="radio" name="q2" value=3> moderately important<br>
<input type="radio" name="q2" value=4> very important<br>
<input type="radio" name="q2" value=5> extremely important<br><br><br>

<b>3. Smoking helps me concentrate and do better work.</b><br><br>
<input type="radio" name="q3" value=1> not important<br>
<input type="radio" name="q3" value=2> slightly important<br>
<input type="radio" name="q3" value=3> moderately important<br>
<input type="radio" name="q3" value=4> very important<br>
<input type="radio" name="q3" value=5> extremely important<br><br><br>

<b>4. My cigarette smoking bothers other people.</b><br><br>
<input type="radio" name="q4" value=1> not important<br>
<input type="radio" name="q4" value=2> slightly important<br>
<input type="radio" name="q4" value=3> moderately important<br>
<input type="radio" name="q4" value=4> very important<br>
<input type="radio" name="q4" value=5> extremely important<br><br><br>

<b>5. I am relaxed and therefore more pleasant when I'm smoking.</b><br><br>
<input type="radio" name="q5" value=1> not important<br>
<input type="radio" name="q5" value=2> slightly important<br>
<input type="radio" name="q5" value=3> moderately important<br>
<input type="radio" name="q5" value=4> very important<br>
<input type="radio" name="q5" value=5> extremely important<br><br><br>

<b>6. People think I'm foolish for ignoring the warnings about cigarette smoking.</b><br><br>
<input type="radio" name="q6" value=1> not important<br>
<input type="radio" name="q6" value=2> slightly important<br>
<input type="radio" name="q6" value=3> moderately important<br>
<input type="radio" name="q6" value=4> very important<br>
<input type="radio" name="q6" value=5> extremely important<br><br><br>

<input type="button" value="Show Results" onClick="showResults();"><br><br>
</form>


<? }?>



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
<? if (strlen($HTTP_GET_VARS["showAnswer"])>0) { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br>
    <a href="news.php"><img src="images/ads/new/new/ad-4.gif" border=0 alt=""></a><br>
<? } else { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_keepsmoking.gif" border=0 alt=""></a><br>
    <a href="health_manual-3g.php"><img src="images/ads/ad_dealwtriggers.gif" border=0 alt=""></a><br>
    <a href="health_tips-memory.php"><img src="images/ads/new/ad-7.gif" border=0 alt=""></a><br>
<? } ?>
    &nbsp;</td>
</tr>
</table>

</body>
</html>

