<?
include("includes/site-functions.php");

$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
        while (list($k,$v)=each($specs)) {
            if (in_array($k,$HTTP_GET_VARS)) echo $k."=".urlencode($v)."&";
        }
    }
}
dbClose();
?>
