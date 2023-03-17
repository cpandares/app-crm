@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-14" placeholder="Search Product">
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                            <!--begin::Add product-->
                            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Crea un producto</a>
                            <!--end::Add product-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_ecommerce_products_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 " 
                                                style="width: 29.25px;">
                                                
                                            </th>
                                            <th class="min-w-200px " tabindex="0"
                                                >Producto</th>
                                            <th class="text-end min-w-100px " >SKU</th>

                                            <th class="text-end min-w-70px " 
                                               >Stock
                                            </th>
                                            <th class="text-end min-w-100px " 
                                               >Precio España
                                            </th>
                                           
                                            <th class="text-end min-w-100px " 
                                               >
                                                Precio Francia
                                            </th>
                                            <th class="text-end min-w-100px " 
                                               >
                                                Precio Alemania
                                            </th>
                                            <th class="text-end min-w-100px " 
                                           >
                                            Precio Portugal
                                        </th>
                                            <th class="text-end min-w-70px _disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" >Actions
                                            </th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">

                                        <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Category=-->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="../../demo17/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="../../demo17/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                            data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>
                                            <!--end::Category=-->
                                            <!--begin::SKU=-->
                                            <td class="text-end pe-0">
                                                <span class="fw-bolder">03556002</span>
                                            </td>
                                            <!--end::SKU=-->
                                            <!--begin::Qty=-->
                                            <td class="text-end pe-0" data-order="5">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bolder text-warning ms-3">5</span>
                                            </td>
                                            <!--end::Qty=-->
                                            <!--begin::Price=-->
                                            <td class="text-end pe-0">
                                                <span class="fw-bolder text-dark">$124.00</span>
                                            </td>
                                            <!--end::Price=-->
                                           
                                            <!--begin::Status=-->
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <span class="fw-bolder text-dark">$124.00</span>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <span class="fw-bolder text-dark">$124.00</span>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end pe-0" data-order="Inactive">
                                                <!--begin::Badges-->
                                                <span class="fw-bolder text-dark">$124.00</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Actions
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
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo17/dist/apps/ecommerce/catalog/edit-product.html"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label><select
                                                name="kt_ecommerce_products_table_length"
                                                aria-controls="kt_ecommerce_products_table"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="kt_ecommerce_products_table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="kt_ecommerce_products_table_previous"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="0"
                                                    tabindex="0" class="page-link"><i class="previous"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="1"
                                                    tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="2"
                                                    tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="3"
                                                    tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="4"
                                                    tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="5"
                                                    tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item next"
                                                id="kt_ecommerce_products_table_next"><a href="#"
                                                    aria-controls="kt_ecommerce_products_table" data-dt-idx="6"
                                                    tabindex="0" class="page-link"><i class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>

            </div>

        </div>

    </div>
@endsection
