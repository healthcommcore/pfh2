
<?
$sectionID="news";
$subnavSpecs=array(
    "news"=>array(
        "01"=>array("news_archive.php",52),
        "02"=>array("news_cost-benefits.php",127),
        "03"=>array("news_late-effects.php",79),
        "04"=>array("news_resources.php",69),
        "05"=>array("news_cig-quiz.php",122),
        "06"=>array("news_advances.php",128)),
    "community"=>array(
        "01"=>array("/forum/viewforum.php?f=1",59),
        "02"=>array("community_counselor-story.php",94),
        "03"=>array("community_doc-bio.php",108),
        "04"=>array("community_onMind.php",90),
        "05"=>array("community_success.php",104)),
    "health"=>array(
        "01"=>array("health_tips.php",86),
        "02"=>array("health_manual-".$_SESSION["stageID"]."a.php",71),
        "03"=>array("health_bodyguy.php",70),
        "04"=>array("health_pharmo.php",99),
        "05"=>array("health_dependency.php",125)),
    "you"=>array(
        "01"=>array("you_profile.php",132),
        "02"=>array("you_journal.php",87),
        "03"=>array("you_kindOfSmoker.php",168),
        "04"=>array("you_pages.php",79)));
?>

<table border=0 cellpadding=0 cellspacing=0 background="images/blank.gif" align="right">
<tr>
<?
$navCount=0;
while (list($k,$v)=each($subnavSpecs[$sectionID])) {
?>
    <? if ($navCount>0) { ?>
    <td width=1><img src="/images/nav/subnav/subnavBar.gif" width=1 height=16 border=0 alt=""></td>
    <? } ?>
    <td width=<?=$v[1]?>><? if (substr($_SERVER["SCRIPT_NAME"],1)!=$v[0]) { ?><a href="<?=$v[0]?>" onMouseOver="subnavOn('<?=$sectionID?>','<?=$k?>');" onMouseOut="subnavOff('<?=$sectionID?>','<?=$k?>');"><? } ?><img src="/images/nav/subnav/<?=$sectionID?>_off_<?=$k?>.gif" width=<?=$v[1]?> height=16 border=0 alt="" name="subnav<?=$sectionID?><?=$k?>"><? if (substr($_SERVER["SCRIPT_NAME"],1)!=$v[0]) { ?></a><? } ?></td>
<?
    $navCount++;
}
?>
</tr>
</table>

