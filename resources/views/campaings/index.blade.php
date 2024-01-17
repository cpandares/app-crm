@extends('layouts.app')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                {{--  <h2 >Listado de Campañas</h2> --}}
                <!--begin::Card-->
                <div class="card" bis_skin_checked="1">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6" bis_skin_checked="1">
                        <!--begin::Card title-->
                        <div class="card-title" bis_skin_checked="1">
                            <p> Tienes un total de {{ count($campaings) }} oportunidades creadas</p>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar" bis_skin_checked="1">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base"
                                bis_skin_checked="1">

                                <a href="{{ route('admin.campaings.index') }}" class="btn btn-primary mr-2" title="Limpiar Filtros">
                                    <i class="fa fa-repeat"></i>
                                </a>

                                <button 
                                    type="button" 
                                    class="btn btn-primary" 
                                    data-toggle="modal"
                                    data-target="#exampleModal">Nueva Oportunidad
                                </button>
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
                            <div  bis_skin_checked="1">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer table-hover table_responsive"
                                    id="kt_customers_table">
                                    <!--begin::Table head-->
                                    <thead class="">
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.25px;">

                                            </th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                                aria-label="Nombre Cliente: activate to sort column ascending"
                                                style="width: 172.038px;">Nombre Campaña</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                                aria-label="Email: activate to sort column ascending"
                                                style="width: 247.025px;">Ciudad</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                                aria-label="Pais: activate to sort column ascending"
                                                style="width: 178.387px;">Pais</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                                aria-label="Metodo de Pago: activate to sort column ascending"
                                                style="width: 159.1px;">Fecha</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                            aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                            aria-label="Fecha creación: activate to sort column ascending"
                                            style="width: 203.962px;">Estado</th>
                                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Acciones" style="width: 146.738px;">Acciones</th>
                                        </tr>

                                        <tr class="text-gray-600">
                                           
                                            {!! Form::open(['route' => 'admin.campaings.index', 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                            <input type="hidden" id="accion" name="accion" value="2">

                                            <th>
                                              
                                            </th>
                                            <th>
                                                {!! Form::select('name', $campaings, $name, [
                                                    'id' => 'name',
                                                    'class' => 'form-control text-gray-400 js-example-basic-single',
                                                    'placeholder' => 'Seleccionar',
                                                    'onchange' => "buscar('name')",
                                                ]) !!}
                                            </th>
                                            <th>
                                                <input 
                                                    type="text" 
                                                    placeholder="Ciudad" 
                                                    name="city" 
                                                    id="city"
                                                    onchange="buscar('city')" 
                                                    class="form-control">
                                            </th>
                                            <th>
                                                {!! Form::select('country', $paises, $country, [
                                                    'id' => 'country',
                                                    'class' => 'form-control text-gray-400 js-example-basic-single',
                                                    'placeholder' => 'Seleccionar',
                                                    'onchange' => "buscar('country')",
                                                ]) !!}
                                            </th>

                                            <th>
                                               {{--  {!! Form::select('statu',['1'=> 'Nuevo', '2'=> 'En Negociacion', '3'
                                            =>'Presupuesto Enviado', '4' =>'Cliente', '5' =>''],
                                            null,['id'=>'state','class'=>'form-control js-example-basic-single
                                            text-gray-400','placeholder'=>'----','onchange'=>"buscar('cliente')" ]) !!} --}}
                                           
                                            </th>

                                            <th>
                                                {!! Form::select('statu',['1'=> 'Activa', '2'=> 'En Pausa', '3'
                                                =>'Cancelada'],
                                                null,['id'=>'state','class'=>'form-control js-example-basic-single
                                                text-gray-400','placeholder'=>'----','onchange'=>"buscar('cliente')" ]) !!}
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
                                                    class="text-gray-800 text-hover-primary mb-1">
                                                        {{ $item->campaing_name }}
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="text-gray-410 text-hover-primary mb-1"> {{ $item->city }} </span>
                                                </td>

                                                <td><span class="text-gray-410 text-hover-primary mb-1">{{ $item->country }}</span></td>

                                                <td>
                                                    <span class="text-gray-410 text-hover-primary mb-1">
                                                        {{ date('d/m/Y', strtotime($item->init_date)) }}
                                                        - {{ date('d/m/Y', strtotime($item->end_date)) }}
                                                    </span>
                                                </td>

                                                <td>
                                                    @if ($item->status == 1)
                                                        <span class="badge badge-light-success">Activa</span>
                                                    @elseif($item->status == 2)
                                                    <span class="badge badge-light-info">Pausada</span>
                                                    @else
                                                    <span class="badge badge-primary">Cancelada</span>
                                                    @endif
                                                </td>
                                       

                                               
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acciones
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a data-toggle="modal"
                                                            data-target="#exampleModal<?= $item->id ?>" class="menu-link px-3">Editar</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <form method="post"
                                                        action="{{ route('admin.campaings.destroy', $item) }}"
                                                        class="formDelete">
                                                        @csrf
                                                        @method('delete')
                                                        <button  type="submit" id="logout_button" class="menu-link px-3"> 
                                                           Eliminar
                                                        </button>
                                                    </form>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>

                                            </tr>
                                            <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar campaña: 
                                                                {{ $item->campaing_name }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            {!! Form::model($item, [
                                                                'route' => ['admin.campaings.update', $item],
                                                                'autocomplete' => 'off',
                                                                'files' => true,
                                                                'method' => 'put',
                                                            ]) !!}

                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('campaing_name', 'Nombre') !!}
                                                                    {!! Form::text('campaing_name', $item->campaing_name, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Feria España',
                                                                    ]) !!}
                                                                    <br>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('country', 'Pais') !!}
                                                                    {!! Form::select('country', $paises, $item->country, [
                                                                        'class' => 'form-control
                                                                                                                                                                    ',
                                                                        'placeholder' => 'Seleccionar',
                                                                    ]) !!}
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('city', 'Ciudad') !!}
                                                                    {!! Form::text('city', $item->city, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                                                                    <br>

                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('init_date', 'Fecha de inicio') !!}
                                                                    {!! Form::date('init_date', $item->init_date, ['class' => 'form-control']) !!}
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('time_end', 'Fecha finalización') !!}
                                                                    {!! Form::date('time_end', $item->end_date, ['class' => 'form-control']) !!}
                                                                    <br>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('status', 'Estado de la campaña') !!}
                                                                    {!! Form::select(
                                                                        'status',
                                                                        ['1' => 'Activa', '2' => 'Inactiva', '3' => 'Cancelada'],
                                                                        $item->status,
                                                                        ['class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                                    ) !!}
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-5']) !!}
                                                            {!! Form::close() !!}
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->

                                    <!--end::Table-->
                                </table>
                                {{-- <div class="mt-4">
                                {{ $data->appends(['name' => $name, 'country' => $country, 'city' =>$city]) }}
                            </div> --}}
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                        <div class="dataTables_length" id="kt_customers_table_length">
                                            {!! Form::open(['route' => 'admin.campaings.index', 'method' => 'get', 'id' => 'frmFiltrosChange']) !!}
                                            <label>
                                                <select 
                                                    name="per_page"
                                                    id="per_page"
                                                    onchange="buscarChange('per_page')"
                                                    aria-controls="kt_customers_table"
                                                    class="form-select form-select-sm form-select-solid"
                                                    >
                                                    <option value="{{ $per_page }}">{{ $per_page }}</option>
                                                  
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </label>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="kt_customers_table_paginate">
                                            {{ $data->appends(['name' => $name, 'country' => $country, 'city' => $city,'status' =>$status]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>

                    </div>
                    <!--end::Container-->

                </div>

            </div>
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg  mw-650px">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nueva Oportunidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['route' => 'admin.campaings.store', 'autocomplete' => 'off', 'files' => true]) !!}

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Feria España']) !!}
                                    <br>
                                </div>
                                <div class="col-sm-12 col-md-6">

                                    {!! Form::label('country', 'Pais') !!}
                                    {!! Form::select('country', $paises, null, [
                                        'class' => 'form-control',
                                        'placeholder' => '--Seleccionar País--',
                                    ]) !!}
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    {!! Form::label('ciudad', 'Ciudad') !!}
                                    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                                    <br>

                                </div>
                                <div class="col-sm-12 col-md-6">

                                    {!! Form::label('start_date', 'Fecha y hora de inicio') !!}
                                    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">

                                    {!! Form::label('end_date', 'Fecha finalización') !!}
                                    {!! Form::date('time_end', null, ['class' => 'form-control']) !!}
                                    <br>
                                </div>
                                
                            </div>
                            <div class="card-footer">

                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-5']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
    </div>
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


                case 'city':
                    document.querySelector('#city').addEventListener('keyup', function(e) {
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
        function buscarChange(tipo) {

            $('#accion').val(1);
            var textoSelect = $('#' + tipo).val();
            const ENTER_KEY_CODE = 13;

            switch (tipo) {



                default:
                    document.getElementById("frmFiltrosChange").submit();
                    break;
            }

        }
    </script>
@endsection
