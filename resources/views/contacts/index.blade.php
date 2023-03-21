@extends('layouts.app')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <!--begin::Card header-->
            <div class="card" bis_skin_checked="1">
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                    <div class="card-title" bis_skin_checked="1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1" bis_skin_checked="1">

                            <p>Contactos registrados: {{ count($data) }}</p>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar" bis_skin_checked="1">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base" bis_skin_checked="1">

                            {{-- <a
                            href="{{ url('admin/contactos-lista') }}"
                            class="btn btn-primary"
                        >
                            Ver Tabla
                        </a>
                      
                        <a
                            
                            class="btn btn-outline-primary"
                            href="{{ route('admin.contact.create') }}"
                        >
                         +   Añadir Contacto
                        </a> --}}
                            <!--end::Add customer-->
                            <div class="row" bis_skin_checked="1">
                                <div class="col-12" bis_skin_checked="1">

                                    <button class="btn btn-primary float-right mb-3 btn-sm" data-toggle="modal"
                                        data-target="#exampleModal" type="button">
                                        Agregar Contactos
                                    </button>

                                    <a href="{{ url('admin/contactos-lista') }}"
                                        class="btn btn-primary float-right btn-sm mr-1">
                                        Vista tabla
                                    </a>

                                    <a href="{{ route('admin.campaings.index') }}"
                                        class="btn btn-primary float-right btn-sm mr-1">
                                        Campañas
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        {{-- <div
                        class="d-flex justify-content-end align-items-center d-none"
                        data-kt-customer-table-toolbar="selected"
                        bis_skin_checked="1"
                    >
                        <div class="fw-bolder me-5" bis_skin_checked="1">
                            <span
                                class="me-2"
                                data-kt-customer-table-select="selected_count"
                            ></span
                            >Selected
                        </div>
                        <button
                            type="button"
                            class="btn btn-danger"
                            data-kt-customer-table-select="delete_selected"
                        >
                            Delete Selected
                        </button>
                    </div> --}}
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"
                        bis_skin_checked="1">

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['route' => 'admin.contact.store', 'autocomplete' => 'off', 'files' => true]) !!}

                                        <div class="row">
                                            <div class="col-md-6">

                                                {!! Form::label('name', 'Nombre') !!}
                                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                @error('name')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('lastname', 'Apellido') !!}
                                                {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                @error('lastname')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror



                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">
                                                {!! Form::label('phone', 'Telefono') !!}
                                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+34 455487895']) !!}
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('email', 'Email') !!}
                                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'test@prueba.com']) !!}
                                                @error('email')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">
                                                {!! Form::label('postcode', 'Código Postal') !!}
                                                {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '285056']) !!}
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('country', 'País') !!}
                                                {!! Form::select('country', $paises, null, ['class' => 'form-control', 'placeholder' => 'España']) !!}
                                                @error('country')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">
                                                {!! Form::label('city', 'Ciudad') !!}
                                                {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {{-- {!! Form::label('state', 'Provincia (opcional)') !!}
                                        {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!} --}}
                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">

                                                {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                {!! Form::select('medio_comunicacion', $comunicacion_medias, null, [
                                                    'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Seleccionar',
                                                ]) !!}

                                                @error('medio_comunicacion')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('medio_comunicacion', 'Estado del Cliente') !!}
                                                {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                {!! Form::select('statu', $status, null, [
                                                    'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Seleccionar',
                                                ]) !!}

                                                @error('statu')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror

                                            </div>
                                        </div>




                                        <div class="mt-5">

                                            {!! Form::submit('Guardar', ['class' => 'btn btn-outline-primary ']) !!}

                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--end::Table-->
                </div>
                <div class="board-lists container-xxl">

                    <div>
                        <div class="list-title">
                            <h2 class="text-center text-gray-600 text-hover-primary">Nuevos</h2>
                        </div>

                        <div class="board-list border-top border-info" data-reference="1">

                            @if (count($new_clients) > 0)
                                @foreach ($new_clients as $item)
                                    <div class="list-group-item card  rounded-top" id="tarjeta" draggable="true"
                                        data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">


                                        <span class="badge badge-light-info">{{ $item->country }}</span>
                                        <h6 class="card__title">
                                            <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">
                                                {{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        </h6>

                                        <ol class="card__actions " style="list-style: none">
                                            {{--  <li class="card__actions--wrapper">
                                            <i class="fas fa-eye"  data-toggle="modal"
                                            data-target="#exampleModal<?= $item->id ?>"></i>
                                        </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif

                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif

                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '65656',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                                {!! Form::label('state', 'Provincia (opcional)') !!}
                                                {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                            </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                    <div>
                        <div class="list-title">
                            <h2 class="text-center text-gray-600 text-hover-primary">En Negociación</h2>
                        </div>
                        <div class="board-list border-top border-success" data-reference="2">

                            @if (count($clientes_negoci) > 0)
                                @foreach ($clientes_negoci as $item)
                                    <div class="list-group-item card" draggable="true" data-id="{{ $item->id }}"
                                        id="tarjeta" data-contact="{{ $item->contact_status }}">

                                        <span class="badge badge-light-success pull-rigth">{{ $item->country }}</span>
                                        <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }}
                                                {{ $item->lastname }}
                                            </a></h6>
                                        <ol class="card__actions" style="list-style: none">
                                            {{--  <li class="card__actions--wrapper">
                                        <i class="fas fa-eye"  data-toggle="modal"
                                        data-target="#exampleModal<?= $item->id ?>"></i>
                                      </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif
                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif
                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '65656',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                                {!! Form::label('state', 'Provincia (opcional)') !!}
                                                {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                            </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                    <div>
                        <div class="list-title">
                            <h2 class="text-center text-gray-600 text-hover-primary">Presupuesto Enviado</h2>
                        </div>
                        <div class="board-list border-top border-primary " data-reference="3">

                            @if (count($presupuestados) > 0)
                                @foreach ($presupuestados as $item)
                                    <div class="list-group-item card" draggable="true" data-id="{{ $item->id }}"
                                        data-contact="{{ $item->contact_status }}" id="tarjeta">
                                        <span class="badge badge-light-info">{{ $item->country }}</span>
                                        <h6 class="card__title">
                                            <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">
                                                {{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        </h6>
                                        <ol class="card__actions " style="list-style: none">
                                            {{--  <li class="card__actions--wrapper">
                                                    <i class="fas fa-eye"  data-toggle="modal"
                                                    data-target="#exampleModal<?= $item->id ?>"></i>
                                                  </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif

                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif

                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '65656',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                                            {!! Form::label('state', 'Provincia (opcional)') !!}
                                                            {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                                        </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div>
                        <div class="list-title">
                            <h2 class="text-center text-gray-600 text-hover-primary">Clientes</h2>
                        </div>
                        <div class="board-list border-top border-danger" data-reference="4">

                            @if (count($clientes) > 0)
                                @foreach ($clientes as $item)
                                    <div class="list-group-item card" draggable="true" data-id="{{ $item->id }}"
                                        data-contact="{{ $item->contact_status }}" id="tarjeta">

                                        <span class="badge badge-primary">{{ $item->country }}</span>
                                        <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }}
                                                {{ $item->lastname }}
                                            </a></h6>
                                        <ol class="card__actions" style="list-style: none">
                                            {{--   <li class="card__actions--wrapper">
                                      <i class="fas fa-eye"  data-toggle="modal"
                                      data-target="#exampleModal<?= $item->id ?>"></i>
                                    </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif
                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif
                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '65656',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                                {!! Form::label('state', 'Provincia (opcional)') !!}
                                                {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                            </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>




                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Container-->
    </div>

@endsection


@section('script')
    <script></script>
@endsection
