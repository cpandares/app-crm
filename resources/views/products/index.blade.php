@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content" bis_skin_checked="1">
            <!--begin::Container-->
            @if (auth()->user()->rol == 4)
            <h2 class="text-center text-danger">Acceso restringido</h2>
            @else
            <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                       
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                            <!--begin::Add product-->
                            <a href="{{ url('admin/products') }}"
                                            class="btn btn-primary float-right btn-sm mr-1" title="Limpiar filtros">
                                            <i class="fa fa-repeat"></i>
                            </a>
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

                                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 " style="width: 29.25px;">

                                            </th>
                                            <th class="min-w-200px " tabindex="0">Producto</th>
                                            <th class="text-end min-w-100px ">SKU</th>

                                            <th class="text-end min-w-70px ">Stock
                                            </th>
                                            <th class="text-end min-w-100px ">Precio España
                                            </th>

                                            <th class="text-end min-w-100px ">
                                                Precio Francia
                                            </th>
                                            <th class="text-end min-w-100px ">
                                                Precio Alemania
                                            </th>
                                            <th class="text-end min-w-100px ">
                                                Precio Portugal
                                            </th>
                                            <th class="text-end min-w-70px _disabled" rowspan="1" colspan="1"
                                                aria-label="Actions">Actions
                                            </th>
                                        </tr>
                                        <!--end::Table row-->
                                        {!! Form::open(['route' => 'admin.products.index', 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                        <tr>
                                            <th></th>
                                            <th>
                                                <input 
                                                    type="text" 
                                                    placeholder="Nombre producto" 
                                                    name="product_name"
                                                    id="product_name" 
                                                    onchange="buscar('product_name')"
                                                    class="form-control"
                                                    >
                                            </th>
                                            <th>
                                                <input 
                                                    type="text" 
                                                    placeholder="codigo" 
                                                    name="codigo" 
                                                    id="codigo"
                                                    onchange="buscar('codigo')" 
                                                    class="form-control"
                                                >
                                            </th>
                                            <th>

                                            </th>
                                        </tr>
                                        {!! Form::close() !!}
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($productos as $item)
                                            <tr class="odd">
                                                <!--begin::Checkbox-->
                                                <td>

                                                </td>
                                                <!--end::Checkbox-->
                                                <!--begin::Category=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        @if ($item->image)
                                                            <img src="{{ URL('/images/productos/') . '/' . $item->image }}"
                                                                alt="{{ $item->product_name }}" style="height: 50px;"
                                                                width="50px;">
                                                        @else
                                                            <a class="symbol symbol-50px">
                                                                <span class="symbol-label"
                                                                    style="background-image:url(assets/media//stock/ecommerce/1.gif);">
                                                                </span>
                                                            </a>
                                                        @endif
                                                        <!--end::Thumbnail-->
                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href=""
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                                data-kt-ecommerce-product-filter="product_name">
                                                                {{ $item->product_name }}
                                                            </a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Category=-->
                                                <!--begin::SKU=-->
                                                <td class="text-end pe-0">
                                                    <span class="fw-bolder">{{ $item->sku }}</span>
                                                </td>
                                                <!--end::SKU=-->
                                                <!--begin::Qty=-->
                                                <td class="text-end pe-0" data-order="5">
                                                    @if ($item->stock > 100)
                                                        <span class="badge badge-light-success">Cantidad existente {{ $item->stock }}</span>
                                                      
                                                    @elseif($item->stock <= 50 && $item->stock > 10)
                                                        <span class="badge badge-light-warning">Cantidad existente {{ $item->stock }}</span>
                                                        
                                                    @else
                                                        <span class="badge badge-light-danger">Cantidad existente {{ $item->stock }}</span>
                                                       
                                                    @endif
                                                </td>
                                                <!--end::Qty=-->
                                                <!--begin::Price=-->
                                                <td class="text-end pe-0">
                                                    <span class="fw-bolder text-dark">
                                                       
                                                        {{ number_format($item->price_esp, 2, '.', ',') }} €
                                                    </span>
                                                </td>
                                                <!--end::Price=-->

                                                <!--begin::Status=-->
                                                <td class="text-end pe-0" data-order="Inactive">
                                                    <!--begin::Badges-->
                                                    <span class="fw-bolder text-dark">
                                                        
                                                        {{ number_format($item->price_ger, 2, '.', ',') }} €
                                                    </span>
                                                    <!--end::Badges-->
                                                </td>
                                                <td class="text-end pe-0" data-order="Inactive">
                                                    <!--begin::Badges-->
                                                    <span class="fw-bolder text-dark">
                                                        
                                                        {{ number_format($item->price_italy, 2, '.', ',') }} €
                                                    </span>
                                                    <!--end::Badges-->
                                                </td>
                                                <td class="text-end pe-0" data-order="Inactive">
                                                    <!--begin::Badges-->
                                                    <span class="fw-bolder text-dark">
                                                        
                                                        {{ number_format($item->price_usa, 2, '.', ',') }} €
                                                    </span>
                                                    <!--end::Badges-->
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Action=-->
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
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
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-primary fw-bold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a  class="menu-link px-3"
                                                            href="{{ url('admin/products/'.$item->id.'/edit') }}">Editar</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <form method="post"
                                                                action="{{ route('admin.products.destroy', $item->id) }}"
                                                                class="formDeleteProduct">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" id="logout_button"
                                                                    class="menu-link px-3">
                                                                    Eliminar

                                                                </button>
                                                            </form>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="dataTables_length" id="kt_ecommerce_products_table_length"><label>
                                    {!! Form::open(['route' => 'admin.products.index', 'method' => 'get', 'id' => 'frmFiltrosChange']) !!}
                                        <select
                                                name="per_page"
                                                id="per_page"
                                                onchange="buscarChange('per_page')"
                                                aria-controls="kt_ecommerce_products_table"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="{{ $per_page }}">{{ $per_page }}</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                    {!! Form::close() !!}
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="kt_ecommerce_products_table_paginate">
                                        {{ $productos->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>

            </div>
            @endif
        </div>

    </div>
@endsection

@section('script')
<script>
    function buscar(tipo) {

        $('#accion').val(1);
        var textoSelect = $('#' + tipo).val();
        const ENTER_KEY_CODE = 13;

        switch (tipo) {


            case 'product_name':
                document.querySelector('#product_name').addEventListener('keyup', function(e) {
                    if (e.keyCode === ENTER_KEY_CODE) {
                        document.getElementById("frmFiltros").submit();
                    }
                });
                break;

            case 'codigo':
                document.querySelector('#codigo').addEventListener('keyup', function(e) {
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
