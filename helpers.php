<?php

class Helper{
    const BASE_URL = "http://localhost/kertase";
}

if(!function_exists('get_url')){
    function get_url($path = ""){
        $url = Helper::BASE_URL.'/'.$path;
        return $url;
    }
}