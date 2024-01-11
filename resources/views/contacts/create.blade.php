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
                {!! Form::open(['route' => 'admin.contact.store', 'autocomplete' => 'off', 'files' => true, 'id' =>'formContact']) !!}
                @if ($id_campaing != null)
                    {!! Form::hidden('campaing_id', $id_campaing) !!}
                    
                @else
                    {!! Form::hidden('campaing_id', null) !!}                    
                @endif
                <div class="row">
                    <div class="col-sm-12 col-sm-12 col-md-6">

                        <label for="comisiones" class="form-label">¿Representa una
                            empresa?
                        </label><br>
                        <input type="checkbox" id="representa_empresa"
                            name="representa_empresa" data-toggle="toggle" data-on="Si"
                            data-off="No" data-onstyle="primary" data-offstyle="danger"
                            onchange="accion_respresenta(this)">

                    </div>

                </div>

            <div class="row mt-2" id="empresa_repre">
                <div class="">
                    {!! Form::label('name_empresa', 'Nombre Empresa') !!}
                    {!! Form::text('name_empresa', null, ['class' => 'form-control', 'placeholder' => 'Inversiones llc']) !!}
                </div>
                <div class="">
                    {!! Form::label('type_enterprise', 'Tipo de empresa') !!}
                    {!! Form::select('type_enterprise', $type_enterprise, null, [
                        'class' => 'form-control',
                        'placeholder' => 'Selecciona un tipo',
                    ]) !!}
                </div>
                <hr class="mt-5">
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col-sm-12 col-md-6">

                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pedro', 'required']) !!}
                    @error('name')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div>
                <div class="col-sm-12 col-sm-12 col-md-6">

                    {!! Form::label('lastname', 'Apellidos') !!}
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Perez', 'required']) !!}
                    @error('lastname')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div>
            </div>

            <div class="row  mt-2">
                <div class="col-sm-12 col-sm-12 col-md-6">
                    {!! Form::label('phone', 'Teléfono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+34 455487895', 'required']) !!}
                </div>
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'test@prueba.com', 'required']) !!}
                    @error('email')
                        <small class="text-danger">Este campo es requerido o ya se encuentra registrado</small>
                    @enderror
                </div>
            </div>

            <div class="row  mt-2">
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('postcode', 'Código Postal') !!}
                    {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '03430']) !!}
                </div>
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('country', 'País') !!}
                    {!! Form::select('country', $paises, null, [
                        'class' => 'form-control',
                        'placeholder' => '--Seleccionar País--',
                        'required',
                    ]) !!}
                    @error('country')
                        <small class="text-danger">Este campo es requerido</small>
                    @enderror
                </div>
            </div>

            <div class="row  mt-2">
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('city', 'Ciudad') !!}
                    {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                </div>
                <div class="col-sm-12 col-md-6">
                    {!! Form::label('state', 'Provincia (opcional)') !!}
                    {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                </div>
            </div>

            <div class="row  mt-2">
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('address', 'Dirección (opcional)') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    {!! Form::text('address', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Calle tercera casa 25',
                    ]) !!}


                </div>
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    {!! Form::select('campaing', $campaings_list, null, [
                        'class' => 'form-control',
                        'placeholder' => 'Seleccionar',
                    ]) !!}



                </div>
            </div>

            <div class="row  mt-2">
                <div class="col-sm-12 col-md-6">

                    {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    {!! Form::select('medio_comunicacion', $comunicacion_medias, null, [
                        'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                        'class' => 'form-control',
                        'placeholder' => 'Seleccionar',
                    ]) !!}


                </div>

                <div class="col-sm-12 col-md-6">

                    {!! Form::label('website', 'Página Web') !!}
                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                    {!! Form::url('website', null, [
                        'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                        'class' => 'form-control',
                        'placeholder' => 'www.example.com',
                    ]) !!}


                </div>

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
         /*    $('#representa_empresa').show(); */
           $("#representa_empresa").prop("checked", false);
            $('#empresa_repre').hide()
        });

        function accion_respresenta(e) {
            if (e.checked) {
                $('#empresa_repre').show();
            } else {
                $('#empresa_repre').hide();
            }
        }

        /* submit form ajax  */
     /*    $('#formContact').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();
            $.post(url, data, function(result) {
                if (result.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Contacto creado correctamente',
                        showConfirmButton: true,
                        confirmButtonText: 'Aceptar',
                    }).then(isConfirm => {
                        if (isConfirm) {
                           
                           window.location.go(-1);
                        }
                    })
                    
                   
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!',
                    })
                }
            }).fail(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Algo salió mal!',
                })
            });
        }); */

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
