<?
include("includes/site-functions.php");
$sectionID="other";
$sql="";
$errMsg="";

// connect to database
$mysqlID=dbConnect();

// search user records
if ($HTTP_POST_VARS["submitAction"]=="searchUsers") {
}
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript">
    <!--
    // FUNCTION: POPUP EMAIL
    function popupEmail(eURL) {
        newWindow=window.open(eURL,"newWindow","width=640,height=480");
        newwindow.focus();
    }
    //-->
    </script>
    
    
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    
    
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    </style>
</head>


<body bgcolor="#D9E6A8">
<a name="top"></a>
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <td width=770 valign="top"><a href="index.php"><img src="images/admin_770x100.gif" width=770 height=100 border=0 alt=""></a><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=592>
        <tr>
            <td width=15><img src="/images/blank.gif" width=15 height=1 border=0 alt=""></td>
            <td width=755 valign="top" class="column2Text"><img src="/images/blank.gif" width=755 height=1 border=0 alt=""><br>

            <a href="index.php">BACK to admin home</a><br>
            <a href="javascript:history.back();">BACK to &#8220;search users&#8221;</a><br><br>

<?
// display any errors
if (strlen($errMsg)>0) echo "<span style=\"font-size:10pt; color:#CC0000;\"><b>OOPS!</b><ul>".$errMsg."</ul></span>\n";
?>

            <form name="form2" method="POST" action="user-Reports.php">

<?

$allStages=array("precontemplation","contemplation","preparation","action");

$allMilestones=array(
    1=>array("Logged in",1,"BFR",3,"Body Guy",61),
    2=>array("Cost benefits",130,"Late effects",132,"Addiction info",19,"Barriers to quitting",22),
    3=>array("Chemical in cigs",131,"Social norms",199,"Pharmaco DA",106),
    4=>array("Positive Impact",25,"Goal setting",199,"Smoker type",12,"Barriers to quitting",22),
    5=>array("Readiness",14,"Social support",15,"Relaxation",16,"Goals tracking",17),
    6=>array("Stimulus control",18,"Barriers to quitting",19,"Goals tracking",20,"Worries",21),
    7=>array("Goals tracking",22,"Tracking successes",23,"Pharmaco reminder",24),
    8=>array("Decisional balance",25),
    9=>array("Readiness",26)
    			);
    
	$idSTR="";

	while (list($k,$v)=each($HTTP_POST_VARS["allUsers"])) {
	    if (strlen($idSTR)>0) $idSTR.=" OR ";
	    $idSTR.="(id=".$k.")";
}


