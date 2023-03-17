@extends('layouts.app')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <!--begin::Card-->
            <div class="card card-flush">

                <div class="row">
                    <div class="col-">
                        <h2>Agrega el nuevo producto</h2>

                    </div>
                    <div class="col-6 pull-rigth">
                        <a href="" class="btn btn-primary">Volver</a>
                    </div>
                </div>
                
                <hr>

                {!! Form::open(['route'=>'admin.products.store', 'autocomplete'=>'off', 'files'=>true]) !!}

                            <div class="row">
                                <div class="col-md-6">
                                  
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                                    @error('name')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('sku', 'Codigo') !!}
                                    {!! Form::text('sku', null, ['class'=>'form-control','placeholder'=>'PR-0001', ]) !!}
                                    @error('lastname')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>           
                            
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('price', 'Precio españa') !!}
                                    {!! Form::text('price_esp', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                </div>
                                <div class="col-md-6">
                                  
                                    {!! Form::label('price_ale', 'Precio Alemania') !!}
                                    {!! Form::select('price_ale', [], null, ['class'=>'form-control','placeholder'=>'España', ]) !!}
                                    @error('country')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-4">
                                    {!! Form::label('price_ita', 'Precio Italia') !!}
                                    {!! Form::text('price_ita', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                </div>
                                <div class="col-md-4">
                                  
                                    {!! Form::label('price_fra', 'Precio Francia') !!}
                                    {!! Form::select('price_fra', [], null, ['class'=>'form-control','placeholder'=>'España', ]) !!}
                                    @error('country')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                  
                                    {!! Form::label('price_usa', 'Precio Estados Unidos de America') !!}
                                    {!! Form::select('price_usa', [], null, ['class'=>'form-control','placeholder'=>'España', ]) !!}
                                    @error('country')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-5">
                                <div class="col-md-12">
                                    {!! Form::label('city', 'Imagen') !!}
                                    {!! Form::file('city', null, ['class'=>'form-control mt-5','placeholder'=>'Barcelona', ]) !!}
                                </div>
                               
                            </div>
            
                           
                            <div class="row  mt-2">
                                <div class="col-md-12">
                                    {!! Form::label('description', 'Descripción') !!}
                                    {!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
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