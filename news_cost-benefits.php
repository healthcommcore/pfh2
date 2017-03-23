<?
include("includes/site-functions.php");
$sectionID="news";
contentViewed(130);
$showWide=1;

// submit data
if ($HTTP_POST_VARS["submitAction"]=="newData") {
    $mysqlID=dbConnect();
    $costPerDay=$HTTP_POST_VARS["q1"]*$HTTP_POST_VARS["q2"];
    $resultID=mysql_query("UPDATE PFHUserInfo SET costPerDay=".$costPerDay." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    dbClose();
    header("Location: news_cost-benefits.php?showResults=1");
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: News & Info</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: CHECK FORM
    function checkForm() {
        var floatVal=0;
        var regPattern = /^[$]{0,1}[0-9]*[.]{0,1}[0-9]+$/
        if (regPattern.test(document["form1"]["q2"].value)) {
            if (document["form1"]["q2"].value.substring(0,1)=="$") document["form1"]["q2"].value=document["form1"]["q2"].value.substring(1);
            floatVal=parseFloat(document["form1"]["q2"].value);
            if ((floatVal<1) || (floatVal>19.99)) {
                alert("Please double check the price entered for a pack of cigarettes.");
            } else {
                document["form1"].submit();
            }
        } else {
            alert("Please be sure to enter a valid dollar amount.");
        }
    }
    // FUNCTION: CHECK FORM 2
    function checkForm2() {
        var floatVal=0;
        var regPattern = /^[$]{0,1}[0-9]*[.]{0,1}[0-9]+$/
        if (regPattern.test(document["form1"]["q2"].value)) {
            if (document["form1"]["q2"].value.substring(0,1)=="$") document["form1"]["q2"].value=document["form1"]["q2"].value.substring(1);
            floatVal=parseFloat(document["form1"]["q2"].value);
            if ((floatVal<1) || (floatVal>19.99)) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
    //-->
    </script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
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
    <td width=592 valign="top"><img src="images/pageTitles/news_cost-benefits.gif" width=592 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=537 valign="top" class="column2Text"><img src="images/blank.gif" width=537 height=1 border=0 alt=""><br>

<?
if ($HTTP_GET_VARS["showResults"]==1) {
?>

<OBJECT width=515 height=475 id="bodyguy" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0">
<PARAM NAME=movie VALUE="images/flash/cost-benefit2.swf">
<PARAM NAME=quality VALUE=high>
<PARAM NAME=bgcolor VALUE=#F2FAF6>
<EMBED width=515 height=475 bgcolor="#F2FAF6" name="bodyguy" src="images/flash/cost-benefit2.swf" quality=high TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT><br><br>

<?
} else {
?>

For survivors of childhood cancer or a similar illness, smoking really takes a toll &#150; 
on both your health and your wallet! Answer these questions about how many cigarettes you smoke and how much money you spend per pack. 
You might be amazed by how much money you'd save if you quit, and what that money could buy. 
As for the health benefits you'd gain &#150; those are priceless.<br><br>

<form name="form1" method="POST" action="news_cost-benefits.php" onSubmit="return checkForm2()">
<input type="hidden" name="submitAction" value="newData">
<table border=0 cellpadding=0 cellspacing=0>
<tr><td><img src="images/guide/cbCalcTop.gif" width=515 height=90 border=0 alt=""></td></tr>
<tr>
<td background="images/guide/cbCalcMiddle.gif"><br>
<table border=0 cellpadding=0 cellspacing=0 width=470>
<tr>
<td width=40 rowspan=99><img src="images/blank.gif" width=40 height=1 border=0 alt=""></td>
<td valign="top" width=260 class="column2Text"><img src="images/blank.gif" width=260 height=1 border=0 alt=""><br>
<b>1. How many cigarettes do you smoke each day?</b></td>
<!--        <b>1. How many packs do you smoke per day? (a pack contains 20 cigarettes)</b></td> -->
<td width=20 rowspan=99><img src="images/blank.gif" width=20 height=1 border=0 alt=""></td>
<td valign="top" width=150 align="right"><img src="images/blank.gif" width=150 height=1 border=0 alt=""><br>
  <select name="q1" size=1>
<option value=.25<? if ($HTTP_POST_VARS["q1"]==.25) echo " selected"; ?>>5 or less</option>
<option value=.5<? if ($HTTP_POST_VARS["q1"]==.5) echo " selected"; ?>>around 10</option>
<option value=.75<? if ($HTTP_POST_VARS["q1"]==.75) echo " selected"; ?>>about 15</option>
<option value=1<? if ($HTTP_POST_VARS["q1"]==1) echo " selected"; ?>>1 full pack</option>
<option value=1.5<? if ($HTTP_POST_VARS["q1"]==1.5) echo " selected"; ?>>1 &#189; packs</option>
<option value=2<? if ($HTTP_POST_VARS["q1"]==2) echo " selected"; ?>>2 packs</option>
<option value=2.5<? if ($HTTP_POST_VARS["q1"]==2.5) echo " selected"; ?>>2 &#189; packs</option>
<option value=3<? if ($HTTP_POST_VARS["q1"]==3) echo " selected"; ?>>3 packs</option>
<option value=4<? if ($HTTP_POST_VARS["q1"]==4) echo " selected"; ?>>4 packs or more</option>
</select></td>
<!--          <input type="text" name="q1" value="<?=$HTTP_POST_VARS["q1"]?>" size=5></td> -->
</tr>
<tr>
<td>  </td>
<td>  </td>
</tr>
<tr>
<td valign="top" class="column2Text"><b>2. How much do you spend on each pack of cigarettes?</b></td>
<td valign="top" align="right">$<input type="text" name="q2" value="<?=$HTTP_POST_VARS["q2"]?>" size=6></td>
</tr>
</table><br>
  </td>
</tr>
<tr><td><img src="images/guide/cbCalcBottom.gif" width=515 height=10 border=0 alt=""></td></tr>
<tr><td align="center"><img src="images/blank.gif" width=140 height=1 border=0 alt="" align="left"><a href="javascript:checkForm();"><img src="images/guide/qdateSubmit.gif" width=102 height=25 border=0 alt=""></a></td></tr>
</table>
</form><br><br>
<?
}
?>



            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
