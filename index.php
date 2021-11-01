<?php

$svensonBooks = [
    'enlevé!'=>'1886',
    'catriona'=>'1892',
    'la flèche noire' => '1882',
    
  ];
//var_dump($svensonBooks);
asort($svensonBooks);
//var_dump ($svensonBooks);
foreach ($svensonBooks as $svensonBook => $releaseDate) {
    echo $releaseDate . ' - ' . $svensonBook ;
    echo "<br>";
}



?>