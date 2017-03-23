<?
include("includes/site-functions.php");
$sectionID="other";
contentViewed(149);
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
<? include("includes/greenbar.php"); ?>
    &nbsp;</td>
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=400 valign="top"><img src="images/pageTitles/policies.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">PRIVACY AND CONFIDENTIALITY</span><br><br>

Your privacy is important to us. We will never collect sensitive information about you without your consent. This notice explains our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our home page and at every point where personally identifiable information may be requested.<br><br>

To prevent unauthorized access and make sure information is used correctly, we have put physical, electronic, and managerial procedures in place to safeguard and secure the information we collect online. We have instituted all reasonable security measures. However, there always remains a very small possibility of unauthorized users gaining access to this Web site.<br><br>

Any change to this privacy policy will be posted on the site and will become effective 5 days after posting. Please note that this privacy policy does not apply to other Web sites linked through this Web site. Personal information that you choose to provide to other Web sites will be subject to the privacy policies of those Web sites.<br><br>

No information learned about other participants should be disclosed to people not participating in the study, such as family and friends. Access to this Web site is granted to you <b>only</b>. You may not transfer that permission to other individuals.<br><br>

If you have questions or concerns about these privacy policies, please contact us by telephone or <a href="mailto:pfh@hcc-web.org">email</a>.<br><br>



<br>
<div align="right">
<a href="policies3.php" class="manualFooterLink"><b>Prev</b></a>&nbsp;
<a href="policies1.php" class="manualFooterLink">1</a>&nbsp;
<a href="policies2.php" class="manualFooterLink">2</a>&nbsp;
<a href="policies3.php" class="manualFooterLink">3</a>&nbsp;
<b>4</b>&nbsp;
<br><br>
</div>


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
    <tr bgcolor="#F3F4F8">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="policies1.php" class="manualSubLink">1. Crisis Information</a><br><br>
        <a href="policies2.php" class="manualSubLink">2. Forum Rules</a><br><br>
        <a href="policies3.php" class="manualSubLink">3. The Information We Collect</a><br><br>
        <b>4. Privacy and Confidentiality</b><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_tips-talkWithDoc.php"><img src="images/ads/new/ad-8.jpg" border=0 alt=""></a><br>
<?
$newPosts=0;
$lastPostTime=0;
$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM phpbb_posts ORDER BY post_time DESC",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        $lastPostTime=$specs["post_time"];
    }
}
if ($lastPostTime>0) {
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (lastViewedForum<".($lastPostTime-21600).") AND (id=".$_SESSION["userID"].")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $newPosts=1;
        }
    }
}
if ($newPosts>0) { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forumNEW2.gif" border=0 alt=""></a><br><br>
<? } else { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
<? } ?>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
