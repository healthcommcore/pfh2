<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(53);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_action.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<table border=0 cellpadding=0 cellspacing=0>
<tr>
<td valign="top" class="column2Text"><span class="manualHeader">PEOPLE AND PLACES</span><br><br>
<form name="form11">
Many times, where we work, who we spend time with, and where we choose to hang out play a big part in our health habits. This is especially true when it comes to smoking. Take this quick yes-or-no quiz to learn how the people and places in your life influence your smoking  &#150;  and how to make them work <i>for</i> you when you're quitting.<br><br>
After you answer each question, click "close" to move on to the next question.</td>
<td><img src="images/blank.gif" width=20 height=260 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">1.
<b>Are you able to take regular smoking breaks at work?</b>
<blockquote>
<a href="javascript:showAnswer('1a');">yes</a><br>
<a href="javascript:showAnswer('1b');">no</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=115 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">2.
<b>Do many of your co-workers smoke?</b>
<blockquote>
<a href="javascript:showAnswer('2a');">yes</a><br>
<a href="javascript:showAnswer('2b');">no</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=100 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">3.
<b>Do you go to bars or restaurants that allow smoking inside, or just outside of their doors?</b>
<blockquote>
<a href="javascript:showAnswer('3a');">yes</a><br>
<a href="javascript:showAnswer('3b');">no</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=115 border=0 alt=""></td>
</tr>

<tr>
<td valign="top" class="column2Text">4.
<b>Do you spend time with family or friends who smoke?</b>
<blockquote>
<a href="javascript:showAnswer('4a');">yes</a><br>
<a href="javascript:showAnswer('4b');">no</a>
</blockquote></td>
<td><img src="images/blank.gif" width=20 height=115 border=0 alt=""></td>
</tr>
</table><br>


</form><br><br><br>

<!-- ANSWERS, 1 -->
<div id="answer1a" class="answers" style="top:450px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('1a');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #1:</i> &nbsp;yes</b><br>
Work is probably where you spend most of your day, so you may need to make some changes there while you're trying to quit smoking. Everyone knows that work can make people stressed-out, which can be a trigger to head outside and light up. Or maybe you work in a department where smoking is a big part of the culture, and it's easy to take regular breaks to smoke. Check out these tips for how to keep from smoking while you're on the clock:
<ul>
<li>Keep mints or gum around. They help keep your mouth busy.</li>
<li>Fill a liter bottle with water and keep it handy. Drinking water can help stave off cravings.</li>
<li>If work stress makes you want to smoke, find other ways to deal with it. When your break comes, go for a walk outside; call, email, or IM a friend; have a cup of tea or coffee; read a book. </li>
<li>Change your work routine so you are not tempted to smoke. If you have a regular spot where you take cigarette breaks, try to avoid that spot. </li>
<li>If you are regularly exposed to smoke at work, consider talking to management about establishing no-smoking policies, or think about finding a work environment with no-smoking policies. </li>
</ul>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>
<div id="answer1b" class="answers" style="top:450px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('1b');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #1:</i> &nbsp;no</b><br>
This is great news! Having a smoke-free workplace will help you limit your smoking and keep you from a lot of smoking triggers. Healthy habits that are part of your routine at work &#150; like taking a walk or talking to a friend when you are stressed out &#150; can become habits outside of work, as well. Congratulations on being one step closer to being smoke-free!<br><br>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWERS, 2 -->
<div id="answer2a" class="answers" style="top:565px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('2a');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #2:</i> &nbsp;yes</b><br>
When you are trying to quit, it may be hard not to smoke if most of your co-workers are smokers. You might feel pressure to smoke, or you may fear that they won't want to spend time with you if you quit smoking. If you are thinking about quitting or are getting ready to quit, here are some tips to help you handle things at work:
<ul>
<li>Let co-workers who smoke know that you are trying to quit. Ask them to be supportive of you. </li>
<li>If you spend time with co-workers outside of work, find activities you can do together that don't give you the chance to smoke, such as going to the movies.</li>
<li>If spending time with co-workers who smoke is challenging, try to spend time with non-smoking co-workers while you are quitting. </li>
</ul>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>
<div id="answer2b" class="answers" style="top:565px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('2b');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #2:</i> &nbsp;no</b><br>
This is great news! Having non-smoking co-workers will be very helpful if you are trying to stop smoking. Non-smoking coworkers can serve as role models or sources of support for you while you're trying to quit. Congratulations on being one step closer to being smoke-free!<br><br>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWERS, 3 -->
<div id="answer3a" class="answers" style="top:675px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('3a');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #3:</i> &nbsp;yes</b><br>
Eating or drinking is a really common trigger for a lot of smokers. Many bars and restaurants have begun to limit or restrict smoking, but some of your favorite places may still allow smoking. If you know that this will be a temptation for you, it will be helpful to think of ways to handle it before you quit. Here are some things to try:
<ul>
<li>Only go to places that ban smoking. This will help you begin to break the association between eating or drinking and smoking. Try to set up a similar "policy" at home. </li>
<li>Go out to dinner with non-smokers or others who are supportive while you're quitting. If other people don't smoke at the table or get up to smoke, this may help lessen your urge to smoke.</li>
<li>If a bar or restaurant allows smoking where you sit, try to smoke fewer cigarettes than you normally do; or if you're able to, don't smoke at all. </li>
<li>If a bar or restaurant allows you to smoke where you sit, make yourself get up and go outside each time you want to smoke. </li>
<li>If a bar or restaurant only allows smoking outside, limit the number of times that you allow yourself to get up to go smoke. Once you're outside, limit the number of cigarettes or tobacco products you use.</li>
</ul>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>
<div id="answer3b" class="answers" style="top:675px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('3b');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #3:</i> &nbsp;no</b><br>
This is great! You have already taken a major step to becoming healthier. Not only have you already done something to help you limit the amount of cigarettes you smoke, you have also improved your health by avoiding exposure to secondhand smoke. Secondhand smoke has been proven to increase the risk of developing smoking-related cancers.<br><br>
You will still need lots of support to help keep you from smoking in places other than bars and restaurants, but you should be very proud of yourself for breaking the smoking habit in these places.<br><br>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>

