@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                {{--  <h2 >Listado de Campañas</h2> --}}
                <!--begin::Card-->
                



                <div class="card">
                    <!--begin::Card header-->
                                        
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div 
                           
                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" 
                            id="kt_customers_table_table">
                            <!--begin::Table head-->
                          
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting_disabled" tyle="width: 29.25px;">
                                        Plataforma
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"  style="width: 173.712px;">Nombre Cliente
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"  style="width: 232.688px;">Email</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 183.475px;">Username</th>
                                    {{-- <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table"  style="width: 173.712px;">Ordenes Registradas</th> --}}
                                    <th class="min-w-125px sorting" tabindex="0"  style="width: 214.525px;">Fecha de registro</th>
                                   {{--  <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 129.137px;">Total Gastado</th> --}}
                                </tr>
                                <!--end::Table row-->
                                <tr>
                                    <th width="100px"> 
                                        {!! Form::open(['url' => 'admin/clientes-api','method'=>'get','id'=>'frmFiltros']) !!}
                                        {!! Form::select('plataforma', [''=>"Todas", "es" =>"España", "it" => "Italia"],$plataforma,['id'=>'plataforma','class'=>'form-control select2','style'=>'width: 100%;','onchange'=>"buscar('plataforma')",'placeholder'=>'']) !!}
                                            
                                            {{-- <select name="plataforma" id="plataforma" class="form-control" onchange="buscar('plataforma')">
                                                <option value="">Todas</option>
                                                <option value="es">España</option>
                                                <option value="it">Italia</option>
                                            </select> --}}
                                        {!! Form::close() !!}
                                        <th>

                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </th>
                                </tr>
                            </thead>

                            
                            <tbody class="fw-bold text-gray-600">
                                @foreach ($data as $item)                                    
                                    <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                @if ($item["origin"] == 'es')
                                                    <img 
                                                    alt="Cliente de España" 
                                                    src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                    class="h-35px rounded" 
                                                    style="cursor: pointer"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Cliente de España"
                                                        >
                                                @elseif($item["origin"] == 'it')
                                                    <img 
                                                        alt="Cliente de Italia" 
                                                        {{-- src="https://disnight.com/it/wp-content/uploads/2023/06/logonines.jpg"  --}}
                                                        src="{{ URL('/images/logoit.png') }}" 
                                                        class="h-35px" 
                                                        style="cursor: pointer"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cliente de Italia"
                                                        >
                                                @endif
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Name=-->
                                            <td>
                                                <a  class="text-gray-800 text-hover-primary mb-1">{{ $item["first_name"] }} {{ $item["last_name"] }}</a>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::Email=-->
                                            <td>
                                                <span class="text-gray-800 fw-bolder d-block">
                                                    {{ $item["email"] }}
                                                </span>
                                            </td>
                                            <!--end::Email=-->
                                            <!--begin::Company=-->
                                            <td>
                                                <span class="text-gray-800 fw-bolder d-block">{{ $item["username"] }}</span>
                                            </td>
                                            <!--end::Company=-->
                                            <!--begin::Payment method=-->
                                           {{--  <td >
                                                <span class="text-gray-800 fw-bolder d-block">{{ $item->orders_count }}</span>
                                            </td> --}}
                                            <!--end::Payment method=-->
                                            <!--begin::Date=-->
                                            <td >
                                                <span class="text-gray-800 fw-bolder d-block">
                                                    {{ date('d-m-Y', strtotime($item["created_at"])) }}
                                                </span>
                                            </td>
                                            <!--end::Date=-->
                                            <!--begin::Action=-->
                                          {{--   <td class="text-end">
                                                <span>
                                                    ${{ $item->total_spent }}
                                                </span>
                                            </td> --}}
                                            <!--end::Action=-->
                                        </tr>
                                @endforeach
                                
                            </tbody>
                            <!--end::Table body-->
                        
                        <!--end::Table-->
                    </div>

                    <!--end::Card body-->
                </div>




            </div>

        </div>

    </div>

    
@endsection
