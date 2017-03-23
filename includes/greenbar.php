<?
$gBarWRITTEN=0;

// changed the "smokes per day" addOn line to PRECLUDE stage 4 people (just a few lines down)
// added the "if stage 4" quit date countdown thingy

if ($userSpecs["stage"]==1) $addOn="<div style=\"background:#5C8F44; padding:8px;\" class=\"column1Text\"><span class=\"greenBarTitle\">Tell us how it's going!</span><br><br>It looks like you're not interested in quitting smoking right now. But if this <b>isn't the case</b>, <a href=\"reAssess.php\" class=\"column1Link\">please tell us</a> so we can get you the right info!<br>&nbsp;</div><br>\n";
if ($userSpecs["stage"]==2) $addOn="<div style=\"background:#5C8F44; padding:8px;\" class=\"column1Text\"><span class=\"greenBarTitle\">Tell us how it's going!</span><br><br>It looks like you're thinking about quitting smoking. But if this <b>isn't the case</b>, <a href=\"reAssess.php\" class=\"column1Link\">please tell us</a> so we can get you the right info!<br>&nbsp;</div><br>\n";
if ($userSpecs["stage"]==3) $addOn="<div style=\"background:#5C8F44; padding:8px;\" class=\"column1Text\"><span class=\"greenBarTitle\">Tell us how it's going!</span><br><br>It looks like you're getting ready for your Quit Date. But if this <b>isn't the case</b>, <a href=\"reAssess.php\" class=\"column1Link\">please tell us</a> so we can get you the right info!<br>&nbsp;</div><br>\n";
//if ($userSpecs["stage"]==4) $addOn="<div style=\"background:#5C8F44; padding:8px;\" class=\"column1Text\"><span class=\"greenBarTitle\">Tell us how it's going!</span><br><br>It looks like you've quit smoking. But if this <b>isn't the case</b>, <a href=\"reAssess.php\" class=\"column1Link\">please tell us</a> so we can get you the right info!<br>&nbsp;</div><br>\n";
if (($userSpecs["stage"]<4) && ($userSpecs["smokesPerDay"]>0) && ((time()-$userSpecs["smokesPerDaySTARTED"])>86400)) $addOn.="<div style=\"background:#5C8F44; padding:8px;\" class=\"column1Text\">How are you doing with cutting back on your cigarettes? <a href=\"/health_manual-3d2.php\" class=\"column1Link\">Come back and track</a> how close you are to your goals.<br>&nbsp;</div>\n";

