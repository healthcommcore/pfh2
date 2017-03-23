<?

// FUNCTION: REMOVE TAGS
function removeTags($allLines,$codeSTART,$codeEND) {
    $newLines=array();
    $tagsFound=0;
    reset($allLines);
    while (list($k,$v)=each($allLines)) {
        $tmpStr=$v;
        if ($tagsFound==1) {
            if (strpos($tmpStr,$codeEND)>(0-1)) {
                $tmpPos=strpos($v,$codeEND);
                $tmpStr=substr($v,($tmpPos+strlen($codeEND)));
                $tagsFound=0;
            } else {
                $tmpStr="";
            }
        }
        while (strpos($tmpStr,$codeSTART)>(0-1)) {
            $tagsFound=1;
            $tmpPos1=strpos($tmpStr,$codeSTART);
            $str1=substr($tmpStr,0,$tmpPos1);
            $str2=substr($tmpStr,($tmpPos1+strlen($codeSTART)));
            if (ereg($codeEND,$str2)) {
                $tmpPos2=strpos($str2,$codeEND);
                $str2=substr($str2,($tmpPos2+strlen($codeEND)));
                $tagsFound=0;
            } else {
                $str2="";
            }
            $tmpStr=$str1.$str2;
        }
        if (strlen(trim($tmpStr))>0) $newLines[]=$tmpStr;
    }
    return $newLines;
}

$allLines=array();
$handle = fopen("ftp://bobes1:scruff2x@bobes1.web.cedant.com/creamyjoe/html/index.php", "r");
if ($handle) {
    while (!feof($handle)) {
        $allLines[]=fgets($handle);
    }
    fclose($handle);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
</head>


<body>

<form>

<b>ALL Code:</b><br>
<textarea rows=8 cols=72 wrap>
<?
reset($allLines);
while (list($k,$v)=each($allLines)) {
    $tmpStr=ereg_replace("<","&lt;",$v);
    $tmpStr=ereg_replace(">","&gt;",$tmpStr);
    echo $tmpStr;
}
?>
</textarea><br><br>

<b>Strip PHP:</b><br>
<textarea rows=8 cols=72 wrap>
<?
$newLines=removeTags($allLines,"<?","?>");
//$newLines2=removeTags($newLines,"<!--","-->");
while (list($k,$v)=each($newLines)) {
    $tmpStr=ereg_replace("<","&lt;",$v);
    $tmpStr=ereg_replace(">","&gt;",$tmpStr);
    echo $tmpStr;
}
?>
</textarea><br><br>



</form>

ok

</body>
</html>
