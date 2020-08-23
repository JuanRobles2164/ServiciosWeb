<?php
namespace App\Http\Api;
use GuzzleHttp\Client;

class ApiClient{
    const BASE_URL = 'http://localhost/paginasPHP/SistemasOperativos/Corte_1/Desafio/ServiceWebApp/public/api/impresora/get_list';
    private static function get_connection($route = self::BASE_URL){
        return new Client([
            'base_uri' => $route,
            'timeout' => 20.0
        ]);
    }


    public static function GetData($route = self::BASE_URL){
        if($route != '' || $route != null){
            return json_decode(self::get_connection($route)->request('GET')->getBody()->getContents());
        }
        return json_decode(self::get_connection()->request('GET')->getBody()->getContents());
    }
}