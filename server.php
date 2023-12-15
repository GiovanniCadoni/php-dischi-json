<?php

    $string = file_get_contents("dischi.json");
    //var_dump($string);

    $list = json_decode($string, true);
    //var_dump($list);

    $json = json_encode($list);

    header("Content-Type: application/json");
    echo $json;

?>