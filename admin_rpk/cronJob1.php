<?
$mysqlID=mysql_connect("hccweb4.dfci.harvard.edu","scripts","scripts");
mysql_select_db("publicWebserver",$mysqlID);

$resultTMP=mysql_query("UPDATE PFHUserInfo SET firstDayReward=\"".time()."\" WHERE id=14",$mysqlID);

mysql_close($mysqlID);
?>