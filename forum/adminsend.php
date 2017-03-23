<?
$email=$_REQUEST ['email'] ;
$message=$_REQUEST ['form'] ;
mail( "mberman@bitmedia.com", "Message from member",
$message, "From: $email" );
header("Refresh: 3; url=viewforum.php?f=1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Message Sent</title>
</head>

<body>

<b>Thanks!<br>
Message has been sent to admin, You are being redirected.</b><br />
You will now be returned to the Forum.

</body>
</html>



