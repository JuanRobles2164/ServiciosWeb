<?php

namespace App\Http\Controllers;

use App\Http\Api\ApiClient;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        $rows = ApiClient::GetData($request->route);
        return view('consumer')
        ->with(compact(
            [
                'rows'
            ])
        );
    }
    public function export()
{
    $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=file.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $data_collection = ApiClient::GetData();
    $columns = array('id', 'name', 'optional_string', 'email', 'created_at', 'updated_at');

    $callback = function() use ($data_collection, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach($data_collection as $unit) {
            fputcsv($file, array(
            $unit->id, 
            $unit->name, 
            $unit->optional_string, 
            $unit->email, 
            $unit->created_at, 
            $unit->updated_at
        ));
        }
        fclose($file);
    };
    return response()->stream($callback, 200, $headers);
}
}
