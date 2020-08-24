<?php
namespace App\Http\Api;
use GuzzleHttp\Client;

class ApiClient{
    const BASE_URL = 'http://localhost/paginasPHP/ServiciosWeb/Corte_1/Desafio/ServiceWebApp/public/api/impresora/get_list';
    private static function get_connection($route = self::BASE_URL){
        return new Client([
            'base_uri' => $route,
            'timeout' => 20.0
        ]);
    }

    private static function get_data($route = '', $type = 'GET'){
        if($route == ''){
            return json_decode(self::get_connection()->request($type)->getBody()->getContents());
        }else{
            return json_decode(self::get_connection($route)->request($type)->getBody()->getContents());
        }
    
    }
    /**
     * Obtiene un listado paginado de elementos
     */
    public static function Get($route){
        return self::get_data($route);
    }
    /**
     * Obtiene 
     */
    public static function GetData(){
        return self::get_data();
    }
}