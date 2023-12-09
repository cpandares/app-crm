<?php

namespace App\Http\Controllers;

use App\Models\CustomerApiItaly;
use App\Models\CustomersApi;
use Illuminate\Http\Request;

class CustomersApiController extends Controller
{
    //
    
    public function index(Request $request){

        $input = $request->all();
       /*  dd($input['plataforma']); */
        $condicion = [];
        $title = 'Listado de clientes'; 
        $data_esp = CustomersApi::orderBy('id', 'desc')->get();
        $total = CustomersApi::count();
        $contador = 1;
        $data_italy = CustomerApiItaly::orderBy('id', 'desc')->get();
        $total_italy = CustomerApiItaly::count();
        $contador_italy = 1;
        $customers = [];
        $page = isset($input['page']) ? $input['page'] : 1;

        if( !isset($input['plataforma']) || !$input['plataforma'] || $input['plataforma'] == ''){
            $customers = array_merge($data_esp->toArray(), $data_italy->toArray());
            usort($customers, function($a, $b) {
                return $a['date_created'] <=> $b['date_created'];
            });
            $customers = array_reverse($customers);
        }else if($input['plataforma'] == 'it'){
            $customers = $data_italy->toArray();
        }else{
            $customers = $data_esp->toArray();
        }
        
        /* paginate */
      

        return view('api.clientes.index',[
            'title' => $title,
            'data' => $customers,
            'total' => $total,
            'contador' => $contador,
            'plataforma' => isset($input['plataforma']) ? $input['plataforma'] : '',
        ]);
    }
}
