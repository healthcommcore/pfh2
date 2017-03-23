<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(11);
$showWide=1;

$mysqlID=dbConnect();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: About You</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
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
    <td width=592 valign="top"><img src="images/pageTitles/you_journal.gif" width=592 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=517 valign="top" class="column2Text"><img src="images/blank.gif" width=517 height=1 border=0 alt=""><br>

Sometimes it's easier to express yourself in writing.
This is a place where you can work through challenges and goals,
or think about any of the positive things that are going on in your life.
Remember, everything you write here is completely confidential, so feel free to be as open and honest as possible.
<?
$resultID=mysql_query("SELECT * FROM PFHJournals WHERE (userID=".$_SESSION["userID"].")",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
?>
Past entries can be viewed by <a href="you_journal-showEntry.php">clicking here</a>.
<?
    }
}
?>
<br><br>

<OBJECT width=500 height=300 id="blog" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/blog.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#F7F3F9>
<EMBED width=500 height=300 bgcolor="#F7F3F9" name="blog" src="images/flash/blog.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>

<br><br>
Want some tips on using the journal? <a href="you_journal-instructions.php">Click here</a>.<br><br>










            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=50><img src="images/blank.gif" width=50 height=1 border=0 alt=""></td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
<?
dbClose();
?>

