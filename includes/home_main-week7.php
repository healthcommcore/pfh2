<?
switch ($userSpecs["stage"]) {
case 1: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=179 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/counselorTop.gif" width=179 height=53 border=0 alt=""></td></tr>
            <tr><td background="images/counselorMiddle.gif"><img src="images/blank.gif" width=179 height=1 border=0 alt=""><br>
                <div class="calloutText" style="padding-left:27px; padding-right:12px;">Don't forget that Partnership for Health can provide you with <a href="health_pharmo.php">quit-smoking medications</a> at no cost! The patch and Zyban are proven to help smokers quit. If you're interested in getting quit-smoking medication, you've only got a few weeks left to request it.<br><br><a href="health_pharmo.php"><b>Read more about it here.</b></a></div>
            </td></tr>
            <tr><td><img src="images/counselorBottom.gif" width=179 height=130 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>

<!--
[title] 3
You Don't Want to Quit.
-->

At Partnership for Health, we only want to help you make health changes when you're ready for them. 
If you don't feel ready to quit, it's OK. 
But we do hope that you'll think about what types of things keep you smoking. 
Sometimes realizing what these things are can help you realize that it's possible to overcome them.<br><br>

Check out our interactive quiz, <a href="health_manual-2f2.php">Quitting Smoking: What Gets in Your Way?</a>. 
It will show what your barriers to quitting are &#150; and how to overcome them, if you decide you're ready.<br><br>


<?  break;
case 2: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=179 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/counselorTop.gif" width=179 height=53 border=0 alt=""></td></tr>
            <tr><td background="images/counselorMiddle.gif"><img src="images/blank.gif" width=179 height=1 border=0 alt=""><br>
                <div class="calloutText" style="padding-left:27px; padding-right:12px;">Don't forget that Partnership for Health can provide you with <a href="health_pharmo.php">quit-smoking medications</a> at no cost! The patch and Zyban are proven to help smokers quit. If you're interested in getting quit-smoking medication, you've only got a few weeks left to request it.<br><br><a href="health_pharmo.php"><b>Read more about it here.</b></a></div>
            </td></tr>
            <tr><td><img src="images/counselorBottom.gif" width=179 height=130 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>

<!--
[title] 3
You Might Want to Quit
-->

You're still thinking about quitting, and that's a good thing! 
Thinking about it is often the first step toward becoming a non-smoker. 
Sometimes it's helpful to think about the things that keep you smoking. 
Once you do, it becomes easier to imagine how you might overcome them.<br><br>

Check out our interactive quiz, <a href="health_manual-2f2.php">Quitting Smoking: What Gets in Your Way?</a>. 
It will show what your barriers to quitting are &#150; and how to overcome them, when you're ready.<br><br>



<?  break;
case 3: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=145 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/blank.gif" width=145 height=170 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>
            <div style="position:absolute; visibility:visible; top:205px; left:405px;"><img src="images/katieHome2.jpg" width=140 height=140 border=0 alt=""></div>

Hi! I hope you are having fun using the Partnership for Health Web site. Our goal is to help you quit smoking successfully!<br><br>

As you get ready to quit, you'll want to make sure that you don't miss any of the site's activities. 
Here are a few interactive pages to visit before your Quit Date:<br>
<?
$reportCARD=toDoList();
if (count($reportCARD)>2) {
    echo "<ul>\n";
    reset($reportCARD);
    while (list($k,$v)=each($reportCARD)) {
        echo $v;
    }
    echo "</ul><br>\n";
} else {
}
?>

<!-- If room on page and new content is available: -->
<? if ($newPosts>0) { ?>
<hr><br>
The <a href="forum/viewforum.php?f=1">PFH Forum</a> is very busy these days! 
Stop by and talk with other childhood cancer survivors.<br><br>
<? } ?>

<? if ($newNews>0) { ?>
<hr><br>
Check out the recent news about childhood cancer survivors in our <a href="news.php">News and Information</a> section.<br><br>
<? } ?>

<? if ($newOnYourMind>0) { ?>
<hr><br>
We hear <a href="community_onMind.php">what's on your mind </a>! 
Read what our medical experts have to say about the PFH community's most important issues.<br><br>
<? } ?>




<?  break;
case 4: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=145 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/blank.gif" width=145 height=170 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>
            <div style="position:absolute; visibility:visible; top:205px; left:405px;"><img src="images/katieHome2.jpg" width=140 height=140 border=0 alt=""></div>

Hi! I hope you are having fun using the Partnership for Health Web site. Our goal is to help you quit smoking and stay quit!<br><br>

Now that you've quit smoking, you'll want to make sure that you don't miss any of the site's activities. 
Here are a few interactive pages to visit to ensure that you stay smoke-free:<br>
<?
$reportCARD=toDoList();
if (count($reportCARD)>2) {
    echo "<ul>\n";
    reset($reportCARD);
    while (list($k,$v)=each($reportCARD)) {
        echo $v;
    }
    echo "</ul><br>\n";
} else {
}
?>

<!-- If room on page and new content is available: -->
<? if ($newPosts>0) { ?>
<hr><br>
The <a href="forum/viewforum.php?f=1">PFH Forum</a> is very busy these days! 
Stop by and talk with other childhood cancer survivors.<br><br>
<? } ?>

<? if ($newNews>0) { ?>
<hr><br>
Check out the recent news about childhood cancer survivors in our <a href="news.php">News and Information</a> section.<br><br>
<? } ?>

<? if ($newOnYourMind>0) { ?>
<hr><br>
We hear <a href="community_onMind.php">what's on your mind </a>! 
Read what our medical experts have to say about the PFH community's most important issues.<br><br>
<? } ?>





<?  break;
}
?>