if (($userSpecs["stage"]==3) && ($quitDate>time())) {
    $daysLeft=floor(($quitDate-time())/86400);

    // QUIT DATE CONTENT: Week before quit date
    if (($quitDate-time())<(86400*7)) { ?>
<table border=0 cellpadding=0 cellspacing=0 background="images/sidebars/qdCountdown.gif">
<tr>
    <td><table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=45 border=0 alt=""></td></tr>
    <tr>
        <td width=7><img src="images/blank.gif" width=7 height=40 border=0 alt=""></td>
        <td width=48 align="center" class="countdownText"><img src="images/blank.gif" width=48 height=1 border=0 alt=""><br><?=$daysLeft?></td>
        <td width=100><img src="images/blank.gif" width=100 height=1 border=0 alt=""></td>
    </tr>
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=15 border=0 alt=""></td></tr>
    </table></td>
</tr>
</table>
<table border=0 cellpadding=12 cellspacing=0>
<tr><td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Hope you're getting excited, because you're only one week away from being a non-smoker! Now is the time to make sure everything is in place.<br><br>
As you get ready for your Quit Date, be sure to <a href="/health_manual-2g.php" class="column1Link">read over</a> your reasons for quitting smoking. This will help keep you motivated next week! Think about risky situations that might come up and how to deal with them, and be sure to figure out how <a href="/health_manual-3i.php" class="column1Link">friends and family</a> can help. 
<!-- Another good idea is to develop a <a href="" class="column1Link">specific plan</a> for not smoking on the first day. How will you spend the day? -->
Who can you call if you need support? And most importantly, what will you do if you feel the urge to smoke?<br><br>
<b>We know you can do it, and PFH is here for you. Good luck!</b><br><br>
<?=$addOn?>
&nbsp;</td></tr></table><br>
<?
        $gBarWRITTEN=1;

    // QUIT DATE CONTENT: 2 weeks before quit date
    } elseif (($quitDate-time())<(86400*14)) { ?>
<table border=0 cellpadding=0 cellspacing=0 background="images/sidebars/qdCountdown.gif">
<tr>
    <td><table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=45 border=0 alt=""></td></tr>
    <tr>
        <td width=7><img src="images/blank.gif" width=7 height=40 border=0 alt=""></td>
        <td width=48 align="center" class="countdownText"><img src="images/blank.gif" width=48 height=1 border=0 alt=""><br><?=$daysLeft?></td>
        <td width=100><img src="images/blank.gif" width=100 height=1 border=0 alt=""></td>
    </tr>
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=15 border=0 alt=""></td></tr>
    </table></td>
</tr>
</table>
<table border=0 cellpadding=12 cellspacing=0>
<tr><td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Two weeks to go! Only 14 days until you become a non-smoker. Now's the time to think about what you'll do at work, in restaurants, and in bars when everyone else is lighting up. Take our <a href="/health_manual-4b2.php" class="column1Link">People and Places Quiz</a> now! And while you're thinking about that, spend some time figuring out the <a href="/health_manual-2e.php" class="column1Link">whens, wheres, and whys</a> of your smoking, to help you get ready.<br><br>
Are you starting to wonder how you're going to <a href="/health_tips-stress.php" class="column1Link">manage stress</a>, keep from <a href="/health_tips-weight.php" class="column1Link">putting on pounds</a>, and get <a href="/health_tips-activity.php" class="column1Link">exercise</a> while you're quitting? We've got healthy tips to get you over the rough spots.<br><br>
<b>Are you going to be using Zyban to quit smoking?</b> If so, you should start taking Zyban between today and the next four days. It's very important for you to have enough in your system when your Quit Date arrives!<br><br>
<?=$addOn?>
&nbsp;</td></tr></table><br>
<?
        $gBarWRITTEN=1;

    // QUIT DATE CONTENT: 3 weeks before quit date
    } elseif (($quitDate-time())<(86400*21)) { ?>
<table border=0 cellpadding=0 cellspacing=0 background="images/sidebars/qdCountdown.gif">
<tr>
    <td><table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=45 border=0 alt=""></td></tr>
    <tr>
        <td width=7><img src="images/blank.gif" width=7 height=40 border=0 alt=""></td>
        <td width=48 align="center" class="countdownText"><img src="images/blank.gif" width=48 height=1 border=0 alt=""><br><?=$daysLeft?></td>
        <td width=100><img src="images/blank.gif" width=100 height=1 border=0 alt=""></td>
    </tr>
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=15 border=0 alt=""></td></tr>
    </table></td>
</tr>
</table>
<table border=0 cellpadding=12 cellspacing=0>
<tr><td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Your Quit Date is three weeks away. Are you getting ready? Now's the time to start looking at the best ways to <a href="/health_tips-relaxation.php" class="column1Link">relax</a>. Because whether it's deep breathing, meditation, writing, or yoga, relaxation techniques are proven to help people deal with the stress that can come with quitting smoking.<br><br>
If you're already <a href="/health_manual-3d.php" class="column1Link">nicotine fading</a>, keep at it and switch to a lower-nicotine brand.<br><br>
Have you thought about your <a href="/health_manual-3g.php" class="column1Link">triggers</a> &#150; the kinds of things that make you want to smoke? Thinking about how to fight them <b>before</b> they hit is key.<br><br>
<?=$addOn?>
&nbsp;</td></tr></table><br>
<?
        $gBarWRITTEN=1;

    // QUIT DATE CONTENT: 4 weeks before quit date
    } elseif (($quitDate-time())<(86400*28)) { ?>
<table border=0 cellpadding=0 cellspacing=0 background="images/sidebars/qdCountdown.gif">
<tr>
    <td><table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=45 border=0 alt=""></td></tr>
    <tr>
        <td width=7><img src="images/blank.gif" width=7 height=40 border=0 alt=""></td>
        <td width=48 align="center" class="countdownText"><img src="images/blank.gif" width=48 height=1 border=0 alt=""><br><?=$daysLeft?></td>
        <td width=100><img src="images/blank.gif" width=100 height=1 border=0 alt=""></td>
    </tr>
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=15 border=0 alt=""></td></tr>
    </table></td>
</tr>
</table>
<table border=0 cellpadding=12 cellspacing=0>
<tr><td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
Your Quit Date is a month away! Now's the time to start getting ready, both physically and mentally.<br><br>
Make quitting easier on your body by starting nicotine fading. You can do this by cutting back on the number of cigarettes you smoke, changing your brand to one with less nicotine, or both. This lets your body slowly get used to having less nicotine. <a href="/health_manual-3d.php" class="column1Link">Read more</a> about it now.<br><br>
And be sure to get in the right frame of mind by thinking ahead of time about how to <a href="/health_manual-3g.php" class="column1Link">tame your triggers</a>. What sorts of things make you want to smoke, and how can you head them off before you itch to light up? Knowing the answers to this question can make all the difference once your Quit Date arrives.<br><br>
<?=$addOn?>
&nbsp;</td></tr></table><br>
<?
        $gBarWRITTEN=1;
    }
}


