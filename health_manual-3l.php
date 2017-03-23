<?
include("includes/site-functions.php");
include("includes/guidePages.php");
$sectionID="health";
contentViewed(50);
$errMsg="";
$rightNow=time();

if ($HTTP_GET_VARS["clearQuit"]==1) {
    $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate=0,quitDate2=0,quitDate3=0,quitDate4=0,dateQDSet=0,dateQDSet2=0,dateQDSet3=0,dateQDSet4=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    header("Location: health_manual-3l.php");
    exit();
}


if ($HTTP_GET_VARS["setNewDate"]>0) {
    if ($HTTP_GET_VARS["setNewDate"]==1) {
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate=0,dateQDSet=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate2=0,dateQDSet2=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate3=0,dateQDSet3=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate4=0,dateQDSet4=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    }
    if ($HTTP_GET_VARS["setNewDate"]==2) {
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate2=0,dateQDSet2=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate3=0,dateQDSet3=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate4=0,dateQDSet4=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    }
    if ($HTTP_GET_VARS["setNewDate"]==3) {
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate3=0,dateQDSet3=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate4=0,dateQDSet4=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    }
    if ($HTTP_GET_VARS["setNewDate"]==4) {
        $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate4=0,dateQDSet4=0 WHERE (id=".$_SESSION["userID"].")",$mysqlID);
    }
    header("Location: health_manual-3l.php?setQuit=1");
    exit();
}
if ($HTTP_POST_VARS["submitAction"]=="setQuitDate") {
    $dateSet=time();
    $qDate=mktime(1,0,0,$HTTP_POST_VARS["quitMonth"],$HTTP_POST_VARS["quitDay"],$HTTP_POST_VARS["quitYear"]);
    if ($qDate<$dateSet) {
        $errMsg="<li>Please pick a later date.</li>";
        $HTTP_GET_VARS["setQuit"]=1;
    } else {
        if ($HTTP_POST_VARS["qDateTURN"]==1) $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate=".$qDate.",dateQDSet=".time()." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        if ($HTTP_POST_VARS["qDateTURN"]==2) $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate2=".$qDate.",dateQDSet2=".time()." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        if ($HTTP_POST_VARS["qDateTURN"]==3) $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate3=".$qDate.",dateQDSet3=".time()." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        if ($HTTP_POST_VARS["qDateTURN"]==4) $resultID=mysql_query("UPDATE PFHUserInfo SET quitDate4=".$qDate.",dateQDSet4=".time()." WHERE (id=".$_SESSION["userID"].")",$mysqlID);
        if (($qDate-$dateSet)>=(86400*6)) {
            // forward to "Quitting Game Plan"...
            header("Location: health_manual-3m.php");
            exit();
        } else {
            $HTTP_POST_VARS["tooSoonWarning"]=1;
        }
    }
}

$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        if (($specs["quitDate"]<1) && ($specs["quitDate2"]<1) && ($specs["quitDate3"]<1) && ($specs["quitDate4"]<1)) {
            $HTTP_GET_VARS["setQuit"]=1;
        }
    }
}
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
    <td width=400 valign="top"><img src="images/pageTitles/guide_preparation.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<?
// ================================================================
// NO QUIT-DATE SET
// ================================================================
if ($HTTP_GET_VARS["setQuit"]==1) {
?>
<span class="manualHeader">SETTING A QUIT DATE!</span><br><br>
<? if (strlen($errMsg)>0) { ?><ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br><? } ?>

<? if ($specs["quitDate"]<1) { ?>
Now that you know how to handle your cravings and what you'll need to do to quit smoking, it's time to set a Quit Date. Your Quit Date can be any day you choose, as long as you're prepared for it. Use the calendar tool below to pick your Quit Date. Partnership for Health will keep track of your Quit Date  &#150;  and help you to get ready and get through it!<br><br>
<? } elseif ($specs["quitDate2"]<1) { ?>
Your Quit Date can be any day you choose, as long as you're prepared for it. Use the calendar tool below to pick your Quit Date. Partnership for Health will keep track of your Quit Date  &#150;  and help you to get ready and get through it!<br><br>
<? } elseif ($specs["quitDate3"]<1) { ?>
Because you want to reset your Quit Date again, you may want to take this chance to think more about quitting before you move forward.<br><br>
Have you given yourself enough time to prepare? Have you tried some of the exercises and activities in the Guide to Getting Ready? You're much more likely to succeed at quitting smoking if you're ready for it. Choose a date that will work for you. And be sure to review the <a href="health_manual-3a.php">Guide to Getting Ready</a> &#150; it really will help!<br><br>
Your Quit Date can be any day you choose, as long as you're prepared for it. Use the calendar tool below to pick your Quit Date. Partnership for Health will keep track of your Quit Date  &#150;  and help you to get ready and get through it!<br><br>
<? } elseif ($specs["quitDate4"]<1) { ?>
Because you want to reset your Quit Date a third time, it seems that you're probably not ready to quit smoking. That's OK &#150; it doesn't make sense to hurry if you're not prepared.<br><br>
Now's a good time to think more about your smoking and to weigh the pros and cons. You could also take some very small steps to see what being a non-smoker would be like. Visit the <a href="health_manual-2a.php">Guide to Your Goals</a> to learn more. When you're ready to set a new Quit Date, PFH will be here!<br><br>
Your Quit Date can be any day you choose, as long as you're prepared for it. Use the calendar tool below to pick your Quit Date. Partnership for Health will keep track of your Quit Date  &#150;  and help you to get ready and get through it!<br><br>
<? } ?>

<form name="form1" method="POST" action="health_manual-3l.php">
<input type="hidden" name="submitAction" value="setQuitDate">
<? if ($specs["quitDate"]<1) { ?><input type="hidden" name="qDateTURN" value="1">
<? } elseif ($specs["quitDate2"]<1) { ?><input type="hidden" name="qDateTURN" value="2">
<? } elseif ($specs["quitDate3"]<1) { ?><input type="hidden" name="qDateTURN" value="3">
<? } else { ?><input type="hidden" name="qDateTURN" value="4"><? } ?>
<table border=0 cellpadding=0 cellspacing=0>
<tr><td><img src="images/guide/qdateTop.gif" width=325 height=90 border=0 alt=""></td></tr>
<tr>
<td align="center" background="images/guide/qdateMiddle.gif"><br>
<? $HTTP_POST_VARS["quitdate"]=mktime(12,0,0,intval(date("n",$rightNow))+1,date("j",$rightNow),date("Y",$rightNow)); ?>
<select name="quitMonth" size=1>
<? $allMonths=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); ?>
<? for ($i=1; $i<13; $i++) { ?>
<option value=<?=$i?><? if (($HTTP_POST_VARS["quitdate"]>0) && (date("n",$HTTP_POST_VARS["quitdate"])==$i)) echo " selected"; ?>><?=$allMonths[$i-1]?></option>
<? } ?>
</select>  
<select name="quitDay" size=1>
<? for ($i=1; $i<32; $i++) { ?>
<option value=<?=$i?><? if (($HTTP_POST_VARS["quitdate"]>0) && (date("j",$HTTP_POST_VARS["quitdate"])==$i)) echo " selected"; ?>><?=$i?></option>
<? } ?>
</select>  
<select name="quitYear" size=1>
<? $allYears=array("2005","2006","2007","2008"); ?>
<? for ($i=0; $i<count($allYears); $i++) { ?>
<option value=<?=$allYears[$i]?><? if (($HTTP_POST_VARS["quitdate"]>0) && (date("Y",$HTTP_POST_VARS["quitdate"])==$allYears[$i])) echo " selected"; ?>><?=$allYears[$i]?></option>
<? } ?>
</select><br><br>
  </td>
