<div class="modal fade " id="exampleModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class=" modal-dialog modal-lg modal-dialog-centered ">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route' => 'admin.contact.store', 'autocomplete' => 'off', 'files' => true]) !!}

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
                        <small class="text-danger">Este campo es requerido</small>
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