<?php

namespace App\Http\Controllers;

use App\Models\CustomerApiItaly;
use App\Models\CustomersApi;
use Illuminate\Http\Request;

class CustomersApiController extends Controller
{
    //
    
    public function index(){

        $title = 'Listado de clientes';
        $data_esp = CustomersApi::orderBy('id', 'desc')->get();
        $total = CustomersApi::count();
        $contador = 1;

        $data_italy = CustomerApiItaly::orderBy('id', 'desc')->get();
        $total_italy = CustomerApiItaly::count();
        $contador_italy = 1;

        $customers = array_merge($data_esp->toArray(), $data_italy->toArray());
        usort($customers, function($a, $b) {
            return $a['date_created'] <=> $b['date_created'];
        });

        $customers = array_reverse($customers);

        return view('api.clientes.index',[
            'title' => $title,
            'data' => $customers,
            'total' => $total,
            'contador' => $contador,
        ]);
    }
}
