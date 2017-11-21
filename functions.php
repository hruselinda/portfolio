<?php

function p($arr){
    echo '<pre>'.print_r($arr, true).'</pre>';
}

function pe($arr){
    echo '<pre>'.print_r($arr, true).'</pre>';
    exit;
}

define('DS', DIRECTORY_SEPARATOR);

function t($str, $lang){
    $translations = include "locales" . DS . $lang . ".php";
    return $translations[$str];
}