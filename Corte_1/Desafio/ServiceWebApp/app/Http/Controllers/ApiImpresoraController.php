<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daos\ImpresoraDao;
class ApiImpresoraController extends Controller
{
    public function Get(Request $request){
        return ImpresoraDao::Get($request->q);
    }

    public function GetList(Request $request){
        return ImpresoraDao::GetList();
    }
}
