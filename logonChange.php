<?
// INITIALIZE VARIABLES
include("includes/site-functions.php");

if ($HTTP_POST_VARS["submitAction"]=="change") {
    $errMsg="";
    if ((strlen($HTTP_POST_VARS["oldUsername"])<1) || (strlen($HTTP_POST_VARS["oldPassword"])<1)) $errMsg.="<li>For security reasons, please be sure to fill out both your old username and your old password.</li>\n";
    if ((strlen($HTTP_POST_VARS["newUsername"])<1) && (strlen($HTTP_POST_VARS["newPassword"])<1)) $errMsg.="<li>Please indicate what you'd like your new username and/or password to be.</li>\n";
    if (strlen($errMsg)<1) {
        $mysqlID=dbConnect();
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (username=\"".$HTTP_POST_VARS["oldUsername"]."\") AND (password=\"".$HTTP_POST_VARS["oldPassword"]."\")",$mysqlID);
        if ($resultID) {
            if (mysql_num_rows($resultID)<1) {
                $errMsg.="<li>We could not find the old username and password you entered in our database. Please be sure everything has been typed correctly, and try again. Thank you.</li>\n";
            } else {
                $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
            }
        } else {
            $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
        }
        dbClose();
    }
    if (strlen($errMsg)<1) {
        $sql="UPDATE PFHUserInfo SET ";
        if (strlen($HTTP_POST_VARS["newUsername"])>0) {
            $specs["username"]=$HTTP_POST_VARS["newUsername"];
            $sql.="username=\"".$HTTP_POST_VARS["newUsername"]."\"";
            if (strlen($HTTP_POST_VARS["newPassword"])>0) $sql.=", ";
        }
        if (strlen($HTTP_POST_VARS["newPassword"])>0) {
            $specs["password"]=$HTTP_POST_VARS["newPassword"];
            $sql.="password=\"".$HTTP_POST_VARS["newPassword"]."\"";
        }
        $sql.=" WHERE id=".$specs["id"];
        $mysqlID=dbConnect();
        $resultID=mysql_query($sql,$mysqlID);
        dbClose();
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
    <td width=310 valign="top"><img src="images/blank.gif" width=310 height=95 border=0 alt=""><br>
    <img src="images/logon/change.gif" width=280 height=40 border=0 alt=""><br><img src="images/blank.gif" width=1 height=40 border=0 alt=""><br>
<? if (strlen($errMsg)>0) { ?>
    <ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } ?>
    <form name="form1" method="POST" action="logonChange.php">
    <input type="hidden" name="submitAction" value="change">
    If you'd like to change your username or password, 
    you can start by typing your current username and password in the boxes below. 
    <b>Make sure both boxes are filled out.</b> 
    Then, fill out a new username or password, or both.<br><br>
    <input type="input" name="oldUsername" value="<?=$HTTP_POST_VARS["oldUsername"]?>" size=18> &nbsp;Current username<br>
    <input type="password" name="oldPassword" value="<?=$HTTP_POST_VARS["oldPassword"]?>" size=18> &nbsp;Current password<br><br>

    <input type="input" name="newUsername" value="<?=$HTTP_POST_VARS["newUsername"]?>" size=18> &nbsp;<b>NEW username</b><br>
    <input type="password" name="newPassword" value="<?=$HTTP_POST_VARS["newPassword"]?>" size=18> &nbsp;<b>NEW password</b><br><br>

    After you click <b>Submit</b>, you can use your new info right away.<br><br>
    <input type="image" src="images/logon/btn_submit.gif" width=104 height=34><br><br>
    </form>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
