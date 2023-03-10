@extends('layouts.app') 
@section('content')

<div
    class="content d-flex flex-column flex-column-fluid"
    id="kt_content"
    bis_skin_checked="1"
>
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
        <div class="card" bis_skin_checked="1">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6" bis_skin_checked="1">
                <!--begin::Card title-->
                <div class="card-title" bis_skin_checked="1">
                    <h2>Agrega un nuevo contacto</h2>



                </div>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-outline-success">Cancelar</a>
            </div>
           
            <div class="card-body">
                {!! Form::open(['route'=>'admin.contact.store', 'autocomplete'=>'off', 'files'=>true]) !!}

                <div class="row">
                    <div class="col-md-6">
                      
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                        @error('name')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                       
                        {!! Form::label('lastname', 'Apellido') !!}
                        {!! Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Perez', ]) !!}
                        @error('lastname')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                    </div>
                </div>

                <div class="row  mt-2">
                    <div class="col-md-6">
                        {!! Form::label('phone', 'Telefono') !!}
                        {!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                    </div>
                    <div class="col-md-6">
                       
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                        @error('email')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                    </div>
                </div>

                <div class="row  mt-2">
                    <div class="col-md-6">
                        {!! Form::label('postcode', 'C??digo Postal') !!}
                        {!! Form::text('postcode', null, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                    </div>
                    <div class="col-md-6">
                      
                        {!! Form::label('country', 'Pa??s') !!}
                        {!! Form::select('country', $paises, null, ['class'=>'form-control js-example-basic-single','placeholder'=>'Espa??a', ]) !!}
                        @error('country')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                    </div>
                </div>

                <div class="row  mt-2">
                    <div class="col-md-6">
                        {!! Form::label('city', 'Ciudad') !!}
                        {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('state', 'Provincia (opcional)') !!}
                        {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                    </div>
                </div>

                <div class="row  mt-2">
                    <div class="col-md-6">
                     
                        {!! Form::label('medio_comunicacion', 'Se Contact?? mediante') !!}
                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                        {!! Form::select('medio_comunicacion',$comunicacion_medias, null,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}

                        @error('medio_comunicacion')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                       
                        {!! Form::label('medio_comunicacion', 'Estado del Cliente') !!}
                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                        {!! Form::select('statu',$status, null,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}

                        @error('statu')
                            <small class="text-danger">Este campo es requerido</small>
                        @enderror
                        
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