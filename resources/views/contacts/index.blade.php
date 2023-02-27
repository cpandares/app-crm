@extends('layouts.app') @section('content')

<div
    class="content d-flex flex-column flex-column-fluid"
    id="kt_content"
    bis_skin_checked="1"
>
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
        <div class="card" bis_skin_checked="1">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6" bis_skin_checked="1">
                <!--begin::Card title-->
                <div class="card-title" bis_skin_checked="1">
                    <!--begin::Search-->
                    <div
                        class="d-flex align-items-center position-relative my-1"
                        bis_skin_checked="1"
                    >
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span
                            class="svg-icon svg-icon-1 position-absolute ms-6"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                            >
                                <rect
                                    opacity="0.5"
                                    x="17.0365"
                                    y="15.1223"
                                    width="8.15546"
                                    height="2"
                                    rx="1"
                                    transform="rotate(45 17.0365 15.1223)"
                                    fill="black"
                                ></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black"
                                ></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input
                            type="text"
                            data-kt-customer-table-filter="search"
                            class="form-control form-control-solid w-250px ps-15"
                            placeholder="Buscar cliente"
                        />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar" bis_skin_checked="1">
                    <!--begin::Toolbar-->
                    <div
                        class="d-flex justify-content-end"
                        data-kt-customer-table-toolbar="base"
                        bis_skin_checked="1"
                    >
                        <!--begin::Filter-->
                        <button
                            type="button"
                            class="btn btn-light-primary me-3"
                            data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black"
                                    ></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filtrar
                        </button>
                        <!--begin::Menu 1-->
                        <div
                            class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
                            data-kt-menu="true"
                            id="kt-toolbar-filter"
                            bis_skin_checked="1"
                        >
                            <!--begin::Header-->
                            <div class="px-7 py-5" bis_skin_checked="1">
                                <div
                                    class="fs-4 text-dark fw-bolder"
                                    bis_skin_checked="1"
                                >
                                    Filtrar por:
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div
                                class="separator border-gray-200"
                                bis_skin_checked="1"
                            ></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" bis_skin_checked="1">
                                <!--begin::Input group-->
                                <div class="mb-10" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="form-label fs-5 fw-bold mb-3"
                                        >Plataforma:</label
                                    >
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select
                                        class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        data-kt-select2="true"
                                        data-placeholder="Selecciona opción"
                                        data-allow-clear="true"
                                        data-kt-customer-table-filter="month"
                                        data-dropdown-parent="#kt-toolbar-filter"
                                        data-select2-id="select2-data-7-imcw"
                                        tabindex="-1"
                                        aria-hidden="true"
                                    >
                                        <option
                                            data-select2-id="select2-data-9-wkqu"
                                        ></option>
                                        <option value="aug">Wp España</option>
                                        <option value="sep">Wp Italia</option>
                                        <option value="oct">Ankstore</option>
                                        <option value="nov">Fairi</option>
                                        <option value="dec">
                                            Otro portal
                                        </option></select
                                    ><span
                                        class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr"
                                        data-select2-id="select2-data-8-7j16"
                                        style="width: 100%"
                                        ><span class="selection"
                                            ><span
                                                class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                                role="combobox"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                tabindex="0"
                                                aria-disabled="false"
                                                aria-labelledby="select2-a297-container"
                                                aria-controls="select2-a297-container"
                                                ><span
                                                    class="select2-selection__rendered"
                                                    id="select2-a297-container"
                                                    role="textbox"
                                                    aria-readonly="true"
                                                    title="Selecciona opción"
                                                    ><span
                                                        class="select2-selection__placeholder"
                                                        >Selecciona opción</span
                                                    ></span
                                                ><span
                                                    class="select2-selection__arrow"
                                                    role="presentation"
                                                    ><b
                                                        role="presentation"
                                                    ></b></span></span></span
                                        ><span
                                            class="dropdown-wrapper"
                                            aria-hidden="true"
                                        ></span
                                    ></span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10" bis_skin_checked="1">
                                    <!--begin::Label-->
                                    <label class="form-label fs-5 fw-bold mb-3"
                                        >Otro tipo:</label
                                    >
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div
                                        class="d-flex flex-column flex-wrap fw-bold"
                                        data-kt-customer-table-filter="payment_type"
                                        bis_skin_checked="1"
                                    >
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_type"
                                                value="all"
                                                checked="checked"
                                            />
                                            <span
                                                class="form-check-label text-gray-600"
                                                >Todos</span
                                            >
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_type"
                                                value="visa"
                                            />
                                            <span
                                                class="form-check-label text-gray-600"
                                                >Opción1</span
                                            >
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid mb-3"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_type"
                                                value="mastercard"
                                            />
                                            <span
                                                class="form-check-label text-gray-600"
                                                >Opción2</span
                                            >
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="payment_type"
                                                value="american_express"
                                            />
                                            <span
                                                class="form-check-label text-gray-600"
                                                >Opción3</span
                                            >
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div
                                    class="d-flex justify-content-end"
                                    bis_skin_checked="1"
                                >
                                    <button
                                        type="reset"
                                        class="btn btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true"
                                        data-kt-customer-table-filter="reset"
                                    >
                                        Reset
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        data-kt-menu-dismiss="true"
                                        data-kt-customer-table-filter="filter"
                                    >
                                        OK
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <a
                            type="button"
                            class="btn btn-light-primary me-3"
                            data-bs-toggle="modal"
                            data-bs-target="#kt_customers_export_modal"
                            
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                           {{--  <span class="svg-icon svg-icon-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <rect
                                        opacity="0.3"
                                        x="12.75"
                                        y="4.25"
                                        width="12"
                                        height="2"
                                        rx="1"
                                        transform="rotate(90 12.75 4.25)"
                                        fill="black"
                                    ></rect>
                                    <path
                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                        fill="black"
                                    ></path>
                                    <path
                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                        fill="#C4C4C4"
                                    ></path>
                                </svg>
                            </span> --}}
                            <!--end::Svg Icon-->Crear Campaña
                        </a>
                        <!--end::Export-->
                        <!--begin::Add customer-->
                        <button
                            type="button"
                            class="btn btn-outline-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_customer"
                        >
                         +   Añadir Contacto
                        </button>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div
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
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0" bis_skin_checked="1">
                <!--begin::Table-->
                <div
                    id="kt_customers_table_wrapper"
                    class="dataTables_wrapper dt-bootstrap4 no-footer"
                    bis_skin_checked="1"
                >
                    <div class="table-responsive" bis_skin_checked="1">
                        <table
                            class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_customers_table"
                        >
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr
                                    class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                >
                                    <th
                                        class="w-10px pe-2 sorting_disabled"
                                        rowspan="1"
                                        colspan="1"                                        
                                        style="width: 29.25px"
                                    >
                                        <div
                                            class="form-check form-check-sm form-check-custom form-check-solid me-3"
                                            bis_skin_checked="1"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                data-kt-check="true"
                                                data-kt-check-target="#kt_customers_table .form-check-input"
                                                value="1"
                                            />
                                        </div>
                                    </th>
                                    <th
                                        class="min-w-125px sorting"
                                        tabindex="0"
                                        aria-controls="kt_customers_table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Nombre Cliente: activate to sort column ascending"
                                        style="width: 172.038px"
                                    >
                                        Nombre Cliente
                                    </th>
                                    <th
                                        class="min-w-125px sorting"
                                        tabindex="0"
                                        aria-controls="kt_customers_table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Email: activate to sort column ascending"
                                        style="width: 247.025px"
                                    >
                                        Email
                                    </th>
                                    <th
                                        class="min-w-125px sorting"
                                        tabindex="0"
                                        aria-controls="kt_customers_table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Pais: activate to sort column ascending"
                                        style="width: 178.387px"
                                    >
                                        Pais
                                    </th>
                                    <th
                                        class="min-w-125px sorting"
                                        tabindex="0"
                                        aria-controls="kt_customers_table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Metodo de Pago: activate to sort column ascending"
                                        style="width: 159.1px"
                                    >
                                       Estado
                                    </th>
                                    <th
                                        class="min-w-125px sorting"
                                        tabindex="0"
                                        aria-controls="kt_customers_table"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Fecha creación: activate to sort column ascending"
                                        style="width: 203.962px"
                                    >
                                        Fecha creación
                                    </th>
                                    <th
                                        class="text-end min-w-70px sorting_disabled"
                                        rowspan="1"
                                        colspan="1"
                                        aria-label="Acciones"
                                        style="width: 146.738px"
                                    >
                                        Acciones
                                    </th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                                @foreach ($data as $item)
                                    <tr class="odd">
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid"
                                                bis_skin_checked="1"
                                            >
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value="1"
                                                />
                                            </div>
                                        </td>
                                        <!--end::Checkbox-->
                                        <!--begin::Name=-->
                                        <td>
                                            <a
                                               #
                                                >{{ $item->name }}</a
                                            >
                                        </td>
                                        <!--end::Name=-->
                                        <!--begin::Email=-->
                                        <td>
                                            <a
                                                href="#"
                                                class="text-gray-600 text-hover-primary mb-1"
                                                >{{ $item->email }}</a
                                            >
                                        </td>
                                        <!--end::Email=-->
                                        <!--begin::Company=-->
                                        <td>
                                            {{ $item->country }}
                                        </td>
                                        <!--end::Company=-->
                                        <!--begin::Payment method=-->
                                        <td data-filter="mastercard">
                                            <img
                                                src="assets/media/svg/card-logos/mastercard.svg"
                                                class="w-35px me-3"
                                                alt=""
                                            />
                                            @if ($item->contact_status == 1)
                                                <span class="badge badge-primary">Nuevo</span>
                                            @elseif($item->contact_status == 2)
                                            <span class="badge badge-danger">No interesado</span>
                                            @elseif($item->contact_status == 3)
                                            <span class="badge badge-info">Presupuesto Enviado</span>
                                            @elseif($item->contact_status == 4)
                                            <span class="badge badge-success">Cliente</span>
                                            @elseif($item->contact_status == 5)
                                            <span class="badge badge-danger">En Negociación</span>
                                            @else
                                            <span class="badge badge-primary">Renegociando</span>
                                            @endif
                                           {{--  {{ $item->contact_status }} --}}
                                        </td>
                                        <!--end::Payment method=-->
                                        <!--begin::Date=-->
                                        <td data-order="2020-12-14T20:43:00-04:00">
                                            {{ $item->created_at }}
                                        </td>
                                        <!--end::Date=-->
                                        <!--begin::Action=-->
                                        <td class="text-end">
                                            <a
                                                href="#"
                                                class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end"
                                                >Acciones
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span
                                                    class="svg-icon svg-icon-5 m-0"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="black"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></a
                                            >
                                            <!--begin::Menu-->
                                            <div
                                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true"
                                                bis_skin_checked="1"
                                            >
                                                <!--begin::Menu item-->
                                                <div
                                                    class="menu-item px-3"
                                                    bis_skin_checked="1"
                                                >
                                                    <a
                                                        href="{{ route('admin.contact.edit', $item) }}"
                                                        class="menu-link px-3"
                                                        >Ver</a
                                                    >
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div
                                                    class="menu-item px-3"
                                                    bis_skin_checked="1"
                                                >
                                                    <a
                                                        href="#"
                                                        class="menu-link px-3"
                                                        data-kt-customer-table-filter="delete_row"
                                                        >Borrar</a
                                                    >
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
                        <div class="mt-4">
                            {{ $data->links() }}
                        </div>
                    </div>
                    <div
                        class="modal fade"
                        id="kt_modal_add_customer"
                        tabindex="-1"
                        aria-hidden="true"
                    >
                        <!--begin::Modal dialog-->
                        <div
                            class="modal-dialog modal-dialog-centered mw-650px"
                        >
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form
                                    class="form"
                                    action="#"
                                    id="kt_modal_add_customer_form"
                                    
                                >
                                    <!--begin::Modal header-->
                                    <div
                                        class="modal-header"
                                        id="kt_modal_add_customer_header"
                                    >
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">
                                            Añadir Contacto
                                        </h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div
                                            id="kt_modal_add_customer_close"
                                            class="btn btn-icon btn-sm btn-active-icon-primary"
                                        >
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                >
                                                    <rect
                                                        opacity="0.5"
                                                        x="6"
                                                        y="17.3137"
                                                        width="16"
                                                        height="2"
                                                        rx="1"
                                                        transform="rotate(-45 6 17.3137)"
                                                        fill="black"
                                                    />
                                                    <rect
                                                        x="7.41422"
                                                        y="6"
                                                        width="16"
                                                        height="2"
                                                        rx="1"
                                                        transform="rotate(45 7.41422 6)"
                                                        fill="black"
                                                    />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body py-10 px-lg-17">
                                        <!--begin::Scroll-->
                                        <div
                                            class="scroll-y me-n7 pe-7"
                                            id="kt_modal_add_customer_scroll"
                                            data-kt-scroll="true"
                                            data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                            data-kt-scroll-offset="300px"
                                        >
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label
                                                    class="required fs-6 fw-bold mb-2"
                                                    >Nombre
                                                    </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid"
                                                    placeholder="Pedro"
                                                    name="name"
                                                    
                                                />
                                                <!--end::Input-->
                                            </div>

                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label
                                                    class="required fs-6 fw-bold mb-2"
                                                    >Apellido
                                                    </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid"
                                                    placeholder="Gonzalez"
                                                    name="lastname"
                                                    
                                                />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label
                                                    class="fs-6 fw-bold mb-2"
                                                >
                                                    <span class="required"
                                                        >Email</span
                                                    >
                                                    <i
                                                        class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Email address must be active"
                                                    ></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input
                                                    type="email"
                                                    class="form-control form-control-solid"
                                                    placeholder="sean@dellito.com"
                                                    name="email"
                                                    
                                                />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold mb-2"
                                                    >Télefono</label
                                                >
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid"
                                                    placeholder="+1 189154879"
                                                    name="phone"
                                                />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Billing toggle-->
                                            <div
                                                class="fw-bolder fs-3 rotate collapsible mb-7"
                                                data-bs-toggle="collapse"
                                                href="#kt_modal_add_customer_billing_info"
                                                role="button"
                                                aria-expanded="false"
                                                aria-controls="kt_customer_view_details"
                                            >
                                                Dirección
                                                <span class="ms-2 rotate-180">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span
                                                        class="svg-icon svg-icon-3"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                        >
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="black"
                                                            />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Billing toggle-->
                                            <!--begin::Billing form-->
                                            <div
                                                id="kt_modal_add_customer_billing_info"
                                                class="collapse show"
                                            >
                                                <!--begin::Input group-->
                                                <div
                                                    class="d-flex flex-column mb-7 fv-row"
                                                >
                                                    <!--begin::Label-->
                                                    <label
                                                        class="required fs-6 fw-bold mb-2"
                                                        >Dirección de contacto</label
                                                    >
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input
                                                        class="form-control form-control-solid"
                                                        placeholder=""
                                                        name="address1"
                                                        value="101, Collins Street"
                                                    />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div
                                                    class="d-flex flex-column mb-7 fv-row"
                                                >
                                                    <!--begin::Label-->
                                                    <label
                                                        class="required fs-6 fw-bold mb-2"
                                                        >Ciudad</label
                                                    >
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input
                                                        class="form-control form-control-solid"
                                                        placeholder="Melbourne"
                                                        name="city"
                                                        
                                                    />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-7">
                                                    <!--begin::Col-->
                                                    <div
                                                        class="col-md-6 fv-row"
                                                    >
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold mb-2"
                                                            >State /
                                                            Province</label
                                                        >
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input
                                                            class="form-control form-control-solid"
                                                            placeholder="Victoria"
                                                            name="state"
                                                           
                                                        />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div
                                                        class="col-md-6 fv-row"
                                                    >
                                                        <!--begin::Label-->
                                                        <label
                                                            class="required fs-6 fw-bold mb-2"
                                                            >Post Code</label
                                                        >
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input
                                                            class="form-control form-control-solid"
                                                            placeholder="3000"
                                                            name="postcode"
                                                            
                                                        />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div
                                                    class="d-flex flex-column mb-7 fv-row"
                                                >
                                                    <!--begin::Label-->
                                                    <label
                                                        class="fs-6 fw-bold mb-2"
                                                    >
                                                        <span class="required"
                                                            >País</span
                                                        >
                                                        <i
                                                            class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Country of origination"
                                                        ></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input
                                                        class="form-control form-control-solid"
                                                        placeholder=""
                                                        name="country"
                                                        value=""
                                                        
                                                        />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                               
                                            </div>
                                            <!--end::Billing form-->
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Modal body-->
                                    <!--begin::Modal footer-->
                                    <div class="modal-footer flex-center">
                                        <!--begin::Button-->
                                        <button
                                            type="reset"
                                            id="kt_modal_add_customer_cancel"
                                            class="btn btn-light me-3"
                                        >
                                            Discard
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button
                                            type="submit"
                                            id="kt_modal_add_customer_submit"
                                            class="btn btn-primary"
                                        >
                                            <span class="indicator-label"
                                                >Submit</span
                                            >
                                            <span class="indicator-progress"
                                                >Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"
                                                ></span
                                            ></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Modal footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Container-->
</div>

@endsection




