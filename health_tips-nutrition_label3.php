<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(163);
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
    <td width=400 valign="top"><img src="images/pageTitles/nutrition_label_lingo.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="tipsHeader">THE NUTRIENTS: HOW MUCH?</span><br><br>

There are some nutrients that Americans generally eat in adequate amounts, or even too much. Eating too much fat, saturated fat, trans fat, cholesterol, or sodium may increase your risk of chronic diseases like heart disease, some cancers, or high blood pressure. It's a good idea to keep your intake of saturated fat, trans fat, and cholesterol as low as possible as part of a nutritionally balanced diet.<p>

Most Americans don't get enough dietary fiber, vitamin A, vitamin C, calcium, or iron in their diets. Eating enough of these nutrients can improve your health and help lower the risk of some diseases and conditions. For example, getting enough calcium may reduce the risk of osteoporosis. Eating a diet high in dietary fiber promotes healthy bowel function. And a diet rich in fruits, vegetables, and grain products that contain dietary fiber and low in saturated fat and cholesterol may lower your risk of heart disease.



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

        <a href="health_tips-socialSupport.php" class="tipsSubLink" onMouseover="document.images['rnSmokefree'].src='images/rightnav-header_smokefree-R.gif';" onMouseout="document.images['rnSmokefree'].src='images/rightnav-header_smokefree.gif';"><img src="images/rightnav-header_smokefree.gif" width=170 height=44 border=0 alt="" vspace=2 name="rnSmokefree"></a>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        </div> <!--
        <ul class="UL1">
        <li><a href="health_tips-socialSupport.php" class="tipsSubLink">Help from Friends and Family</a></li>
        <li><a href="health_tips-2ndHand.php" class="tipsSubLink">Secondhand Smoke</a></li>
        <li><a href="health_tips-weight.php" class="tipsSubLink">Weight Issues</a></li>
        <li><a href="health_tips-stress.php" class="tipsSubLink">Getting a Handle on Stress</a></li>
        </ul></div> -->

        <img src="images/rightnav-header_nutrition.gif" width=170 height=33 border=0 alt="" vspace=2>
        <div style="margin-left:12px; margin-top:0px; margin-right:12px; margin-bottom:5px;" class="tipsSubText">
        <ul class="UL1">
        <li><a href="health_tips-breakfast.php" class="tipsSubLink">The Benefits of Breakfast</a></li>
        <li><a href="health_tips-nutrition_label.php" class="tipsSubLink"><b>Nutrition Label Lingo</b></a>
            <ul class="UL2">
            <li><a href="health_tips-nutrition_label1.php" class="tipsSubLink">Serving Size</a></li>
            <li><a href="health_tips-nutrition_label2.php" class="tipsSubLink">Calories</a></li>
            <li><b>The Nutrients: How Much?</b></li>
            </ul></li>
        <li><a href="health_tips-supermarket.php" class="tipsSubLink">Smart Supermarket Shopping</a></li>
        <li><a href="health_tips-multivitamin.php" class="tipsSubLink">Questions and Answers About Multivitamins</a></li>
        <li><a href="health_tips-serving_size.php" class="tipsSubLink">Serving Size Savvy</a></li>
        </ul></div>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>



    &nbsp;</td>
</tr>
</table>

</body>
</html>
