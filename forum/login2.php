<?
include("../includes/site-functions.php");
?>
<html>
<head>
<title></title>
</head>

<body onLoad="document['form1'].submit();">
<form name="form1" method="POST" action="login.php">
<input type="hidden" name="username" value="<?=$userSpecs["username"]?>">
<input type="hidden" name="login" value="Log in">
<input type="hidden" name="redirect" value="viewforum.php?f=1">
<input type="hidden" name="password" value="<?=$userSpecs["password"]?>">
</form>
</body>
</html>



