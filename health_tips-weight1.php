<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(100);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
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
    <td width=400 valign="top"><img src="images/pageTitles/tips_weight.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="tipsHeader">EATING HEALTHY</span><br><br>

Regardless of any quit-smoking plans or your type of childhood illness, following these general food guidelines can help <b>anyone</b> maintain a healthy weight:
<ul>
<li>Eat 5 to 9 servings of fruits and vegetables a day.</li>
<li>Avoid sugar-sweetened beverages such as soda.</li>
<li>Keep track of serving sizes. Try eating smaller portions.</li>
<li>Eat breakfast every day.</li>
<li>Choose low-fat dairy products such as skim milk and yogurt.</li>
<li>Choose fish and lean chicken more often than red meat. </li>
</ul>


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
    <tr bgcolor="#FBFAE9">
        <td valign="top">
        <a href="health_tips-activity.php" class="tipsSubLink" onMouseover="document.images['rnBody'].src='images/rightnav-header_body-Red.gif';" onMouseout="document.images['rnBody'].src='images/rightnav-header_body.gif';"><img src="images/rightnav-header_body.gif" width=170 height=42 border=0 alt="" vspace=2 name="rnBody"></a>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        </div> <!--
        <ul class="UL1">
        <li><a href="health_tips-activity.php" class="tipsSubLink">Exercise</a></li>
        <li><a href="health_tips-sleep.php" class="tipsSubLink">Sleep</a></li>
        <li><a href="health_tips-fertilityMens.php" class="tipsSubLink">Men's Fertility and Cancer Treatment</a></li>
        <li><a href="health_tips-fertilityWomens.php" class="tipsSubLink">Women's Fertility and Cancer Treatment</a></li>
        <li><a href="health_tips-talkWithDoc.php" class="tipsSubLink">Talking With Your Doctor</a></li>
        </ul></div> -->
 
        <a href="health_tips-stressB.php" class="tipsSubLink" onMouseover="document.images['rnMind'].src='images/rightnav-header_mind-Red.gif';" onMouseout="document.images['rnMind'].src='images/rightnav-header_mind.gif';"><img src="images/rightnav-header_mind.gif" width=170 height=33 border=0 alt="" vspace=2 name="rnMind"></a>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        </div> <!--
        <ul class="UL1">
        <li><a href="health_tips-stressB.php" class="tipsSubLink">Getting a Handle on Stress</a></li>
        <li><a href="health_tips-relaxation.php" class="tipsSubLink">Relaxation Techniques</a></li>
        <li><a href="health_tips-depression.php" class="tipsSubLink">Depression</a></li>
        <li><a href="health_tips-memory.php" class="tipsSubLink">Memory</a></li>
        </ul></div> -->

        <img src="images/rightnav-header_smokefree.gif" width=170 height=44 border=0 alt="" vspace=2>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        <ul class="UL1">
        <li><a href="health_tips-socialSupport.php" class="tipsSubLink">Help from Friends and Family</a></li>
        <li><a href="health_tips-2ndHand.php" class="tipsSubLink">Secondhand Smoke</a></li>
        <li><a href="health_tips-weight.php" class="tipsSubLink"><b>Weight Issues</b></a>
            <ul class="UL2">
            <li><b>Eating Healthy</b></li>
            <li><a href="health_tips-weight2.php" class="tipsSubLink">Smart Snacks</a></li>
            <li><a href="health_tips-weight3.php" class="tipsSubLink">Keep That Mouth Moving</a></li>
            <li><a href="health_tips-weight4.php" class="tipsSubLink">&#133;or Skip the Snacks</a></li>
            <li><a href="health_tips-weight5.php" class="tipsSubLink">Get Active</a></li>
            </ul></li>
        <li><a href="health_tips-stress.php" class="tipsSubLink">Getting a Handle on Stress</a></li>
        </ul></div>

        <a href="health_tips-breakfast.php" class="tipsSubLink" onMouseover="document.images['rnNutrition'].src='images/rightnav-header_nutrition-R.gif';" onMouseout="document.images['rnNutrition'].src='images/rightnav-header_nutrition.gif';"><img src="images/rightnav-header_nutrition.gif" width=170 height=33 border=0 alt="" vspace=2 name="rnNutrition"></a>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        </div> <!--
        <ul class="UL1">
        <li><a href="health_tips-breakfast.php" class="tipsSubLink">The Benefits of Breakfast</a></li>
        <li><a href="health_tips-nutrition_label.php" class="tipsSubLink">Nutrition Label Lingo</a></li>
        <li><a href="health_tips-supermarket.php" class="tipsSubLink">Smart Supermarket Shopping</a></li>
        <li><a href="health_tips-multivitamin.php" class="tipsSubLink">Questions and Answers About Multivitamins</a></li>
        <li><a href="health_tips-serving_size.php" class="tipsSubLink">Serving Size Savvy</a></li>
        </ul></div> -->
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>



    &nbsp;</td>
</tr>
</table>

</body>
</html>
