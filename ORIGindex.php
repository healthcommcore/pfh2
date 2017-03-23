<?
ini_set(display_errors, On);
error_reporting(2047);
error_reporting(E_ALL);

// INITIALIZE VARIABLES
include("includes/site-functions.php");
if (strlen($HTTP_POST_VARS["refererURL"])<1) $HTTP_POST_VARS["refererURL"]="home.php";
$errMsg="";

// CHECK LOGIN
if ($HTTP_POST_VARS["submitAction"]=="userLogin") {
    if ((strlen($HTTP_POST_VARS["username"])>0) && (strlen($HTTP_POST_VARS["password"])>0)) {
        // check username and password
        $mysqlID=dbConnect();
        $resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE (username=\"".$HTTP_POST_VARS["username"]."\") AND (password=\"".$HTTP_POST_VARS["password"]."\")",$mysqlID);
        // SET SESSION VARIABLE: USERID
        $queryString="";
        if ($resultID) {
            if (mysql_num_rows($resultID)>0) {
                $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);

                if ($specs["startdate"]<1) {
                    $startdate=mktime(1,0,0,date("n",time()),date("j",time()),date("Y",time()));
                    $resultID_TMP=mysql_query("UPDATE PFHUserInfo SET startdate=".$startdate." WHERE id=".$specs["id"],$mysqlID);
                }

                $username=$specs["username"];
                $userID=$specs["id"];
                $stageID=$specs["stage"];
                if ($_COOKIE["cookieTest"]=="on") {
                    setcookie("username",$username);
                    setcookie("userID",$userID);
                    setcookie("stageID",$stageID);
                }
                $_SESSION["username"]=$username;
                $_SESSION["userID"]=$userID;
                $_SESSION["stageID"]=$stageID;
                if (($_COOKIE["cookieTest"]!="on") && ($_SESSION["cookieTest"]!="on")) $queryString="?userID=".$userID."&stageID=".$stageID;
            // errors...
            } else {
                $errMsg="The username and password you entered doesn't match our database. Please try again.";
            }
        } else {
            $errMsg="ERROR: We could not connect to the database at this time. We apologize for the inconvenience. Please try again later.";
        }
        dbClose();
    } else {
        $errMsg="Make sure to fill out both your username and password.";
    }
}

// REDIRECT USER
if ((strlen($_SESSION["userID"])>0) && (strlen($errMsg)<1)) {
    $mysqlID=dbConnect();
    $resultID=mysql_query("UPDATE PFHUserInfo SET isLogged=1 WHERE id=".$_SESSION["userID"],$mysqlID);
    dbClose();

    header("Location: ".$HTTP_POST_VARS["refererURL"].$queryString);
    exit();
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
    
    <link rel="stylesheet" href="includes/styles-n_index.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_index.css);
    </style>

    <style type="text/css">
    BODY {background:#FFFFFF url(images/logon/bgcolor.gif) repeat-y; color:#FFFFFF; font-size:10pt; font-family:Georgia,New York,Times New Roman,times,serif; margin:0px;}
    TD,DIV {color:#FFFFFF; font-size:10pt; font-family:Georgia,New York,Times New Roman,times,serif;}

    A {color:#FFFFFF;}
    </style>
</head>


<body bgcolor="#FFFFFF" onLoad="document['form1'].username.focus();">
<table border=0 cellpadding=0 cellspacing=0 width=760 background="images/logon/bgtile.gif"><tr><td>
<table border=0 cellpadding=0 cellspacing=0 width=760>
<tr>
    <td width=400 valign="top"><img src="images/logon/logo.gif" width=400 height=410 border=0 alt=""><br><img src="images/blank.gif" width=1 height=50 border=0 alt=""></td>
    <td width=20 valign="top"><img src="images/blank.gif" width=20 height=1 border=0 alt=""></td>
    <td width=310 valign="top"><img src="images/blank.gif" width=310 height=95 border=0 alt=""><br>
    <img src="images/logon/welcome.gif" width=160 height=32 border=0 alt=""><br><img src="images/blank.gif" width=1 height=65 border=0 alt=""><br>
    <form name="form1" method="POST" action="index.php">
    <input type="hidden" name="submitAction" value="userLogin">
    <input type="hidden" name="refererURL" value="<?=$HTTP_POST_VARS["refererURL"]?>">

<? if (strlen($errMsg)>0) { ?>
    <b><?=$errMsg?></b><br><br>
<? } else { ?>
    <b>Please sign in here:</b><br>TEST<br>
<? } ?>
    <input type="input" name="username" value="<?=$_COOKIE["username"]?>" size=24> &nbsp;<b>username</b><br><br>
    <input type="password" name="password" value="" size=24> &nbsp;<b>password</b><br><br>
    <a href="logonRequest.php">Forgot your password?</a><br><img src="images/blank.gif" width=1 height=4 border=0 alt=""><br>
    <a href="logonChange.php">Change your username/password?</a><br><br><br>
    <input type="image" src="images/logon/btn_submit.gif" width=104 height=34><br><br>
    </form>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
