<?
include("includes/site-functions.php");
$sectionID="other";

// GREENBAR questions & answers
$greenBarQuestions=array(
    1=>"<span class=\"manualHeader\">Where Are You with Quitting?</span><br><br>Like a lot of smokers, your answers suggest that you are <b>not ready to quit</b>. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    2=>"<span class=\"manualHeader\">Where Are You with Quitting?</span><br><br>Like many smokers, your answers suggest that you <b>aren't quite ready to quit</b>, but that you may want to. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    3=>"<span class=\"manualHeader\">Where Are You with Quitting?</span><br><br>Like many smokers, your answers suggest that you are <b>ready to quit!</b> Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n"
    );
$greenBarAnswers=array(
    1=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You're still not ready to think about quitting, and that's OK. It's a big commitment. Keep reading the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Now's the time for you to see the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    2=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Keep reviewing the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    3=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>You've decided that you're not quite ready to work toward your Quit Date, and you're still thinking about it. Take a look at the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. Keep reading the Guide to Getting Ready as you prepare for your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ));

// WEEK-5 questions & answers
$week5Questions=array(
    1=>"<span class=\"manualHeader\">Let us know what you're thinking!</span><br><br>Like a lot of smokers, your answers suggest that you are <b>not ready to quit</b>. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    2=>"<span class=\"manualHeader\">Let us know what you're thinking!</span><br><br>Like many smokers, your answers show that you <b>aren't quite ready to quit</b>, but that you may want to. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    3=>"<span class=\"manualHeader\">Let us know what you're thinking!</span><br><br>Like many smokers, your answers suggest that you are <b>ready to quit!</b> Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n"
    );
$week5Answers=array(
    1=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You're still not ready to think about quitting, and that's OK. It's a big commitment. Keep reading the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Now's the time for you to see the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    2=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Keep reviewing the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    3=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>You've decided that you're not quite ready to work toward your Quit Date, and you're still thinking about it. Take a look at the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. Keep reading the Guide to Getting Ready as you prepare for your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ));

// WEEK-9 questions & answers
$week9Questions=array(
    1=>"<span class=\"manualHeader\">Please check back in with us here.</span><br><br>Like a lot of smokers, your answers suggest that you are <b>not ready to quit</b>. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    2=>"<span class=\"manualHeader\">Please check back in with us here.</span><br><br>Like many smokers, your answers show that you <b>aren't quite ready to quit</b>, but that you may want to. Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n",
    3=>"<span class=\"manualHeader\">Please check back in with us here.</span><br><br>Like many smokers, your answers suggest that you are <b>ready to quit!</b> Is that still true? Please let us know by answering these quick questions. After you answer, click &#8220;next&#8221; to go onto the next question.<br><br>\n"
    );
$week9Answers=array(
    1=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You're still not ready to think about quitting, and that's OK. It's a big commitment. Keep reading the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Now's the time for you to see the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    2=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>That's great! Thinking about quitting smoking is the first step toward a healthier lifestyle. Keep reviewing the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. We're sending you to the Guide to Getting Ready to prepare and set your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ),
    3=>array(
        1=>"<span class=\"manualHeader\">You're not ready.</span><br><br>You've decided that you're not ready to think about quitting right now, and that's OK. It's a big commitment. We suggest you look at the Guide to Healthy Decisions, and keep thinking about general health changes you might want to make.",
        2=>"<span class=\"manualHeader\">You're thinking about it.</span><br><br>You've decided that you're not quite ready to work toward your Quit Date, and you're still thinking about it. Take a look at the information in the Guide to Your Goals. You'll be able to explore the pros and cons of smoking, and take some small steps to see what being a non-smoker would be like. If you think that quit-smoking medication would be right for you, we can provide it free of charge.",
        3=>"<span class=\"manualHeader\">You're getting ready.</span><br><br>That's great! Now's the time to really gear up for quitting smoking. A month is enough time to get ready, if you really stay focused on your goal. If you think that quit-smoking medication would be right for you, we can provide it free of charge. Keep reading the Guide to Getting Ready as you prepare for your Quit Date!",
        4=>"<span class=\"manualHeader\">You've quit!</span><br><br>It's great that you've been smoke-free for at least a week. Congratulations! We're going to send you to the Guide to Action, where you can learn tips for staying smoke-free and keeping up your healthy habits!"
        ));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Contact Us</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>


<body bgcolor="#FFFFFF">
<? include("includes/headerReAssess.php"); ?>

<!-- MAIN CONTENT -->
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <!-- ======== -->
    <!-- COLUMN 1 -->
    <!-- ======== -->
    <td width=155 valign="top"><img src="images/allAboutYou2_blank.gif" width=155 height=50 border=0 alt=""><br>
    &nbsp;</td>
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=592 valign="top"><img src="images/pageTitles/other_blank.gif" width=592 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=517 valign="top" class="column2Text"><img src="images/blank.gif" width=517 height=1 border=0 alt=""><br>

<?
// ================================
// HEADER COPY
// ================================
if (strlen($HTTP_GET_VARS["qFrom"])<1) $HTTP_GET_VARS["qFrom"]="green";
if (strlen($HTTP_GET_VARS["pageID"])<1) $HTTP_GET_VARS["pageID"]="questions";
if (strlen($HTTP_GET_VARS["qNum"])<1) $HTTP_GET_VARS["qNum"]=1;
if (strlen($HTTP_GET_VARS["newStage"])<1) $HTTP_GET_VARS["newStage"]=3;
if ($HTTP_GET_VARS["qFrom"]=="green") {
    if ($HTTP_GET_VARS["pageID"]=="questions") echo $greenBarQuestions[$userSpecs["stage"]];
    if ($HTTP_GET_VARS["pageID"]=="answers") echo $greenBarAnswers[$userSpecs["stage"]][$HTTP_GET_VARS["newStage"]];
}
if ($HTTP_GET_VARS["qFrom"]=="week5") {
    if ($HTTP_GET_VARS["pageID"]=="questions") echo $week5Questions[$userSpecs["stage"]];
    if ($HTTP_GET_VARS["pageID"]=="answers") echo $week5Answers[$userSpecs["stage"]][$HTTP_GET_VARS["newStage"]];
}
if ($HTTP_GET_VARS["qFrom"]=="week9") {
    if ($HTTP_GET_VARS["pageID"]=="questions") echo $week9Questions[$userSpecs["stage"]];
    if ($HTTP_GET_VARS["pageID"]=="answers") echo $week9Answers[$userSpecs["stage"]][$HTTP_GET_VARS["newStage"]];
}

// ================================
// QUESTIONS
// ================================
if ($HTTP_GET_VARS["pageID"]=="questions") {
    if ($HTTP_GET_VARS["qNum"]==1) {
?>
<blockquote style="font-size:11pt; font-weight:bold;">
How many times in the last 12 months have you tried to quit smoking cigarettes and stayed off for at least 24 hours?<br><br>
<form name="form1" method="GET" action="reAssess.php">
<input type="hidden" name="qFrom" value="<?=$HTTP_GET_VARS["qFrom"]?>">
<input type="hidden" name="pageID" value="questions">
<input type="hidden" name="qNum" value="2">
<table border=0 cellpadding=0 cellspacing=0 align="center">
<tr>
    <td><select name="quitAttempts" size=1>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5+">5+</option>
    </select>&nbsp;&nbsp;</td>
    <td><input type="image" src="images/quizButton_next.gif" width=58 height=29 border=0 alt=""></td>
</tr>
</table>
</form>
</blockquote>
<?
    }
    if ($HTTP_GET_VARS["qNum"]==2) {
        if (strlen($HTTP_GET_VARS["quitAttempts"])>0) {
            $resultID=mysql_query("UPDATE PFHUserInfo SET quitAttempts=\"".$HTTP_GET_VARS["quitAttempts"]."\" WHERE id=".$_SESSION["userID"],$mysqlID);
        }
?>
<blockquote style="font-size:11pt; font-weight:bold;">
Have you smoked at all &#150; even a puff &#150; in the last 7 days?<br><br>
<div align="center">
<form name="form1" method="GET" action="reAssess.php">
<input type="hidden" name="qFrom" value="<?=$HTTP_GET_VARS["qFrom"]?>">
<input type="hidden" name="qNum" value="3">
<input type="hidden" name="newStage" value="4">
<input type="radio" name="pageID" value="questions">yes &nbsp;&nbsp;
<input type="radio" name="pageID" value="answers">no<br><br>
<input type="image" src="images/quizButton_next.gif" width=58 height=29 border=0 alt="">
</form>
</div>
</blockquote>
<?
    }
    if ($HTTP_GET_VARS["qNum"]==3) {
?>
<blockquote style="font-size:11pt; font-weight:bold;">
Are you seriously thinking about quitting smoking in the next 6 months?<br><br>
<div align="center">
<form name="form1" method="GET" action="reAssess.php">
<input type="hidden" name="qFrom" value="<?=$HTTP_GET_VARS["qFrom"]?>">
<input type="hidden" name="qNum" value="4">
<input type="hidden" name="newStage" value="1">
<input type="radio" name="pageID" value="questions">yes &nbsp;&nbsp;
<input type="radio" name="pageID" value="answers">no<br><br>
<input type="image" src="images/quizButton_next.gif" width=58 height=29 border=0 alt="">
</form>
</div>
</blockquote>
<?
    }
    if ($HTTP_GET_VARS["qNum"]==4) {
?>
<blockquote style="font-size:11pt; font-weight:bold;">
Are you seriously thinking about quitting smoking in the next month?<br><br>
<div align="center">
<form name="form1" method="GET" action="reAssess.php">
<input type="hidden" name="qFrom" value="<?=$HTTP_GET_VARS["qFrom"]?>">
<input type="hidden" name="qNum" value="5">
<input type="hidden" name="newStage" value="2">
<input type="radio" name="pageID" value="questions">yes &nbsp;&nbsp;
<input type="radio" name="pageID" value="answers">no<br><br>
<input type="image" src="images/quizButton_next.gif" width=58 height=29 border=0 alt="">
</form>
</div>
</blockquote>
<?
    }
    if ($HTTP_GET_VARS["qNum"]==5) {
?>
<blockquote style="font-size:11pt; font-weight:bold;">
Are you ready to set a Quit Date?<br><br>
<div align="center">
<form name="form1" method="GET" action="reAssess.php">
<input type="hidden" name="qFrom" value="<?=$HTTP_GET_VARS["qFrom"]?>">
<input type="hidden" name="pageID" value="answers">
<input type="radio" name="newStage" value="3">yes &nbsp;&nbsp;
<input type="radio" name="newStage" value="2">no<br><br>
<input type="image" src="images/quizButton_next.gif" width=58 height=29 border=0 alt="">
</form>
</div>
</blockquote>
<?
    }
}


// ================================
// ANSWERS
// ================================
if ($HTTP_GET_VARS["pageID"]=="answers") {
    if (strlen($HTTP_GET_VARS["newStage"])>0) {
        $resultID=mysql_query("UPDATE PFHUserInfo SET reAssessDate1=".time().",stage=".intval($HTTP_GET_VARS["newStage"])." WHERE id=".$_SESSION["userID"],$mysqlID);
    }
    echo "<br><br><a href=\"health_manual-".$HTTP_GET_VARS["newStage"]."a.php\">Return to the site</a><br><br>\n";
}
?>
<br><br>


            <? $footerWidth=360; ?>
            <? include("includes/footerReAssess.php"); ?>
            &nbsp;</td>
            <td width=50><img src="images/blank.gif" width=50 height=1 border=0 alt=""></td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
