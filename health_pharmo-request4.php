<?
include("includes/site-functions.php");
$sectionID="health";
contentViewed(113);
$showWide=0;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: Your Health</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?><? if ($showWide>0) echo "Wide"; ?>.css);
    @import url(includes/styles-ie.css);
    </style>
</head>

<body bgcolor="#FFFFFF">
<? include("includes/header.php"); ?>

<!-- MAIN CONTENT -->
<table border=0 cellpadding=0 cellspacing=0 width=770>
<tr>
    <!-- ======== -->
    <!-- COLUMN 1 -->
    <!-- ======== -->
    <td width=155 valign="top"><img src="images/allAboutYou2.jpg" width=155 height=96 border=0 alt=""><br>
<? include("includes/greenbar.php"); ?>
    &nbsp;</td>
    <td width=23 valign="top"><img src="images/blank.gif" width=23 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 2 -->
    <!-- ======== -->
    <td width=400 valign="top"><img src="images/pageTitles/health_pharmo.gif" width=400 height=99 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<span class="manualHeader">DOWNLOAD CONSENT FORM</span><br><br>

<b>Directions for downloading and signing consent form and spouse/partner pharmacotherapy agreement:</b>

<ul>
<li>Double-click on the Medication Consent Form below. Open and print <b>two copies</b> of the document.<br><br>
<a href="/docs/RxConsentParticipantMSKCC.pdf" target="_blank"><img src="images/icons/icon_pdf.gif" width=16 height=16 hspace=10 border=0 alt="">Medication Consent Form</a></li>
<li>If you have a spouse or partner who is interested in receiving free patches or Zyban as part of the study, double-click on "Spouse or Partner Medication" and print <b>two copies</b> of this document.<br><br>
<a href="/docs/RxConsentPartnerMSKCC.pdf" target="_blank"><img src="images/icons/icon_pdf.gif" width=16 height=16 hspace=10 border=0 alt="">Spouse or Partner Medication</a></li>
<li> Carefully read the Medication Consent Form. Fill in the information on the last page, and sign <b>both</b> copies of the form.</li>
<li>Have your spouse or partner read the Spouse or Partner Medication Form and sign <b> both</b> copies of the form.</li>
<li>Keep one signed copy of each form for your records. Mail the other copies to:<br><br>
<b>Partnership for Health<br>
44 Binney Street<br>
SM 252<br>
Boston, MA 02115<br></b></li>
</ul>




            <? $footerWidth=280; ?>
            <? include("includes/footer.php"); ?>
            &nbsp;</td>
            <td width=30><img src="images/blank.gif" width=30 height=1 border=0 alt=""></td>
        </tr></table></td>
    <td width=22 valign="top"><img src="images/blank.gif" width=22 height=1 border=0 alt=""></td>

    <!-- ======== -->
    <!-- COLUMN 3 -->
    <!-- ======== -->
    <td width=170 valign="top" class="column3Text">
    <table border=0 cellpadding=0 cellspacing=0 width=170>
    <tr bgcolor="#FBFAE9">
        <td valign="top"><img src="images/rightnav-header.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
        <a href="health_pharmo.php" class="manualSubLink">1. Quit-smoking Medications home</a><br><br>
        <a href="health_pharmo-patch.php" class="manualSubLink">2. The Patch</a><br><br>
        <a href="health_pharmo-zyban.php" class="manualSubLink">3. Zyban</a><br><br>
        <a href="health_pharmo-request.php" class="manualSubLink"><b>4. Instructions for Requesting Medication</b></a><br>
            <table border=0 cellpadding=0 cellspacing=2 style="padding-top:5px; padding-left:8px; padding-bottom:10px; padding-right:5px;">
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><a href="health_pharmo-request2.php" class="manualSubLink">Mail</a></td></tr>
            <tr><td valign="top" class="tipsSubLink">&#149;&nbsp;</td><td valign="top" class="tipsSubText"><b>Download consent form</b></td></tr>
            </table><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

    <a href=""><img src="images/ads/new/ad_forum.gif" width=170 height=250 border=0 alt=""></a><br>
    <img src="images/white.gif" width=170 height=18 border=0 alt=""><br><br>
    &nbsp;</td>
</tr>
</table>


</body>
</html>
