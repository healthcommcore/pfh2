<?
include("includes/site-functions.php");
include("includes/all-emails.php");
$emailTxt="<b>Hello ".urldecode($HTTP_GET_VARS["firstName"])."!</b><br><br>";
$emailTxt.=emailMSG(1,1,0,0);
$emailTxt=ereg_replace("PFH1322",urldecode($HTTP_GET_VARS["username"]),$emailTxt);
$emailTxt=ereg_replace("logonFirst.php\?userID=14","logonFirst.php\?userID=".$HTTP_GET_VARS["userID"],$emailTxt);
$emailTxt.="<br><br><span style=\"font-size:9pt;\">If the links above are not clickable, copy and paste the following Web address into your Web browser's address bar: <b>http://www.pfhonline.org</b></span><br>";
$emailTxt=ereg_replace("\|\|QUOTE\|\|","\"",stripslashes($emailTxt));
$emailTxt=ereg_replace("\|\|BRACKET\|\|",">",stripslashes($emailTxt));
$emailBody=split("\|\|LINEBREAK\|\|",$emailTxt);
$emailBody2=array();
reset($emailBody);
while (list($k,$v)=each($emailBody)) {
    $emailBody2[]=$v;
}
?>
<html>
<head>
    <title>Partnership for Health</title>
</head>

<body bgcolor="#FFFFFF" marginwidth=0 marginheight=0 leftmargin=0 topmargin=0>
<table border=0 cellpadding=0 cellspacing=0 width=640>
<tr bgcolor="#DCE2EE">
    <td width=450 colspan=2 valign="top"><img src="images/email/logo.gif" width=450 height=220 border=0></td>
    <td width=190 rowspan=2 valign="top"><img src="images/email/right.gif" width=190 height=760 border=0></td>
</tr>
<tr bgcolor="#DCE2EE">
    <td width=30 valign="top" bgcolor="#DCE2EE"><img src="images/email/blank.gif" width=30 height=540 border=0></td>
    <td width=420 bgcolor="#DCE2EE" valign="top" style="color:#696B6A; font-size:11pt; font-family:Georgia,New York,Times New Roman,times,serif;"><img src="images/email/blank.gif" width=420 height=1 border=0><br>
<?
        reset($emailBody2);
        while (list($k,$v)=each($emailBody2)) {
            if (strlen(trim($v))>0) echo $v."<br>\n";
        }
?>
<br><br>&nbsp;</td>
</tr>
</table>
</body>
</html>