$rightNow=time();
$earlierToday=mktime(1,0,0,date("n",$rightNow),date("j",$rightNow),date("Y",$rightNow));
if (($userSpecs["stage"]==4) && ($quitDate<time()) && ($userSpecs["actionReassessTime"]<$earlierToday)) {
    $daysFrom=floor((time()-$quitDate)/86400);
?>
<table border=0 cellpadding=0 cellspacing=0 background="images/sidebars/qdCountdown2.gif">
<tr>
    <td><table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=45 border=0 alt=""></td></tr>
    <tr>
        <td width=7><img src="images/blank.gif" width=7 height=40 border=0 alt=""></td>
        <td width=48 align="center" class="countdownText" style="color:#404087;"><img src="images/blank.gif" width=48 height=1 border=0 alt=""><br><?=$daysFrom?></td>
        <td width=100><img src="images/blank.gif" width=100 height=1 border=0 alt=""></td>
    </tr>
    <tr><td colspan=3><img src="images/blank.gif" width=155 height=15 border=0 alt=""></td></tr>
    </table></td>
</tr>
</table>
<table border=0 cellpadding=12 cellspacing=0>
<tr><td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>

<span class="greenBarTitle">How's it going?</span><br><br>
Please click on one of the options below.<br><br>
<form name="form999" method="GET" action="reAssess_action.php">
<table border=0 cellpadding=0 cellspacing=3>
<tr>
    <td valign="top"><input type="radio" name="secID" value="A"></td>
    <td valign="top" class="column1Text"><img src="images/blank.gif" width=1 height=3 border=0 alt=""><br>
    Great! I'm still smoke-free!</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B"></td>
    <td valign="top" class="column1Text"><img src="images/blank.gif" width=1 height=3 border=0 alt=""><br>
    I slipped up a little and I've smoked one or more cigarettes recently.</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="C"></td>
    <td valign="top" class="column1Text"><img src="images/blank.gif" width=1 height=3 border=0 alt=""><br>
    I'm smoking again regularly.</td>
</tr>
<tr>
    <td valign="top">&nbsp;</td>
    <td valign="top" class="column1Text"><img src="images/blank.gif" width=1 height=3 border=0 alt=""><br>
    <br><input type="submit" value="Submit"></td>
</tr>
</table><br>
</form><br>

<?=$addOn?>
&nbsp;</td></tr></table><br>
<?
    $gBarWRITTEN=1;
}


