<?php

namespace App\Helpers;

use GuzzleHttp;

class API
{

    public static function get($url)
    {
        $client = new GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);
        return (object) $array_response;
    }


    public static function post($url,$body) {
        $client = new GuzzleHttp\Client();
        $request = $client->post($url, $body);
        $response = json_decode($request->getBody()->getContents(),TRUE);
        return (object) $response;
    }
}

?>