</tr>
<tr><td><img src="images/guide/qdateBottom.gif" width=325 height=10 border=0 alt=""></td></tr>
<tr><td align="center"><img src="images/blank.gif" width=140 height=1 border=0 alt="" align="left"><input type="image" src="images/guide/qdateSubmit.gif" width=102 height=25 border=0 alt=""></td></tr>
</table>
</form><br><br>

<?
// ================================================================
// OR... IF A QUIT-DATE HAS BEEN SET
// ================================================================
} elseif ($HTTP_POST_VARS["tooSoonWarning"]==1) {
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$specs["quitDate"])?></span><br><br>
You've decided to become a nonsmoker. Good for you! This is the best choice you can make for your health.<br><br>
A short quit time works best for people who have a solid quit-smoking plan, or people who have tried to quit a few times before and stayed quit a little longer each time. If you fall into either of these categories, you're probably ready. If not, you might want to think about taking more time to get ready for the big day.<br><br>
<? if ($specs["quitDate2"]<1) { ?><a href="health_manual-3l.php?setNewDate=1"><? } elseif ($specs["quitDate3"]<1) { ?><a href="health_manual-3l.php?setNewDate=2"><? } elseif ($specs["quitDate4"]<1) { ?><a href="health_manual-3l.php?setNewDate=3"><? } else { ?><a href="health_manual-3l.php?setNewDate=4"><? } ?>Click here</a> if you'd like to set a new quit date.<br><br>

<?
// ------------------------------------------------------------
// LET USER RESET QUIT DATE
// ------------------------------------------------------------
} else {
    if (($specs["quitDate"]>0) && ($specs["quitDate2"]>0) && ($specs["quitDate3"]>0) && ($specs["quitDate4"]>0)) {
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$specs["quitDate4"])?></span><br><br>
If you want to reset your Quit Date, please <a href="contact.php">email us</a>.<br><br>
<?
    } elseif (($specs["quitDate"]>0) && ($specs["quitDate2"]>0) && ($specs["quitDate3"]>0)) {
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$specs["quitDate3"])?></span><br><br>
If you want to set a new Quit Date, click below.<br><br>
<form name="form1" method="POST" action="health_manual-3l.php">
<div align="center"><input type="button" value="set new date" onClick="document.location='health_manual-3l.php?setQuit=1';"></div>
</form><br><br>
<?
    } elseif (($specs["quitDate"]>0) && ($specs["quitDate2"]>0)) {
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$specs["quitDate2"])?></span><br><br>
If you want to set a new Quit Date, click below.<br><br>
<form name="form1" method="POST" action="health_manual-3l.php">
<div align="center"><input type="button" value="set new date" onClick="document.location='health_manual-3l.php?setQuit=1';"></div>
</form><br><br>
<?
    } elseif ($specs["quitDate"]>0) {
?>
<span class="manualHeader">Your Quit Date is: <?=date("F j, Y",$specs["quitDate"])?></span><br><br>
If you want to set a new Quit Date, click below.<br><br>
<form name="form1" method="POST" action="health_manual-3l.php">
<div align="center"><input type="button" value="set new date" onClick="document.location='health_manual-3l.php?setQuit=1';"></div>
</form><br><br>
<?
    }
}
?>


<? echo showNextPrev("preparation"); ?>

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
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
<? echo showSubpageLinks("preparation"); ?>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href="health_manual-4h.php"><img src="images/ads/ad_reward.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/ad_forum_quitdate.gif" border=0 alt=""></a><br><br>
    &nbsp;</td>
</tr>
</table>

</body>
</html>


