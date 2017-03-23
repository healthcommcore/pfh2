<?
$allGuidePages=array(
    "precontemplation"=>array(
        array("health_manual-1a.php","You're not ready to quit smoking"),
        array("health_manual-1b.php","Things you should know"),
        array("health_manual-1c.php","Are you physically dependent on cigarettes?"),
        array("health_manual-1d.php","The need for nicotine"),
        array("health_manual-1e.php","Why think about quitting?"),
        array("health_manual-1e2.php","Quitting smoking: what gets in your way?"),
        array("health_manual-1e3.php","People and places"),
        array("health_manual-1e4.php","What are your worries about quitting smoking?"),
        array("health_manual-1e5.php","Help from friends and family"),
        array("health_manual-1f.php","Some small steps"),
        array("health_manual-1g.php","Change is good"),
        array("health_manual-1g2.php","Positive thinking"),
        array("health_manual-1h.php","You can do it!")
        ),
    "contemplation"=>array(
        array("health_manual-2a.php","You're thinking about quitting smoking"),
        array("health_manual-2b.php","Did you know? The air around you"),
        array("health_manual-2c.php","Are you physically dependent on cigarettes?"),
        array("health_manual-2d.php","The need for nicotine"),
        array("health_manual-2e.php","Whys, Wheres, and Whens of Your Smoking"),
        array("health_manual-2f.php","What's good about smoking? What's bad?"),
        array("health_manual-2f2.php","Quitting smoking: what gets in your way?"),
        array("health_manual-2f2b.php","Barriers tracking"),
        array("health_manual-2f3.php","People and places"),
        array("health_manual-2g.php","Why think more seriously about quitting?"),
        array("health_manual-2g2.php","Goals tracking"),
        array("health_manual-2h.php","What are your worries about quitting smoking?"),
        array("health_manual-2i.php","Some small steps"),
        array("health_manual-2j.php","The next step"),
        array("health_manual-2k.php","You can do it!")
        ),
    "preparation"=>array(
        array("health_manual-3a.php","You're ready to quit smoking"),
        array("health_manual-3c.php","The need for nicotine"),
        array("health_manual-3c1.php","Whys, Wheres, and Whens of Your Smoking"),
        array("health_manual-3c2.php","Quitting smoking: what gets in your way?"),
        array("health_manual-3d.php","Nicotine fading"),
        array("health_manual-3d2.php","Set and track goals"),
        array("health_manual-3e.php","Soothing your symptoms"),
        array("health_manual-3f.php","Cutting out cravings"),
        array("health_manual-3f2.php","Update goals"),
        array("health_manual-3g.php","Kicking old habits"),
        array("health_manual-3g2.php","People and places"),
        array("health_manual-3g3.php","What are your worries about quitting smoking?"),
        array("health_manual-3h.php","Saying &quot;so long&quot; to stress"),
        array("health_manual-3i.php","Help from friends and family"),
        array("health_manual-3j.php","Exercise"),
        array("health_manual-3k.php","Worrying about weight"),
        array("health_manual-3k2.php","Some small steps"),
        array("health_manual-3l.php","Setting a Quit Date!"),
        array("health_manual-3m.php","Quitting game plan")
        ),
    "action"=>array(
        array("health_manual-4a.php","You're quitting smoking"),
        array("health_manual-4b.php","Taming cravings"),
        array("health_manual-4b1.php","Kicking old habits"),
        array("health_manual-4b2.php","People and places"),
        array("health_manual-4b2b.php","Why think about quitting?"),
        array("health_manual-4b2c.php","Why think more seriously about quitting?"),
        array("health_manual-4b3.php","What are your worries about quitting smoking?"),
        array("health_manual-4c.php","Worrying about weight"),
        array("health_manual-4d.php","Healthy snacking"),
        array("health_manual-4e.php","Exercise"),
        array("health_manual-4f.php","Getting back on track"),
        array("health_manual-4g.php","Celebrate the new you"),
        array("health_manual-4h.php","Reward yourself"),
        array("health_manual-4i.php","Getting help")
        )
    );

