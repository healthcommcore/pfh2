<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(25);
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


<body bgcolor="#FFFFFF" onLoad="swfGoto(2)">
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_precontemplation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">POSITIVE THINKING</span><br><br>

<?
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
$positiveNOTES1=$HTTP_POST_VARS["list1"];
$positiveNOTES2=$HTTP_POST_VARS["list2"];
$positiveNOTES3=$HTTP_POST_VARS["list3"];
$mysqlID=dbConnect();
$resultID=mysql_query("UPDATE PFHUserInfo SET positiveNOTES1=\"".addslashes($positiveNOTES1)."\", positiveNOTES2=\"".addslashes($positiveNOTES2)."\", positiveNOTES3=\"".addslashes($positiveNOTES3)."\"  WHERE id=".$_SESSION["userID"],$mysqlID);
dbClose();
echo "<b>Thank you. Your changes have been saved.</b><br><br>\n\n";
}
?>

Everyone gets down about something in their lives from time to time.
But sometimes when you start thinking really negatively about something, it can be hard to pull yourself out of it.<br><br>

This can definitely happen with health habits, and it can make health changes a lot more challenging.
The next time you realize that you're talking to yourself in a negative way, try using the ABC Technique.<br><br>

<b>The ABC Technique has you do three things:</b>
<ol style="list-style-type:upper-alpha;">
<li> The <b>event</b>: Look at the event that you felt negative or upset about.</li>
<li> The <b>thoughts</b>: Remember the way that you talked to yourself about what happened.</li>
<li> The <b>outcome</b>: Think about what came out of the way you talked to yourself.</li>
</ol><br>

Here's an example that has to do with losing weight &#150; a health change that can cause a lot of people to feel down.
<ol style="list-style-type:upper-alpha;">
<li> I started my diet just yesterday, and this morning I ate three donuts.</li>
<li> I have no willpower and I'm going to be fat forever. </li>
<li> I was miserable for the rest of the day and ate lots of junk.</li>
</ol>

Here's an example that has to do with trying to quit smoking, another health habit that can get some people feeling negative pretty fast:
<ol style="list-style-type:upper-alpha;">
<li> I tried to quit smoking last year, but after a few days, I gave up. </li>
<li> I'm so addicted to cigarettes, there's no way I can quit.</li>
<li> I may as well just keep on smoking.</li>
</ol><br>

The ABC Technique isn't meant to keep you from having reactions to events, just <b>overreactions</b> to events. In the case of the person on the new diet, the slip with the donuts led to even more snacks, because he overreacted and talked himself out of thinking he could do it at all. With the smoker, she figures that if she can't quit in one try, there must not be any way she could <b>ever</b> do it.<br><br>

But in both cases, the <b>outcome is in your control</b>! By re-shaping how you think (the <b>B</b> part of the ABC Technique), you can feel more in control of your situation and make positive changes.<br><br>

For example, the dieter could say to himself, "OK, it's not good that I ate three donuts today. But I <b>am</b> trying, and I'm going to eat healthy for the rest of the day." The smoker could say, "Just because I tried to do it once and failed, that doesn't mean I'll fail forever. I can try again and use the patch this time." The point of the ABC Technique is to prevent yourself from setting yourself up for failure, and to help you benefit from positive thinking.<br><br>

You can try the ABC Technique yourself by using this interactive tool below. Think about an event in your life (health-related or otherwise), how you reacted to it, and what the outcome was. Next, think about how you could have reacted differently &#150; and how this might have changed the outcome.<br><br>


<OBJECT width=341 height=770 id="myList" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/list20.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#FBFAE9>
<EMBED width=341 height=770 bgcolor="#FBFAE9" name="myList" src="images/flash/list20.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true"></EMBED>
</OBJECT><br><br>


<? echo showNextPrev("precontemplation"); ?>








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
<? echo showSubpageLinks("precontemplation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
