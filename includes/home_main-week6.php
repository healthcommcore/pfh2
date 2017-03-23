<?
switch ($userSpecs["stage"]) {
case 1: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=179 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/counselorTop.gif" width=179 height=53 border=0 alt=""></td></tr>
            <tr><td background="images/counselorMiddle.gif"><img src="images/blank.gif" width=179 height=1 border=0 alt=""><br>
                <div class="calloutText" style="padding-left:27px; padding-right:12px;">I've definitely had to deal with some obstacles in my past. How about you? Visit the forum and talk about some challenges you've had &#150; and how you overcame them.<br><br><a href="/forum/viewforum.php?f=1"><b>Share your thoughts here.</b></a></div>
            </td></tr>
            <tr><td><img src="images/counselorBottom.gif" width=179 height=130 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>

<!--
[title] 3
You Aren't Ready to Quit
-->

Sometimes the idea of changing health habits can seem overwhelming. 
But it doesn't have to be! 
Positive thinking can help you approach how you think about things in a very different way. 
We've got a great interactive tool that can help you deal with challenges of any kind, 
whether they're related to health changes or not.<br><br>

Start <a href="health_manual-1g2.php">thinking positive!</a><br><br>

<?  break;
case 2: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=179 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/counselorTop.gif" width=179 height=53 border=0 alt=""></td></tr>
            <tr><td background="images/counselorMiddle.gif"><img src="images/blank.gif" width=179 height=1 border=0 alt=""><br>
                <div class="calloutText" style="padding-left:27px; padding-right:12px;">Everyone has habits and certain things they do every single day, no matter what. Did you ever think about the whens, wheres, and whys of your smoking &#150; that is, what habits trigger you to smoke? Identifying these things can help you learn a lot about your smoking &#150; and put you on a path to quitting, if you decide you're ready.<br><br><a href="health_manual-2e.php"><b>Check out the interactive exercise here!</b></a></div>
            </td></tr>
            <tr><td><img src="images/counselorBottom.gif" width=179 height=130 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>

<!--
[title] 3
You're Thinking of Quitting
-->

You're thinking of quitting, and that's great! 
It's often the first step on the way to becoming a non-smoker. 
If you're like most smokers, you might have some worries about quitting, though. 
Maybe you're concerned about how you'll deal with stress or anxiety. 
Or maybe all of your friends smoke.<br><br>

Sometimes if you give some thought to the things that can get in the way, 
it helps you realize that these obstacles can all be overcome. 
Be sure to check out our quick quiz, <a href="health_manual-2f2.php">Quitting Smoking: What Gets in Your Way</a>. 
It will help you identify what your concerns are <b>and</b> help you see that quitting really is within your reach!<br><br>

<?  break;
case 3: ?>
            <table border=0 cellpadding=0 cellspacing=0 align="right" width=145 style="margin-left:15px; margin-bottom:20px;">
            <tr><td><img src="images/blank.gif" width=145 height=170 border=0 alt=""></td></tr>
            </table><img src="images/blank.gif" width=1 height=1 border=0 alt=""><br>
            <div style="position:absolute; visibility:visible; top:205px; left:405px;"><img src="images/katieHome2.jpg" width=140 height=140 border=0 alt=""></div>

Hi! I hope you are enjoying your visits to the Partnership for Health site and learning useful health information.<br><br>

Anyone who's spent some time on pfhonline.org can tell you that this is a very big site. 
That means that it can be easy to miss some of the information and interactive tools. 
As you get ready to quit smoking, you'll want to be sure you take advantage of the site's activities. 
Here are a few interactive pages you might want to take a look at before your Quit Date:<br>
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

Hi! I hope you are enjoying your visits to the Partnership for Health site and learning useful health information.<br><br>

Anyone who's spent some time on pfhonline.org can tell you that this is a very big site. 
That means that it can be easy to miss some of the information and interactive tools. 
Now that you've hit your Quit Date, you'll want to be sure you take advantage of the site's activities. 
Here are a few interactive pages you might want to take a look at:<br>
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
