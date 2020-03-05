<?php

//Teste do segundo tipo de arquivo sem usar sumple html  dom;
    $dom = new DOMDocument();
    $dom->loadHTML('https://www.metro1.com.br');
    $consultas = $dom->getElementByTagName('aside');
    foreach ($consultas as $link) {
        echo $link->getElementByTagName('aside').PHP_EOL;
    }

?>