<!-- ANSWERS, 4 -->
<div id="answer4a" class="answers" style="top:790px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('4a');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #4:</i> &nbsp;yes</b><br>
Because your friends and/or family members smoke, you may need to think ahead of time about how you'll handle things.<br><br>
Sometimes it's easiest to talk to other smokers up front by letting them know that you plan to quit and asking for their help. Other times it's easiest to quit quietly, without letting other smokers know  &#150;  especially if you think they'll give you a hard time. Sometimes it's even easier to avoid other smokers for a short time while you're quitting.<br><br>
You'll need to decide what will work best for you. No matter what you decide, planning up front will pay off. Here are some different things to try:
<ul>
<li>Ask friends or family who smoke to limit their smoking to one room or to smoke outside while you're trying to quit.</li>
<li>Talk to your smoking friends about why you are committed to quitting. Help them understand why this is very important to you.</li>
<li>Ask for help and support, and be specific about what you need. If some people don't seem supportive, consider spending more time with them after you've quit and feel confident in your success. </li>
</ul>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>
<div id="answer4b" class="answers" style="top:790px;">
<table border=0 cellpadding=0 cellspacing=0 width=400>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
<tr><td width=8 bgcolor="#FFFFFF"><img src="images/blank.gif" width=8 height=64></td>
<td width=100% bgcolor="#F5EDAB" valign="top" class="column2TextSMALL" style="padding-left:18px; padding-right:18px;">
<div align="right" style="padding:10px;"><a href="javascript:hideAnswer('4b');" style="text-decoration:underline;">close</a></div>
<b><i>Answer #4:</i> &nbsp;no</b><br>
It's great that your friends and family aren't smokers. This means it will be easier for you to quit, because you won't be around a lot of people who are smoking. You'll still need lots of support, though. If you have friends who have already quit, ask them how they did it. Getting tips from others who've been through it can make a big difference!<br><br>
</td>
</tr>
<tr><td colspan=2 bgcolor="#FFFFFF"><img src="images/blank.gif" width=400 height=8></td></tr>
</table></div>



<? echo showNextPrev("action"); ?>


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
<? echo showSubpageLinks("action"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="you_journal.php"><img src="images/ads/new/ad-2.jpg" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
