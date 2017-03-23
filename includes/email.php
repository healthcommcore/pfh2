<?
// INITIALIZE VARIABLES
$errMsg="";
$headerFields=array(
    "From"=>"PFH <pfh@hcc-web.org>",
    "To"=>stripslashes($emailTo),
    "Subject"=>ereg_replace("\|\|QUOTE\|\|","\"",$emailSubject));

// OPEN PROCESS
if ($ep=popen("/usr/sbin/sendmail -t -i ","w")) {
    // LOAD DATA
    $emailTxt=ereg_replace("\|\|QUOTE\|\|","\"",stripslashes($emailTxt));
    $emailTxt=ereg_replace("\|\|BRACKET\|\|",">",stripslashes($emailTxt));
    $emailBody=split("\|\|LINEBREAK\|\|",$emailTxt);
    $emailBody2=array();

    // WRITE HEADERS
    reset($headerFields);
    while (list($k,$v)=each($headerFields)) {
        if (strlen($v)>0) fputs($ep,$k.": ".$v."\n");
    }
    fputs($ep,"MIME-Version: 1.0\n");
    fputs($ep,"Content-Type: multipart/related; boundary=\"MultipartBoundaryRelated\"\n\n");
    fputs($ep,"This is a multi-part message in MIME format.\n\n");

    // RELATED CONTENT: TEXT
    fputs($ep,"--MultipartBoundaryRelated\n");
    fputs($ep,"Content-Type: multipart/alternative; boundary=\"MultipartBoundaryAlternative\"\n\n");

        // ALTERNATIVE CONTENT: PLAIN
        fputs($ep,"--MultipartBoundaryAlternative\n");
        fputs($ep,"Content-type: text/plain; \"charset=iso-8859-1\"\n");
        fputs($ep,"Content-Transfer-Encoding: 7bit\n\n");
        reset($emailBody);
        while (list($k,$v)=each($emailBody)) {
            fputs($ep,strip_tags($v)."\n");
            $emailBody2[]=$v;
        }
        fputs($ep,"\n");

        // ALTERNATIVE CONTENT: HTML
        fputs($ep,"--MultipartBoundaryAlternative\n");
        fputs($ep,"Content-type: text/html; \"charset=iso-8859-1\"\n");
        fputs($ep,"Content-Transfer-Encoding: 7bit\n\n");
        fputs($ep,"<html>\n");
        fputs($ep,"<head>\n");
        fputs($ep,"    <title>Partnership for Health</title>\n");
        fputs($ep,"</head>\n\n");
        fputs($ep,"<body bgcolor=\"#FFFFFF\" marginwidth=0 marginheight=0 leftmargin=0 topmargin=0>\n");
        fputs($ep,"<table border=0 cellpadding=0 cellspacing=0 width=640>\n");
        fputs($ep,"<tr>\n");
        fputs($ep,"    <td width=450 colspan=2><img src=\"cid:logo.gif\" width=450 height=220 border=0></td>\n");
        fputs($ep,"    <td width=190 rowspan=3 valign=\"top\"><img src=\"cid:right.gif\" width=190 height=640 border=0></td>\n");
        fputs($ep,"</tr>\n");
        fputs($ep,"<tr>\n");
        fputs($ep,"    <td width=30 bgcolor=\"#DCE2EE\"><img src=\"cid:blank.gif\" width=30 height=210 border=0></td>\n");
        fputs($ep,"    <td width=420 bgcolor=\"#DCE2EE\" valign=\"top\" style=\"color:#696B6A; font-size:11pt; font-family:Georgia,New York,Times New Roman,times,serif;\"><img src=\"cid:blank.gif\" width=420 height=1 border=0><br>\n");
        reset($emailBody2);
        while (list($k,$v)=each($emailBody2)) {
            fputs($ep,$v."<br>\n");
        }
        fputs($ep,"<br><br>&nbsp;</td>\n");
        fputs($ep,"</tr>\n");
        fputs($ep,"<tr>\n");
        fputs($ep,"    <td width=450 colspan=2><img src=\"cid:bottom.gif\" width=450 height=210 border=0></td>\n");
        fputs($ep,"</tr>\n");
        fputs($ep,"</table>\n");
        fputs($ep,"</body>\n");
        fputs($ep,"</html>\n");
        fputs($ep,"\n");
        fputs($ep,"--MultipartBoundaryAlternative--\n\n\n");


    // RELATED CONTENT: IMAGE
    fputs($ep,"--MultipartBoundaryRelated\n");
    fputs($ep,"Content-Type: application/octet-stream; name=\"blank.gif\"\n");
    fputs($ep,"Content-ID: <blank.gif>\n");
    fputs($ep,"Content-Transfer-Encoding: base64\n");
    fputs($ep,"Content-Disposition: inline; filename=\"blank.gif\"\n\n");
    $fp=fopen("/var/www/html/PFH/admin/images/email/blank.gif","rb");
    $allBytes=fread($fp,filesize("/var/www/html/PFH/admin/images/blank.gif"));
    fclose($fp);
    fputs($ep,chunk_split(base64_encode($allBytes))."\n");
    fputs($ep,"\n");

    fputs($ep,"--MultipartBoundaryRelated\n");
    fputs($ep,"Content-Type: application/octet-stream; name=\"bottom.gif\"\n");
    fputs($ep,"Content-ID: <bottom.gif>\n");
    fputs($ep,"Content-Transfer-Encoding: base64\n");
    fputs($ep,"Content-Disposition: inline; filename=\"bottom.gif\"\n\n");
    $fp=fopen("/var/www/html/PFH/admin/images/email/bottom.gif","rb");
    $allBytes=fread($fp,filesize("/var/www/html/PFH/admin/images/email/bottom.gif"));
    fclose($fp);
    fputs($ep,chunk_split(base64_encode($allBytes))."\n");
    fputs($ep,"\n");

    fputs($ep,"--MultipartBoundaryRelated\n");
    fputs($ep,"Content-Type: application/octet-stream; name=\"logo.gif\"\n");
    fputs($ep,"Content-ID: <logo.gif>\n");
    fputs($ep,"Content-Transfer-Encoding: base64\n");
    fputs($ep,"Content-Disposition: inline; filename=\"logo.gif\"\n\n");
    $fp=fopen("/var/www/html/PFH/admin/images/email/logo.gif","rb");
    $allBytes=fread($fp,filesize("/var/www/html/PFH/admin/images/email/logo.gif"));
    fclose($fp);
    fputs($ep,chunk_split(base64_encode($allBytes))."\n");
    fputs($ep,"\n");

    fputs($ep,"--MultipartBoundaryRelated\n");
    fputs($ep,"Content-Type: application/octet-stream; name=\"right.gif\"\n");
    fputs($ep,"Content-ID: <right.gif>\n");
    fputs($ep,"Content-Transfer-Encoding: base64\n");
    fputs($ep,"Content-Disposition: inline; filename=\"right.gif\"\n\n");
    $fp=fopen("/var/www/html/PFH/admin/images/email/right.gif","rb");
    $allBytes=fread($fp,filesize("/var/www/html/PFH/admin/images/email/right.gif"));
    fclose($fp);
    fputs($ep,chunk_split(base64_encode($allBytes))."\n");
    fputs($ep,"\n");
    fputs($ep,"--MultipartBoundaryRelated--\n\n\n");

    // CLOSE PROCESS
    pclose($ep);

// REPORT ERROR
} else {
    $errMsg="Couldn't open connection to sendmail";
}
?>
