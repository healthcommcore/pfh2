<?
set_time_limit(0);
session_start();
include("includes/site-functions.php");
$mysqlID=dbConnect();

$d=",";
$allFields=array(
    "studyID",
    "firstName","lastName","address1","address2","city","state","zip",
    "dateStr","totalTime","interviewerID","timeStr",
    "A1","A2","A3a","A3b","A4","A5","A6","A7","A7a","A7b","A8","A8a","A8b","A9","A10","A10a","A11","A11a","A12","A12a","A13","A14a","A14b","A14c","A14d","A15","A16",
    "B1","B2","B3","B4","B5",
    "C1","C2","C3","C4","C5","C7","C7a","C7b",
    "D1","D2","D3","D4","D5","D6",
    "E1","E1a","E2a","E2b","E2c","E2d","E2e","E2f","E2g","E3a","E3b","E4a","E4b","E4c","E4d","E5a","E5b","E5c",
    "F1_ft","F1_in","F2","F3","F4","F5","F5a","F6","F7","F8","F9","F9a","F10","F10a",
    "G1","G2","G3","G4a","G4b",
    "H2a","H2b","H2c","H2d","H2e","H2f","H2g");

$idSTR=urldecode($HTTP_GET_VARS["idSTR"]);
$allIDs=split(",",$idSTR);
$idSTR="";
while (list($k,$v)=each($allIDs)) {
    if (strlen($idSTR)>0) $idSTR.=" OR ";
    $idSTR.="(MI.webID=\"".$v."\")";
}
if (strlen($idSTR)>0) {
    $resultID=mysql_query("SELECT MI.*, SD.* FROM PFHMailingInfo as MI, PFHSurveyData as SD WHERE (".$idSTR.") AND (MI.webID=SD.webID)",$mysqlID);
    if ($resultID) {
        if (mysql_num_rows($resultID)>0) {

            // WRITE HEADERS
            session_cache_limiter("nocache");
            header("Cache-Control: max-age=1, must-revalidate");
            header("Content-Type: application/octet-stream");
            header("Content-Disposition: attachment; filename=\"mailingInfo_".date("Ymd-Hs",time()).".csv\""); 

            $rowCount=0;
            while ($specs=mysql_fetch_array($resultID,MYSQL_ASSOC)) {

                if ($rowCount==0) {
                    reset($allFields);
                    while (list($k,$v)=each($allFields)) {
                        if ($k>0) echo ",";
                        echo $v;
                    }
                    echo "\r\n";
                }
                reset($allFields);
                while (list($k,$v)=each($allFields)) {
                    if ($k>0) echo ",";
                    echo ereg_replace($d," ",$specs[$v]);
                }
                echo "\r\n";
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
