<?
include("includes/site-functions.php");
$sectionID="news";
contentViewed(138);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
    <title>PFH: News & Info</title>
    
    <script language="javascript" src="includes/site-functions.js"></script>
    <link rel="stylesheet" href="includes/styles-n_<?=$sectionID?>.css" type="text/css">
    <link rel="stylesheet" href="includes/styles-n.css" type="text/css">
    <style type="text/css">
    @import url(includes/styles-ie_<?=$sectionID?>.css);
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
    <td width=400 valign="top"><img src="images/pageTitles/news_archives.gif" width=400 height=100 border=0 alt=""><br><br>
        <table border=0 cellpadding=0 cellspacing=0 width=400>
        <tr>
            <td width=25><img src="images/blank.gif" width=25 height=1 border=0 alt=""></td>
            <td width=345 valign="top" class="column2Text"><img src="images/blank.gif" width=345 height=1 border=0 alt=""><br>

<?
if (strlen($HTTP_GET_VARS["newsID"])<1) $HTTP_GET_VARS["newsID"]=2;
switch ($HTTP_GET_VARS["newsID"]) {
case 1: ?>
<span class="manualHeader">SECONDARY CANCERS IN SURVIVORS</span><br><br>
<b>Long-term population-based risks of second malignant neoplasms after childhood cancer in Britain.</b>
Jenkinson et al., 2004. British Journal of Cancer (91), 1905-1910.<br><br>
Childhood cancer survivors face an increased risk of having a secondary cancer due to late effects of cancer and its treatment. This study looked at this risk by following a large group of childhood cancer survivors (16,541 people) for 10 years. Fewer than 2% of patients developed secondary cancerous tumors during the study period. Patients who were diagnosed with cancer after 1980 and had both radiation and chemotherapy had a higher risk of developing a secondary cancer. Overall, however, the risks of developing a secondary cancer due to treatment were found to be relatively small.<br><br>
<?    break;
case 2: ?>
<span class="manualHeader">AMPUTATION'S EFFECT ON SURVIVORS</span><br><br>
<b>Function and quality of life of survivors of pelvic and lower extremity osterosarcoma and Ewing's sarcoma: The Childhood Cancer Survivor Study.</b>
Nagarajan et al., 2004. British Journal of Cancer (91), 1858-1865.<br><br>
In general, surgeries that allow a patient to keep his or her limbs have been more common than surgeries that amputate the leg. This is based on the belief that these type of surgeries will give a person better function and a better quality-of-life (QOL). However, this issue has not been fully studied among children.<br><br> This study used data from the Childhood Cancer Survivor Study, and followed 528 adults who were long-term survivors of pediatric lower limb bone tumors. These survivors were all diagnosed between 1970 and 1986. Cancer survivors in the study reported excellent function and quality of life overall. Childhood cancer survivors who had limbs amputated  did not differ in function, QOL scores, or how they saw their own health, from those survivors who had surgeries where the limb was not amputated. This study suggests that over time, amputees generally do as well as people who had limb-sparing surgeries.<br><br>
<?    break;
case 3: ?>
<span class="manualHeader">NEW TREATMENT FOR STEM CELL TRANSPLANTS</span><br><br>
<b>A multiagent strategy to decrease regimen-related toxicity in children undergoing allogeneic hematopoietic stem cell transplantation.</b>
Thornley et al., 2004. Biology of Blood and Marrow Transplantation (10), 635-644.<br><br>
Some medications used in treatment can cause additional health problems among children who have hematopoietic stem cell transplantation (HSCT). This study gave 37 patients a new combination of treatments made up of ursodeoxycholic acid, folinic acid, vitamin E, and nutrients delivered in different ways, in an effort to reduce health problems related to the treatment itself. These patients were compared with previous patients who had taken a different combination of treatments in the past. <br><br>Researchers found that many patients adopted the new treatment plan and that they tolerated it well. In addition, the new treatment led to fewer health problems than has occurred with past treatments. This study suggests that new progress is being made in the treatment of diseases that require HSCT.<br><br>
<?    break;
}
?>









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
    <tr bgcolor="#F2FAF6">
        <td valign="top"><img src="images/rightnav-header2b.gif" width=170 height=49 border=0 alt=""><br>
        <div style="margin:12px;" class="manualSubText">
<!--        <<? if ($HTTP_GET_VARS["newsID"]!=1) { ?>a href="news_archive.php?newsID=1"<? } else { ?>b<? }?>>1. Secondary Cancers in Survivors</<? if ($HTTP_GET_VARS["newsID"]!=1) { ?>a<? } else { ?>b<? }?>><br><br> -->
        <<? if ($HTTP_GET_VARS["newsID"]!=2) { ?>a href="news_archive.php?newsID=2"<? } else { ?>b<? }?>>1. Amputation's Effect on Survivors</<? if ($HTTP_GET_VARS["newsID"]!=2) { ?>a<? } else { ?>b<? }?>><br><br>
        <<? if ($HTTP_GET_VARS["newsID"]!=3) { ?>a href="news_archive.php?newsID=3"<? } else { ?>b<? }?>>2. New Treatment for Stem Cell Transplants</<? if ($HTTP_GET_VARS["newsID"]!=3) { ?>a<? } else { ?>b<? }?>><br><br>
        </div><br>
        &nbsp;</td>
    </tr>
    </table><img src="images/white.gif" width=170 height=18 border=0 alt=""><br>

<?
if (strlen($HTTP_GET_VARS["newsID"])<1) $HTTP_GET_VARS["newsID"]=1;
switch ($HTTP_GET_VARS["newsID"]) {
case 1: ?>
    <a href="health_bodyguy.php"><img src="images/ads/ad_yourbody.gif" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
<?    break;
case 2: ?>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br>
    <a href="health_manual-1g2.php"><img src="images/ads/new/ad-3.jpg" border=0 alt=""></a><br><br>
<?    break;
case 3: ?>
    <a href="health_tips-talkWithDoc.php"><img src="images/ads/new/ad-8.jpg" border=0 alt=""></a><br>
    <a href="forum/viewforum.php?f=1"><img src="images/ads/new/ad_forum.gif" border=0 alt=""></a><br><br>
<?    break;
}
?>
    &nbsp;</td>
</tr>
</table>

</body>
</html>
