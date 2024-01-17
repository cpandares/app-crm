@extends('layouts.app')

@section('content')
    <style>
        #logout_button {
            background: none;
            border: none
        }

        #logout_button :hover {
            background: none;
            width: 100%;
            border: none
        }
    </style>
    
    <div  class="container mt-4" >
        <!--begin::Container-->

        <div class="header-container">
            <!--begin::Page title-->

            <!--begin::Container-->

            <!--begin::Card header-->
            <div class="mt-5 card-grid" bis_skin_checked="1">
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                    <div class="card-title" bis_skin_checked="1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1" bis_skin_checked="1">

                            {{--    <p>Contactos registrados: {{ count($data) }}</p> --}}
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

                                    {{-- <button class="btn btn-primary float-right mb-3 btn-sm" data-toggle="modal"
                                     data-target="#exampleModal" type="button">
                                     Añadir Contactos
                                 </button> --}}

                                    <a href="{{ route('admin.campaings.show', $campaing->id) }}"
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
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0" bis_skin_checked="1">
                            <!--begin::Table-->
                            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"
                                bis_skin_checked="1">

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open([
                                                    'url' => 'admin/campaings/create-contract/' . $campaing->id,
                                                    'autocomplete' => 'off',
                                                    'files' => true,
                                                ]) !!}

                                                <div class="row">
                                                    <div class="col-sm-12 col-sm-12 col-md-6">

                                                        <label for="comisiones" class="form-label">
                                                            ¿Representa una empresa?</label><br>
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
                                                            'placeholder' => 'Inversiones llc',
                                                        ]) !!}
                                                    </div>
                                                    <hr class="mt-5">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">

                                                        {!! Form::label('name', 'Nombre') !!}
                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pedro', 'required']) !!}
                                                        @error('name')
                                                            <small class="text-danger">Este campo es requerido</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">

                                                        {!! Form::label('lastname', 'Apellido') !!}
                                                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Perez', 'required']) !!}
                                                        @error('lastname')
                                                            <small class="text-danger">Este campo es requerido</small>
                                                        @enderror



                                                    </div>
                                                </div>

                                                <div class="row  mt-2">
                                                    <div class="col-md-6">
                                                        {!! Form::label('phone', 'Telefono') !!}
                                                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+34 455487895', 'required']) !!}
                                                    </div>
                                                    <div class="col-md-6">

                                                        {!! Form::label('email', 'Email') !!}
                                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'test@prueba.com', 'required']) !!}
                                                        @error('email')
                                                            <small class="text-danger">Este campo es requerido</small>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row  mt-2">
                                                    <div class="col-md-6">
                                                        {!! Form::label('postcode', 'Código Postal') !!}
                                                        {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '03430']) !!}
                                                    </div>
                                                    <div class="col-md-6">

                                                        {!! Form::label('country', 'País') !!}
                                                        {!! Form::select('country', $paises, null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => '--Seleccionar pais--',
                                                            'required',
                                                        ]) !!}
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
                                                        {!! Form::label('state', 'Provincia (opcional)') !!}
                                                        {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                                    </div>
                                                </div>

                                                <div class="row  mt-2">
                                                    <div class="col-md-6">

                                                        {!! Form::label('address', 'Dirección (opcional)') !!}
                                                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                        {!! Form::text('address', null, [
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Calle tercera casa 25',
                                                        ]) !!}


                                                    </div>
                                                    <div class="col-md-6">

                                                        {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                                                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                        {!! Form::select('campaing', $campaings, $campaing->id, [
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Seleccionar',
                                                            'required',
                                                        ]) !!}

                                                        @error('statu')
                                                            <small class="text-danger">Este campo es requerido</small>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="row  mt-2">
                                                    {{-- <div class="col-md-6">

                                                        {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                      
                                                        {!! Form::select('medio_comunicacion', $comunicacion_medias, null, [
                                                            'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Seleccionar',
                                                            'required',
                                                        ]) !!}

                                                        @error('medio_comunicacion')
                                                            <small class="text-danger">Este campo es requerido</small>
                                                        @enderror
                                                    </div> --}}
                                                    <div class="col-md-6">

                                                        {!! Form::label('medio_comunicacion', 'Estado del Cliente') !!}
                                                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                        {!! Form::select('statu', $status, null, [
                                                            'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                            'class' => 'form-control',
                                                            'placeholder' => 'Seleccionar',
                                                            'required',
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
                            </div>




                            <!--end::Table-->
                        </div>

                        <!--end::Card body-->

                        <div class="board-lists list__contacts">


                            <div>
                                <div class="list-title border-top border-info rounded">
                                    <div class="alert alert-secondary text-center" role="alert">
                                        <h4>Nuevos</h4>
                                        <br>
                                        Total de contactos en lista: {{ count($new_clients) }}
                                    </div>
                                </div>

                                <div class="board-list " data-reference="1">

                                    @if (count($new_clients) > 0)
                                        @foreach ($new_clients as $item)
                                            <div class="list-group-item card mt-2 rounded-top" id="tarjeta"
                                                draggable="true" data-id="{{ $item->id }}"
                                                data-contact="{{ $item->contact_status }}">

                                               
                                                <h6 class="card__title">
                                                    <a class="text-gray-800 text-hover-primary mb-1"
                                                        href="{{ route('admin.contact.show', $item->id) }}">
                                                        <span class="text-uppercase">{{ $item->name }} {{ $item->lastname }}</span>
                                                    </a>
                                                </h6>

                                                {{-- direccion --}}

                                                <span class="badge badge-primary pull-rigth mb-2">
                                                    {{ $item->country }} - {{ $item->city }}
                                                </span>

                                                <ol class="card__actions " style="list-style: none">
                                                  
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            <!-- Photo by Philip Martin on Unsplash -->
                                                            @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }} {{ $item->lastname }}"
                                                            />
                                                            @endif

                                                        </li>
                                                    </ol>
                                                </ol>

                                                {{-- created_at --}}
                                               {{--  <span class="badge badge-primary pull-rigth mb-2">
                                                 

                                                    Registrado:  {{ date('d-m-Y', strtotime($item->created_at)) }}
                                                </span> --}}


                                            </div>
                                           
                                        @endforeach
                                    @endif

                                </div>
                            </div>




                            <div>
                                <div class="list-title border-top border-success rounded">
                                    {{-- <h2 class="text-center text-gray-600 text-hover-primary">En Negociación</h2> --}}
                                    <div class="alert alert-secondary text-center" role="alert">
                                        <h4> En Negociación</h4> <br>
                                        Total de contactos en lista {{ count($clientes_negoci) }}
                                    </div>
                                </div>
                                <div class="board-list " data-reference="2">

                                    @if (count($clientes_negoci) > 0)
                                        @foreach ($clientes_negoci as $item)
                                            <div class="list-group-item card mt-2" draggable="true"
                                                data-id="{{ $item->id }}" id="tarjeta"
                                                data-contact="{{ $item->contact_status }}">


                                                <h6 class="card__title">
                                                    <a class="text-gray-800 text-hover-primary mb-1"
                                                        href="{{ route('admin.contact.show', $item->id) }}">
                                                        <span class="text-uppercase">{{ $item->name }} {{ $item->lastname }}</span>
                                                    </a>
                                                </h6>

                                                {{-- direccion --}}

                                                <span class="badge badge-primary pull-rigth mb-2">
                                                    {{ $item->country }} - {{ $item->city }}
                                                </span>

                                                <ol class="card__actions" style="list-style: none">
                                                 
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }} {{ $item->lastname }}"
                                                            />
                                                            @endif
                                                        </li>
                                                    </ol>
                                                </ol>

                                                {{-- created_at --}}
                                              {{--   <span class="badge badge-primary pull-rigth mb-2">                                                  

                                                   Registrado:  {{ date('d-m-Y', strtotime($item->created_at)) }}
                                                </span> --}}

                                            </div>
                                          
                                        @endforeach
                                    @endif

                                </div>
                            </div>


                            <div>
                                <div class="list-title border-top border-primary rounded">
                                    {{--  <h2 class="text-center text-gray-600 text-hover-primary"></h2> --}}
                                    <div class="alert alert-secondary text-center text-center" role="alert">
                                        <h4>Presupuesto Enviado</h4> <br>
                                        Total de contactos en lista {{ count($presupuestados) }}
                                    </div>
                                </div>
                                <div class="board-list  " data-reference="3">

                                    @if (count($presupuestados) > 0)
                                        @foreach ($presupuestados as $item)
                                            <div class="list-group-item card mt-2" draggable="true"
                                                data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}"
                                                id="tarjeta">
                                                {{-- <span class="badge badge-light-info">{{ $item->country }}</span> --}}
                                               
                                                <h6 class="card__title">
                                                    <a class="text-gray-800 text-hover-primary mb-1"
                                                        href="{{ route('admin.contact.show', $item->id) }}">
                                                       <span class="text-uppercase"> {{ $item->name }} {{ $item->lastname }}</span>
                                                    </a>
                                                </h6>
                                                    
                                                    {{-- direccion --}} 
                                                    <span class="badge badge-primary pull-rigth mb-2">
                                                        {{ $item->country }} - {{ $item->city }}
                                                    </span>
                                                <ol class="card__actions " style="list-style: none">
                                                   
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            <!-- Photo by Philip Martin on Unsplash -->
                                                            @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }} {{ $item->lastname }}"
                                                            />
                                                            @endif

                                                        </li>
                                                    </ol>

                                                </ol>
                                                    
                                                    {{-- created_at --}}
                                                   {{--  <span class="badge badge-primary pull-rigth mb-2">
                                                       Registrado:  {{ $item->created_at }}
                                                    </span> --}}
                                               

                                            </div>
                                         
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div>
                                <div class="list-title border-top border-success rounded">
                                    {{--  <h2 class="text-center text-gray-600 text-hover-primary">Clientes</h2> --}}
                                    <div class="alert alert-secondary text-center" role="alert">
                                        <h4>Clientes</h4> <br>
                                        Total de contactos en lista {{ count($clientes) }}
                                    </div>
                                </div>
                                <div class="board-list " data-reference="4">

                                    @if (count($clientes) > 0)
                                        @foreach ($clientes as $item)
                                            <div class="list-group-item card mt-2" draggable="true"
                                                data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}"
                                                id="tarjeta">

                                               
                                                <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                                        href="{{ route('admin.contact.show', $item->id) }}">
                                                       <span class="text-uppercase"> {{ $item->name }} {{ $item->lastname }}</span>
                                                    </a></h6>

                                                {{-- direccion --}}
                                                <span class="badge badge-primary pull-rigth mb-2">
                                                    {{ $item->country }} - {{ $item->city }}
                                                </span>
                                                <ol class="card__actions" style="list-style: none">
                                                
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            <!-- Photo by Philip Martin on Unsplash -->
                                                            @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }} {{ $item->lastname }}"
                                                            />
                                                            @endif
                                                        </li>
                                                    </ol>
                                                </ol>
                                                   
                                                    {{-- created_at --}}
                                                    {{-- <span class="badge badge-primary pull-rigth mb-2">
                                                        
                                                       Registrado:  {{ date('d-m-Y', strtotime($item->created_at)) }}
                                                    </span> --}}
                                            </div>
                                         
                                        @endforeach
                                    @endif
                                </div>

                            </div>

                            <div>
                                <div class="list-title border-top border-danger rounded">
                                    <div class="alert alert-secondary text-center" role="alert">
                                        <h4>No interesados</h4> <br>
                                        Total de contactos en lista {{ count($noInteresteds) }}
                                    </div>
                                </div>
                                <div class="board-list " data-reference="5">

                                    @if (count($noInteresteds) > 0)
                                        @foreach ($noInteresteds as $item)
                                            <div class="list-group-item card mt-2" draggable="true"
                                                data-id="{{ $item->id }}" id="tarjeta"
                                                data-contact="{{ $item->contact_status }}">

                                              
                                                <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                                        href="{{ route('admin.contact.show', $item->id) }}">
                                                         <span class="text-uppercase"> {{ $item->name }} {{ $item->lastname }}</span>
                                                    </a></h6>
                                                <ol class="card__actions" style="list-style: none">
                                                  
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            @if ($item->image)
                                                                <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }} {{ $item->lastname }}"
                                                            />
                                                            @endif
                                                        </li>
                                                    </ol>
                                                </ol>
                                                
                                                {{-- created_at --}}
                                               {{--  <span class="badge badge-primary pull-rigth mb-2">
                                                    Registrado:  {{ date('d-m-Y', strtotime($item->created_at)) }}
                                                </span> --}}

                                            </div>
                                           
                                        @endforeach
                                    @endif

                                </div>
                            </div>

                           



                        </div>

                    </div>



                    <!--end::Card body-->
                </div>

                <!--end::Container-->

            </div>
        </div>

    </div>

@endsection
