<?
include("includes/site-functions.php");
$sectionID="other";
$errMsg="";

// connect to database
$mysqlID=dbConnect();

// LOOK-UP USER
$sql="";
$HTTP_POST_VARS["startdate"]=time();
if ($HTTP_POST_VARS["submitPage"]=="findUser") {
    $hitTime1=mktime(0,0,1,$HTTP_POST_VARS["startMonth"],$HTTP_POST_VARS["startDay"],$HTTP_POST_VARS["startYear"]);
    $hitTime2=mktime(23,59,59,$HTTP_POST_VARS["startMonth"],$HTTP_POST_VARS["startDay"],$HTTP_POST_VARS["startYear"]);
    $HTTP_POST_VARS["startdate"]=$hitTime1;
    $sql="SELECT PP.userID,PP.filename,PP.hitTime,PI.studyID,PI.lastName,PI.firstName,PI.email FROM PFHPages as PP, PFHUserInfo as PI WHERE (PP.userID=".$HTTP_POST_VARS["userID"].") AND (PP.hitTime>".$hitTime1.") AND (PP.hitTime<".$hitTime2.") AND (PP.userID=PI.id) ORDER BY hitTime";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <script language="javascript">
    <!--
    // FUNCTION: SET START DATE
    function setStartdate(m,d,y) {
        document["form1"]["startMonth"].options[m].selected=true;
        document["form1"]["startDay"].options[d].selected=true;
        document["form1"]["startYear"].options[(y-2004)].selected=true;
    }
    //-->
    </script>
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

            <span style="color:#404087; font-weight:bold; font-size:11pt; font-family:Trebuchet MS,Trebuchet,arial,sans-serif;">USER ACTIVITY</span><br>
            <form name="form1" method="POST" action="showHistory.php">
            <input type="hidden" name="submitPage" value="findUser">
            <select name="userID" size=1 style="font-size:11pt;">
<?
$resultID=mysql_query("SELECT DISTINCT PI.id, PI.username FROM PFHUserInfo as PI, PFHPages as PP WHERE (PI.id=PP.userID) ORDER BY PI.username",$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
?>
            <option value="<?=$specs["id"]?>"<? if ($HTTP_POST_VARS["userID"]==$specs["id"]) echo " selected"; ?>><?=$specs["username"]?></option>
<?
        }
    }
}
?>
            </select> &#150; 
            <select name="startMonth" size=1>
            <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
            <? $allMonths=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); ?>
            <? for ($i=1; $i<13; $i++) { ?>
            <option value=<?=$i?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("n",$HTTP_POST_VARS["startdate"])==$i)) echo " selected"; ?>><?=$allMonths[$i-1]?></option>
            <? } ?>
            </select>
            <select name="startDay" size=1>
            <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
            <? for ($i=1; $i<32; $i++) { ?>
            <option value=<?=$i?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("j",$HTTP_POST_VARS["startdate"])==$i)) echo " selected"; ?>><?=$i?></option>
            <? } ?>
            </select>
            <select name="startYear" size=1>
            <option value=0<? if ($HTTP_POST_VARS["startdate"]<1) echo " selected"; ?>> </option>
            <? $allYears=array("2005","2006","2007","2008"); ?>
            <? for ($i=0; $i<count($allYears); $i++) { ?>
            <option value=<?=$allYears[$i]?><? if (($HTTP_POST_VARS["startdate"]>0) && (date("Y",$HTTP_POST_VARS["startdate"])==$allYears[$i])) echo " selected"; ?>><?=$allYears[$i]?></option>
            <? } ?>
            </select> &nbsp; 
            <input type="submit" value="go">
            </form><br>

<span style="font-size:11pt;">
<?
if (strlen($sql)>0)  {
    $allRows=array();
    $rowCount=0;
    $resultID=mysql_query($sql,$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            while ($entrySpecs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {
                if ($rowCount==0) {
                    echo "<hr>\n";
                    echo "<b>StudyID: ".$entrySpecs["studyID"]."</b> (".$entrySpecs["lastName"].", ".$entrySpecs["firstName"].")<br>\n";
                    echo "Email: <a href=\"mailto:".$entrySpecs["email"]."\">".$entrySpecs["email"]."</a><br><br><br>\n\n";
                }
                $allRows[]="<tr bgcolor=\"#FFFFFF\"><td valign=\"top\"><a href=\"http://www.pfhonline.org".$entrySpecs["filename"]."\" target=\"_blank\">".$entrySpecs["filename"]."</a></td><td valign=\"top\">".date("h:i:sa",$entrySpecs["hitTime"])."</td></tr>\n";
                $rowCount++;
            }
        }
    }
    if ($rowCount>0) {
        echo "<table border=1 cellpadding=5 cellspacing=0>\n";
        reset($allRows);
        while (list($k,$v)=each($allRows)) {
            echo $v;
        }
        echo "</table><br><br>\n";
    } else {
        echo "<b>No records found. Please try another date.</b><br><br><br>\n";
    }
}
?>
</span>


            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
<? dbClose(); ?>

