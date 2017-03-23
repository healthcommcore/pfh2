<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(175);

$targetSet=0;
if ($HTTP_POST_VARS["submitAction"]=="updateSmokes") {
    $mysqlID=dbConnect();
    $resultID=mysql_query("UPDATE PFHUserInfo SET smokesPerDay=".$HTTP_POST_VARS["smokesPerDay"].",smokesPerDaySTARTED=".time()." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    dbClose();
    header("Location: health_manual-3d2.php");
    exit();
} else {
    $mysqlID=dbConnect();
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            if ($specs["smokesPerDay"]>0) {
                $targetSet=$specs["smokesPerDay"];
                $targetStart=$specs["smokesPerDaySTARTED"];
            }
        }
    }
    dbClose();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
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

<span class="manualHeader">SET AND TRACK GOALS</span><br><br>

<?
// FOR PEOPLE ALREADY CUTTING DOWN
if ($targetSet>0) {
    $cigSTART=$targetSet;
    $numDaysIn=floor((time()-$targetStart)/86400);
    $numWeeksIn=floor($numDaysIn/7);

    echo "<i>On ".date("F jS",$targetStart).", you reported that you were smoking <b>".$targetSet."</b> cigarette";
    if ($targetSet>1) echo "s";
    echo " each day.</i>";

    // MODERATE/HEAVY SMOKERS
    if ($cigSTART>6) {
        echo " Here are some goals for this week:<br><br>\n\n";
        $lastVAL=$cigSTART;
        $dayCount=1;
        $daysShown=0;
        while ($daysShown<7) {
            if ($cigSTART<20) $reduceBy=($cigSTART*.0142857);
            if ($cigSTART>19) $reduceBy=($cigSTART*.0214286);

//            $reduceBy=($lastVAL*.1);
//            if ($lastVAL>19) $reduceBy=($lastVAL*.0214286);
            $tmpVAL=$lastVAL-$reduceBy;

            if (($cigSTART<20) && ($tmpVAL<5)) $tmpVAL=5;
            if (($cigSTART>19) && ($tmpVAL<10)) $tmpVAL=10;

//            if ($tmpVAL<5) $tmpVAL=5;
            $tmpTime=$targetStart+($dayCount*86400);
            if (($tmpTime>time()) && ($daysShown<7)) {
                if ($daysShown==0) {
                    echo "<b>Today:</b> cut down to ".round($tmpVAL)." cigarettes<br><br>\n";
                } else {
                    if ($daysShown==1) {
                        echo "<table border=1 cellpadding=6 cellspacing=0>\n";
                        echo "<tr><td><b>days from now</b></td><td><b>cut down to:</b></td></tr>\n";
                    }
                    echo "<tr><td align=\"center\">".$daysShown."</td>";
                    echo "<td align=\"center\">".round($tmpVAL)."</td></tr>\n";
                    if (($cigSTART<20) && (round($tmpVAL)==5)) $daysShown=8;
                    if (($cigSTART>19) && (round($tmpVAL)==10)) $daysShown=8;
                }
                $daysShown++;
            }
            $lastVAL=$tmpVAL;
            $dayCount++;
        }
        if ($daysShown>0) echo "</table><br>\n\n";


        if ((time()-$targetStart)>(86400*.00001)) {
?>
            <form name="form3" method="POST" action="health_manual-3d2.php">
            <input type="hidden" name="submitAction" value="updateSmokes">
            <input type="hidden" name="smokesPerDay" value=0>
            </form>
            
            <i>If you would like to re-enter the number of cigarettes you currently smoke each day, <a href="javascript:document['form3'].submit();">click here</a>.</i><br><br>
<?
        }
?>
<br>

<? if ($cigSTART<20) { ?>
As you get ready for your Quit Date, cut down according to the numbers this tool gives you. 
Once you reach 5 cigarettes a day, <b>stop there</b>. 
Don't keep cutting down below that number. 
We recommend that you stay at that number of cigarettes each day until your Quit Date. 
Then, on your Quit Date, stop smoking completely.<br><br>
As you cut down and get ready to quit, think about what types of things can help you get ready for the big day. 
You may find that <a href="health_tips-relaxation.php">relaxation techniques</a> are right for you. 
You might want to talk to <a href="health_tips-socialSupport.php">friends and family</a> about your upcoming Quit Date, too. 
And be sure to review the <a href="health_manual-3c1.php">whens, wheres, and whys</a> of your smoking. 
This will help you on your Quit Date and all the days that follow, because you'll know when to be on your toes.<br><br>
<? } ?>

<? if ($cigSTART>19) { ?>
As you get ready for your Quit Date, cut down according to the numbers this tool gives you. 
Once you reach 10 cigarettes a day<!--the lowest number-->, <b>stop there</b>. 
Don't keep cutting down below that number. 
We recommend that you stay at that number of cigarettes each day until your Quit Date. 
Then, on your Quit Date, stop smoking completely.<br><br>
As you cut down and get ready to quit, think about what types of things can help you get ready for the big day. 
You may find that <a href="health_tips-relaxation.php">relaxation techniques</a> are right for you. 
You might want to talk to <a href="health_tips-socialSupport.php">friends and family</a> about your upcoming Quit Date, too. 
Thinking about the best ways to kick old <a href="health_manual-3g.php">habits</a> will also help you reach your goal of being smoke-free.<br><br>
<? } ?>


<?
    // LIGHT SMOKERS
    } else {
?>
<br><br>
To help you stop smoking, the best plan for you is to really think about the times and places that you smoke, and change those habits. 
To help you get ready for your Quit Date, review the <a href="health_manual-3c1.php">whens, wheres, and whys</a> of your smoking. 
This will help you on your Quit Date and all the days that follow, because you'll know when to be on your toes. 
Thinking about the best ways to kick old <a href="health_manual-3g.php">habits</a> will also help you reach your goal of being smoke-free.<br><br>
<?
        if ((time()-$targetStart)>(86400*.00001)) {
?>
            <br>
            <form name="form3" method="POST" action="health_manual-3d2.php">
            <input type="hidden" name="submitAction" value="updateSmokes">
            <input type="hidden" name="smokesPerDay" value=0>
            </form>
            
            <i>If you would like to re-enter the number of cigarettes you currently smoke each day, <a href="javascript:document['form3'].submit();">click here</a>.</i><br><br>
<?
        }
    }


// START TO CUT DOWN
} else {
?>
Another great way to get ready to kick the smoking habit is to cut back on the number of cigarettes you smoke each day. It will show you that quitting is really within your reach!<br><br>
Try this goal-setting exercise. The idea is to cut down on your daily number of cigarettes each week, and see how it feels. Use the tool below to chart your progress.<br><br>
<b>Note:</b> This exercise works best with a Quit Date that is four weeks from when you start keeping track.<br><br>

<form name="form1" method="POST" action="health_manual-3d2.php">
<input type="hidden" name="submitAction" value="updateSmokes">
<b>Number of cigarettes I smoke each day:</b> <input type="text" name="smokesPerDay" value="<?=$HTTP_POST_VARS["smokesPerDay"]?>" size=4> <input type="submit" value="go"><br><br>
</form>
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

    <a href="news.php"><img src="images/ads/new/ad-4.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum_quitdate2.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
