<?
// INITIALIZE VARIABLES
include("includes/site-functions.php");

if ($HTTP_POST_VARS["submitAction"]=="email") {
    $errMsg="";
    if (strlen($HTTP_POST_VARS["email"])<1) $errMsg.="<li>Please fill out your email address in the field provided.</li>\n";
    if (strlen($errMsg)<1) {
        $mysqlID=dbConnect();
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (email=\"".$HTTP_POST_VARS["email"]."\")",$mysqlID);
        if ($resultID) {
            if (mysql_num_rows($resultID)<1) {
                $errMsg.="<li>We could not find your email address in our database. Please be sure everything has been typed correctly, and try again. Thank you.</li>\n";
            } else {
                $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            }
        } else {
            $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
        }
        dbClose();
    }
    if (strlen($errMsg)<1) {
        $emailTo=$specs["email"];
        $emailSubject="Important PFH information";
        $emailTxt="Your username is: <b>".$specs["username"]."</b><br>\n";
        $emailTxt.="Your password is: <b>".$specs["password"]."</b><br>\n";
        include("includes/email.php");
        header("Location: logonThankyou.php");
        exit();
    }
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
    <td width=310 valign="top"><img src="images/blank.gif" width=310 height=92 border=0 alt=""><br>
    <img src="images/logon/reminder.gif" width=160 height=40 border=0 alt=""><br><img src="images/blank.gif" width=1 height=40 border=0 alt=""><br>
<? if (strlen($errMsg)>0) { ?>
    <ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } ?>
    <form name="form1" method="POST" action="logonRequest.php">
    <input type="hidden" name="submitAction" value="email">
    If you've forgotten your username or password, we can email you the correct information. 
    Fill in your email address below, and click <b>Submit</b>. 
    An email will arrive shortly with your information.<br><br>
    <input type="input" name="email" value="" size=24> &nbsp;<b>email address</b><br><br>
    <input type="image" src="images/logon/btn_submit.gif" width=104 height=34><br><br>
    </form>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
