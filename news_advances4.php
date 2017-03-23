<?
include("includes/site-functions.php");
$sectionID="news";
contentViewed(136);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: News & Info</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/news_advances.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">IMPROVEMENTS IN SURGICAL PROCEDURES</span><br><br>

It used to be common for surgeons to amputate limbs or remove extra tissue around a tumor in order to be sure that cancer wouldn't come back. Today, more conservative operations are performed, with surgeons removing as little tissue as possible and combining surgery with radiation therapy and sometimes chemotherapy to prevent the cancer from returning. This has improved the quality of life for many cancer survivors.<br><br>

<b>Some specific treatment advances in use today:</b><br>
Side effects of treatment to the brain and nervous system are being reduced by more refined radiation techniques. This means avoiding radiation altogether in lower-risk patients, and in some cases, using chemotherapy alone.<br><br>

To protect the thyroid gland in patients being treated for Hodgkin's disease, some treatment centers recommend shielding the thyroid during radiation. Also, radiation is not used along with iodide-containing contrast materials.<br><br>

Progress is being made in ensuring children's proper growth by refining radiation techniques and limiting radiation doses. In some cases this is done by using stronger chemotherapy drugs.<br><br>

There is also special attention paid to the heart and lungs of children who are undergoing treatment for cancer or similar illnesses. Different scheduling of treatments and new combinations of drugs can protect the heart and the membranes around it from treatment-related damage. The lungs and other organs are watched carefully throughout treatment, and radiation is limited. <br><br>

The heart and lung systems are important in maintaining good health  and they are also very susceptible to the effects of smoking. Adults who had treatments that affected their heart and lungs as children may be especially prone to the damaging <a href="news_late-effects.php">effects of smoking</a>.



<br><span class="manualNext">Next Up:</span><br><br>
<a href="news_advances5.php"><b>5. A Glimpse at Future Advances</b></a><br><br>
<div align="right">
<a href="news_advances3.php" class="manualFooterLink"><b>Prev</b></a>
<a href="news_advances.php" class="manualFooterLink">1</a>
<a href="news_advances2.php" class="manualFooterLink">2</a>
<a href="news_advances3.php" class="manualFooterLink">3</a>
<b>4</b>
<a href="news_advances5.php" class="manualFooterLink">5</a>
<a href="news_advances5.php" class="manualFooterLink"><b>Next</b></a>
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
    <tr bgcolor="#F2FAF6">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="news_advances.php" class="manualSubLink">1. Advances Home</a><br><br>
        <a href="news_advances2.php" class="manualSubLink">2. Improvements in Chemotherapy</a><br><br>
        <a href="news_advances3.php" class="manualSubLink">3. Advances in Radiation Therapy</a><br><br>
        <b>4. Improvements in Surgical Procedures</b><br><br>
        <a href="news_advances5.php" class="manualSubLink">5. A Glimpse at Future Advances</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

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
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forumNEW2.gif" border=0 alt=""></a><br>
<? } else { ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
<? } ?>
    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
