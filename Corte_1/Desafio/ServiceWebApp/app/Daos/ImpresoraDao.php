<?php
namespace App\Daos;

use App\Models\Impresora;

class ImpresoraDao implements MasterDao
{
    public static function Get($limit = 15){
        $impresoras = Impresora::paginate($limit);
        return $impresoras;
    }
    public static function GetList(){
        return Impresora::all();
    }
}