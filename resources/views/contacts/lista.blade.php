@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                <!--begin::Card-->
              {{--   <h2>Listado de contactos </h2> --}}
                <div class="card" bis_skin_checked="1">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6" bis_skin_checked="1">
                        <!--begin::Card title-->
                        <div class="card-title" bis_skin_checked="1">
                            <!--begin::Search-->
                            
                            
                                <p>Contactos registrados: {{ count($contacts) }}</p>
                            

                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar" bis_skin_checked="1">

                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base"
                                bis_skin_checked="1">

                                <div class="row" bis_skin_checked="1">
                                    <div class="col-12" bis_skin_checked="1">

                                        <button class="btn btn-primary float-right mb-3 btn-sm" data-toggle="modal"
                                            data-target="#exampleModal" type="button">
                                            Agregar Contactos
                                        </button>
                                        <a href="{{ route('admin.contact.index') }}"
                                            class="btn btn-primary float-right btn-sm mr-1">
                                            Vista pipeline
                                        </a>


                                        <a href="{{ route('admin.campaings.index') }}"
                                            class="btn btn-primary float-right btn-sm mr-1">
                                            Ver Campañas
                                        </a>
                                        <a href="{{ url('admin/contactos-lista') }}"
                                            class="btn btn-primary float-right btn-sm mr-1">
                                           Limpiar Filtros
                                        </a>
                                    </div>
                                </div>

                                <div class="modal fade " id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class=" modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nueva Contacto</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
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
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-customer-table-toolbar="selected" bis_skin_checked="1">
                                <div class="fw-bolder me-5" bis_skin_checked="1">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">Delete Selected</button>
                            </div>
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
                            <div class="table-responsive" bis_skin_checked="1">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_customers_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">

                                            <th class="min-w-125px">Nombre </th>
                                            <th class="min-w-125px ">Apellido</th>
                                            <th class="min-w-125px ">Email</th>
                                            <th class="min-w-125px ">Campañas</th>
                                            <th class="min-w-125px ">Estado</th>
                                            <th class="text-end min-w-70px" rowspan="1" colspan="1"
                                                aria-label="Acciones" style="width: 146.738px;">Acciones</th>
                                        </tr>
                                        <!--end::Table row-->
                                        <tr class="text-gray-600">
                                            {{-- @dump($campaing) --}}
                                            {!! Form::open(['url' => 'admin/contactos-lista', 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                            <input type="hidden" id="accion" name="accion" value="2">

                                            <th>
                                                <input type="text" placeholder="Nombre contacto" name="name"
                                                    id="name" onchange="buscar('name')" class="form-control">
                                            </th>
                                            <th>
                                                <input type="text" placeholder="Nombre contacto" name="lastname"
                                                    id="lastname" onchange="buscar('lastname')" class="form-control">

                                            </th>
                                            <th>
                                                <input 
                                                    type="email" 
                                                    placeholder="Email" 
                                                    name="email" 
                                                    id="email"
                                                   onchange="buscar('email')" 
                                                   class="form-control">
                                            </th>
                                            <th>
                                                {!! Form::select('campaing', $list_campaings, null, [
                                                    'id' => 'campaing',
                                                    'class' => 'form-control text-gray-400                                                                                            js-example-basic-single',
                                                    'placeholder' => 'Seleccionar',
                                                    'onchange' => "buscar('campaing')",
                                                ]) !!}
                                            </th>

                                            <th>
                                                {!! Form::select(
                                                    'statu',
                                                    ['1' => 'Nuevo', '2' => 'En Negociacion', '3' => 'Presupuesto Enviado', '4' => 'Cliente', '5' => ''],
                                                    null,
                                                    [
                                                        'id' => 'statu',
                                                        'class' => 'form-control js-example-basic-single
                                                                                            text-gray-400',
                                                        'placeholder' => '----',
                                                        'onchange' => "buscar('statu')",
                                                    ],
                                                ) !!}

                                            </th>



                                            {!! Form::close() !!}
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">


                                        @foreach ($contacts as $item)
                                            <tr class="odd">
                                                <td>
                                                    <a href="{{ route('admin.contact.show', $item->id) }}"
                                                        class="text-gray-600 text-hover-primary mb-1">{{ $item->name }}</a>
                                                </td>

                                                <td>
                                                    <a
                                                        class="text-gray-600 text-hover-primary mb-1">{{ $item->lastname }}</a>
                                                </td>

                                                <td>
                                                    {{ $item->email }}
                                                </td>

                                                <td>
                                                    @php
                                                        $campaigs = $controlador->getCampaingsContacts($item->id);
                                                    @endphp

                                                    @if ($campaigs)
                                                        <span> {{ $campaigs->campaing_name }}</span>
                                                    @else
                                                        ---
                                                    @endif
                                                    {{-- {{ $item->campaing_name }} --}}
                                                </td>



                                                <td>
                                                    {{--  @dump($item) --}}
                                                    @if ($item->contact_status == 1)
                                                        <span class="badge badge-primary pull-rigth">Nuevo</span>
                                                    @elseif($item->contact_status == 2)
                                                        <span class="badge badge-light-primary pull-rigth">No
                                                            interesado</span>
                                                    @elseif($item->contact_status == 3)
                                                        <span class="badge badge-light-primary pull-rigth">Presupuesto
                                                            Enviado</span>
                                                    @elseif($item->contact_status == 4)
                                                        <span class="badge badge-primary pull-rigth">Cliente</span>
                                                    @elseif($item->contact_status == 5)
                                                        <span class="badge badge-light-primary pull-rigth">En
                                                            Negociación</span>
                                                    @else
                                                        <span class="badge badge-primary pull-rigth">Renegociando</span>
                                                    @endif
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-active-light-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Acciones
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                        data-kt-menu="true" bis_skin_checked="1">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" bis_skin_checked="1">
                                                            <a href="" class="menu-link px-3">Ver</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" bis_skin_checked="1">
                                                            <a class="menu-link px-3"
                                                                data-kt-customer-table-filter="delete_row">Borrar</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->




                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_customers_table_length">
                                        <label>
                                            <select name="kt_customers_table_length" aria-controls="kt_customers_table"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="kt_customers_table_paginate">
                                        {{ $contacts->links() }}
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>

                    </div>
                    <!--end::Container-->
                </div>

            </div>

            {{--  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered mw-650px">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nueva Campaña</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'admin.campaings.store', 'autocomplete'=>'off', 'files'=>true]) !!}

                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Feria España', ]) !!}
                        <br>
                    {!! Form::label('country', 'Pais') !!}           
                    {!! Form::select('country',$paises, null,['class'=>'form-control ','placeholder'=>'Seleccionar']) !!}
                    <br>
                    {!! Form::label('ciudad', 'Ciudad') !!}           
                    {!! Form::text('ciudad', null, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                    <br>
                    {!! Form::label('date', 'Fecha y hora de inicio') !!}           
                    {!! Form::datetimelocal('date', null, ['class'=>'form-control' ]) !!}
                    <br>
                    {!! Form::label('status', 'Estado de la campaña') !!}
                    {!! Form::select('status',['1'=>'Activa', '2'=>'Inactiva', '3'=>'Cancelada','4' => 'Empieza proximamente', '5'=>'Por confimar'], null,['class'=>'form-control','placeholder'=>'Seleccionar']) !!}
                    <br>
                    {!! Form::submit('Guardar', ['class'=>'btn btn-primary mt-5']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
        </div> --}}
        @endsection

        @section('script')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.js-example-basic-single').select2();
                });

                function buscar(tipo) {

                    $('#accion').val(1);
                    var textoSelect = $('#' + tipo).val();
                    const ENTER_KEY_CODE = 13;

                    switch (tipo) {


                        case 'name':
                            document.querySelector('#name').addEventListener('keyup', function(e) {
                                if (e.keyCode === ENTER_KEY_CODE) {
                                    document.getElementById("frmFiltros").submit();
                                }
                            });
                            break;

                        case 'lastname':
                            document.querySelector('#lastname').addEventListener('keyup', function(e) {
                                if (e.keyCode === ENTER_KEY_CODE) {
                                    document.getElementById("frmFiltros").submit();
                                }
                            });
                            break;
                        case 'email':
                            document.querySelector('#email').addEventListener('keyup', function(e) {
                                if (e.keyCode === ENTER_KEY_CODE) {
                                    document.getElementById("frmFiltros").submit();
                                }
                            });
                            break;


                        default:
                            document.getElementById("frmFiltros").submit();
                            break;
                    }

                }
            </script>
        @endsection
