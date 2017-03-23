<?
// set test cookies
$_SESSION["cookieTest"]="on";
setcookie("cookieTest","on");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>Partnership for Health</title>
    
    <style type="text/css">
    BODY {background:#FFFFFF url(images/logon/bgcolor.gif) repeat-y; color:#FFFFFF; font-size:10pt; font-family:Georgia,New York,Times New Roman,times,serif; margin:0px;}
    TD,DIV {color:#FFFFFF; font-size:10pt; font-family:Georgia,New York,Times New Roman,times,serif;}

    A {color:#FFFFFF;}
    </style>
</head>


<body bgcolor="#FFFFFF">
<table border=0 cellpadding=0 cellspacing=0 width=760 background="images/logon/bgtile.gif"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 width=760>
<tr>
    <td width=400 valign="top"><img src="images/logon/logo.gif" width=400 height=410 border=0 alt=""><br><img src="images/blank.gif" width=1 height=50 border=0 alt=""></td>
    <td width=20 valign="top"><img src="images/blank.gif" width=20 height=1 border=0 alt=""></td>
    <td width=310 valign="top"><img src="images/blank.gif" width=310 height=95 border=0 alt=""><br>
    <img src="images/logon/thanks.gif" width=185 height=40 border=0 alt=""><br><img src="images/blank.gif" width=1 height=45 border=0 alt=""><br>
    An email has been sent to you containing your username and password. 
    Please keep this information in a safe place.<br><br>

    <form name="form1" method="POST" action="index.php">
    <input type="hidden" name="submitAction" value="userLogin">
    <b>Please sign in here:</b><br><br>
    <input type="input" name="username" value="" size=24> &nbsp;<b>username</b><br><br>
    <input type="password" name="password" value="" size=24> &nbsp;<b>password</b><br><br>
    <input type="image" src="images/logon/btn_submit.gif" width=104 height=34><br><br>
    </form>

    Thank you for being a part of <nobr>Partnership for Health</nobr>.<br><br>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
