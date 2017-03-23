<?
//ini_set(display_errors, On);
error_reporting(2047);
error_reporting(E_ALL);


session_id();
session_start();


include("includes/site-functions.php"); 


  $mysqlID=dbConnect();
   // $resultID=mysql_query("UPDATE PFHUserInfo SET isLogged=1 WHERE id=".$_SESSION["userID"],$mysqlID);
   $rightNow=time();
   
   $sql="UPDATE PFHSessions  SET logoutTime=$rightNow WHERE userID={$_SESSION["userID"]} AND sessionID='{$_SESSION["sessID"]}' ";
 
   
   
   
   
   
   $resultID=mysql_query($sql, $mysqlID);
   
   if(!$resultID){
   	$errMsg="nope ---$sql".mysql_error($mysqlID);
   }else{
   
   //$errMsg="hjere-{$_SESSION["username"]}&&{$_SESSION["sessID"]}&&{$_SESSION["userID"]} - {$resultID5} - $rightNow";
    }
    dbClose();
  
   

// SET SESSION VARIABLE: USERID
setcookie("userID","");
setcookie("username","");


setcookie(session_name() ,"",0,"/");

$_SESSION["userID"]="";
$_SESSION["username"]="";

$_SESSION["sessID"]=0;
unset($_SESSION["sessID"]);

session_destroy();

foreach ($_COOKIE[] as $name => $value) {
       setcookie ($name, "", time() - 3600);
   }

foreach($_SESSION AS $key=>$val){
unset($_SESSION[$key]);	
	
}




if (count($HTTP_GET_VARS)>0) {
    header("Location: logout.php");
    exit();
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
    <td width=400 valign="top"><img src="images/logon/logo.gif" width=400 height=410 border=0 alt=""><br><img src="images/blank.gif" width=1 height=50 border=0 alt=""> <?php echo $sql; ?>  </td>
    <td width=20 valign="top"><img src="images/blank.gif" width=20 height=1 border=0 alt=""></td>
    <td width=310 valign="top"><img src="images/blank.gif" width=310 height=95 border=0 alt=""><br>
    <img src="images/logon/goodbye.gif" width=150 height=40 border=0 alt=""><br><img src="images/blank.gif" width=1 height=45 border=0 alt=""><br>
    You've successfully signed out of the Partnership for Health Web site.<br><br>
    When you're ready to sign in again, please return to <a href="index.php">pfhonline.org</a>.<br><br>
    Thank you for being a part of <nobr>Partnership for Health</nobr>.<br><br>
    &nbsp;</td>
    <td width=30 valign="top"><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
</tr>
</table></td></tr></table>
</body>
</html>
