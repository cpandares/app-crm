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

                            <p>Contactos registrados: {{ count($data) }}</p>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar" bis_skin_checked="1">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base" bis_skin_checked="1">

                       
                            <div class="row" bis_skin_checked="1">
                                <div class="col-12" bis_skin_checked="1">

                                    <a 
                                    href="{{ route('admin.create-contact') }}"
                                    class="btn btn-primary float-right mb-3 btn-sm" 
                                    >
                                    Añadir Contactos
                                     </a>

                                    <a href="{{ url('admin/contactos-lista') }}"
                                        class="btn btn-primary float-right btn-sm mr-1">
                                        Vista tabla
                                    </a>

                                    <a href="{{ route('admin.campaings.index') }}"
                                        class="btn btn-primary float-right btn-sm mr-1">
                                        + Oportunidades
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        @include('includes.contact_form_create')

                        <div class="board-lists ">


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
                                                        <span class="text-uppercase">{{ $item->name }}</span>
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
                                                            @if (file_exists('upload/contactos/' . $item->image) && $item->image != '')
                                                                <img src="{{ 'upload/contactos/' . $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }}"
                                                            />
                                                            @endif

                                                        </li>
                                                    </ol>
                                                </ol>

                                              


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
                                                            @if (file_exists('upload/contactos/' . $item->image) && $item->image != '')
                                                                <img src="{{ 'upload/contactos/' . $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }}"
                                                            />
                                                            @endif
                                                        </li>
                                                    </ol>
                                                </ol>

                                                {{-- created_at --}}
                                               {{--  <span class="badge badge-primary pull-rigth mb-2">
                                                   Registrado:  {{ $item->created_at->diffForHumans() }}
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
                                                            @if (file_exists('upload/contactos/' . $item->image) && $item->image != '')
                                                                <img src="{{ 'upload/contactos/' . $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }}"
                                                            />
                                                            @endif

                                                        </li>
                                                    </ol>

                                                </ol>
                                                    
                                                    {{-- created_at --}}
                                                    {{-- <span class="badge badge-primary pull-rigth mb-2">
                                                       Registrado:  {{ $item->created_at->diffForHumans() }}
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
                                                            @if (file_exists('upload/contactos/' . $item->image) && $item->image != '')
                                                            <img src="{{ 'upload/contactos/' . $item->image }}" alt="{{ $item->name }}"
                                                                class="avatar__image">
                                                        @else
                                                            <img 
                                                        alt="{{ $item->name }} {{ $item->lastname }}" 
                                                        src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                        class="h-35px" 
                                                        style="cursor: pointer"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }}"
                                                        />
                                                        @endif
                                                        </li>
                                                    </ol>
                                                </ol>
                                                   
                                                    {{-- created_at --}}
                                                    {{-- <span class="badge badge-primary pull-rigth mb-2">
                                                       Registrado:  {{ $item->created_at->diffForHumans() }}
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
                                                    <span class="badge badge-primary pull-rigth mb-2">
                                                        {{ $item->country }} - {{ $item->city }}
                                                    </span>
                                                <ol class="card__actions" style="list-style: none">
                                                  
                                                    <ol class="card__avatars" style="list-style: none">
                                                        <li class="card__avatars--item">
                                                            @if (file_exists('upload/contactos/' . $item->image) && $item->image != '')
                                                                <img src="{{ 'upload/contactos/' . $item->image }}" alt="{{ $item->name }}"
                                                                    class="avatar__image">
                                                            @else
                                                                <img 
                                                            alt="{{ $item->name }} {{ $item->lastname }}" 
                                                            src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" 
                                                            class="h-35px" 
                                                            style="cursor: pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->name }}"
                                                            />
                                                            @endif
                                                        </li>
                                                    </ol>
                                                </ol>
                                                
                                                    {{-- created_at --}}
                                                   {{--  <span class="badge badge-primary pull-rigth mb-2">
                                                       Registrado:  {{ $item->created_at->diffForHumans() }}
                                                    </span> --}}

                                            </div>
                                           
                                        @endforeach
                                    @endif

                                </div>
                            </div>



                        </div>



                        <!--end::Card body-->
                    </div>

                    <!--end::Container-->

                </div>
            </div>
        </div>
    </div>
    
    @endsection
