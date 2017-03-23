<?
include("includes/site-functions.php");
$sectionID="you";
contentViewed(15);
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
    <td width=400 valign="top"><img src="images/pageTitles/yourpages_title.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

Below is a list of some of the interactive areas of the Partnership for Health site you've visited so far.  These tools are designed to help you gather information, make decisions, and feel good about yourself and your health. Remember, you can use these tools again and again as your thoughts and feelings change!<br><br>



<?
$mysqlID=dbConnect();
$allStages=array("precontemplation","contemplation","preparation","action");
$allMilestones=array(
    "a1"=>array(10,"you_prosCons.php","How you feel about smoking"),
    "a2"=>array(11,"you_journal.php","Your Journal"),

    // stage 1, precontemplation
    "b1"=>array(19,"health_manual-1c.php","Guide to Healthy Decisions: Are You Physically Dependent on Cigarettes?"),
    "b2"=>array(21,"health_manual-1e.php","Guide to Healthy Decisions: Why Think about Quitting?"),
    "b3"=>array(22,"health_manual-1e2.php","Guide to Healthy Decisions: Quitting Smoking: What Gets in Your Way?"),
    "b4"=>array(23,"health_manual-1f.php","Guide to Healthy Decisions: Some Small Steps"),
    "b5"=>array(24,"health_manual-1g.php","Guide to Healthy Decisions: Change is Good"),
    "b6"=>array(25,"health_manual-1g2.php","Guide to Healthy Decisions: Positive Thinking"),
    // stage 2, contemplation
    "c1"=>array(29,"health_manual-2c.php","Guide to Your Goals: Are You Physically Dependent on Cigarettes?"),
    "c2"=>array(31,"health_manual-2e.php","Guide to Your Goals: Whys, Wheres, and Whens of Your Smoking"),
    "c3"=>array(32,"health_manual-2f.php","Guide to Your Goals: What's Good About Smoking?  What's Bad?"),
    "c4"=>array(33,"health_manual-2f2.php","Guide to Your Goals: Quitting Smoking: What Gets in Your Way?"),
    "c5"=>array(34,"health_manual-2g.php","Guide to Your Goals: Why Think More Seriously About Quitting?"),
    "c6"=>array(35,"health_manual-2h.php","Guide to Your Goals: What are Your Worries about Quitting Smoking?"),
    "c7"=>array(36,"health_manual-2i.php","Guide to Your Goals: Some Small Steps"),
    "c8"=>array(37,"health_manual-2j.php","Guide to Your Goals: The Next Step"),
    // stage 3, preparation
    "d1"=>array(43,"health_manual-3e.php","Guide to Getting Ready: Soothing Your Symptoms"),
    "d2"=>array(44,"health_manual-3f.php","Guide to Getting Ready: Cutting Out Cravings"),
    "d3"=>array(47,"health_manual-3i.php","Guide to Getting Ready: Help from Friends and Family"),
    "d4"=>array(48,"health_manual-3j.php","Guide to Getting Ready: Exercise"),
    "d5"=>array(49,"health_manual-3k.php","Guide to Getting Ready: Worrying About Weight"),
    "d6"=>array(50,"health_manual-3l.php","Guide to Getting Ready: Setting a Quit Date!"),
    // stage 4, action
    "e1"=>array(52,"health_manual-4b.php","Guide to Action: Taming Cravings"),
    "e2"=>array(53,"health_manual-4b2.php","Guide to Action: People and Places"),
    "e3"=>array(55,"health_manual-4d.php","Guide to Action: Healthy Snacking"),
    "e4"=>array(56,"health_manual-4e.php","Guide to Action: Exercise"),
    "e5"=>array(58,"health_manual-4g.php","Guide to Action: Celebrate the New You!"),
    "e6"=>array(59,"health_manual-4h.php","Guide to Action: Reward Yourself"),

    "f1"=>array(61,"health_bodyguy.php","Your Body"),
    "f2"=>array(105,"health_dependency.php","Are You Physically Dependent on Cigarettes?"),
    "f3"=>array(106,"health_pharmo.php","Quit-smoking Medications"),
    "f4"=>array(115,"/forum/viewforum.php?f=1","Forums"),
    "f5"=>array(130,"news_cost-benefits.php","Your Money and Your Life"),
    "f6"=>array(131,"news_cig-quiz.php","Do You Know What You're Smoking?"));
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (id=".$_SESSION["userID"].")",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        $reportCARD="";
        $reportCount=0;
        while (list($k,$v)=each($allMilestones)) {
            $stageKey="b";
            if ($userSpecs["stage"]==2) $stageKey="c";
            if ($userSpecs["stage"]==3) $stageKey="d";
            if ($userSpecs["stage"]==4) $stageKey="e";
            if ((substr($k,0,1)=="a") || (substr($k,0,1)=="f") || (substr($k,0,1)==$stageKey)) {
                if (substr($specs["contentViewed"],($v[0]-1),1)=="1") {
                    $reportCARD.="<li><a href=\"".$v[1]."\">".$v[2]."</a></li>\n";
                    $reportCount++;
                }
            }
        }
        if ($reportCount>0) {
            echo "<ul>\n";
            echo $reportCARD;
            echo "</ul><br>\n";
        }
        if ($reportCount<4) {
            echo "<i>It doesn't look like you've had much of a chance yet to explore the site. Some interesting places to check out include</i>:\n";
            echo "<ul>\n";
            if (substr($specs["contentViewed"],60,1)=="0") echo "<li><a href=\"health_bodyguy.php\">Your Body</a></li>\n";
            if (substr($specs["contentViewed"],104,1)=="0") echo "<li><a href=\"health_dependency.php\">Are You Physically Dependent on Cigarettes?</a></li>\n";
            if (substr($specs["contentViewed"],105,1)=="0") echo "<li><a href=\"health_pharmo.php\">Quit-smoking Medications</a></li>\n";
            if (substr($specs["contentViewed"],114,1)=="0") echo "<li><a href=\"/forum/viewforum.php?f=1\">Forums</a></li>\n";
            if (substr($specs["contentViewed"],129,1)=="0") echo "<li><a href=\"news_cost-benefits.php\">Your Money and Your Life</a></li>\n";
            if (substr($specs["contentViewed"],130,1)=="0") echo "<li><a href=\"news_cig-quiz.php\">Do You Know What You're Smoking?</a></li>\n";
            echo "</ul>\n";
        }
    }
}
?>



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
    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="community_success.php"><img src="images/ads/new/ad-1.jpg" border=0 alt=""></a><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>

