@extends('layouts.app') 
@section('content')

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
                            data-toggle="modal" data-target="#exampleModal"
                            
                        >
                            + Crear Campaña
                        </a>
                        <!--end::Export-->
                        <!--begin::Add customer-->
                        <a
                            
                            class="btn btn-outline-primary"
                            href="{{ route('admin.contact.create') }}"
                        >
                         +   Añadir Contacto
                        </a>
                        <!--end::Add customer-->
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
                <div
                    id="kt_customers_table_wrapper"
                    class="dataTables_wrapper dt-bootstrap4 no-footer"
                    bis_skin_checked="1"
                >


                   



                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
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

                                {!! Form::label('status', 'Estado de la campaña') !!}
                        {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                {!! Form::select('status',['1'=>'Activa', '2'=>'Inactiva', '3'=>'Cancelada','4' => 'Empieza proximamente', '5'=>'Por confimar'], '',['class'=>'form-control','placeholder'=>'Seleccionar']) !!}

                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary mt-5']) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                </div>


                
                
                <!--end::Table-->
            </div>
            <section class="wrapper_li">
                <div class="container">
                    <div class="column" id="column_nuevos">
                        <h1>Nuevos Clientes</h1>
                        @foreach ($new_clients as $item)                    
                            <div class="list-group-item card__item" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                               {{--  <input type="hidden" name="" id="status_contact" value="{{ $item->contact_status }}">
                                <input type="hidden" id="contact_id" value="{{ $item->id }}"> --}}
                                <span class="itemDra" ><strong>{{ $item->name }} {{ $item->lastname }}</strong></span> 
                                <hr>
                                
                                <span><strong>País: </strong> {{ $item->country }}</span>
                              
                            </div>
                        @endforeach
                      
                    </div>
                    <div class="column" id="column_nego">
                        <h1>En Negociación</h1>
                        @foreach ($clientes_negoci as $item)                    
                            <div class="list-group-item card__item" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                                {{-- <input type="hidden" name="" id="status_contact" value="{{ $item->contact_status }}">
                                <input type="hidden" id="contact_id" value="{{ $item->id }}"> --}}
                                <span  class="itemDra" 
                                ><strong>{{ $item->name }} {{ $item->lastname }}</strong></span> 
                               
                                <hr>
                                <span><strong>País: </strong> {{ $item->country }}</span>
                              
                            </div>
                        @endforeach
                    </div>
                    <div class="column" id="column_presu">
                        <h1>Presupuesto Enviado</h1>
        
                        @foreach ($presupuestados as $item)                    
                            <div class="list-group-item card__item" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                                <span><strong>{{ $item->name }} {{ $item->lastname }}</strong></span> 
                                {{-- <input type="hidden"  id="contact_status_id" value="2"> --}}
                                <hr>
                                <span><strong>País: </strong> {{ $item->country }}</span>
                                
                            </div>
                        @endforeach
                    </div>
                    <div class="column " id="column_cli">
                        <h1>Cliente</h1>
        
                        @foreach ($clientes as $item)                    
                        <div class="list-group-item card__item" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                            <span><strong>{{ $item->name }} {{ $item->lastname }}</strong></span> 
                            {{-- <input type="hidden"  id="contact_status_id" value="3"> --}}
                            <hr>
                            <span><strong>País: </strong> {{ $item->country }}</span>
                            {{-- <li class="">
                                <span class="card__tag card__tag--browser">Browser</span>
                                <h6 class="card__title">Lightbox loading issue on Safari</h6>
                                <ol class="card__actions">
                                  <li class="card__actions--wrapper">
                                    <i class="fas fa-align-left"></i></li>
                                </ol>
                              </li> --}}
                        </div>
                    @endforeach
                    </div>
                    {{-- <div class="column">
                        <h1>No interesado</h1>
        
                        @foreach ($noInteresteds as $item)                    
                        <div class="list-group-item card__item" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                            <span ><strong>{{ $item->name }} {{ $item->lastname }}</strong></span> 
                           
                            <hr>
                            <span><strong>País: </strong> {{ $item->country }}</span>
                            
                        </div>
                    @endforeach
                    </div> --}}
                </div>
            
               
            
            </section>
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Container-->
</div>

@endsection


@section('script')

    <script>
    

    </script>

@endsection

