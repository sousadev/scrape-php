
<?php

include("simple_html_dom.php");
$webSite = "https://www.m4l.com/90-XB1P00HD0070-ASUS-External-Hard-Drive";
$html = file_get_html($webSite);


foreach($html->find('h1[itemprop="name"]') as $postDiv) {
    echo $postDiv;
   
}

?>