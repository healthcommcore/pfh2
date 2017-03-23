<?
include("includes/site-functions.php");
$sectionID="other";

if (strlen($HTTP_GET_VARS["secID"])<1) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Policy</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>Short.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>Short.css);
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
    &nbsp;</td>
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=400 valign="top"><img src="images/pageTitles/blank.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>



<? if ($HTTP_GET_VARS["secID"]=="A") { ?>
<?     $resultID=mysql_query("UPDATE PFHUserInfo SET actionReassessTime=".time()." WHERE id=".$_SESSION["userID"],$mysqlID); ?>
<!-- ============================ -->
<!-- Great! I'm still smoke-free! -->
<!-- ============================ -->

That's great news. Congratulations! Quitting smoking and staying quit is a big accomplishment. To stay smoke-free, be sure to keep reviewing the information and activities in the Guide to Action!<br><br>

<a href="/forum/viewforum.php?f=1">Talk about your success in the forum</a>.<br><br><br>

<a href="home.php"><img src="images/quizButton_next.gif" width=58 height=29 border=0 alt=""></a><br><br>
<? } ?>


<? if ($HTTP_GET_VARS["secID"]=="B") { ?>
<?     $resultID=mysql_query("UPDATE PFHUserInfo SET actionReassessTime=".time()." WHERE id=".$_SESSION["userID"],$mysqlID); ?>
<!-- ============================ -->
<!-- I slipped up a little        -->
<!-- ============================ -->

Slipping up a little is OK &#150; quitting is a big job, and sometimes challenges come up. If you tell us why you think you smoked, we may be able to help you get back on track. Please click one of the options below:<br><br>
<form name="form1" method="GET" action="reAssess_action.php">
<table border=0 cellpadding=5 cellspacing=0>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B1" onFocus=""></td>
    <td valign="top">I had cravings I couldn't deal with.</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B2" onFocus=""></td>
    <td valign="top">My friends, family, or co-workers didn't know that I might need some help.</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B3" onFocus=""></td>
    <td valign="top">I felt way too stressed without cigarettes.</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B4" onFocus=""></td>
    <td valign="top">I started to worry about gaining weight.</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="B5" onFocus=""></td>
    <td valign="top">I didn't have anyone to talk to who understood just what I was going through.</td>
</tr>
<tr>
    <td valign="top">&nbsp;</td>
    <td valign="top"><br><input type="submit" value="Submit"></td>
</tr>
</table>
</form><br><br>
<? } ?>


        <? if ($HTTP_GET_VARS["secID"]=="B1") { ?>
        <!-- ----------------------------------- -->
        <!-- I slipped up a little (answer #1)   -->
        <!-- ----------------------------------- -->
        Cravings can be strong at the beginning, but it's important to remember that they do ease up quickly! Remember the 4Ds of taming cravings &#150; delay, drink water, deep breathe, or do something else. <a href="health_manual-4b.php">Read more</a> about it!<br><br>
        <a href="health_manual-4a.php">Return to the Guide to Action</a><br><br>
        <a href="/forum/viewforum.php?f=1">Talk about how it's going in the forum</a>.<br><br>
        <? } ?>
        
        
        <? if ($HTTP_GET_VARS["secID"]=="B2") { ?>
        <!-- ----------------------------------- -->
        <!-- I slipped up a little (answer #2)   -->
        <!-- ----------------------------------- -->
        When you're quitting smoking, family, friends, and co-workers can be some of your best allies. But if you're not sure who to ask for help or what you would say, read the <a href="health_tips-socialSupport.php">Help from Friends and Family</a> tip sheet.<br><br>
        <a href="health_manual-4a.php">Return to the Guide to Action</a><br><br>
        <a href="/forum/viewforum.php?f=1">Talk about how it's going in the forum</a>.<br><br>
        <? } ?>
        
        
        <? if ($HTTP_GET_VARS["secID"]=="B3") { ?>
        <!-- ----------------------------------- -->
        <!-- I slipped up a little (answer #3)   -->
        <!-- ----------------------------------- -->
        Quitting smoking can be stressful for some people, no question. But there are great ways to handle stress without lighting up. Read up on <a href="health_tips-relaxation.php">great relaxation techniques</a> like meditation, deep breathing, and more. Try one of these the next time you're feeling stressed.<br><br>
        <a href="health_manual-4a.php">Return to the Guide to Action</a><br><br>
        <a href="/forum/viewforum.php?f=1">Talk about how it's going in the forum</a>.<br><br>
        <? } ?>
        
        
        <? if ($HTTP_GET_VARS["secID"]=="B4") { ?>
        <!-- ----------------------------------- -->
        <!-- I slipped up a little (answer #4)   -->
        <!-- ----------------------------------- -->
        Weight gain is a common worry about quitting smoking, but you have some control! <a href="health_manual-4e.php">Exercise</a> can help you control your weight, and it also helps quiet down cravings. And be sure to visit the <a href="health_tips-weight.php">Weight Issues</a> tip sheet for ideas on healthy snacking.<br><br>
        <a href="health_manual-4a.php">Return to the Guide to Action</a><br><br>
        <? } ?>
        
        
        <? if ($HTTP_GET_VARS["secID"]=="B5") { ?>
        <!-- ----------------------------------- -->
        <!-- I slipped up a little (answer #5)   -->
        <!-- ----------------------------------- -->
        If you're feeling like there's no one who quite understands you, be sure to take a visit to the <a href="/forum/viewforum.php?f=1">PFH Forum</a>! You can talk to other childhood cancer survivors about any challenges you're facing as you quit smoking. You may get some helpful advice &#150; or you may be able to give some.<br><br>
        <a href="health_manual-4a.php">Return to the Guide to Action</a><br><br>
        <a href="/forum/viewforum.php?f=1">Talk about how it's going in the forum</a>.<br><br>
        <? } ?>


<? if ($HTTP_GET_VARS["secID"]=="C") { ?>
<?     $resultID=mysql_query("UPDATE PFHUserInfo SET actionReassessTime=".time()." WHERE id=".$_SESSION["userID"],$mysqlID); ?>
<!-- ============================ -->
<!-- I'm smoking again regularly  -->
<!-- ============================ -->

It's OK if your attempt to quit didn't work out. Quitting is a big challenge, and it can take more than one try. Do you plan to try to quit again soon?<br><br>
<form name="form1" method="GET" action="reAssess_action.php">
<table border=0 cellpadding=5 cellspacing=0>
<tr>
    <td valign="top"><input type="radio" name="secID" value="C1" onFocus=""></td>
    <td valign="top">yes</td>
</tr>
<tr>
    <td valign="top"><input type="radio" name="secID" value="C2" onFocus=""></td>
    <td valign="top">no</td>
</tr>
<tr>
    <td valign="top">&nbsp;</td>
    <td valign="top"><br><input type="submit" value="Submit"></td>
</tr>
</table>
</form><br><br>
<? } ?>


        <? if ($HTTP_GET_VARS["secID"]=="C1") { ?>
        <!-- ----------------------------------------- -->
        <!-- I'm smoking again regularly (answer #1)   -->
        <!-- ----------------------------------------- -->
        That's great that you want to try again! You may find it easier this time around. Now's the time to being preparing again and set a new Quit Date. Visit the <a href="health_manual-3a.php">Guide to Getting Ready</a> today to get started!<br><br>
        <a href="health_manual-3a.php"><img src="images/quizButton_next.gif" width=58 height=29 border=0 alt=""></a><br><br>
        <?     $resultID=mysql_query("UPDATE PFHUserInfo SET reAssessDate2=".time().",stage=3 WHERE id=".$_SESSION["userID"],$mysqlID); ?>
        <? } ?>


        <? if ($HTTP_GET_VARS["secID"]=="C2") { ?>
        <!-- ----------------------------------------- -->
        <!-- I'm smoking again regularly (answer #2)   -->
        <!-- ----------------------------------------- -->
        If you're not ready to quit again, that's OK. You may want to think more about the reasons you smoke, the pros and cons of quitting, and what being a non-smoker would be like. Check out the <a href="health_manual-2a.php">Guide to Your Goals</a> and revisit some of the information. If you're ever ready to quit again, Partnership for Health will be with you all the way!<br><br>
        <a href="health_manual-2a.php"><img src="images/quizButton_next.gif" width=58 height=29 border=0 alt=""></a><br><br>
        <?     $resultID=mysql_query("UPDATE PFHUserInfo SET reAssessDate2=".time().",stage=2 WHERE id=".$_SESSION["userID"],$mysqlID); ?>
        <? } ?>




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
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
