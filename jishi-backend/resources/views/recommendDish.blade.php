<?php
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"127.0.0.10:5000");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);
    $output = curl_exec($ch);
    curl_close($ch);
    echo $output;
?>