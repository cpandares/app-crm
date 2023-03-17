<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Product::all();
        $title = 'Productos registrados';
        return view('products.index', [
            'productos' =>$productos,
            'title' => $title
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
            'product_name'=>'required',
            'product_description' => 'required'  
        ]);

        try {
            //code...
            $product = new Product();
            $product->product_name = $request->product_name;
            $product->product_description = $request->product_description;
            $product->product_created_by = $user_id;
        
            $product->price_esp = $request->price_esp;
            $product->price_ger = $request->price_ger;
            $product->price_italy = $request->price_italy;
            $product->price_usa = $request->price_usa;

             $product->save();

             return redirect()->route('admin.products', compact('product'));
        } catch (\Throwable $th) {
            //throw $th;
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

        return view('product.show', compact('product'));
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


        return view('products.show', compact('product'));
      
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
        if(!$product){
            return redirect()->back();
        }


        try {
            //code...
            $product->update($request->all());
        } catch (\Throwable $th) {
            //throw $th;
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


    public function listarClientesApi(){

        $title = "Productos Api";

        return view('api.pedidos.index',[
            'title' => $title
        ]);
    }




}