// FUNCTION: SHOW NEXT/PREV
function showNextPrev($stageLabel) {
    GLOBAL $allGuidePages,$mysqlID;
    $pageIndex=0;
    $pagesTotal=0;
    $navPREV="<br>\n";
    $navLINKS="";
    $navNEXT1="";
    $navNEXT2="";
    reset($allGuidePages[$stageLabel]);
    while (list($k,$v)=each($allGuidePages[$stageLabel])) {
        $showLink=1;
        if (($stageLabel=="preparation") && ($v[0]=="health_manual-3m.php")) {
            $resultID_TMP=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
            if ($resultID_TMP) {
                if (mysql_num_rows($resultID_TMP)>0) {
                    $specs_TMP=mysql_fetch_array($resultID_TMP,MYSQL_ASSOC);
                    if (($specs_TMP["quitDate"]<1) && ($specs_TMP["quitDate2"]<1) && ($specs_TMP["quitDate3"]<1) && ($specs_TMP["quitDate4"]<1)) {
                        $showLink=0;
                    }
                }
            }
        }
        if ($showLink==1) {
            if (substr($_SERVER["PHP_SELF"],1)==$v[0]) {
                $navLINKS.="<b>".($k+1)."</b>&nbsp; \n";
                $pageIndex=($k+1);
            } else {
                $navLINKS.="<a href=\"".$v[0]."\" class=\"manualFooterLink\">".($k+1)."</a>&nbsp;\n";
            }
            $pagesTotal++;
        }
    }
    if ($pageIndex>1) {
        $navPREV="<a href=\"".$allGuidePages[$stageLabel][$pageIndex-2][0]."\" class=\"manualFooterLink\"><b>Prev</b></a>&nbsp; \n";
    }
    if ($pageIndex<$pagesTotal) {
        $navNEXT1="<br><span class=\"manualNext\">Next Up:</span><br><br>\n<a href=\"".$allGuidePages[$stageLabel][$pageIndex][0]."\"><b>".($pageIndex+1).". ".$allGuidePages[$stageLabel][$pageIndex][1]."</b></a><br><br>\n";
        $navNEXT2="<a href=\"".$allGuidePages[$stageLabel][$pageIndex][0]."\" class=\"manualFooterLink\"><b>Next</b></a>&nbsp; \n";
    }
    $navCode=$navNEXT1."<div align=\"right\">\n".$navPREV.$navLINKS.$navNEXT2."&nbsp;&nbsp;<br><br>\n";
    return $navCode;
}

// FUNCTION: SHOW SUBPAGE LINKS
function showSubpageLinks($stageLabel) {
    GLOBAL $allGuidePages,$mysqlID;
    $navLINKS="";
    reset($allGuidePages[$stageLabel]);
    while (list($k,$v)=each($allGuidePages[$stageLabel])) {
        $showLink=1;
        if (($stageLabel=="preparation") && ($v[0]=="health_manual-3m.php")) {
            $resultID_TMP=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
            if ($resultID_TMP) {
                if (mysql_num_rows($resultID_TMP)>0) {
                    $specs_TMP=mysql_fetch_array($resultID_TMP,MYSQL_ASSOC);
                    if (($specs_TMP["quitDate"]<1) && ($specs_TMP["quitDate2"]<1) && ($specs_TMP["quitDate3"]<1) && ($specs_TMP["quitDate4"]<1)) {
                        $showLink=0;
                    }
                }
            }
        }
        if ($showLink==1) {
            if (substr($_SERVER["PHP_SELF"],1)==$v[0]) {
                $navLINKS.="<b>".($k+1).". ".$v[1]."</b><br><br>\n";
            } else {
                $navLINKS.="<a href=\"".$v[0]."\" class=\"manualSubLink\">".($k+1).". ".$v[1]."</a><br><br>\n";
            }
        }
    }
    if ($stageLabel=="preparation") $navLINKS.="<a href=\"health_manual-3l.php?clearQuit=1\" class=\"manualSubLink\"><i>clear quit dates</i></a><br><br>\n";
    $navCode="<div style=\"margin:12px;\" class=\"manualSubText\">\n".$navLINKS."</div><br>\n";
    return $navCode;
}
?>
