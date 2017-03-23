<?
// FUNCTION: DB CONNECT
function dbConnect() {
    $mysqlID=mysql_connect("hccweb2.dfci.harvard.edu","scripts","scripts");
    mysql_select_db("publicWebserver",$mysqlID);
    return $mysqlID;
}
// FUNCTION: DB CLOSE
function dbClose() {
    GLOBAL $mysqlID;
    mysql_close($mysqlID);
}

?>