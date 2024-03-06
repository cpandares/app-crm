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
                <a  href="javascript:history.go(-1)" class="btn btn-outline-success">Cancelar</a>
            </div>
           
            <div class="card-body">
                {!! Form::open(['route' => 'admin.contact.store', 'autocomplete' => 'off', 'files' => true, 'id' =>'formContact']) !!}
                @if ($id_campaing != null)
                    {!! Form::hidden('campaing_id', $id_campaing) !!}
                    
                @else
                    {!! Form::hidden('campaing_id', null) !!}                    
                @endif
                

            <div class="row mt-2" id="empresa_repre">
                <div class="col-sm-12 col-sm-12 col-md-6">
                    
                        {!! Form::label('name_empresa', 'Nombre Empresa Fiscal') !!}
                        {!! Form::text('name_empresa', null, ['class' => 'form-control', 'placeholder' => 'Inversiones llc']) !!}
                    
                </div>
                    <div class="col-sm-12 col-sm-12 col-md-6">
                        {!! Form::label('name_comercial', 'Nombre Comercial') !!}
                        {!! Form::text('name_comercial',  null, [
                            'class' => 'form-control',
                            'placeholder' => 'Nombre Comercial',
                            'id' => 'name_comercial'
                        ]) !!}
                    </div>
            </div>
            <div class="row mt-2" id="empresa_repre">
                <div class="col-sm-12 col-sm-12 col-md-6">
                    {!! Form::label('codigo_nif', 'Numero de N.I.F') !!}
                    {!! Form::text('codigo_nif',  null, [
                        'class' => 'form-control',
                        'placeholder' => 'Numero de N.I.F',
                        'id' => 'codigo_nif'
                    ]) !!}
                </div>
                
                <div class="col-sm-12 col-sm-12 col-md-6">
                    {!! Form::label('nif', 'Tipo de Contacto') !!}
                    {!! Form::select('contact_type',  [
                        'Cadena de tiendas' => 'Cadena de tiendas',
                        'Tienda Juguetes' => 'Tienda Juguetes',
                        'Tienda Online' => 'Tienda Online',
                        'Tienda Regalos' => 'Tienda Regalos',
                        'Tienda papelería' => 'Tienda papelería',
                        'Tienda educativa' => 'Tienda educativa',
                        'Tienda Puericultura' => 'Tienda Puericultura',
                        'Tienda Souvenirs' => 'Tienda Souvenirs',
                        'Concept Store' => 'Concept Store',
                        'Distribuidor' => 'Distribuidor',
                        'Mayorista' => 'Mayorista',
                        'Agente Comercial' => 'Agente Comercial',
                        'Importador' => 'Importador',
                    ], null, [
                        'class' => 'form-control',
                        'placeholder' => 'Seleccionar'
                    ]) !!}
            </div>
            <hr class="mt-2">
            <div class="row mt-2">
                <div class="col-sm-12 col-sm-12 col-md-6">

                    {!! Form::label('name', 'Persona de Contacto') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pedro Perez', 'required']) !!}
                    @error('name')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div>
                {{-- <div class="col-sm-12 col-sm-12 col-md-6">

                    {!! Form::label('lastname', 'Apellidos') !!}
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Perez', 'required']) !!}
                    @error('lastname')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div> --}}
                <div class="col-sm-12 col-sm-12 col-md-6">
                    {!! Form::label('phone', 'Teléfono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+34 455487895', 'required']) !!}
                </div>
            </div>

            <div class="row  mt-2">
                
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'test@prueba.com']) !!}
                    
                </div>
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('postcode', 'Código Postal') !!}
                    {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '03430']) !!}
                </div>
            </div>

            <div class="row  mt-2">
                
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('country', 'País') !!}
                    {!! Form::select('country', $paises, null, [
                        'class' => 'form-control',
                        'placeholder' => '--Seleccionar País--',
                        'required',
                        'id' => 'country'
                    ]) !!}
                    @error('country')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('providence', 'Provincia') !!}
                    {!! Form::text('providence', null, ['class' => 'form-control', 'placeholder' => 'Alicante']) !!}
                </div>
            </div>

           {{--  <div class="row  mt-2">
                
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('state', 'Provincia (opcional)') !!}
                    {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div> --}}

            <div class="row  mt-2">

                <div class="col-sm-12 col-md-6">

                    {!! Form::label('city', 'Ciudad') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    {!! Form::text('city', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ejemplo: Onil',
                    ]) !!}


                </div>

                <div class="col-sm-12 col-md-6">

                    {!! Form::label('address', 'Dirección') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    
                    {!! Form::text('address', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Calle tercera casa 25',
                    ]) !!}


                </div>
                
            </div>

            <div class="row  mt-2">
                
             <div class="col-sm-12 col-md-6">
                <label for="">Pagina Web</label>
                {!! Form::text('website', null, [
                    'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                    'class' => 'form-control',
                    'placeholder' => 'www.example.com',
                ]) !!}
             </div>
               

                @if (!$id_campaing)
                    <div class="col-sm-12 col-md-6">

                        {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                        {!! Form::select('campaing', $campaings_list, null, [
                            'class' => 'form-control',
                            'placeholder' => 'Seleccionar',
                            'id' => 'campaing_contact'
                        ]) !!}



                    </div>
                    
                @endif

            </div>




            <div class="mt-5">

                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary ']) !!}

            </div>
            {!! Form::close() !!}
            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')
    <script>

        $(document).ready(function() {
           
        });

        $('#formContact').validate({
            rules: {
                name: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                country: {
                    required: true,
                },
                medio_comunicacion: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Este campo es requerido',
                },
                lastname: {
                    required: 'Este campo es requerido',
                },
                email: {
                    required: 'Este campo es requerido',
                    email: 'El email no es válido',
                },
                country: {
                    required: 'Este campo es requerido',
                },
                medio_comunicacion: {
                    required: 'Este campo es requerido',
                },
            },
            submitHandler: function(form) {
                var url = $(form).attr('action');
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $('#formContact').serialize(),
                    success: function(result) {
                        if (result.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Contacto creado correctamente',
                                showConfirmButton: true,
                                confirmButtonText: 'Aceptar',
                            }).then(isConfirm => {
                                if (isConfirm) {
                                    
                                    window.location.href = document.referrer; // Redirect to previous page
                                }
                            })
                            
                        
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Algo salió mal!',
                            })
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Algo salió mal!',
                        })
                    }
                });
            }
        });
    </script>