if (strlen($idSTR)>0) {
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (".$idSTR.")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $tmpSTR=ereg_replace("\(id=","",$idSTR);
            $tmpSTR=ereg_replace("\) OR ",",",$tmpSTR);
?>


<table border=0 cellpadding=0 cellspacing=0 width=670>
<tr>
    <td align="right" width=100%>
    <table border=1 cellpadding=10 cellspacing=0>
    <tr bgcolor="#FFFFFF"><td><a href="mailInfo.php?idSTR=<?=urlencode(substr($tmpSTR,0,-1))?>"><b>export Mailing Info</b></a></td></tr>
    </table></td>
    <td><img src="images/blank.gif" width=10 height=1 border=0 alt=""></td>

    <td align="right">
    <table border=1 cellpadding=10 cellspacing=0>
    <tr bgcolor="#FFFFFF"><td><nobr><b>Email ALL:</b> <select name="emailType" size=1>
    <option value="">login reminder</option>
    </select> <input type="button" value="go" style="background:#FFFF00; color:#0066CC; font-size:10pt; font-weight:bold;" onClick="popupEmail('emailPreview.php?weekNum=1&stage=1&quitDate=0&numPosts=0');"></nobr></td></tr>
    </table></td>
</tr>
</table><br>
<hr><br>


<?
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {

            	$weekNum=floor((time()-$specs["startdate"])/604800)+1;
?>

            <span style="font-size:10pt; font-weight:bold;">Intervention Status Report for:</span><br>
            <table border=1 cellpadding=4 cellspacing=0 width=670 bgColor="#FFFFE0">
            <tr bgcolor="#006666">
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=50 height=1 border=0 alt=""><br>ID</td>
                <td width=100% valign="top" class="reportLabels"><img src="images/blank.gif" width=160 height=1 border=0 alt=""><br>Name</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=130 height=1 border=0 alt=""><br>Username</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=100 height=1 border=0 alt=""><br>Start date</td>
                <td valign="top" class="reportLabels"><img src="images/blank.gif" width=130 height=1 border=0 alt=""><br>Stage</td>
            </tr>
            <tr>
                <td valign="top"><?=$specs["id"]?></td>
                <td valign="top"><?=$specs["lastName"].", ".$specs["firstName"]?></td>
                <td valign="top"><?=$specs["username"]?></td>
                <td valign="top"><?=date("n/j/y",$specs["startdate"])?></td>
                <td valign="top"><b><?=strtoupper($allStages[$specs["stage"]-1])?></b></td>
            </tr>
            </table><br>

            <table border=0 cellpadding=0 cellspacing=0 width=720>
            <tr>
                <td valign="top">
                <table border=0 cellpadding=0 cellspacing=0>            
                <? for ($i=0; $i<3; $i++) { ?>
                <tr>
                    <? for ($j=0; $j<3; $j++) { ?>
                    <? $sessionIndex=(($j*3)+$i+1); ?>
                    <td valign="top">
                    <table border=1 cellpadding=8 cellspacing=0 width=145>
                    <tr bgcolor="#<? if ($sessionIndex==$weekNum) { echo "FFE000"; } else { echo ($sessionIndex<$weekNum) ? "FFFFFF" : "E0E8F0"; } ?>">
                        <td valign="top" width=150<? echo ($sessionIndex==$weekNum) ? " style=\"color:#000000;\"" : ""; ?>><b><? echo ($sessionIndex==$weekNum) ? "SESSION ".$sessionIndex : "Session ".$sessionIndex; ?>:</b><br>
                        <? if (strlen($allMilestones[$sessionIndex][0])>0) { ?>
                        <img src="images/icon_<? echo (substr($specs["contentViewed"],($allMilestones[$sessionIndex][1]-1),1)=="1") ? "go2" : "stop"; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=$allMilestones[$sessionIndex][0]?>
                        <? } else { echo "&nbsp;"; } ?><br>
                        <? if (strlen($allMilestones[$sessionIndex][2])>0) { ?>
                        <img src="images/icon_<? echo (substr($specs["contentViewed"],($allMilestones[$sessionIndex][3]-1),1)=="1") ? "go2" : "stop"; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=$allMilestones[$sessionIndex][2]?>
                        <? } else { echo "&nbsp;"; } ?><br>
                        <? if (strlen($allMilestones[$sessionIndex][4])>0) { ?>
                        <img src="images/icon_<? echo (substr($specs["contentViewed"],($allMilestones[$sessionIndex][5]-1),1)=="1") ? "go2" : "stop"; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=$allMilestones[$sessionIndex][4]?>
                        <? } else { echo "&nbsp;"; } ?><br>
                        <? if (strlen($allMilestones[$sessionIndex][6])>0) { ?>
                        <img src="images/icon_<? echo (substr($specs["contentViewed"],($allMilestones[$sessionIndex][7]-1),1)=="1") ? "go2" : "stop"; ?>.gif" width=7 height=7 border=0 alt="" hspace=4><?=$allMilestones[$sessionIndex][6]?>
                        <? } else { echo "&nbsp;"; } ?></td>
                    </tr>
                    </table><img src="images/blank.gif" width=1 height=5 border=0 alt=""></td>
                    <td>&nbsp;&nbsp;</td>
                    <? } ?>
                </tr>
                <? } ?>
                </table></td>
                <td><img src="images/blank.gif" width=15 height=1 border=0 alt=""></td>

                <td valign="top">

                <!-- MOVE SESSION -->
                <hr>
                Move from session <?=$weekNum?> to <?=($weekNum+1)?>

                <!-- SEND EMAIL -->
                <hr>
                <table border=0 cellpadding=0 cellspacing=0>
                <tr>
                    <td valign="top"><input type="radio" name="" value=1></td>
                    <td valign="top">Send session <?=($weekNum+1)?> email</td>
                </tr>
                <tr>
                    <td valign="top"><input type="radio" name="" value=2></td>
                    <td valign="top">Send reminder email</td>
                </tr>
                <tr>
                    <td valign="top"><input type="radio" name="" value=1></td>
                    <td valign="top">Send special email (choose)<br>
                    <select name="emailType" size=1>
                    <option value=""></option>
                    </select></td>
                </tr>
                </table>
                
                <hr>
                
                &nbsp;</td>
            </tr>
            </table><br>
            
            <a href="#top">&lt; back to top</a><br>
            <hr><br><br>
<?
            }
        }
    }
} else {
?>
            <br>
            <span style="font-size:10pt; color:#CC0000;"><b>OOPS! No participants selected.</b></span><br><br>
<?
}
?>


            </form>


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

