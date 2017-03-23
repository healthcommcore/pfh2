<?

// FUNCTION: REMOVE TAGS
function removeTags($allLines,$codeSTART,$codeEND) {
    $newLines=array();
    $tagsFound=0;
    reset($allLines);
    while (list($k,$v)=each($allLines)) {
        $tmpStr=$v;
        if ($tagsFound==1) {
            if (strpos($tmpStr,$codeEND)>(0-1)) {
                $tmpPos=strpos($v,$codeEND);
                $tmpStr=substr($v,($tmpPos+strlen($codeEND)));
                $tagsFound=0;
            } else {
                $tmpStr="";
            }
        }
        while (strpos($tmpStr,$codeSTART)>(0-1)) {
            $tagsFound=1;
            $tmpPos1=strpos($tmpStr,$codeSTART);
            $str1=substr($tmpStr,0,$tmpPos1);
            $str2=substr($tmpStr,($tmpPos1+strlen($codeSTART)));
            if (ereg($codeEND,$str2)) {
                $tmpPos2=strpos($str2,$codeEND);
                $str2=substr($str2,($tmpPos2+strlen($codeEND)));
                $tagsFound=0;
            } else {
                $str2="";
            }
            $tmpStr=$str1.$str2;
        }
        if (strlen(trim($tmpStr))>0) $newLines[]=$tmpStr;
    }
    return $newLines;
}



$allLines=array();
$handle = fopen("ftp://bobes1:scruff2x@bobes1.web.cedant.com/creamyjoe/html/index.php", "r");
if ($handle) {
    while (!feof($handle)) {
        $allLines[]=fgets($handle);
    }
    fclose($handle);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title></title>
</head>


<body>

<form>

<?
$ftp_server="www.goslins.com";
$ftp_user_name="bobes1";
$ftp_user_pass="scruff2x";

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);


// check connection
if ((!$conn_id) || (!$login_result)) {
       echo "FTP connection has failed!";
       echo "Attempted to connect to $ftp_server for user $ftp_user_name<br><br>\n\n";
       exit;
   } else {
       echo "Connected to $ftp_server, for user $ftp_user_name<br><br>\n\n";

        // get the system type
        if ($type = ftp_systype($login_result)) {
           echo "Example.com is powered by $type<br><br>\n";
        } else {
           echo "Couldn't get the systype<br><br>\n\n";
        }

        $command = 'ls -l';
        if (ftp_exec($conn_id, $command)) {
           echo "$command executed successfully<br><br>\n";
        } else {
           echo 'could not execute ' . $command."<br><br>\n\n";
        }

        echo "Current directory: " . ftp_pwd($conn_id) . "<br><br>\n";

            // try to change the directory to somedir
            if (ftp_chdir($conn_id, "/joe/html")) {
               echo "Current directory is now: " . ftp_pwd($conn_id) . "<br><br>\n";
                $contents = ftp_nlist($conn_id, ".");
                while (list($k,$v)=each($contents)) {
                    echo $k.": ".$v."<br>\n";
                }
                echo "<br><br>\n\n";
            } else {
               echo "Couldn't change directory<br><br>\n";
            }
   }

// upload the file
//$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
//if (!$upload) {
//       echo "FTP upload has failed!";
//   } else {
//       echo "Uploaded $source_file to $ftp_server as $destination_file";
//   }

// close the FTP stream
ftp_close($conn_id); 


//$fp = fsockopen("bobes1.web.cedant.com", 80, $errno, $errstr, 30);
//if (!$fp) {
//   echo "$errstr ($errno)<br />\n";
//} else {
//   $out = "GET /. HTTP/1.1\r\n";
//   $out .= "Host: www.goslins.com\r\n";
//   $out .= "Connection: Close\r\n\r\n";
//
//   fwrite($fp, $out);
//   while (!feof($fp)) {
//       echo fgets($fp, 128);
//   }
//   fclose($fp);
//}
?>

<!--  THIS WON'T WORK... try passing the results from a system FTP script to the remote server  -->

HTTP/1.1 200 OK
Date: Wed, 16 Nov 2005 14:57:09 GMT
Server: Apache/1.3.33 (Unix) mod_fastcgi/2.4.2 FrontPage/5.0.2.2635 mod_jk/1.2.6
X-Powered-By: PHP/4.3.11
Connection: close
Transfer-Encoding: chunked
Content-Type: text/html


<b>ALL Code:</b><br>
<textarea rows=8 cols=72 wrap>
<?
reset($allLines);
while (list($k,$v)=each($allLines)) {
    $tmpStr=ereg_replace("<","&lt;",$v);
    $tmpStr=ereg_replace(">","&gt;",$tmpStr);
    echo $tmpStr;
}
?>
</textarea><br><br>

<b>Strip PHP:</b><br>
<textarea rows=8 cols=72 wrap>
<?
$newLines=removeTags($allLines,"<?","?>");
//$newLines2=removeTags($newLines,"<!--","-->");
while (list($k,$v)=each($newLines)) {
    $tmpStr=ereg_replace("<","&lt;",$v);
    $tmpStr=ereg_replace(">","&gt;",$tmpStr);
    echo $tmpStr;
}
?>
</textarea><br><br>



</form>

ok

</body>
</html>
