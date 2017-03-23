<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(12);
$showWide=1;

// HANDLE FORM-SUBMIT
$mysqlID=dbConnect();
if ($HTTP_POST_VARS["submitAction"]=="saveEntry") {
    // update database
    $sql="INSERT INTO PFHJournals (userID,allText,timeEntered) VALUES (".$_SESSION["userID"].",\"".ereg_replace("\"","\\\"",$HTTP_POST_VARS["blog"])."\",".time().")";
    mysql_query($sql,$mysqlID);
    header("Location: you_journal-confirm.php");
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/you_journal400.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

            <span class="manualHeader">Entry Saved</span><br>
            <a href="you_journal.php">back to Your Journal</a><br><br>

            <b>Thank you. Your latest entry has been saved.</b><br><br>
    
            We hope that this writing helps you with the things you're going through, and it may help you set new goals and achieve them.<br><br>

            Please come back often, and remember: everything written here is completely private, and will not be shared with anyone.<br><br>


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
    <tr bgcolor="#F7F3F9">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        <ul class="UL1">
        <li><a href="you_journal.php" class="tipsSubLink">Journal home</a></li>
<?
$resultID=mysql_query("SELECT * FROM PFHJournals WHERE (userID=".$_SESSION["userID"].") ORDER BY timeEntered DESC",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs2=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
            if ($specs2["id"]==$specs["id"]) {
?>
        <li><b><?=date("n/d/y, h:i a",$specs2["timeEntered"])?></b></li>
<?
            } else {
?>
        <li><a href="you_journal-showEntry.php?id=<?=$specs2["id"]?>" class="tipsSubLink"><?=date("n/d/y, h:i a",$specs2["timeEntered"])?></a></li>
<?
            }
        }
    }
}
?>
        </ul></div>

        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="/forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
<? dbClose(); ?>

