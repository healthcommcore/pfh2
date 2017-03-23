<?
include("includes/site-functions.php");
$sectionID="other";
$errMsg="";

$allAds=array(
    array("ad_benefits.gif","health_manual-2g.php"),
    array("ad_cigchemicals.gif","news_cig-quiz.php"),
    array("ad_costben.gif","news_cost-benefits.php"),
    array("ad_cravingworry.gif","health_manual-4b.php"),
    array("ad_dealwtriggers.gif","health_manual-3g.php"),
    array("ad_forum_keepsmoking.gif","forum/viewforum.php?f=1"),
    array("ad_forum_quitdate.gif","forum/viewforum.php?f=1"),
    array("ad_forum_quitdate3.gif","forum/viewforum.php?f=1"),
    array("ad_forum_quitting.gif","forum/viewforum.php?f=1"),
    array("ad_forum_quitworries.gif","forum/viewforum.php?f=1"),
    array("ad_forumNEW2.gif","forum/viewforum.php?f=1"),
    array("ad_pharmquiz.gif","health_pharmo.php"),
    array("ad_reward.gif","health_manual-4h.php"),
    array("ad_setquitdate.gif","health_manual-3l.php"),
    array("ad_yourbody.gif","health_bodyguy.php"),
    array("ad9.gif","forum/viewforum.php?f=1"),

    array("new/ad_cravingshelp.gif","health_manual-4b.php"),
    array("new/ad_forum.gif","forum/viewforum.php?f=1"),
    array("new/ad_forum_quitdate2.gif","forum/viewforum.php?f=1"),
    array("new/ad_pharm.gif","health_pharmo.php"),
    array("new/ad-1.jpg","community_success.php"),
    array("new/ad-2.jpg","you_journal.php"),
    array("new/ad-3.jpg","health_manual-1g2.php"),
    array("new/ad-4.gif","news.php"),
    array("new/ad-5.gif","health_tips-sleep.php"),
    array("new/ad-6.jpg","health_tips-relaxation.php"),
    array("new/ad-7.gif","health_tips-memory.php"),
    array("new/ad-8.jpg","health_tips-talkWithDoc.php"));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>


<body bgcolor="#D9E6A8">
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br><br><br>

            <span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">PREVIEW ADS</span>

<table border=1 cellpadding=12 cellspacing=0><tr bgcolor="#000000"><td>
<?
echo "<table border=0 cellpadding=5 cellspacing=1>\n";
$adCount=0;
while (list($k,$v)=each($allAds)) {
    if ((($k+4)/4)==floor(($k+4)/4)) echo "<tr>\n";
    echo "    <td valign=\"top\" align=\"center\"><b style=\"color:#999999;\">".$v[0]."</b><br><a href=\"/".$v[1]."\" target=\"_blank\"><img src=\"/images/ads/".$v[0]."\" border=0 vspace=4></a><br><a href=\"/".$v[1]."\" target=\"_blank\" style=\"color:#FFFF00;\"><b>".$v[1]."</b></a><br><br>&nbsp;</td>\n";
    if ((($k+1)/4)==floor(($k+1)/4)) echo "</tr><tr><td colspan=4><hr><br>&nbsp;</td></tr>\n";
    $adCount++;
}
$tmpMOD=($adCount%4);
if ($tmpMOD>0) {
    for ($i=0; $i<(4-$tmpMOD); $i++) {
        echo "    <td>&nbsp;</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n\n";
?>
</td></tr></table><br>


            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
