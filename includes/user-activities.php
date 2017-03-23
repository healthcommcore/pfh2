<?
$activityLinks="";
if (!$mysqlID) $mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);

        if ((strlen($specs["quitDate"])>0) || (strlen($specs["firstDayReward"])>0)) $activityLinks.="<li><a href=\"health_manual-3l.php\" class=\"column1Link\">".strtolower("SETTING A QUIT DATE!")."</a></li>\n";

        if (strlen($specs["costPerDay"])>0) $activityLinks.="<li><a href=\"news_cost-benefits.php\" class=\"column1Link\">".strtolower("YOUR MONEY AND YOUR LIFE")."</a></li>\n";

        if ($userSpecs["stage"]==1) {
            if ((strlen($specs["quittingMeans2CHECKS"])>0) || (strlen($specs["quittingMeans2NOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-1e.php\" class=\"column1Link\">".strtolower("WHY THINK ABOUT QUITTING?")."</a></li>\n";
            if ((strlen($specs["smallStepsCHECKS"])>0) || (strlen($specs["smallStepsNOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-1f.php\" class=\"column1Link\">".strtolower("SOME SMALL STEPS")."</a></li>\n";
            if ((strlen($specs["healthChangesCHECKS"])>0) || (strlen($specs["healthChangesNOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-1g.php\" class=\"column1Link\">".strtolower("CHANGE IS GOOD")."</a></li>\n";
            if ((strlen($specs["positiveNOTES1"])>0) || (strlen($specs["positiveNOTES2"])>0) || (strlen($specs["positiveNOTES3"])>0)) $activityLinks.="<li><a href=\"health_manual-1g2.php\" class=\"column1Link\">".strtolower("POSITIVE THINKING")."</a></li>\n";
        }

        if ($userSpecs["stage"]==2) {
            if ((strlen($specs["whenSmokeNOTES1"])>0) || (strlen($specs["whenSmokeNOTES2"])>0) || (strlen($specs["whenSmokeNOTES3"])>0)) $activityLinks.="<li><a href=\"health_manual-2e.php\" class=\"column1Link\">".strtolower("WHAT KIND OF SMOKER ARE YOU?")."</a></li>\n";
            if ((strlen($specs["prosconsNOTES1"])>0) || (strlen($specs["prosconsNOTES2"])>0)) $activityLinks.="<li><a href=\"health_manual-2f.php\" class=\"column1Link\">".strtolower("WHAT'S GOOD ABOUT SMOKING? WHAT'S BAD?")."</a></li>\n";
            if ((strlen($specs["quittingMeansCHECKS"])>0) || (strlen($specs["quittingMeansNOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-2g.php\" class=\"column1Link\">".strtolower("WHY THINK MORE SERIOUSLY ABOUT QUITTING?")."</a></li>\n";
            if ((strlen($specs["worriesNOTES1"])>0) || (strlen($specs["worriesNOTES2"])>0)) $activityLinks.="<li><a href=\"health_manual-2h.php\" class=\"column1Link\">".strtolower("WHAT ARE YOUR WORRIES ABOUT QUITTING SMOKING?")."</a></li>\n";
            if ((strlen($specs["smallSteps2CHECKS"])>0) || (strlen($specs["smallSteps2NOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-2i.php\" class=\"column1Link\">".strtolower("SOME SMALL STEPS")."</a></li>\n";
            if ((strlen($specs["questionsNOTES1"])>0) || (strlen($specs["questionsNOTES2"])>0) || (strlen($specs["questionsNOTES3"])>0) || (strlen($specs["questionsNOTES4"])>0)) $activityLinks.="<li><a href=\"health_manual-2j.php\" class=\"column1Link\">".strtolower("THE NEXT STEP")."</a></li>\n";
        }

        if ($userSpecs["stage"]==3) {
            if (strlen($specs["cutCravingsNOTES"])>0) $activityLinks.="<li><a href=\"health_manual-3f.php\" class=\"column1Link\">".strtolower("CUTTING OUT CRAVINGS")."</a></li>\n";
            if ((strlen($specs["supportNOTES1"])>0) || (strlen($specs["supportNOTES2"])>0)) $activityLinks.="<li><a href=\"health_manual-3i.php\" class=\"column1Link\">".strtolower("HELP FROM FRIENDS AND FAMILY")."</a></li>\n";
            if (strlen($specs["otherExerciseNOTES"])>0) $activityLinks.="<li><a href=\"health_manual-3j.php\" class=\"column1Link\">".strtolower("EXERCISE")."</a></li>\n";
            if ((strlen($specs["dietCHECKS"])>0) || (strlen($specs["dietNOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-3k.php\" class=\"column1Link\">".strtolower("WORRYING ABOUT WEIGHT")."</a></li>\n";
        }

        if ($userSpecs["stage"]==4) {
            if (strlen($specs["tameCravingsNOTES"])>0) $activityLinks.="<li><a href=\"health_manual-4b.php\" class=\"column1Link\">".strtolower("TAMING CRAVINGS")."</a></li>\n";
            if (strlen($specs["snackingNOTES"])>0) $activityLinks.="<li><a href=\"health_manual-4d.php\" class=\"column1Link\">".strtolower("HEALTHY SNACKING")."</a></li>\n";
            if (strlen($specs["otherExercise2NOTES"])>0) $activityLinks.="<li><a href=\"health_manual-4e.php\" class=\"column1Link\">".strtolower("EXERCISE")."</a></li>\n";
            if ((strlen($specs["goodStuffCHECKS"])>0) || (strlen($specs["goodStuffNOTES"])>0)) $activityLinks.="<li><a href=\"health_manual-4g.php\" class=\"column1Link\">".strtolower("CELEBRATE THE NEW YOU")."</a></li>\n";
            if ((strlen($specs["rewardsNOTES1"])>0) || (strlen($specs["rewardsNOTES2"])>0) || (strlen($specs["rewardsNOTES3"])>0) || (strlen($specs["rewardsNOTES4"])>0)) $activityLinks.="<li><a href=\"health_manual-4h.php\" class=\"column1Link\">".strtolower("REWARD YOURSELF")."</a></li>\n";
        }
    }
}
//dbClose();
if (strlen($activityLinks)>0) $activityLinks="<ul style=\"padding-left:12px;\">\n".$activityLinks."</ul>\n";
?>