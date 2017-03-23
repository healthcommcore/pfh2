<?
// INITIALIZE VARIABLES
include("includes/site-functions.php");

if (strlen($HTTP_GET_VARS["userID"])>0) {
    $mysqlID=dbConnect();
    $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$HTTP_GET_VARS["userID"],$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {
            $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            $HTTP_POST_VARS["newUsername"]=$specs["username"];
            $HTTP_POST_VARS["newPassword"]=$specs["password"];
        }
    } else {
        $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
    }
    dbClose();
}
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
    An email has been sent to you containing your <b>NEW</b> username and password:<br><br>
    username: <b><?=$HTTP_POST_VARS["newUsername"]?></b><br>
    password: <b><?=$HTTP_POST_VARS["newPassword"]?></b><br><br>

    Please keep this information in a safe place.<br><br>

    It's time to get started with <a href="home.php"><b>Partnership for Health</b></a>! 
    To begin, be sure to check out your personal health profile &#150; a report just for you, based on your answers to the Partnership for Health survey:<br><br>
    <a href="you_profile1.php">http://www.pfhonline.org/you_profile1.php</a><br><br>


    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
