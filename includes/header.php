<a name="top"></a>
<?
$allLetters=array("","a","b","c","d");
$subnavSpecs=array(
    "news"=>array(
        "01"=>array("news_cost-benefits.php",132),
        "02"=>array("news_cig-quiz.php",122),
        "03"=>array("news_late-effects.php",79),
        "04"=>array("news_advances.php",121),
        "05"=>array("news_archive.php",52),
        "06"=>array("news_resources.php",69)),
    "community"=>array(
//        "01"=>array("/forum/viewforum.php?f=1",59),
        "01"=>array("/forum/login2.php",59),
        "02"=>array("community_success.php",99),
        "03"=>array("community_onMind.php",90),
        "04"=>array("community_counselor-story.php",96),
        "05"=>array("community_doc-bio.php",89)),
    "health"=>array(
        "01"=>array("health_manual-".$userSpecs["stage"]."a.php",77),
        "02"=>array("health_bodyguy.php",69),
        "03"=>array("health_tips-activity.php",81),
        "04"=>array("health_dependency.php",120),
        "05"=>array("health_pharmo.php",108)),
    "you"=>array(
        "01"=>array("you_profile1.php",132),
        "02"=>array("you_prosCons.php",168),
        "03"=>array("you_journal.php",86),
        "04"=>array("you_pages.php",83)));
?>

<!-- HEADER -->
<table border=0 cellpadding=0 cellspacing=0 background="images/bgHeader_<?=$sectionID?>.gif"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
<tr>
    <td width=155 rowspan=99><a href="home.php"><img src="images/blank.gif" width=155 height=89 border=0 alt=""></a><br>
    <a href="home.php"><img src="images/allAboutYou-top_<?=$sectionID?>.jpg" width=155 height=23 border=0 alt=""></a></td>
    <td width=95><a href="home.php"><img src="images/blank.gif" width=95 height=26 border=0 alt=""></a></td>
    <td width=520 align="right"><img src="images/blank.gif" width=520 height=1 border=0 alt=""><br>
    <img src="images/blank.gif" width=325 height=25 border=0 alt="" usemap="#topNav"></td>
</tr>
<tr>
    <td><a href="home.php"><img src="images/blank.gif" width=95 height=50 border=0 alt=""></a></td>
    <td align="right" valign="bottom">
    <table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif" align="right">
    <tr>
        <td width=104><a href="you.php"><img src="images/nav/btn_you<?=ucfirst($sectionID)?>.gif" width=104 height=37 border=0 alt=""></a></td>
        <td width=103><a href="health.php"><img src="images/nav/btn_health<?=ucfirst($sectionID)?>.gif" width=103 height=37 border=0 alt=""></a></td>
        <td width=103><a href="community.php"><img src="images/nav/btn_community<?=ucfirst($sectionID)?>.gif" width=103 height=37 border=0 alt=""></a></td>
        <td width=104><a href="news.php"><img src="images/nav/btn_news<?=ucfirst($sectionID)?>.gif" width=104 height=37 border=0 alt=""></a></td>
        <td width=15><img src="images/blank.gif" width=15 height=37 border=0 alt=""></td>
    </tr>
    </table></td>
</tr>
<tr>
<? if ($subnavSpecs[$sectionID]) { ?>
    <td colspan=2 align="right"><img src="images/nav/<?=$sectionID?>_SelectLine.gif" width=610 height=9 border=0 alt=""><br>
<? } else { ?>
    <td colspan=2 align="right"><img src="images/blank.gif" width=610 height=9 border=0 alt=""><br>
<? } ?>
    <table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif">
    <tr>
<?
$navCount=0;
if ($subnavSpecs[$sectionID]) {
    while (list($k,$v)=each($subnavSpecs[$sectionID])) {
        if (substr($v[0],0,11)!=substr($_SERVER["SCRIPT_NAME"],1,11)) {
//        if (substr($_SERVER["SCRIPT_NAME"],1)!=$v[0]) {
?>
        <td width=<?=$v[1]?>><a href="<?=$v[0]?>" onMouseOver="subnavOn('<?=$sectionID?>','<?=$k?>');" onMouseOut="subnavOff('<?=$sectionID?>','<?=$k?>');"><img src="images/nav/subnav/<?=$sectionID?>_off_<?=$k?>.gif" width=<?=$v[1]?> height=19 border=0 alt="" name="subnav<?=$sectionID?><?=$k?>"></a></td>
<?
        } else {
?>
        <td width=<?=$v[1]?>><a href="<?=$v[0]?>"><img src="images/nav/subnav/<?=$sectionID?>_on_<?=$k?>.gif" width=<?=$v[1]?> height=19 border=0 alt="" name="subnav<?=$sectionID?><?=$k?>"></a></td>
<?
        }
        $navCount++;
    }

} else {
?>
        <td><img src="images/blank.gif" width=1 height=19 border=0 alt=""></td>
<?
}
?>
    </tr>
    </table></td>
</tr>
<tr>
    <td colspan=2><img src="images/blank.gif" width=610 height=8 border=0 alt=""></td>
</tr>
</table></td></tr></table>
<map name="topNav">
<area shape="poly" coords="12,0,67,0,59,24,12,24" href="help.php">
<area shape="poly" coords="68,0,123,0,115,24,60,24" href="home.php">
<area shape="poly" coords="124,0,190,0,182,24,116,24" href="logout.php">
<area shape="poly" coords="191,0,244,0,235,24,183,24" href="faq.php">
<area shape="poly" coords="245,0,325,0,325,24,236,24" href="contact.php">
</map>

