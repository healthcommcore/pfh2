<?
include("includes/site-functions.php");
$sectionID="other";

// HANDLE FORM SUBMIT
if (strlen($HTTP_POST_VARS["submitPage"])>0) {
    $fp=fopen("tmpFile","w");
    $allLines=file("../".$HTTP_POST_VARS["submitPage"]);
    $contentFound=0;
    while (list($k,$v)=each($allLines)) {
        if ($contentFound<1) {
            fwrite($fp,$v);
            if (eregi("column2Text",$v)) {
                $contentFound=1;
                fwrite($fp,"\n");
                fwrite($fp,$HTTP_POST_VARS["newCode"]."\n\n\n");
            }
        } else {
            if (eregi("footerWidth=",$v)) {
                fwrite($fp,$v);
                $contentFound=0;
            }
        }
    }
    fclose($fp);
    copy("/var/www/html/PFH/admin/tmpFile","/var/www/html/PFH/".$HTTP_POST_VARS["submitPage"]);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
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

            <a href="index.php">BACK to admin home</a><br><br>
            <form name="form1" method="POST" action="edit-pages.php">
            <select name="page" size=1>
<?
$dontShow=array("print.php","logout.php","logonThankyou.php","logonRequest.php","logonChange.php","community_forum.php","community_poll.php","health_comic.php","index.php","home.php","home2a.php","home2b.php","home2c.php","home2d.php","home3a.php","home3b.php","home3c.php","home3d.php","you_updateStatus.php");
$allFiles=array();
if ($dp=opendir("/var/www/html/PFH")) {
    while (false !== ($file=readdir($dp))) { 
        if ((ereg("[^ ]+\.php$",$file)) && (!in_array($file,$dontShow))) {
            $allFiles[$file]++;
        }
    }
    closedir($dp);
}
ksort($allFiles);
while (list($k,$v)=each($allFiles)) {
?>
            <option value="<?=$k?>"<? if ($HTTP_POST_VARS["page"]==$k) echo " selected"; ?>><?=$k?></option>
<?
}
?>
            </select> <input type="submit" value="edit"><br><br><br>
            
<?
if (strlen($HTTP_POST_VARS["page"])>0) {
    $fp=fopen("tmpFile","w");
    $allLines=file("../".$HTTP_POST_VARS["page"]);
    $pageCode="";
    $contentFound=0;
    while (list($k,$v)=each($allLines)) {
        if ($contentFound<1) {
            if (eregi("column2Text",$v)) $contentFound=1;
        } else {
            if (eregi("footerWidth=",$v)) {
                $contentFound=999;
            } else {
                if ($contentFound<999) {
                    $pageCode.=trim($v)."\n";
                    fwrite($fp,trim(ereg_replace("</form>","",ereg_replace("images/","../images/",$v)))."\n");
                }
            }
        }
    }
    fclose($fp);
    include("tmpFile");
?><br><br>
            <textarea name="newCode" rows=14 cols=90 wrap style="color:#444444; font-family:georgia; font-size:11pt;"><?=$pageCode?></textarea><br><br>
            <input type="hidden" name="submitPage" value="<?=$HTTP_POST_VARS["page"]?>">
            <input type="submit" value="Update">
<?
}
?>

            </form><br>


            <? $footerWidth=360; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
        </tr></table>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
