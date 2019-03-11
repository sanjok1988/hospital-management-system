<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

if (!function_exists('setCookie')) {
    function setCookie($cookieName, $cookieValue)
    {
        setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); //name,value,time,url
    }
}

if (!function_exists('getCookie')) {
    function getCookie(Request $request, $name)
    {
        return $request->cookie($name);
    }
}


if (!function_exists('getLang')) {
    function getLang(Request $request)
    {
        return getCookie($request, $name ='lang');
    }
}

if (!function_exists('setLang')) {
    function setLang($lang)
    {
        return setCookie("lang", $lang);
    }
}

if (!function_exists('setNewsLang')) {
    function setNewsLang($lang)
    {
        return Session::put("news_lang", $lang);
    }
}

if (!function_exists('getNewsLang')) {
    function getNewsLang()
    {
        if ($lang = Session::get("news_lang")) {
            return $lang;
        }
        return "en";
    }
}

function getUserIP()
{
    $ipaddress = '';
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else
    {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    return $ipaddress;
}

function getStatus($sign_in_time, $setting_time){
    $sign_in = \Carbon\Carbon::createFromFormat('H:i:s', $sign_in_time);
    $set_time = \Carbon\Carbon::createFromFormat('H:i:s', $setting_time);
    $diff = $set_time->diffInMinutes($sign_in);
    
        $data['time_diff']= gmdate('H:i:s', $diff);//convertToHoursMins($diff); 
        dd($sign_in_time->timestamp);

    if($diff != 0 || $diff > 0){
        $data['status']= "late";
        return $data;
    } elseif($diff < 0) {
        $data['status']= 'before time';
        return $data;
    }elseif($diff < 0) {
        $data['status']= 'at time';
        return $data;
    }

}

function convertToHoursMins($time) {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return $hours.":" . $minutes;
}