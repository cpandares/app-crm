<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Storage;
use DB;

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use Carbon\Carbon;
use Exception;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $per_page = isset($request->per_page) ? $request->per_page : 20;
        $title = 'Productos registrados';
        $condicion = [];
        $input = $request->all();
        $productos = DB::table('products');

        if(isset($input['product_name'])){
            
            $condicion[] = ['products.product_name', 'like', '%' . $input['product_name'] . '%'];
            
        }
       
        if(isset($input['codigo'])){
            $condicion[] = ['products.sku', 'like', '%' . $input['codigo'] . '%'];
        }
        
       
        $productos = $productos->where($condicion)->paginate($per_page);
       

        return view('products.index', [
            'title' => $title,
            'productos' =>$productos,
            'per_page' => $per_page
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Crea un producto';
        return view('products.create', [
            'title' => $title
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user_id = auth()->user()->id;
       $request->validate([
            'product_name'=>'required|string',
            'sku' => 'required|string|unique:products'  
        ]);


       /*  dd($request->all()); */
        $imagen = $request->file('file');       
      
     
        if ($imagen != null) {
            
             $filename = time() . '.' . $request->file->extension();
            
            /*  dd($filename); */
          $request->file->move(public_path('images/productos/'), $filename);
          /* $url =  Storage::put('images', $filename); */
        }

        try {
            //code...
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->product_description = $request->product_description;
            $product->product_created_by = $user_id;
            $product->image = isset($filename) ? $filename : null;
            $product->price_esp = $request->price_esp;
            $product->price_ger = $request->price_ale;
            $product->price_italy = $request->price_ita;
            $product->price_fra = $request->price_fra;
            $product->price_usa = $request->price_portugal;/* precio portugal */
            $product->stock = $request->stock;
            $product->sku = $request->sku;

             $product->save();
            Alert::success('Producto registrado existosamente');
            return redirect()->route('admin.products.index');
        } catch (\PDOException $th) {
           /*  return $th->getMessage(); */
           Alert::error('Producto no se registro, contacte con soporte');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $title = 'Detalle del producto';
        return view('products.show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        if(!$product){
            return redirect()->back();
        }

        $title = 'Editar Producto';
        return view('products.edit', compact('product', 'title'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'product_name'=>'required|string',
            'sku'=>"required|string|unique:products,sku,$product->id",
        ]);
        if(!$product){
            return redirect()->back();
        }

        $imagen = $request->file('file'); 
        if ($imagen != null) {
            
             $filename = time() . '.' . $request->file->extension();
            
            /*  dd($filename); */
          $request->file->move(public_path('images/productos/'), $filename);
          /* $url =  Storage::put('images', $filename); */
          if($product->image){
            Storage::delete($product->image);
          }
        }else{
            $filename = $product->image;
        }


        try {
            //code...
           
            $product->product_name = $request->product_name;
            $product->product_description = $request->product_description;           
            $product->image = isset($filename) ? $filename : null;
            $product->price_ger = $request->price_ale;
            $product->price_italy = $request->price_ita;
            $product->price_fra = $request->price_fra;
            $product->price_usa = $request->price_portugal;/* precio portugal */
            $product->stock = $request->stock;
            $product->sku = $request->sku;

             $product->update();
             Alert::success('Producto actualizado correctamente');
             return redirect()->route('admin.products.index');
        } catch (\PDOException $th) {
            /* return $th->getMessage(); */
            Alert::error('Producto no actualizado, contacte con soporte');
            return redirect()->route('admin.products.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if(!$product){
            return redirect()->back();
        }

        try {
            //code...
            $product->delete();

            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }


    }


    public function listarPedidosApi(Request $request){

        $page = isset($request->page) ? $request->page : 1;
        $per_page = isset($request->per_page) ? $request->per_page : 100;
        $title = "Pedidos desde (WP españa) ";
        $client = new \GuzzleHttp\Client();
        $client_key = env('CLIENTE_SECRET_WOOCOMERCE_ESP');
        $secre_key = env('CLIENTE_KEY_WOOCOMERCE_ESP');
        

       
        $woocommerce = new Client('https://shop.ninesdeonil.com',
        $client_key,
         $secre_key,
         [
            'wp_api' => true, 
            'version' => 'wc/v3',
            'timeout' => 400,
            'verify_ssl'=> false,
         
        ]);
        
        $page = 1;
        $orders = [];
        
        do {
            $results = $woocommerce->get('orders', ['per_page' => 100, 'page' => $page]);
            $orders = array_merge($orders, $results);
           /*  dd($orders); */
            $page++;
        } while(count($results) > 0);

        $total = count($orders);

        return view('api.pedidos.index',[
            'title' => $title,
            'orders' => $orders,
            'total' => $total,
            'contador' => 1
        ]);

    }


    public function listarClientesApi(Request $request){

        $page = isset($request->page) ? $request->page : 1;
        $title = "Clientes desde (WP españa) ";
      
            $client_key = env('CLIENTE_SECRET_WOOCOMERCE_ESP');
            $secre_key = env('CLIENTE_KEY_WOOCOMERCE_ESP');

            $woocommerce = new Client('https://shop.ninesdeonil.com',
           $client_key,
            $secre_key,
            [
            'wp_api' => true, 
            'version' => 'wc/v3',
            'timeout' => 400,
            'verify_ssl'=> false,
            
        ]);

       /*  $results = $woocommerce->get('customers');

        $data = $results->paginate(100); */

        $data = $woocommerce->get('customers?page='.$page.'&per_page=100');
      /*   dd($data); */
        $total = count($data);
        $contador = 1;

        return view('api.clientes.index',[
            'title' => $title,
            'data' => $data,
            'total' => $total,
            'contador' => $contador,
        ]);
    }


    public function showPedidoApi($pedido){

        $title = "Detalle del pedido";
        $client = new \GuzzleHttp\Client();
        $client_key = env('CLIENTE_SECRET_WOOCOMERCE_ESP');
        $secre_key = env('CLIENTE_KEY_WOOCOMERCE_ESP');
        

       
        $woocommerce = new Client('https://shop.ninesdeonil.com',
        $client_key,
         $secre_key,
         [
            'wp_api' => true, 
            'version' => 'wc/v3',
            'timeout' => 400,
            'verify_ssl'=> false,
         
        ]);

        $order = $woocommerce->get('orders/'.$pedido);
       
       // dd($order);
        return view('api.pedidos.show',[
            'title' => $title,
            'order' => $order
        ]);


    }

    



}
