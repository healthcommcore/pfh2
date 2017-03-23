<?
$mvgImg="pageTitle_home.gif";
if (strlen($HTTP_POST_VARS["imgName"])>0) $mvgImg=$HTTP_POST_VARS["imgName"];
$mvgText="Welcome";
if (strlen($HTTP_POST_VARS["mvgText"])>0) $mvgText=$HTTP_POST_VARS["mvgText"];
$mvgFont="trebuc.ttf";
if (strlen($HTTP_POST_VARS["fontName"])>0) $mvgFont=$HTTP_POST_VARS["fontName"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
</head>


<body bgcolor="#000000">
<span style="color:#FFFFFF;">
<form name="form1" method="POST" action="mvgTest.php">
<select name="imgName" size=1>
<?
$allTitles=array(
    "home"=>"pageTitle_home.gif",
    "about"=>"pageTitle_about.gif",
    "resources"=>"pageTitle_resources.gif",
    "steering committee"=>"pageTitle_steering.gif",
    "contact us"=>"pageTitle_contact.gif",
    "calendar"=>"pageTitle_calendar.gif",
    "documents"=>"pageTitle_documents.gif"
    );
while (list($k,$v)=each($allTitles)) {
    echo "<option value=\"".$v."\"";
    if ($v==$HTTP_POST_VARS["imgName"]) echo " selected";
    echo ">".$k."</option>\n";
}
?>
</select><br>
<input type="text" name="mvgText" value="<?=$mvgText?>" size=32><br>
<select name="fontName" size=1>
<?
$allFonts=array();
if ($dh=opendir("/usr/share/fonts/ttf")) {
    while (($filename=readdir($dh))!==false) {
        if (ereg(".ttf",$filename)) $allFonts[]=$filename;
    }
    closedir($dh);
}
reset($allFonts);
natcasesort($allFonts);
while (list($k,$v)=each($allFonts)) {
    echo "<option value=\"".$v."\"";
    if ($v==$HTTP_POST_VARS["fontName"]) echo " selected";
    echo ">".$v."</option>\n";
}
?>
</select> <input type="submit" value="go">
</form><br>


<?
$fp=fopen("mvgTest.mvg","w");
fputs($fp,"font '/usr/share/fonts/ttf/".$mvgFont."'\n");
fputs($fp,"fill '#9C3B3E'\n");
fputs($fp,"font-size 30.4\n");
fputs($fp,"text-antialias 1\n");
fputs($fp,"gravity Northwest\n");
fputs($fp,"text 0,0 '".$mvgText."'\n");
fclose($fp);
$inputFile="/var/www/html/mcpcrn/images/pageTitleBG.gif";
$outputFile="/var/www/html/mcpcrn/images/".$mvgImg;
$results=system("convert -draw @mvgTest.mvg ".$inputFile." ".$outputFile);
?>
<b>GIF:</b><br>
<img src="http://hccweb1/mcpcrn/images/<?=$mvgImg?>?<?=time()?>" width=420 height=72 border=0 alt=""><br><br>


</span>
</body>
</html>
