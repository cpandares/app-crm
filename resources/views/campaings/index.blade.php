@extends('layouts.app')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <!--begin::Card-->
            <div class="card" bis_skin_checked="1">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                    <div class="card-title" bis_skin_checked="1">
                        <!--begin::Search-->
                      
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar" bis_skin_checked="1">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base"
                            bis_skin_checked="1">
                            <!--begin::Filter-->

                            <!--begin::Menu 1-->

                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->

                            <button 
                                type="button" 
                                class="btn btn-light-primary"
                                data-toggle="modal" 
                                data-target="#exampleModal"
                                >Nueva Campaña</button>
                            <!--end::Add customer-->
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
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 29.25px;">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3"
                                                bis_skin_checked="1">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_customers_table .form-check-input"
                                                    value="1">
                                            </div>
                                        </th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                            rowspan="1" colspan="1"
                                            aria-label="Nombre Cliente: activate to sort column ascending"
                                            style="width: 172.038px;">Nombre Campaña</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                            rowspan="1" colspan="1"
                                            aria-label="Email: activate to sort column ascending"
                                            style="width: 247.025px;">Ciudad</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                            rowspan="1" colspan="1" aria-label="Pais: activate to sort column ascending"
                                            style="width: 178.387px;">Pais</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                            rowspan="1" colspan="1"
                                            aria-label="Metodo de Pago: activate to sort column ascending"
                                            style="width: 159.1px;">Fecha de inicio</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"
                                            rowspan="1" colspan="1"
                                            aria-label="Fecha creación: activate to sort column ascending"
                                            style="width: 203.962px;">Fecha creación</th>
                                        <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Acciones" style="width: 146.738px;">Acciones</th>
                                    </tr>

                                    <tr class="text-gray-400">
                                        {{-- @dump($campaing) --}}
                                        {!! Form::open([ 'route' => 'admin.campaings.index' ,'method'=>'get','id'=>'frmFiltros']) !!}
                                        <input type="hidden" id="accion" name="accion" value="2">
                                        
                                        <th>
                                            {{-- <input 
                                                type="text" 
                                                placeholder="Nombre contacto" 
                                                name="name" 
                                                id="name" 
                                                onfocusout="buscar('documento')" 
                                                onchange="buscar('documento')" 
                                                class="form-control" 
                                                > --}}
                                        </th>
                                        <th>
                                            <input 
                                                type="text" 
                                                placeholder="Nombre campaña" 
                                                name="name" 
                                                id="name" 
                                               {{--  onfocusout="buscar('documento')"  --}}
                                                onchange="buscar('name')" 
                                                class="form-control" 
                                                >
                                        </th>
                                        <th>
                                            <input 
                                                type="text" 
                                                placeholder="Ciudad" 
                                                name="city" 
                                                id="city" 
                                               {{--  onfocusout="buscar('documento')"  --}}
                                                onchange="buscar('city')" 
                                                class="form-control" 
                                                >
                                        </th>
                                        <th>                                     
                                            {!! Form::select('country',[], null,['id'=>'country','class'=>'form-control text-gray-400 js-example-basic-single','placeholder'=>'Seleccionar','onchange'=>"buscar('country')" ]) !!}  
                                        </th>
                                        <th>
                                          
                                        </th>
                                        <th>
                                            {{-- {!! Form::select('statu',['1'=> 'Nuevo', '2'=> 'En Negociacion', '3' =>'Presupuesto Enviado', '4' =>'Cliente', '5' =>''], null,['id'=>'state','class'=>'form-control js-example-basic-single text-gray-400','placeholder'=>'----','onchange'=>"buscar('cliente')" ]) !!}   --}}
                                        </th>
                                        
                                      
                                        <th></th>
                                        {!! Form::close() !!}
                                    </tr>
                                   
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">


                                    @foreach ($data as $item)                                          
                                    <tr class="odd">
                                        <td>
                                           
                                        </td>
                                        
                                        <td>
                                            <a href="{{ route('admin.campaings.show', $item) }}"
                                                class="text-gray-600 text-hover-primary mb-1">{{ $item->campaing_name }}</a>
                                        </td>
                                        
                                        <td>
                                            <a href="#"
                                                class="text-gray-600 text-hover-primary mb-1">{{ $item->city }}</a>
                                        </td>
                                    
                                        <td>{{ $item->country }}</td>
                                        
                                        <td >
                                            {{ $item->init_date }}

                                        </td>
                                        
                                        <td data-order="2020-12-14T20:43:00-04:00">{{ $item->created_at }}</td>
                                        
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">Acciones
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true" bis_skin_checked="1">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" bis_skin_checked="1">
                                                    <a href="{{ route('admin.campaings.show', $item) }}"
                                                        class="menu-link px-3">Ver</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" bis_skin_checked="1">
                                                    <a href="#" class="menu-link px-3"
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

                                <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>

                </div>
                <!--end::Container-->
            </div>

        </div>

        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Feria España', ]) !!}
                                <br>
                        </div>
                        <div class="col-6">

                            {!! Form::label('country', 'Pais') !!}           
                            {!! Form::select('country',$paises, null,['class'=>'form-control ','placeholder'=>'Seleccionar']) !!}
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('ciudad', 'Ciudad') !!}           
                            {!! Form::text('ciudad', null, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                            <br>

                        </div>
                        <div class="col-6">

                            {!! Form::label('date', 'Fecha y hora de inicio') !!}           
                            {!! Form::date('date', null, ['class'=>'form-control' ]) !!}
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">

                            {!! Form::label('date', 'Fecha finalización') !!}           
                            {!! Form::date('date_end', null, ['class'=>'form-control' ]) !!}
                            <br>
                        </div>
                        <div class="col-6">

                            {!! Form::label('status', 'Estado de la campaña') !!}
                            {!! Form::select('status',['1'=>'Activa', '2'=>'Inactiva', '3'=>'Cancelada','4' => 'Empieza proximamente', '5'=>'Por confimar'], null,['class'=>'form-control','placeholder'=>'Seleccionar']) !!}
                            <br>
                        </div>
                    </div>
                    {!! Form::submit('Guardar', ['class'=>'btn btn-primary mt-5']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
        </div>

        @endsection

@section('js')
    <script>
        $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
@endsection