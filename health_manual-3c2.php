<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(174);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SHOW RESULTS
    function showResults() {
        var i;
        var j;

        // validate form
        var numChecks=0;
        for (i=1; i<14; i++) {
            for (j=0; j<3; j++) {
                if (document["form1"]["q"+i][j].checked) numChecks++;
             }
        }
        if (numChecks!=13) {
            alert("Please select a response for each item in the quiz.");

        // calculate results
        } else {
            var answerStr="|";
    
            var showAnswer1="";
            for (i=1; i<5; i++) {
                for (j=1; j<3; j++) {
                    if (document["form1"]["q"+i][j].checked) showAnswer1="1|";
                 }
            }
    
            var showAnswer2="";
            if ((document["form1"]["q5"][1].checked) || (document["form1"]["q5"][2].checked)) showAnswer2="2|";
    
            var showAnswer3="";
            for (i=6; i<8; i++) {
                for (j=1; j<3; j++) {
                    if (document["form1"]["q"+i][j].checked) showAnswer3="3|";
                 }
            }
    
            var showAnswer4="";
            for (i=9; i<12; i++) {
                for (j=1; j<3; j++) {
                    if (document["form1"]["q"+i][j].checked) showAnswer4="4|";
                 }
            }
    
            var showAnswer5="";
            if ((document["form1"]["q12"][1].checked) || (document["form1"]["q12"][2].checked)) showAnswer5="5|";
    
            var showAnswer6="";
            if ((document["form1"]["q13"][1].checked) || (document["form1"]["q13"][2].checked) || (document["form1"]["q8"][1].checked) || (document["form1"]["q8"][2].checked)) showAnswer6="6|";
    
            answerStr+=showAnswer1+showAnswer2+showAnswer3+showAnswer4+showAnswer5+showAnswer6;
            if (answerStr=="|") answerStr="none";
            document["form1"]["allVals"].value=answerStr;
            document["form1"].submit();
        }
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_preparation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>


<?
if (strlen($HTTP_GET_VARS["showAnswer"])<1) {
    $mysqlID=dbConnect();
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (barriersList != \"\") AND (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $HTTP_GET_VARS["showAnswer"]="all";
?>
<span class="manualHeader">QUITTING SMOKING: WHAT GETS IN YOUR WAY?</span><br><br>
Anyone who smokes and has thought about quitting probably has at least one barrier. A barrier is something that gets in the way of quitting, or can make it harder to even think about it. Use this section to learn how you can deal with barriers.<br><br>
<?
        }
    }
    dbClose();
}
?>

