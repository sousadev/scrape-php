
<?php

include("simple_html_dom.php");
$webSite = "https://www.m4l.com/memory/";
$html = file_get_html($webSite);


foreach($html->find('#product-listing-container > div > form:nth-child(3) > div > div:nth-child(1) > article > div.right-block > h4 > a') as $postDiv) {
    echo $postDiv . "<br>";
   
}

?>