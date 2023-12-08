@extends('layouts.app')

@section('content')
    <style>
        .addons {
            height: calc(1.5em + 0.75rem + 3px) !important;
        }

        .image-wrapper {
            position: relative;
            padding-bottom: 56%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                <!--begin::Card-->
                <div class="card card-flush p-5">

                    <div class="row">
                       
                        <div class="col-6 pull-rigth">
                            <a href="{{ url('admin/products') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>

                    <hr>

                    {!! Form::model($product, ['route' => ['admin.products.update', $product], 'autocomplete' => 'off', 'files' => true, 'method' =>'put']) !!}

                    <div class="row">
                        <div class="col-md-6">

                           <strong> {!! Form::label('product_name', 'Nombre') !!}</strong>
                            {!! Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Muñeca tipo 1']) !!}
                            @error('product_name')
                                <small class="text-danger">Este campo es requerido</small>
                            @enderror
                        </div>
                        <div class="col-md-6">

                           <strong> {!! Form::label('sku', 'Codigo') !!}</strong>
                            {!! Form::text('sku', isset($product->sku) ? $product->sku : null, ['class' => 'form-control', 'placeholder' => 'MN-0001']) !!}
                            @error('sku')
                            
                            {{--  @dump(@error('sku')) --}}
                                <small class="text-danger">Este código pertenece a otro producto</small>
                            @enderror
                        </div>
                    </div>


                    <div class="row  mt-2">
                        <div class="col-md-6">
                           <strong> {!! Form::label('price_esp', 'Precio españa') !!}</strong>
                            <div class="input-group ">
                                <input 
                                    type="text" 
                                    name="price_esp" 
                                    class="form-control"
                                    value="{{ isset($product->price_esp ) ? $product->price_esp : null }}"
                                  >
                                <div class="input-group-append addons">
                                    <span class="input-group-text">€</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                           <strong> {!! Form::label('price_ale', 'Precio Alemania') !!}</strong>
                            <div class="input-group ">
                                <input 
                                    type="text" 
                                    name="price_ale" 
                                    class="form-control"
                                    value="{{ isset($product->price_ale ) ? $product->price_ale : null }}"
                                    >
                                <div class="input-group-append addons">
                                    <span class="input-group-text">€</span>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-4">
                            <strong>{!! Form::label('price_ita', 'Precio Italia') !!}</strong>

                            <div class="input-group ">
                                <input 
                                type="text" 
                                name="price_ita" 
                                class="form-control"
                                value="{{ isset($product->price_ita ) ? $product->price_ita : null }}">
                                <div class="input-group-append addons">
                                    <span class="input-group-text">€</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <strong> {!! Form::label('price_fra', 'Precio Francia') !!}</strong>
                           

                            <div class="input-group ">
                                <input 
                                    type="text" 
                                    name="price_fra" 
                                    class="form-control"
                                    value="{{ isset($product->price_fra ) ? $product->price_fra : null }}"
                                    >
                                <div class="input-group-append addons">
                                    <span class="input-group-text">€</span>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">

                           <strong> {!! Form::label('price_portugal', 'Precio Portugal') !!}</strong>

                            <div class="input-group ">
                                <input 
                                    type="text" 
                                    name="price_portugal" 
                                    class="form-control"
                                    value="{{ isset($product->price_usa ) ? $product->price_usa : null }}"
                                    >
                                <div class="input-group-append addons">
                                    <span class="input-group-text">€</span>

                                </div>
                            </div>

                        </div>
                    </div>

                    {{--  <div class="row  mt-5">
                                <div class="col-md-12">
                                    {!! Form::label('image', 'Imagen') !!}
                                    {!! Form::file('image', null, ['class'=>'form-control mt-5','placeholder'=>'Barcelona', ]) !!}
                                </div>
                               
                            </div> --}}




                    <div class="row  mt-2">
                        <div class="col-md-6">
                            {!! Form::label('product_description', 'Descripción') !!}
                            <textarea name="product_description" class="form-control" style="resize: none">{{ $product->product_description }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <strong> {!! Form::label('stock', 'Stock') !!}</strong>
                            
                            <input type="number" class="form-control" min="1" name="stock" value="{{ $product->stock }}" >
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <strong> {!! Form::label('file', 'Imagen') !!}</strong>

                            {!! Form::file('file', ['class' => 'form-control', 'accept' => 'image/*']) !!}

                            @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col">
                            @isset($product->image)
                                <div class="image-wrapper">
                                    <img src="{{  URL('/images/productos/') .'/'. $product->image}}"  alt="" id="picture">
                                </div>
                            @else
                                <div class="image-wrapper">
                                    <img src="https://t3.ftcdn.net/jpg/02/48/42/64/240_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg"
                                        id="picture">
                                </div>
                            @endisset
                        </div>

                    </div>


                    <br>
                    <div class="mt-5 text-center">

                      {{--   {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary ']) !!} --}}

                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>

    </div>
@endsection