<? if ($HTTP_GET_VARS["showAnswer"]=="retake") $HTTP_GET_VARS["showAnswer"]=""; ?>
<? if (strlen($HTTP_GET_VARS["showAnswer"])<1) { ?>
<span class="manualHeader">QUITTING SMOKING: WHAT GETS IN YOUR WAY?</span><br><br>

Anyone who smokes and has thought about quitting probably has at least one barrier. A barrier is something that gets in the way of quitting, or can make it harder to even think about it. There are two main kinds of barriers:
<ul>
<li><b>physical or social</b> &#150; you work around smokers, or your spouse or partner is a smoker, for example</li>
<li><b>psychological or emotional</b> &#150;  you use smoking to help you handle stress or depression, or you're afraid you'll gain weight if you quit, for example</li>
</ul>

Take this quiz to help identify what your barriers are. Then learn how you can deal with them, and add your own thoughts and ideas. Click on the answer that corresponds to how much each barrier influences your thoughts about quitting smoking.<br><br>

<form name="form1" method="GET" action="health_manual-3c2.php">
<input type="hidden" name="showAnswer" value="all">
<input type="hidden" name="allVals" value="">
<b>1. There are too many difficult things going on in my life right now.</b><br><br>
<input type="radio" name="q1" value=1> not at all<br>
<input type="radio" name="q1" value=2> somewhat<br>
<input type="radio" name="q1" value=3> a lot<br><br><br>

<b>2. Without cigarettes, I would feel too anxious or worried about things.</b><br><br>
<input type="radio" name="q2" value=1> not at all<br>
<input type="radio" name="q2" value=2> somewhat<br>
<input type="radio" name="q2" value=3> a lot<br><br><br>

<b>3. Without cigarettes, I would feel too down or sad.</b><br><br>
<input type="radio" name="q3" value=1> not at all<br>
<input type="radio" name="q3" value=2> somewhat<br>
<input type="radio" name="q3" value=3> a lot<br><br><br>

<b>4. Without cigarettes, I would feel too irritable to be around.</b><br><br>
<input type="radio" name="q4" value=1> not at all<br>
<input type="radio" name="q4" value=2> somewhat<br>
<input type="radio" name="q4" value=3> a lot<br><br><br>

<b>5. I enjoy smoking too much to give it up.</b><br><br>
<input type="radio" name="q5" value=1> not at all<br>
<input type="radio" name="q5" value=2> somewhat<br>
<input type="radio" name="q5" value=3> a lot<br><br><br>

<b>6. It would be too hard to control my weight without smoking.</b><br><br>
<input type="radio" name="q6" value=1> not at all<br>
<input type="radio" name="q6" value=2> somewhat<br>
<input type="radio" name="q6" value=3> a lot<br><br><br>

<b>7. Smoking helps me control other behaviors that I have already changed.</b><br><br>
<input type="radio" name="q7" value=1> not at all<br>
<input type="radio" name="q7" value=2> somewhat<br>
<input type="radio" name="q7" value=3> a lot<br><br><br>

<b>8. My family and friends don't think it's important to quit smoking.</b><br><br>
<input type="radio" name="q8" value=1> not at all<br>
<input type="radio" name="q8" value=2> somewhat<br>
<input type="radio" name="q8" value=3> a lot<br><br><br>

<b>9. I don't know how to go about quitting smoking.</b><br><br>
<input type="radio" name="q9" value=1> not at all<br>
<input type="radio" name="q9" value=2> somewhat<br>
<input type="radio" name="q9" value=3> a lot<br><br><br>

<b>10. I have tried to quit smoking in the past so many times, I've given up.</b><br><br>
<input type="radio" name="q10" value=1> not at all<br>
<input type="radio" name="q10" value=2> somewhat<br>
<input type="radio" name="q10" value=3> a lot<br><br><br>

<b>11. I can't afford or find a quit-smoking program.</b><br><br>
<input type="radio" name="q11" value=1> not at all<br>
<input type="radio" name="q11" value=2> somewhat<br>
<input type="radio" name="q11" value=3> a lot<br><br><br>

<b>12. I've tried to quit before &#150; I just can't do it.</b><br><br>
<input type="radio" name="q12" value=1> not at all<br>
<input type="radio" name="q12" value=2> somewhat<br>
<input type="radio" name="q12" value=3> a lot<br><br><br>

<b>13. I live with another smoker who doesn't want to quit.</b><br><br>
<input type="radio" name="q13" value=1> not at all<br>
<input type="radio" name="q13" value=2> somewhat<br>
<input type="radio" name="q13" value=3> a lot<br><br><br>

<input type="button" value="Show Results" onClick="showResults();"><br><br><br>
</form>

<? } else { ?>

    <table border=0 cellpadding=0 cellspacing=0 width=340>
    <tr><td><img src="images/guide/barriersResults.gif" width=340 height=50 border=0 alt=""></td></tr>
    </table>
    <table border=0 cellpadding=25 cellspacing=0 width=340 background="images/flash/dependentBg.gif">
    <tr><td><img src="images/blank.gif" width=290 height=1 border=0 alt=""><br>

   
    <? if ($HTTP_GET_VARS["showAnswer"]!="none") { ?>
        <? if ($HTTP_GET_VARS["showAnswer"]=="all") { ?>
            <?
            $mysqlID=dbConnect();
            if (strlen($HTTP_GET_VARS["allVals"])>0) {
                $resultID=mysql_query("UPDATE PFHUserInfo SET barriersList=\"".$HTTP_GET_VARS["allVals"]."\" WHERE id=".$_SESSION["userID"],$mysqlID);
            }
            $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
            if ($resultID) {
                if (mysql_num_rows($resultID)>0) {
                    $userSpecs=mysql_fetch_array($resultID,MYSQL_ASSOC);
                    $HTTP_GET_VARS["showAnswer"]=$userSpecs["barriersList"];
                }
            }
            dbClose();
            ?>
            Your results show that your barriers to quitting fall into these areas:
            <ul>
            <? if (ereg("\|1\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=1">You're Worried About How to Deal with Stress, Anxiety, or Bad Moods</a></li><? } ?>
            <? if (ereg("\|2\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=2">You Just Like Smoking</a></li><? } ?>
            <? if (ereg("\|3\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=3">You're Worried About Weight Gain</a></li><? } ?>
            <? if (ereg("\|4\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=4">You Just Don't Know How to Quit</a></li><? } ?>
            <? if (ereg("\|5\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=5">You've Tried to Quit Before</a></li><? } ?>
            <? if (ereg("\|6\|",$HTTP_GET_VARS["showAnswer"])) { ?><li><a href="health_manual-3c2.php?showAnswer=6">You Spend Time Around Smokers/<br>Smokers You Know Don't Think Quitting Is Important</a></li><? } ?>
            </ul>
            <div align="right" style="padding-right:20px;"><a href="health_manual-3c2.php?showAnswer=retake">retake quiz</a></div>

        <? } else { ?>

            <?
            $allTitles=array(
                "You're Worried About How to Deal with Stress, Anxiety, or Bad Moods",
                "You Just Like Smoking",
                "You're Worried About Weight Gain",
                "You Just Don't Know How to Quit",
                "You've Tried to Quit Before",
                "You Spend Time Around Smokers/<br>Smokers You Know Don't Think Quitting Is Important");
            ?>
            <div style="padding-right:15px;">
            <span class="manualHeader"><?=$allTitles[(intval($HTTP_GET_VARS["showAnswer"])-1)]?></span><br><br>
            <?
            if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
                $barriersNOTES=$HTTP_POST_VARS["list1"];
                $mysqlID=dbConnect();
                $resultID=mysql_query("UPDATE PFHUserInfo SET barriersNOTES".$HTTP_GET_VARS["showAnswer"]."=\"".addslashes($barriersNOTES)."\" WHERE id=".$_SESSION["userID"],$mysqlID);
                dbClose();
                echo "<br><span class=\"confirmMsg\">THANK YOU! Your changes have been saved. <a href=\"health_manual-3c2.php?showAnswer=all\">Click here</a> to return to your barriers list.</a></span><br><br>\n\n";
            } else {
                echo "<a href=\"health_manual-3c2.php?showAnswer=all\">&#171; back to barriers list</a><br><br>\n\n";
            }
            ?>

            <? if ($HTTP_GET_VARS["showAnswer"]==1) { ?>
            One of the things that gets in your way is that you reach for a cigarette when the going gets tough. You might find it hard not to smoke when you're feeling down or stressed out. That's understandable &#150; a lot of smokers are the same way. But it's also something that you can deal with. There are several ways to deal with stress that don't involve smoking:
            <ul>
            <li>You can try <a href="health_tips-relaxation.php">relaxation</a> and deep breathing to help you take a break from a stressful situation. These things actually cause your body to experience some of the same physical feelings you get when you smoke. But they are much better for you!</li>
            <li><a href="health_tips-activity.php">Exercise</a> is a proven stress fighter. People who exercise regularly say that stress tends to bother them less. It also helps your body to release endorphins, which can improve your mood. Exercising every day for 30 minutes is ideal. </li>
            <li>Remind yourself that even though you might feel down or stressed, taking control of your smoking can help you feel better overall. Try some <a href="health_manual-1g2.php">positive thinking</a> to get started.</li>
            <li>Go to the <a href="forum/viewforum.php?f=1">forum</a> and talk about your barriers with other PFH members.</li>
            </ul>
            <? } ?>    
        
            <? if ($HTTP_GET_VARS["showAnswer"]==2) { ?>
            One of the things that's getting in your way is that you simply like to smoke. You're not alone &#150; lots of smokers say the same thing about it. But many people also find that as they get older, they become more dependent on smoking. They find that it affects their health in pretty negative ways, and they end up liking it less and less. <br><br>
            Think about how smoking fits into your life, and whether or not it could affect your ability to reach certain goals you have for yourself. Will it be <a href="news_cost-benefits.php">worth it</a>? What sorts of things could you <a href="health_manual-1e.php">gain</a>?<br><br>
            Try going to the <a href="forum/viewforum.php?f=1">forum</a> and talking about your barriers with other PFH members.<br><br><br>
            <? } ?>    
            
            <? if ($HTTP_GET_VARS["showAnswer"]==3) { ?>
            Many smokers believe that smoking helps them manage their weight. But the reality is that only about one in three smokers gain weight after they quit. And of those who do gain weight, the average weight gain is only about 5 pounds. Here are some tips to think about if worries about weight gain are a barrier to quitting smoking:
            <ul>
            <li>Start <a href="health_tips-activity.php">exercising</a> before you quit smoking. If you already exercise, try to do a little bit more. Exercise is a triple threat: it burns calories, helps you manage stress, and lessens the urge to smoke.</li>
            <li>If snacking helps you control your urge to light up, plan ahead by getting low-calorie <a href="health_tips-weight2.php">snacks</a> like carrots, celery, and apples. Lean protein like low-fat cheese or yogurt can also be good. Try to avoid too many high-fat and sugary foods.</li>
            <li>There are many good strategies for managing smoking urges that don't involve food. Drinking water, deep breathing, and using <a href="health_tips-relaxation.php">relaxation techniques</a> can go a long way toward warding off cravings for cigarettes.</li>
            <li>Go to the <a href="forum/viewforum.php?f=1">forum</a> and talk about your barriers with other PFH members.</li>
            </ul>
            <? } ?>    
            
            <? if ($HTTP_GET_VARS["showAnswer"]==4) { ?>
            Many smokers with good intentions feel like they just don't know how to quit. Although it's not always easy, there are a lot of ways to make it more manageable. Start by trying the following:
            <ul>
            <li>Learn about <a href="health_pharmo.php">quit-smoking medications</a>. They are proven to help smokers quit, and Partnership for Health can get them for you at no charge.</li>
            <li>Take some very <a href="health_manual-1f.php">small steps</a> to see what life would be like as a nonsmoker.</li>
            <li>Think about the types of situations that make you want to smoke &#150; the <a href="health_manual-2e.php">whens, wheres, and whys</a> of your smoking. This will help get you thinking about how to prepare and plan to do things instead of smoking.</li>
            </ul>
            <? } ?>    
            
            <? if ($HTTP_GET_VARS["showAnswer"]==5) { ?>
            One of your barriers is that you've already decided that you can't do it. But just because you tried to quit once (or even several times), that doesn't mean that you can never succeed! It often takes smokers many tries to kick the habit for good. Here are some things to think about:
            <ul>
            <li>Remind yourself that not everyone succeeds at everything the very first time.</li>
            <li>Look at the differences between the last time you tried to quit and now. Maybe the time or situation wasn't right for you. Has anything changed that might make it easier this time? </li>
            <li>If you're really motivated to quit and you're well-prepared, this time it will work. Break down the quitting process into manageable parts, and take it one day at a time.</li>
            <li>Make a list of three friends who have made a healthy change after trying several times. Ask them for tips and support.</li>
            <li>Draw on past experiences where you've made <a href="health_manual-1h.php">positive changes</a>. If you remember other victories, it boosts your confidence.</li>
            <li>Go to the <a href="forum/viewforum.php?f=1">forum</a> and talk about your barriers with other PFH members.</li>
            </ul>
            <? } ?>    
            
            <? if ($HTTP_GET_VARS["showAnswer"]==6) { ?>
            Living with a smoker or having close friends or co-workers who smoke can be really hard, especially if you're looking to quit smoking and they aren't. But there are ways to work around barriers like these:
            <ul>
            <li>Others may not know that you're a childhood cancer survivor, and even if they do, they may not know that smoking is more dangerous for you than it is for them. Make sure they understand.</li>
            <li>Talk with the smokers you know, and try to work something out. Ask them to limit their smoking to one area or to smoke outside. Ask that they empty ashtrays and not leave cigarettes and lighters around. </li>
            <li>Identify what <a href="health_tips-socialSupport.php">friends and family</a> can do to actively help you quit smoking. </li>
            <li>Think about the <a href="health_manual-4b2.php">people and places</a> that will be challenging for you, so you can plan ahead of time.</li>
            <li>Make a list of three friends who have made a healthy change after trying several times. Ask them for tips and support.</li>
            <li>Go to the <a href="forum/viewforum.php?f=1">forum</a> and talk about your barriers with other PFH members.</li>
            </ul>
            <? } ?>    

            <a href="health_manual-3c2.php?showAnswer=all">&#171; back to barriers list</a></div>
        <? } ?>

    <? } else { ?>
    Your results show that you don't identify any barriers to quitting smoking. It's great that you feel confident about being able to quit successfully!<br><br>
    If you decide to quit smoking, you may want to revisit this quiz as you get ready. Sometimes it's when people prepare to quit that barriers become more obvious.<br><br>
    <div align="right" style="padding-right:20px;"><a href="health_manual-3c2.php">retake quiz</a></div>
    <? } ?>

    &nbsp;</td></tr>
    </table>
    <table border=0 cellpadding=0 cellspacing=0 width=340>
    <tr><td><img src="images/flash/dependentBottom.gif" width=340 height=20 border=0 alt=""></td></tr>
    </table><br>
<? } ?>    


<? if (strlen($HTTP_GET_VARS["showAnswer"])==1) { ?>
    <OBJECT width=341 height=310 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
    <PARAM NAME=movie VALUE="images/flash/Blist21f_<?=$HTTP_GET_VARS["showAnswer"]?>.swf">
    <PARAM NAME=quality VALUE=high>
    <PARAM NAME=bgcolor VALUE=#FBFAE9>
    <EMBED width=341 height=310 bgcolor="#FBFAE9" name="myList" src="images/flash/Blist21f_<?=$HTTP_GET_VARS["showAnswer"]?>.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
    </OBJECT><br><br>
<? } ?>


<? echo showNextPrev("preparation"); ?>


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
<? echo showSubpageLinks("preparation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="forum/viewforum.php?f=1"><img src="ad_forum_quitworries.gif" border=0 alt=""></a><br>
    <a href="health_manual-4b.php"><img src="images/ads/new/ad_cravingshelp.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
