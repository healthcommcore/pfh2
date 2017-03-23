<?
include("includes/site-functions.php");
$sectionID="community";
contentViewed(119);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Community</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/successstories_title.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader"><b>David</b></span><br><br>

I wondered if there would be a day when I wouldn't think about my cancer, a day when it wouldn't cross my mind at some point during my day: driving in my car, while at work, trying to fall asleep at night. Eleven years later, not only has there been one day, but there have been many.<p>

<img src="images/success/david-v1.gif"><br><br>
That doesn't mean that I don't remember what I went through, and how close I came to dying. It doesn't mean that I'm not thankful for the many nurses, doctors, and researchers who contributed to my cancer going into remission. Instead, I feel that my not thinking about cancer is actually a tribute to all of those people &#150; because they saved my life and let me live it, too.<p>

It took a while though; years. <p>

I was diagnosed with non-Hodgkin's lymphoma while at college, a time when I was definitely not thinking about cancer, chemotherapy, bone marrow biopsies, and my hair falling out. I was young and carefree, looking forward to living the rest of my life. Suddenly, cancer made me think about living the next day of my life, and the endless future turned out to be not so certain.<p>

After several months of treatment, my cancer went into remission and I re-dedicated my life to giving back what had been given to me. Even before my hair started growing back, I volunteered for The Jimmy Fund, and after graduating from college, I worked for three years with the American Cancer Society. I surrounded myself with cancer.<p>

When I look back now, working with organizations involved in cancer research, treatment, prevention, and fundraising made me comfortable with my own cancer. I think you could apply the saying, &#8220;Keep your friends close and your enemies closer.&#8221; In this case, cancer was the enemy, and I needed to be near it in order to feel like I had control over it.<p>

It took time.<p>

And now, 11 years later, I don't have to be surrounded by cancer. I put cancer behind me instead of out in front of me, involved in everything. Actually, I think I put cancer &#8220;next&#8221; to me &#150; where I know that it's there, not intimidating or scaring me about the future, but rather it's there to remind me to appreciate each day and what's important in life and living &#133; every day.<p>



<br><span class="manualNext">Read About:</span><br><br>
<a href="community_success5.php"><b>Samantha</b></a><br><br>
<div align="right">
<a href="community_success3.php" class="manualFooterLink"><b>Prev</b></a>
<a href="community_success.php" class="manualFooterLink">1</a>
<a href="community_success2.php" class="manualFooterLink">2</a>
<a href="community_success3.php" class="manualFooterLink">3</a>
<b>4</b>
<a href="community_success5.php" class="manualFooterLink">5</a>
<a href="community_success7.php" class="manualFooterLink">6</a>
<a href="community_success8.php" class="manualFooterLink">7</a>
<a href="community_success5.php" class="manualFooterLink"><b>Next</b></a>
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
    <tr bgcolor="#FBF3E2">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="community_success.php" class="manualSubLink">1. Success Stories Home</a><br><br>
        <a href="community_success2.php" class="manualSubLink">2. Brian</a><br><br>
        <a href="community_success3.php" class="manualSubLink">3. Char</a><br><br>
        <b>4. David</b><br><br>
        <a href="community_success5.php" class="manualSubLink">5. Samantha</a><br><br>
        <a href="community_success7.php" class="manualSubLink">6. Bernadette</a><br><br>
        <a href="community_success8.php" class="manualSubLink">7. Marty</a><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_tips-relaxation.php"><img src="images/ads/new/ad-6.jpg" border=0 alt=""></a><br>
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

