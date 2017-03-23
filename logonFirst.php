<?
// INITIALIZE VARIABLES
include("includes/site-functions.php");
$mysqlID=dbConnect();

if ($HTTP_POST_VARS["submitAction"]=="change") {
    $errMsg="";
    if ((strlen($HTTP_POST_VARS["newUsername"])<1) || (strlen($HTTP_POST_VARS["newPassword"])<1)) $errMsg.="<li>Please be sure that both the username and password fields have been filled out.</li>\n";
    if ((strlen($errMsg)<1) && ($HTTP_POST_VARS["newUsername"]==$HTTP_POST_VARS["newPassword"])) $errMsg.="<li>Your username and password are too similar. Please try again.</li>\n";
    if (strlen($errMsg)<1) {
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (username=\"".$HTTP_POST_VARS["newUsername"]."\")",$mysqlID);
        if ($resultID) {
            if (mysql_num_rows($resultID)>0) $errMsg.="<li>We're sorry. That username is already being used. Please choose another username.</li>\n";
        } else {
            $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
        }
    }
    if (strlen($errMsg)<1) {
        $resultID2=mysql_query("SELECT * FROM PFHUserInfo WHERE (username=\"".$HTTP_POST_VARS["oldUsername"]."\") AND (password=\"".$HTTP_POST_VARS["oldPassword"]."\")",$mysqlID);
        if ($resultID2) {
            if (mysql_num_rows($resultID2)>0) {
                $specs=mysql_fetch_array($resultID2,MYSQL_ASSOC);
                $username=$HTTP_POST_VARS["newUsername"];
                $userID=$specs["id"];
                $stageID=$specs["stage"];
            }
        } else {
            $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
        }
    }
    if (strlen($errMsg)<1) {
        // update database
        $startdate=mktime(1,0,0,date("n",time()),date("j",time()),date("Y",time()));
        $sql="UPDATE PFHUserInfo SET isLogged=1,startdate=".$startdate.",contentViewed=CONCAT(\"1\",SUBSTRING(contentViewed,2)),username=\"".$HTTP_POST_VARS["newUsername"]."\", password=\"".$HTTP_POST_VARS["newPassword"]."\" WHERE id=".$specs["id"];
        $resultID3=mysql_query($sql,$mysqlID);

        // update cookie/session variable
        if ($_COOKIE["cookieTest"]=="on") {
            setcookie("username",$username);
            setcookie("userID",$userID);
            setcookie("stageID",$stageID);
        }
        $_SESSION["username"]=$username;
        $_SESSION["userID"]=$userID;
        $_SESSION["stageID"]=$stageID;
        if (($_COOKIE["cookieTest"]!="on") && ($_SESSION["cookieTest"]!="on")) $queryString="?userID=".$userID."&stageID=".$stageID;

        // email participant
        $emailTo=$specs["email"];
        $emailSubject="Important PFH information";
        $emailTxt="Your username is: <b>".$HTTP_POST_VARS["newUsername"]."</b><br>\n";
        $emailTxt.="Your password is: <b>".$HTTP_POST_VARS["newPassword"]."</b><br>\n";
        include("includes/email.php");
        header("Location: logonFirstThankyou.php?userID=".$specs["id"]);
        exit();
    }
}

if (strlen($errMsg)<1) {
    if (strlen($HTTP_GET_VARS["userID"])>0) {
        $resultID4=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$HTTP_GET_VARS["userID"],$mysqlID);
        if ($resultID4) {
            if (mysql_num_rows($resultID4)>0) {
                $specs=mysql_fetch_array($resultID4,MYSQL_ASSOC);
                if ($specs["isLogged"]>0) {
                    dbClose();
                    header("Location: index.php");
                    exit();
                }
                if (strlen($HTTP_GET_VARS["userID"])>0) {
                    $HTTP_POST_VARS["oldUsername"]=$specs["username"];
                    $HTTP_POST_VARS["oldPassword"]=$specs["password"];
                }
            }
        } else {
            $errMsg.="<li>Our apologies. We could not connect to the database at this time. Please try again soon.</li>\n";
        }
    } else {
        header("Location: index.php");
        exit();
    }
}

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
    <img src="images/logon/welcome.gif" width=160 height=32 border=0 alt=""><br><img src="images/blank.gif" width=1 height=40 border=0 alt=""><br>
<? if (strlen($errMsg)>0) { ?>
    <ul style="padding-left:15px; padding-right:15px; font-weight:bold; line-height:19px;"><?=$errMsg?></ul><br>
<? } ?>
    <form name="form1" method="POST" action="logonFirst.php">
    <input type="hidden" name="submitAction" value="change">
    <input type="hidden" name="oldUsername" value="<?=$HTTP_POST_VARS["oldUsername"]?>">
    <input type="hidden" name="oldPassword" value="<?=$HTTP_POST_VARS["oldPassword"]?>">
    To gain access to the site, please take a moment to change your username and password.<br><br>
    <input type="input" name="newUsername" value="<?=$HTTP_POST_VARS["newUsername"]?>" size=24> &nbsp;<b>NEW username</b><br><img src="images/blank.gif" width=1 height=2 border=0 alt=""><br>
    <input type="password" name="newPassword" value="<?=$HTTP_POST_VARS["newPassword"]?>" size=24> &nbsp;<b>NEW password</b><br><br>
    <input type="image" src="images/logon/btn_submit.gif" width=104 height=34><br><br><br>
    For your <b>username</b>, do not use your full name (for example: joesmith). This is for confidentiality reasons, because others will see this username when you use the forum and other community tools.<br><br>
    For your <b>password</b>, pick a password that is a combination of 4 letters or numbers. This password cannot be the same as your username.<br><br>
    If you have questions, please email us at <a href="mailto:pfh@hcc-web.org">pfh@hcc-web.org</a>.<br><br>
    </form>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
<? dbClose(); ?>
