@extends('layouts.app')

@section('content')
<style>
    .addons{
        height: calc(1.5em + 0.75rem + 3px) !important;
    }
   
        .image-wrapper{
            position: relative;
            padding-bottom: 56%;
        }
        .image-wrapper img{
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
            <div class="card card-flush">

                <div class="row">
                   
                    <div class="col-6 pull-rigth">
                        <a href="{{ url('admin/products') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
                
                <hr>

                {!! Form::open(['route'=>'admin.products.store', 'autocomplete'=>'off', 'files'=>true]) !!}

                            <div class="row">
                                <div class="col-md-6">
                                  
                                    {!! Form::label('product_name', 'Nombre') !!}
                                    {!! Form::text('product_name', null, ['class'=>'form-control','placeholder'=>'Muñeca tipo 1', ]) !!}
                                    @error('name')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('sku', 'Codigo') !!}
                                    {!! Form::text('sku', null, ['class'=>'form-control','placeholder'=>'MN-0001', ]) !!}
                                    @error('sku')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>           
                            
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('price_esp', 'Precio españa') !!}
                                    <div class="input-group "  >
                                        <input type="text" name="price_esp" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <div class="input-group-append addons">
                                          <span class="input-group-text">€</span>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  
                                    {!! Form::label('price_ale', 'Precio Alemania') !!}
                                    <div class="input-group "  >
                                        <input type="text" name="price_ale" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <div class="input-group-append addons">
                                          <span class="input-group-text">€</span>
                                        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-4">
                                    {!! Form::label('price_ita', 'Precio Italia') !!}
                                    
                                    <div class="input-group "  >
                                        <input type="text" name="price_ita" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <div class="input-group-append addons">
                                          <span class="input-group-text">€</span>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  
                                    {!! Form::label('price_fra', 'Precio Francia') !!}
                                    
                                    <div class="input-group "  >
                                        <input type="text" name="price_fra" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <div class="input-group-append addons">
                                          <span class="input-group-text">€</span>
                                        
                                        </div>
                                      </div>
                                 
                                </div>
                                <div class="col-md-4">
                                  
                                    {!! Form::label('price_portugal', 'Precio Portugal') !!}
                                 
                                    <div class="input-group "  >
                                        <input type="text" name="price_portugal" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
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
                                    <textarea name="product_description" class="form-control" style="resize: none"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <strong> {!! Form::label('stock', 'Stock') !!}</strong>
                                   
                                    <input type="number" class="form-control" name="stock">
                                </div>
                               
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <strong> {!! Form::label('file', 'Imagen') !!}</strong>
                                   
                                    {!! Form::file('file', ['class'=>'form-control', 'accept'=>'image/*' ]) !!}
                                    
                                    @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="col">
                                    @isset($product->image)
                                    <div class="image-wrapper">
                                        <img src="{{-- {{ $post->image->url }} --}}" alt="" id="picture">
                                    </div>
                                    @else
                                    <div class="image-wrapper">
                                        <img src="https://t3.ftcdn.net/jpg/02/48/42/64/240_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" id="picture">
                                    </div>
                                    @endisset
                                </div>
                               
                            </div>
                        
                          
            
                            <div class="mt-5">
            
                                {!! Form::submit('Guardar', ['class'=>'btn btn-outline-primary ']) !!}
                                
                            </div>
                            {!! Form::close() !!}
            </div>

        </div>

    </div>

</div>

@endsection
