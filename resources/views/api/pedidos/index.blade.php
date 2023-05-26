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
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                           
                            <!--end::Search-->
                        </div>

                    </div>


                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_ecommerce_sales_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="
                                        
                                            
                                        
                                    "
                                                style="width: 29.25px;">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_ecommerce_sales_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Order ID: activate to sort column ascending"
                                                style="width: 138.538px;"># orden</th>
                                            <th class="min-w-175px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Customer: activate to sort column ascending"
                                                style="width: 290.725px;">Cliente</th>
                                            <th class="text-end min-w-70px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 114.037px;">Estado</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Total: activate to sort column ascending"
                                                style="width: 138.538px;">Total</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Date Added: activate to sort column ascending"
                                                style="width: 138.538px;">Fecha de registro</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_ecommerce_sales_table" rowspan="1" colspan="1"
                                                aria-label="Date Modified: activate to sort column ascending"
                                                style="width: 138.538px;">Fecha modificado</th>
                                           
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">

                                        @foreach ($orders as $item)
                                            
                                        <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td data-kt-ecommerce-order-filter="order_id">
                                                <a 
                                                    class="text-gray-800 text-hover-primary fw-bolder">{{ $item->id }}</a>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    {{ $item->line_items[0]->name }}
                                                </div>
                                            </td>
                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class="text-end pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-success">{{ $item->status }}</div>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->
                                            <td class="text-end pe-0">
                                                <span class="fw-bolder"> {{ $item->total }} €</span>
                                            </td>
                                            <!--end::Total=-->
                                            <!--begin::Date Added=-->
                                            <td class="text-end" data-order="2021-12-28">
                                                <span class="fw-bolder">{{ date('d/m/Y', strtotime($item->date_created)) }}</span>
                                            </td>
                                            <!--end::Date Added=-->
                                            <!--begin::Date Modified=-->
                                            <td class="text-end" data-order="2021-12-30">
                                                <span class="fw-bolder">{{ date('d/m/Y', strtotime($item->date_modified)) }}</span>
                                            </td>
                                         
                                        </tr>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>

                           
                        </div>
                        <!--end::Table-->
                    </div>


                </div>




            </div>

        </div>

    </div>
@endsection
