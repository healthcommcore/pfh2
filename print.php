<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: </title>

    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>


<body bgcolor="#FFFFFF">
<table border=0 cellpadding=0 cellspacing=0 width=640>
<tr><td width=640 valign="top"><img src="images/blank.gif" width=640 height=1 border=0 alt=""><br>
<?
if (strlen($HTTP_GET_VARS["page"])>0) {
    $allLines=file($HTTP_GET_VARS["page"]);
    $contentFound=0;
    while (list($k,$v)=each($allLines)) {
        if ($contentFound<1) {
            if (eregi("column2Text",$v)) $contentFound=1;
        } else {
            if (eregi("includes/footer.php",$v)) {
                $contentFound=999;
            } else {
                if ($contentFound<999) echo $v;
            }
        }
    }
}
?>
&nbsp;</td></tr>
</table>
</body>
</html>
