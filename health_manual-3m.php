<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(44);

if ($HTTP_POST_VARS["submitAction"]=="firstReward") {
    if (strlen($HTTP_POST_VARS["firstDayReward"])<1) $errMsg.="<li>Please fill out your reward in the field provided.</li>\n";
    $resultID=mysql_query("UPDATE PFHUserInfo SET firstDayReward=\"".addslashes($HTTP_POST_VARS["firstDayReward"])."\" WHERE id=".$_SESSION["userID"],$mysqlID);
}

$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
    }
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

<?
$thisQDate=$specs["quitDate"];
if ($specs["quitDate2"]>0) $thisQDate=$specs["quitDate2"];
if ($specs["quitDate3"]>0) $thisQDate=$specs["quitDate3"];
if ($specs["quitDate4"]>0) $thisQDate=$specs["quitDate4"];
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$thisQDate)?></span><br><br>

<? if (strlen($errMsg)>0) { ?>
    <ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } elseif ($HTTP_POST_VARS["submitAction"]=="firstReward") { ?>
    <b>Your reward has been saved. Good luck!</b><br><br>
<? } ?>

You've set a Quit Date. Congratulations! Now your job is to be prepared. Before the big day arrives, be sure to:
<ul>
<li>know how to use your nicotine patches or Zyban correctly, if you are using them</li>
<li>get rid of all cigarettes, ashtrays, and lighters &#150; including those in coat pockets or your car</li>
<li>tell the people who support you the date you've chosen</li>
<li>read over the parts of this site that deal with your reasons for quitting and how to handle your cravings</li>
</ul>

And be sure to pick out a reward for yourself. Quitting smoking is a big deal, so treat yourself to something you like on your Quit Date. It doesn't have to be big or expensive, just something that will make you happy. Here are some ideas:
<ul>
<li>a new CD or DVD</li>
<li>a favorite magazine</li>
<li>lunch or dinner out</li>
<li>seeing a movie</li>
<li>eating a favorite food</li>
</ul>

My reward for my first day of being smoke-free:<br><br>

<form name="form3" method="POST" action="health_manual-3m.php">
<input type="hidden" name="submitAction" value="firstReward">
<table border=0 cellpadding=0 cellspacing=0>
<tr><td><img src="images/guide/qdateTop3.gif" width=325 height=90 border=0 alt=""></td></tr>
<tr>
    <td align="center" background="images/guide/qdateMiddle.gif"><br>
<? if (strlen($HTTP_POST_VARS["firstDayReward"])>0) $specs["firstDayReward"]=$HTTP_POST_VARS["firstDayReward"]; ?>
    <input type="text" name="firstDayReward" value="<?=htmlentities($specs["firstDayReward"])?>" size=28><br><br>
    &nbsp;</td>
</tr>
<tr><td><img src="images/guide/qdateBottom.gif" width=325 height=10 border=0 alt=""></td></tr>
<tr><td align="center"><img src="images/blank.gif" width=140 height=1 border=0 alt="" align="left"><input type="image" src="images/guide/qdateSubmit.gif" width=102 height=25 border=0 alt=""></td></tr>
</table>
</form>


<br><br>


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

    <a href="news_cost-benefits.php"><img src="images/ads/ad_costben.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