if ($gBarWRITTEN<1) {
?>
        <table border=0 cellpadding=12 cellspacing=0>
        <tr>
            <td valign="top" class="column1Text"><img src="images/blank.gif" width=131 height=1 border=0 alt=""><br>
<?
    // PER-SESSION CONTENT: Week 1
    if ($thisMilestone==1) {
        if (($userSpecs["treatmentRadiation"]==1) && ($userSpecs["treatmentSurgery"]==1) && ($userSpecs["treatmentChemotherapy"]==1)) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 33% of other Partnership for Health members, you had <b>chemotherapy, radiation, and surgery</b>.<br><br>Radiation and chemotherapy can affect the way the heart works, and can lead to late effects that involve the lungs and lung disease. Smoking can seriously affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } elseif (($userSpecs["treatmentRadiation"]==1) && ($userSpecs["treatmentSurgery"]==1)) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 14% of other Partnership for Health members, you had <b>radiation and surgery</b>.<br><br>Radiation can lead to future heart disease and can also cause problems with the lungs. Smoking can affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } elseif (($userSpecs["treatmentChemotherapy"]==1) && ($userSpecs["treatmentSurgery"]==1)) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 15% of other Partnership for Health members, you had <b>chemotherapy and surgery</b>.<br><br>Did you know that chemotherapy can affect the heart and lungs? Smoking can also affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } elseif (($userSpecs["treatmentChemotherapy"]==1) && ($userSpecs["treatmentRadiation"]==1)) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 7% of other Partnership for Health members, you had both <b>chemotherapy and radiation</b>.<br><br>These treatments can affect the way the heart works, and can lead to late effects that involve the lungs and lung disease. Smoking can seriously affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } elseif ($userSpecs["treatmentRadiation"]==1) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 12% of other Partnership for Health members, you had <b>radiation</b>.<br><br>Radiation can lead to future heart disease and can also cause problems with the lungs. Smoking can affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } elseif ($userSpecs["treatmentChemotherapy"]==1) { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like 12% of other Partnership for Health members, you had <b>chemotherapy</b>.<br><br>Did you know that chemotherapy can affect the heart and lungs? Smoking can also affect the way these organs work &#150; and make any late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <? } else { ?>
<span class="greenBarTitle">Your Treatment</span><br><br>
Like the rest of the Partnership for Health community, you beat your childhood cancer and are now an adult survivor. You may have had some treatments that cause late effects &#150; side effects that can appear later on and be long-lasting. Smoking can affect the way many parts of the body work, and make late effects much more serious.<br><br>
<a href="health_bodyguy.php" class="column1Link">Learn more about smoking and your body.</a><br><br>
    <?}
    }



    // PER-SESSION CONTENT: Week 2
    if ($thisMilestone==2) {
        if (($userSpecs["stage"]==1) && ($userSpecs["isAddicted"]==1)) { ?>
<span class="greenBarTitle">When do you smoke?</span><br><br>
When you took the survey, your answers suggested that you may be addicted to the nicotine in cigarettes.<br><br>
If you ever decide to give quitting a try, <a href="health_pharmo.php" class="column1Link">quit-smoking medications</a> are available at <b>no cost</b> from Partnership for Health. There's one that's right for you!<br><br>
<a href="health_pharmo.php" class="column1Link">Check it out now!</a><br><br>
    <? } elseif (($userSpecs["stage"]==1) && ($userSpecs["isAddicted"]!=1)) { ?>
<span class="greenBarTitle">When do you smoke?</span><br><br>
When you took the survey, your answers suggested that you're more of a <b>social smoker</b> &#150; maybe you light up when you're with friends, but you don't get the <b>urge</b> to smoke.<br><br>
That means that if you're ever ready to think about quitting, it won't be quite as challenging. And PFH has <b>free</b> <a href="health_pharmo.php" class="column1Link">quit-smoking medications</a> that can help, even if you're only a social smoker.<br><br>
<a href="health_pharmo.php" class="column1Link">Check it out now!</a><br><br>
    <? } elseif (($userSpecs["stage"]==2) && ($userSpecs["isAddicted"]==1)) { ?>
<span class="greenBarTitle">When do you smoke?</span><br><br>
When you took the survey, your answers suggested that you may be addicted to the nicotine in cigarettes.<br><br>
Now that you're thinking about quitting, be sure to check out the <a href="health_pharmo.php" class="column1Link">quit-smoking medications</a> available at <b>no cost</b> from Partnership for Health. There is one that's right for you!<br><br>
<a href="health_pharmo.php" class="column1Link">Check it out now!</a><br><br>
    <? } elseif (($userSpecs["stage"]==2) && ($userSpecs["isAddicted"]!=1)) { ?>
<span class="greenBarTitle">When do you smoke?</span><br><br>
When you took the survey, your answers suggested that you're more of a <b>social smoker</b> &#150; maybe you light up when you're with friends, but you don't get the <b>urge</b> to smoke.<br><br>
That means that if you're thinking about quitting, it won't be quite as challenging. And PFH has <b>free</b> <a href="health_pharmo.php" class="column1Link">quit-smoking medications</a> that can help, even if you're only a social smoker.<br><br>
<a href="health_pharmo.php" class="column1Link">Check it out now!</a><br><br>
    <? } elseif (($userSpecs["stage"]==3) && ($userSpecs["friendsSmoke"]==1)) { ?>
<span class="greenBarTitle">Got friends or family who smoke?</span><br><br>
Everyone knows someone who smokes. This can make quitting more challenging, but <b>not impossible</b>!<br><br>Check out <a href="health_tips-socialSupport.php" class="column1Link">Help from Friends and Family</a> to get you thinking about the people in your life who can support you and how they can <b>help</b>.<br><br>
<a href="health_tips-socialSupport.php" class="column1Link">Learn more now!</a><br><br>
    <? } elseif (($userSpecs["stage"]==3) && ($userSpecs["friendsSmoke"]!=1)) { ?>
<span class="greenBarTitle">Got friends or family who smoke?</span><br><br>
Everyone knows someone who smokes.<br><br>Check out <a href="health_tips-socialSupport.php" class="column1Link">Help from Friends and Family</a> to get you thinking about the people in your life who can support you and how they can help.<br><br>
<a href="health_tips-socialSupport.php" class="column1Link">Learn more now!</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
You're on the road to becoming a non-smoker! By quitting, you're not only improving your health now, but you're <b>lowering your risk</b> for <a href="news_late-effects.php" class="column1Link">late effects</a> and secondary cancers down the road.<br><br>Now's probably a good time to think about how to control cravings &#150; try our <a href="health_manual-4b.php" class="column1Link">interactive exercise</a> <b>before</b> those urges to smoke hit.<br><br>
    <? }
    }

    // PER-SESSION CONTENT: Week 3
    if ($thisMilestone==3) {
        if ($userSpecs["maritalStatus"]<3) {
            if ($userSpecs["stage"]==1) {
                if ($userSpecs["partnerSmokes"]==1) { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse smokes cigarettes. Did you know that Partnership for Health can give quit-smoking medication to you <b>and</b> your partner or spouse at <b>no charge</b>? These medications really do help smokers quit &#150; and if you ever decide you're ready, you can try it together!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication for you and your spouse or partner.</b><br><br>
                <? } else { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse doesn't smoke cigarettes. That's great! It means that if you are ever ready to quit smoking, he or she can serve as a role model and a source of support for you. Plus, you'll have fewer triggers to smoke when you're at home. Remember, Partnership for Health offers quit-smoking medication at <b>no charge</b> &#150; something that will make quitting easier for you&#133; and the person you live with!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication.</b><br><br>
                <? }
            } elseif ($userSpecs["stage"]==2) {
                if ($userSpecs["partnerSmokes"]==1) { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse smokes cigarettes. Did you know that Partnership for Health can give quit-smoking medication to you <b>and</b> your partner or spouse at <b>no charge</b>? These medications really do help smokers quit &#150; and if you're ready, you can try it together!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication for you and your spouse or partner.</b><br><br>
                <? } else { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse doesn't smoke cigarettes. That's great! It means that if you are ever ready to quit smoking, he or she can serve as a role model and a source of support for you. Plus, you'll have fewer triggers to smoke when you're at home. Remember, Partnership for Health offers quit-smoking medication at <b>no charge</b> &#150; something that will make quitting easier for you&#133; and the person you live with!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication.</b><br><br>
                <? }
            } elseif ($userSpecs["stage"]==3) {
                if ($userSpecs["partnerSmokes"]==1) { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse smokes cigarettes. That might make quitting more challenging, but not impossible! Be sure to think ahead of time about how you'll handle cravings if someone around the house still smokes. Check out <b><a href="health_tips-socialSupport.php" class="column1Link">How to Get Help from Friends and Family</a></b> for ideas &#150; <b>before</b> your Quit Date. Getting help from people in your corner really can make a difference! <br><br>
                <? } else { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse doesn't smoke cigarettes. That's great! It means that he or she can serve as a role model and a source of support for you. Plus, you'll have fewer triggers to smoke when you're at home. As your Quit Date gets closer, be sure to check out <b><a href="health_tips-socialSupport.php" class="column1Link">How to Get Help from Friends and Family</a></b> for ideas. Getting help from people in your corner really can make a difference! <br><br>
                <? }
            } elseif ($userSpecs["stage"]==4) {
                if ($userSpecs["partnerSmokes"]==1) { ?>
<span class="greenBarTitle">Who's Smoking in Your House?</span><br><br>
You said that your partner or spouse smokes cigarettes. That might make staying quit more challenging, but not impossible! Be sure to talk to your spouse or partner about supporting you by avoiding smoking around you and sticking to smoke-free zones of the house. <br><br>
And think about all the <b><a href="health_manual-4b2.php" class="column1Link">people and places</a></b> that make you want to smoke &#150; so you can plan what to do instead!<br><br>
                <? } else { ?>
<span class="greenBarTitle">Who's Smoking in the House?</span><br><br>
You said that your partner or spouse doesn't smoke cigarettes. That's great! It means that he or she can serve as a role model and a source of support for you. Plus, you'll have fewer triggers to smoke when you're at home. <br><br>
Be sure to think about the kinds of <a href="health_tips-socialSupport.php#thingsToSay" class="column1Link"><b>things you'll want to say</b></a> to your spouse or partner while you're quitting. Helping people understand what you're going through can make a big difference!<br><br>
                <? }
            }

        } elseif ($userSpecs["maritalStatus"]>2) {
            if ($userSpecs["stage"]==1) { ?>
You said that you don't live with any smokers. That's great! That means that you'll have fewer temptations to smoke, should you ever decide to quit.<br><br>
Remember, Partnership for Health offers quit-smoking medication at <b>no charge</b>. This really helps smokers quit!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication.</b><br><br>
            <? } elseif ($userSpecs["stage"]==2) { ?>
You said that you don't live with any smokers. That's great! That means that you'll have fewer temptations to smoke, should you decide to quit.<br><br>
Remember, Partnership for Health offers quit-smoking medication at <b>no charge</b>. This really helps smokers quit!<br><br>
<b><a href="health_pharmo.php" class="column1Link">Read more</a> about getting free quit-smoking medication.</b><br><br>
            <? } elseif ($userSpecs["stage"]==3) { ?>
You said that you don't live with any smokers. That's great! It means that you'll have fewer triggers to smoke when you're at home. As your Quit Date gets closer, be sure to check out <b><a href="health_tips-socialSupport.php" class="column1Link">How to Get Help from Friends and Family</a></b> for ideas. Getting help from people in your corner really can make a difference! <br><br>
            <? } elseif ($userSpecs["stage"]==4) { ?>
You said that you don't live with any smokers. That's great! It means that you'll have fewer triggers to smoke when you're at home. <br><br>
Be sure to think about the kinds of <a href="health_tips-socialSupport.php#thingsToSay" class="column1Link"><b>things you'll want to say</b></a> to people you know while you're quitting. Helping people understand what you're going through can make a big difference!<br><br>
            <? }
        }
    }



    // PER-SESSION CONTENT: Week 4
    if ($thisMilestone==4) {
        if ($userSpecs["stage"]==1) { ?>
<span class="greenBarTitle">There are good and bad sides to everything</span><br><br>
There must be things you like about smoking, if you don't want to quit. But what about things you <b>don't</b> like?<br><br>
As for quitting, there must be things about it that keep you from wanting to try it. But what about some of the good things that could happen if you quit?<br><br>
Try thinking about pros and cons by taking our <a href="you_prosCons.php" class="column1Link">quiz</a>. Your answers may surprise you and help you learn your feelings about smoking.<br><br>
<a href="health_pharmo.php" class="column1Link">Take the quiz now.</a><br><br>
    <? } elseif ($userSpecs["stage"]==2) { ?>
<span class="greenBarTitle">There are good and bad sides to everything</span><br><br>
There must be things you like about smoking, if you don't want to quit. But what about things you <b>don't</b> like?<br><br>
As for quitting, there must be things about it that keep you from wanting to try it. But what about some of the good things that could happen if you quit?<br><br>
Try thinking about pros and cons by taking our <a href="you_prosCons.php" class="column1Link">quiz</a>. Your answers may surprise you and help you learn more about your feelings about smoking.<br><br>
<a href="health_pharmo.php" class="column1Link">Take the quiz now.</a><br><br>
    <? } elseif ($userSpecs["stage"]==3) { ?>
Healthier lungs. A non-smelly house or apartment. Fewer colds. These are just a few of the things within your reach, now that you're on the road to becoming a non-smoker!<br><br>
To give yourself a little boost, <a href="health_manual-2g.php" class="column1Link">revisit your checklist</a> of what you could look forward to as a non-smoker. It will keep you motivated on your first smoke-free days!<br><br>
<a href="health_manual-2g.php" class="column1Link">Revisit my checklist.</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
Healthier lungs. A non-smelly house or apartment. Fewer colds. These are just a few of the things within your reach, now that you're becoming a non-smoker!<br><br>
To give yourself a little boost, <a href="health_manual-2g.php" class="column1Link">revisit your checklist</a> of what you could look forward to as a non-smoker. It will keep you motivated on your first smoke-free days!<br><br>
<a href="health_manual-2g.php" class="column1Link">Revisit my checklist.</a><br><br>
    <? }
    }



    // PER-SESSION CONTENT: Week 5
    if ($thisMilestone==5) {
        include("includes/user-activities.php");
        if (strlen($activityLinks)>0) {
    ?>
We're five weeks in&#133; want to see where you've been?  Check out your answers to these interactive exercises &#150; and make updates if your feelings have changed!<br><br>
    <?
            echo $activityLinks;
        } else {
    ?>
We're five weeks in&#133; want to see where you've been?  Check out your answers to these interactive exercises &#150; and make updates if your feelings have changed!<br><br>
    <?
        }
    }
