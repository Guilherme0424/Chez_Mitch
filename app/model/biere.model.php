<?php
function getSpecificBeers($pdo, $ids){
    $list = join(",", $ids);  "SELECT * FROM bière WHERE id_bière IN (" . $list . ")"; } 


