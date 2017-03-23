<?
set_time_limit(0);
session_start();
include("includes/site-functions.php");
$mysqlID=dbConnect();

$d=",";

$idSTR=urldecode($HTTP_GET_VARS["idSTR"]);
$allIDs=split(",",$idSTR);
$idSTR="";
while (list($k,$v)=each($allIDs)) {
    if (strlen($idSTR)>0) $idSTR.=" OR ";
    $idSTR.="(PU.id=".$v.")";
}
if (strlen($idSTR)>0) {
    $resultID=mysql_query("SELECT PM.* FROM PFHMailingInfo as PM, PFHUserInfo AS PU WHERE (PU.studyID=PM.studyID) AND (".$idSTR.")",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {

            // WRITE HEADERS
            session_cache_limiter("nocache");
            header("Cache-Control: max-age=1, must-revalidate");
            header("Content-Type: application/octet-stream");
            header("Content-Disposition: attachment; filename=\"mailingInfo_".date("Ymd-Hs",time()).".csv\""); 

            $rowCount=0;
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {

                if ($rowCount==0) echo "firstName".$d."lastName".$d."address1".$d."address2".$d."city".$d."state".$d."zip\r\n";
                echo ereg_replace($d," ",$specs["firstName"]).$d;
                echo ereg_replace($d," ",$specs["lastName"]).$d;
                echo ereg_replace($d," ",$specs["address1"]).$d;
                echo ereg_replace($d," ",$specs["address2"]).$d;
                echo ereg_replace($d," ",$specs["city"]).$d;
                echo ereg_replace($d," ",$specs["state"]).$d;
                echo ereg_replace($d," ",$specs["zip"])."\r\n";

                $rowCount++;
            }

        } else {
            header("HTTP/1.0 204 No Content");
            exit();
        }
        dbClose();
    }

} else {
    header("HTTP/1.0 204 No Content");
    exit();
}
?>