?>


<?
    // PER-SESSION CONTENT: Week 6
    if ($thisMilestone==6) {
        if ($userSpecs["stage"]==1) { ?>
<!-- Want to learn about making health changes, take quizzes, and more? The <a href="health_manual-1h.php" class="column1Link">Guide to Your Goals</a> is the place for you to start.<br><br> -->
Sometimes when you're thinking about challenges, goals, or just life in general, writing things out can help you express yourself. Visit the journal and jot down whatever matters to you, and then come back and view it later on. Everything you write stays confidential and isn't shared with anyone else on the site.<br><br><a href="you_journal.php" class="column1Link">Write on!</a><br><br>
    <? } elseif ($userSpecs["stage"]==2) { ?>
<!-- It's time to visit the <a href="health_manual-2a.php" class="column1Link">Guide to Your Goals</a>, where you can use interactive tools to help you decide if you're ready to quit!<br><br> -->
Sometimes when you're thinking about goals, health changes, or just life in general, writing things out can help you express yourself. Visit the journal and jot down whatever matters to you, and then come back and view it later on. Everything you write stays confidential and isn't shared with anyone else on the site.<br><br><a href="you_journal.php" class="column1Link">Write on!</a><br><br>
    <? } elseif ($userSpecs["stage"]==3) { ?>
<!-- You're getting ready to quit! Make sure you've got a plan for action by visiting the <a href="health_manual-3a.php" class="column1Link">Guide to Getting Ready</a>. It's got everything you need to prepare to kick butts!<br><br> -->
Sometimes when you're thinking about goals, your upcoming Quit Date, or just life in general, writing things out can help you express yourself. Visit the journal and jot down whatever matters to you, and then come back and view it later on. Everything you write stays confidential and isn't shared with anyone else on the site.<br><br><a href="you_journal.php" class="column1Link">Write on!</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
<!-- You've quit smoking &#150; congratulations! Make sure you know everything you need to in order to stay-smoke free! Visit the <a href="health_manual-4a.php" class="column1Link">Guide to Action</a> and read up on the best ways to keep kicking butts.<br><br> -->
Sometimes when you're thinking about what life is like as a non-smoker, goals and challenges, or just things in general, writing your thoughts out can help you express yourself. Visit the journal and jot down whatever matters to you, and then come back and view it later on. Everything you write stays confidential and isn't shared with anyone else on the site.<br><br><a href="you_journal.php" class="column1Link">Write on!</a><br><br>
    <? }
    }
