
<?php
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"127.0.0.10:5000/");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);
    $requestString = '{
        "sites": [
        { "name":"菜鸟教程" , "url":"www.runoob.com" }, 
        { "name":"google" , "url":"www.google.com" }, 
        { "name":"微博" , "url":"www.weibo.com" }
        ]
    }';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
    curl_setopt($ch, CURLOPT_POST,true);
    $output = curl_exec($ch);
    curl_close($ch);
    
    echo $output;
?>

