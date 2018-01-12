<?php

function fixUrl($string, $link){
    $parsed = parse_url($string);
    parse_str($parsed['query'], $params);
    foreach($params as $key => $val){
        if($val == 3){
            unset($params[$key]);
        }
        asort($params);
        $arrUrl = array("url" => $link);
        $arrParams = array_merge($params, $arrUrl);
    }
    $fixUrl = $parsed['scheme'] . '://' . $parsed['host'] . '?' . http_build_query($arrParams);

    return $fixUrl;
}

$string = 'https://www.somehost.com/test/index.html?param1=4&param2=3&param3=2&param4=1&param5=3';
$newLink = '/test/index.html';
echo fixUrl($string, $newLink);