?>


<?
    // PER-SESSION CONTENT: Week 7
    if ($thisMilestone==7) {
        if ($userSpecs["stage"]==1) { ?>
Even though you don't want to quit smoking right now, have you ever thought about taking some small steps, just to see what it might be like? They're manageable and easy to do &#150; if it feels right for you.<br><br><a href="health_manual-1f.php" class="column1Link">Take a small step.</a><br><br>
    <? } elseif ($userSpecs["stage"]==2) { ?>
Since you're thinking about quitting smoking, you might want to try taking a few small steps in that direction, just to see what it might be like. They're manageable and easy to do &#150; if it feels right for you.<br><br><a href="health_manual-2i.php" class="column1Link">Take a small step.</a><br><br>
    <? } elseif ($userSpecs["stage"]==3) { ?>
When you quit smoking, you might have to deal with some withdrawal symptoms. From relieving tension to avoiding insomnia, we've got easy and practical ways to deal.<br><br><a href="health_manual-3e.php" class="column1Link">See how to soothe symptoms.</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
After quitting smoking, you might find that certain people and places can make staying smoke-free a challenge. Take a short quiz to learn what to look out for, and how to make it work.<br><br><a href="health_manual-4b2.php" class="column1Link">Take the People and Places quiz now.</a><br><br>
    <? }
    }
