<?php
include("translate.php");
include("simple_html_dom.php"); //using simple html dom for modifying
$url = "https://www.bridging-the-gap.com/erd-entity-relationship-diagram/";
 $html = translate($url, "en", "id");
 $html = str_get_html($html);
 //--- article content
 $ar = $html->find('div[id=content]', 0);
 $html = $ar->outertext;
 echo $html;
?>
