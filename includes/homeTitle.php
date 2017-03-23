<pre>
<?

$inputFile="/var/www/html/PFH/images/pageTitles/homeTitle_blank.gif";
$outputFile="/var/www/html/PFH/images/pageTitles/homeTitle_blank2.png";
$outputFile2="/var/www/html/PFH/images/pageTitles/homeTitle_blank2.jpg";
$results=system("convert  -stroke none -fill \"#404087\" -pointsize 40 -font \"/usr/share/fonts/ttf/verdana.ttf\" -draw \"text 220,63 Welcome!\" ".$inputFile." ".$outputFile);
$results=system("convert  ".$outputFile." ".$outputFile2);

?>
</pre><br><br>

<img src="http://www.pfhonline.org/images/pageTitles/homeTitle_blank2.jpg" width=400 height=100>