?>


<?
    // PER-SESSION CONTENT: Week 8
    if ($thisMilestone==8) {
        if ($userSpecs["stage"]==1) { ?>
Some smokers have pretty mixed feelings about their habit &#150; they really like it, but they acknowledge that it's not good for them. Take a quick quiz to get a sense of your real feelings about smoking.<br><br><a href="you_prosCons.php" class="column1Link">Take the quiz now.</a><br><br>
    <? } elseif ($userSpecs["stage"]==2) { ?>
Some smokers have pretty mixed feelings about their habit &#150; they really like it, but they acknowledge that it's not good for them. Take a quick quiz to get a sense of your real feelings about smoking.<br><br><a href="you_prosCons.php" class="column1Link">Take the quiz now.</a><br><br>
    <? } elseif ($userSpecs["stage"]==3) { ?>
As you get ready to quit, have you thought about certain people and places that might make staying smoke-free a challenge? Take a short quiz to learn what to look out for, and how to make it work.<br><br><a href="health_manual-3g2.php" class="column1Link">Take the People and Places quiz now.</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
Congratulations, you've quit smoking! Come and share your personal story with the PFH community!<br><br><a href="community_success.php" class="column1Link">Share a success story here.</a><br><br>
    <? }
    }
?>



<?
    // PER-SESSION CONTENT: Week 9
    if ($thisMilestone==9) {
        if ($userSpecs["stage"]==1) { ?>
The PFH community wants to hear what every participant has to say! Take a trip to the forum and post some responses, or start a new thread.<br><br><a href="/forum/viewforum.php?f=1" class="column1Link">Be a part of the PFH online world.</a><br><br>
    <? } elseif ($userSpecs["stage"]==2) { ?>
The PFH community wants to hear what every participant has to say! Take a trip to the forum and post some responses, or start a new thread.<br><br><a href="/forum/viewforum.php?f=1" class="column1Link">Be a part of the PFH online world.</a><br><br>
    <? } elseif ($userSpecs["stage"]==3) { ?>
The PFH community wants to hear what every participant has to say! Take a trip to the forum and talk about how you're feeling as you get ready to quit smoking.<br><br><a href="/forum/viewforum.php?f=1" class="column1Link">Be a part of the PFH online world.</a><br><br>
    <? } elseif ($userSpecs["stage"]==4) { ?>
You've quit smoking! The PFH community would love to hear how it's going &#150; so come and share in the forum.<br><br><a href="/forum/viewforum.php?f=1" class="column1Link">Be a part of the PFH online world.</a><br><br>
    <? }
    }
?>


<?
    // PER-SESSION CONTENT: Week 10
    if ($thisMilestone>9) { ?>
Take a visit to Your Pages and see every place you've been on the site! And remember, you can update these pages as your thoughts and feelings change.<br><br><a href="you_pages.php" class="column1Link">See where you've been.</a><br><br>
<?  }  ?>


            <br><br>
<?=$addOn?>
            &nbsp;</td>
        </tr></table><br>
<?
}
?>

