   <!--begin::Global Stylesheets Bundle(used by all pages)-->
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
    .list__contacts{
 
}
</style>

<link  href="{{ asset('css/plugins/datatables.bundle.css') }}"  rel="stylesheet" type="text/css" />
 
<link  href="{{ asset('css/plugins/vis-timeline.bundle.css') }}"  rel="stylesheet" type="text/css" />
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link  href="{{ asset('css/plugins/plugins.bundle.css') }}"  rel="stylesheet" type="text/css" />

<link  href="{{ asset('css/bundle/bundle.css') }}"  rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->

<link  href="{{ asset('css/plugins/fullcalendar.bundle.css') }}"  rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@include('sweetalert::alert')
<div id="kt_header" class="header py-6 py-lg-0 mt-4" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}">
    <!--begin::Container-->
     <div class="header-container container-fluid">
         <!--begin::Page title-->
         <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3"
             bis_skin_checked="1">
             <!--begin::Heading-->
             <h1 class="d-flex flex-column text-dark fw-bolder my-1">
                 <span class="fs-1">{{ $title }}</span>
             </h1>
             <!--end::Heading-->
         </div>
         <!--end::Page title=-->
         <!--begin::Topbar-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a>
                        
                 <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" class="h-35px" />
             </a>
           
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                
                 {{-- <li class="nav-item">
                   <a class="nav-link link-item" data-toggle="modal"
                   data-target="#exampleModal" type="button">Agrega un contacto</a>
                 </li> --}}
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                     CRM
                   </a>
                   <div class="dropdown-menu">
                     <a class="dropdown-item menu-link" href="{{ url('admin/pedidos-api') }}">Pedidos Api</span></a>
                     <a class="dropdown-item menu-link" href="{{ url('admin/clientes-api') }}">Clientes Api</a>
                    {{--  <a class="dropdown-item menu-link" href="#">Campañas</a> --}}
                     <a class="dropdown-item menu-link" href="{{ url('admin/calendario') }}">Calendario</a>
                     <div class="dropdown-divider"></div>
                    {{--  <a class="dropdown-item" href="#">Vista tabla</a> --}}
                   </div>
                 </li>
               
               </ul>
              
             </div>
           </nav>
         <!--end::Container-->
         <div class="header-mobile py-3">
             <!--begin::Container-->
             
             <div class="container d-flex flex-stack">
                 <!--begin::Mobile logo-->
                 <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                     <a>
                        
                         <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" class="h-35px" />
                     </a>
                 </div>

                 <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                     <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                     <span class="svg-icon svg-icon-2x me-n1">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                             <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"></path>
                             <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"></path>
                         </svg>
                     </span>
                     <!--end::Svg Icon-->
                 </button>
              
             </div>
             
         </div>
        
         <div id="kt_header" class="header py-6 py-lg-0 mt-4" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
             <!--begin::Container-->
             <div class="header-container ">
               
                 <!--end::Page title=-->
                 <!--begin::Topbar-->
                 <div class="d-flex align-items-center flex-shrink-0">
                    
                   
                     <!--end::Search-->
                     <!--begin::Action-->
                     <div class="d-flex align-items-center py-3 py-lg-0">
                         <!--begin::Item-->
                         <div class="me-3">
                            
                         </div>
                         <!--end::Item-->
                         <!--begin::Item-->
                         <div class="me-3">
                             <button class="btn btn-primary float-right btn-sm" data-toggle="modal"
                                 data-target="#exampleModal" type="button">
                                 Añadir Contactos
                             </button>
                            {{--  <button class="btn btn-primary float-right btn-sm mr-2" data-toggle="modal"
                             data-target="#exampleModal" type="button">
                             Añadir Contactos
                         </button> --}}
                         </div>
                         <div class="me-3">
                             <!--begin::Menu toggle-->
                             <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-40px h-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                 <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                 <span class="svg-icon svg-icon-1">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                             <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                             <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                         </svg>
                                     </span>
                                 <!--end::Svg Icon-->
                             </div>
                             <!--end::Menu toggle-->
                             <!--begin::User account menu-->
                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                     <div class="menu-content d-flex align-items-center px-3">
                                         <!--begin::Avatar-->
                                         <div class="symbol symbol-50px me-5">
                                             @if (auth()->user()->rol == 1)
                                                 @if (!auth()->user()->image)
                                                     <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png" />
                                                 @else
                                                     <img alt="Logo" src="{{ auth()->user()->image }}" />
                                                 @endif
                                            
                                             @else

                                             @if (!auth()->user()->image)
                                             <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" />
                                                 @else
                                                     <img alt="Logo" src="{{ auth()->user()->image }}" />
                                             @endif
                                            
                                             
                                             @endif
                                         </div>
                                         <!--end::Avatar-->
                                         <!--begin::Username-->
                                         <div class="d-flex flex-column">
                                             <div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}
                                                 @if (auth()->user()->rol == 1)
                                                 <span 
                                                 class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                                                 Soporte
                                                 </span>
                                                 @elseif(auth()->user()->rol == 2)
                                                 <span 
                                                 class="badge badge-light-info fw-bolder fs-8 px-2 py-1 ms-2">
                                                 Directivo
                                                 </span>
                                                 @else
                                                 <span 
                                                 class="badge badge-primary fw-bolder fs-8 px-2 py-1 ms-2">
                                                 Empleado
                                                 </span>
                                                 @endif
                                                
                                             </div>
                                             <div>
                                                 <a 
                                                 href="#" 
                                                 class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}
                                                 </a>

                                             </div>
                                         <!--end::Username-->
                                     </div>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 <div class="separator my-2"></div>
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5" >
                                     <a href="{{  route('admin.usuarios.show', auth()->user())}}" class="menu-link px-5" title="Proximamente" >Mi perfil </a>
                                     
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5">
                                    
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5">
                                    
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 <div class="separator my-2"></div>
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                     <a href="#" class="menu-link px-5">
                                         <span class="menu-title position-relative">Idioma
                                             <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">Español
                                             <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/spain.svg')}}" alt="" /></span></span>
                                     </a>
                                     <!--begin::Menu sub-->
                                    
                                     <!--end::Menu sub-->
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5 my-1">
                                     <a href="{{ url('admin/config') }}" class="menu-link px-5">Configuración</a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-5">
                                    {{--  <a href="{{ route('logout') }}" class="menu-link px-5">Salir</a> --}}
                                     <form method="POST" action="{{ route('logout') }}" x-data>
                                         @csrf
         
                                        <button type="submit" class="menu-link px-5" id="logout_button">Salir</button>
                                       {{--  <input type="submit" value="Salir" class="menu-link px-5"> --}}
                                     </form>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu separator-->
                                 
                                 <!--end::Menu separator-->
                                 <!--begin::Menu item-->
                                
                                 <!--end::Menu item-->
                             </div>
                             <!--end::User account menu-->
                         </div>
                         <!--end::Item-->
                         <!--begin::Theme mode-->

                         <!--end::Theme mode-->
                         <!--begin::Item-->
                         <a class="btn btn-primary">FACTUSOL</a>
                         <!--end::Item-->
                     </div>
                     <!--end::Action-->
                 </div>
                 <!--end::Topbar-->
             </div>
             <!--end::Container-->
         </div>
     </div>

   
        <!--begin::Container-->
      
            <!--begin::Card header-->
            <div class="mt-5" bis_skin_checked="1">
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                    <div class="card-title" bis_skin_checked="1">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1" bis_skin_checked="1">

                         {{--    <p>Contactos registrados: {{ count($data) }}</p> --}}
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar" bis_skin_checked="1">
                     <!--begin::Toolbar-->
                     <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base" bis_skin_checked="1">

                         {{-- <a
                         href="{{ url('admin/contactos-lista') }}"
                         class="btn btn-primary"
                     >
                         Ver Tabla
                     </a>
                   
                     <a
                         
                         class="btn btn-outline-primary"
                         href="{{ route('admin.contact.create') }}"
                     >
                      +   Añadir Contacto
                     </a> --}}
                         <!--end::Add customer-->
                         <div class="row" bis_skin_checked="1">
                             <div class="col-12" bis_skin_checked="1">

                                 {{-- <button class="btn btn-primary float-right mb-3 btn-sm" data-toggle="modal"
                                     data-target="#exampleModal" type="button">
                                     Añadir Contactos
                                 </button> --}}

                                 <a href="{{ route('admin.campaings.show', $campaing->id) }}" class="btn btn-primary float-right btn-sm mr-1">
                                    Vista tabla
                                </a>

                                 <a href="{{ route('admin.campaings.index') }}"
                                     class="btn btn-primary float-right btn-sm mr-1">
                                     Campañas
                                 </a>
                             </div>
                         </div>
                     </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"
                        bis_skin_checked="1">

                        <div class="modal fade" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['url'=>'admin/campaings/create-contract/' . $campaing->id, 'autocomplete'=>'off', 'files'=>true]) !!}

                                        <div class="row">
                                            <div class="col-md-6">

                                                {!! Form::label('name', 'Nombre') !!}
                                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pedro', 'required']) !!}
                                                @error('name')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('lastname', 'Apellido') !!}
                                                {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Perez', 'required']) !!}
                                                @error('lastname')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror



                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">
                                                {!! Form::label('phone', 'Telefono') !!}
                                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '+34 455487895', 'required']) !!}
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('email', 'Email') !!}
                                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'test@prueba.com', 'required']) !!}
                                                @error('email')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                            <div class="col-md-6">
                                                {!! Form::label('postcode', 'Código Postal') !!}
                                                {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '03430']) !!}
                                            </div>
                                            <div class="col-md-6">

                                                {!! Form::label('country', 'País') !!}
                                                {!! Form::select('country', $paises, null, ['class' => 'form-control', 'placeholder' => '--Seleccionar pais--', 'required']) !!}
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
                                                {!! Form::label('state', 'Provincia (opcional)') !!}
                                                 {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                            </div>
                                        </div>

                                        <div class="row  mt-2">
                                         <div class="col-md-6">

                                             {!! Form::label('address', 'Dirección (opcional)') !!}
                                             {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                             {!! Form::text('address',  null, [
                                                
                                                 'class' => 'form-control',
                                                 'placeholder' => 'Calle tercera casa 25',
                                                
                                             ]) !!}

                                          
                                         </div>
                                         <div class="col-md-6">

                                             {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                                             {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                             {!! Form::select('campaing', $campaings, $campaing->id, [
                                                 
                                                 'class' => 'form-control',
                                                 'placeholder' => 'Seleccionar',
                                                 'required'
                                             ]) !!}

                                             @error('statu')
                                                 <small class="text-danger">Este campo es requerido</small>
                                             @enderror

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
                                                    'required'
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
                                                    'required'
                                                ]) !!}

                                                @error('statu')
                                                    <small class="text-danger">Este campo es requerido</small>
                                                @enderror

                                            </div>
                                        </div>




                                        <div class="mt-5">

                                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--end::Table-->
                </div>
                
                <div class="board-lists list__contacts">

                 
                    <div>
                        <div class="list-title">
                         <div class="alert alert-primary" role="alert">
                             Nuevos <br>
                             Total de contactos en lista: {{ count($new_clients) }}
                           </div>
                        </div>

                        <div class="board-list border-top border-info" data-reference="1">

                            @if (count($new_clients) > 0)
                                @foreach ($new_clients as $item)
                                    <div class="list-group-item card mt-2 rounded-top" id="tarjeta" draggable="true"
                                        data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">


                                        <span class="badge badge-light-info">{{ $item->country }}</span>
                                        <h6 class="card__title">
                                            <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">
                                                {{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        </h6>

                                        <ol class="card__actions " style="list-style: none">
                                            {{--  <li class="card__actions--wrapper">
                                         <i class="fas fa-eye"  data-toggle="modal"
                                         data-target="#exampleModal<?= $item->id ?>"></i>
                                     </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif

                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif

                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                        Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '03430',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                             {!! Form::label('state', 'Provincia (opcional)') !!}
                                             {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                         </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                   


                    <div>
                     <div class="list-title">
                         {{-- <h2 class="text-center text-gray-600 text-hover-primary">En Negociación</h2> --}}
                         <div class="alert alert-light" role="alert">
                             En Negociación <br>
                             Total de contactos en lista {{ count($clientes_negoci) }}
                         </div>
                     </div>
                     <div class="board-list border-top border-success" data-reference="2">

                         @if (count($clientes_negoci) > 0)
                             @foreach ($clientes_negoci as $item)
                                 <div class="list-group-item card mt-2" draggable="true"
                                     data-id="{{ $item->id }}" id="tarjeta"
                                     data-contact="{{ $item->contact_status }}">

                                     <span
                                         class="badge badge-light-success pull-rigth">{{ $item->country }}</span>
                                     <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                             href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }}
                                             {{ $item->lastname }}
                                         </a></h6>
                                     <ol class="card__actions" style="list-style: none">
                                         {{--  <li class="card__actions--wrapper">
                                  <i class="fas fa-eye"  data-toggle="modal"
                                  data-target="#exampleModal<?= $item->id ?>"></i>
                                </li> --}}
                                         <ol class="card__avatars" style="list-style: none">
                                             <li class="card__avatars--item">
                                                 @if ($item->image)
                                                     <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                         class="avatar__image">
                                                 @else
                                                     <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                         alt="Man standing near balcony" class="avatar__image">
                                                 @endif
                                             </li>
                                         </ol>
                                     </ol>
                                     @php
                                         $campaigs = $controlador->getCampaingsContacts($item->id);
                                     @endphp

                                     @if ($campaigs)
                                         <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                     @endif
                                 </div>
                                 <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-lg">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                     Contacto
                                                 </h5>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>
                                             </div>
                                             <div class="modal-body">
                                                 {!! Form::model($item, [
                                                     'route' => ['admin.contact.update', $item->id],
                                                     'autocomplete' => 'off',
                                                     'files' => true,
                                                     'method' => 'put',
                                                 ]) !!}

                                                 <div class="row">
                                                     <div class="col-md-6">

                                                         {!! Form::label('name', 'Nombre') !!}
                                                         {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                         @error('name')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('lastname', 'Apellido') !!}
                                                         {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                         @error('lastname')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('phone', 'Telefono') !!}
                                                         {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '+34 455487895',
                                                         ]) !!}
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('email', 'Email') !!}
                                                         {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => 'test@prueba.com',
                                                         ]) !!}
                                                         @error('email')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('postcode', 'Código Postal') !!}
                                                         {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '03430',
                                                         ]) !!}
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('country', 'País') !!}
                                                         {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '---',
                                                         ]) !!}
                                                         @error('country')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('city', 'Ciudad') !!}
                                                         {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => 'Barcelona',
                                                         ]) !!}
                                                     </div>
                                                     {{--   <div class="col-md-6">
                                          {!! Form::label('state', 'Provincia (opcional)') !!}
                                          {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                      </div> --}}
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">

                                                         {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                         {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                         {!! Form::select(
                                                             'medio_comunicacion',
                                                             $comunicacion_medias,
                                                             isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                             ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                         ) !!}

                                                         @error('medio_comunicacion')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                         {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                         {!! Form::select('contact_status', $status, $item->contact_status, [
                                                             'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                             'class' => 'form-control',
                                                             'placeholder' => 'Seleccionar',
                                                         ]) !!}

                                                         @error('statu')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror

                                                     </div>
                                                 </div>

                                                 <div class="mt-5">

                                                     {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                 </div>
                                                 {!! Form::close() !!}
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         @endif

                     </div>
                 </div>


                    <div>
                        <div class="list-title">
                           {{--  <h2 class="text-center text-gray-600 text-hover-primary"></h2> --}}
                            <div class="alert alert-info" role="alert">
                             Presupuesto Enviado <br>
                             Total de contactos en lista {{ count($presupuestados) }}
                             </div>
                        </div>
                        <div class="board-list border-top border-primary " data-reference="3">

                            @if (count($presupuestados) > 0)
                                @foreach ($presupuestados as $item)
                                    <div class="list-group-item card mt-2" draggable="true"
                                        data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}"
                                        id="tarjeta">
                                        <span class="badge badge-light-info">{{ $item->country }}</span>
                                        <h6 class="card__title">
                                            <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">
                                                {{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        </h6>
                                        <ol class="card__actions " style="list-style: none">
                                            {{--  <li class="card__actions--wrapper">
                                                 <i class="fas fa-eye"  data-toggle="modal"
                                                 data-target="#exampleModal<?= $item->id ?>"></i>
                                               </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif

                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif

                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                        Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '03430',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                                         {!! Form::label('state', 'Provincia (opcional)') !!}
                                                         {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                                     </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div>
                        <div class="list-title">
                           {{--  <h2 class="text-center text-gray-600 text-hover-primary">Clientes</h2> --}}
                            <div class="alert alert-success" role="alert">
                             Clientes <br>
                             Total de contactos en lista {{ count($clientes) }}
                             </div>
                        </div>
                        <div class="board-list border-top border-danger" data-reference="4">

                            @if (count($clientes) > 0)
                                @foreach ($clientes as $item)
                                    <div class="list-group-item card mt-2" draggable="true"
                                        data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}"
                                        id="tarjeta">

                                        <span class="badge badge-primary">{{ $item->country }}</span>
                                        <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                                href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }}
                                                {{ $item->lastname }}
                                            </a></h6>
                                        <ol class="card__actions" style="list-style: none">
                                            {{--   <li class="card__actions--wrapper">
                                   <i class="fas fa-eye"  data-toggle="modal"
                                   data-target="#exampleModal<?= $item->id ?>"></i>
                                 </li> --}}
                                            <ol class="card__avatars" style="list-style: none">
                                                <li class="card__avatars--item">
                                                    <!-- Photo by Philip Martin on Unsplash -->
                                                    @if ($item->image)
                                                        <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                            class="avatar__image">
                                                    @else
                                                        <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                            alt="Man standing near balcony" class="avatar__image">
                                                    @endif
                                                </li>
                                            </ol>
                                        </ol>
                                        @php
                                            $campaigs = $controlador->getCampaingsContacts($item->id);
                                        @endphp

                                        @if ($campaigs)
                                            <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                        @endif
                                    </div>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                        Contacto
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.contact.update', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '03430',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Barcelona',
                                                            ]) !!}
                                                        </div>
                                                        {{--   <div class="col-md-6">
                                             {!! Form::label('state', 'Provincia (opcional)') !!}
                                             {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                         </div> --}}
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">

                                                            {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'medio_comunicacion',
                                                                $comunicacion_medias,
                                                                isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">

                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es
                                                                    requerido</small>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">

                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>

                    <div>
                     <div class="list-title">
                      <div class="alert alert-danger" role="alert">
                         No interesados <br>
                          Total de contactos en lista {{ count($clientes_negoci) }}
                      </div>
                     </div>
                     <div class="board-list border-top border-success" data-reference="2">

                         @if (count($clientes_negoci) > 0)
                             @foreach ($clientes_negoci as $item)
                                 <div class="list-group-item card mt-2" draggable="true"
                                     data-id="{{ $item->id }}" id="tarjeta"
                                     data-contact="{{ $item->contact_status }}">

                                     <span
                                         class="badge badge-light-success pull-rigth">{{ $item->country }}</span>
                                     <h6 class="card__title"> <a class="text-gray-800 text-hover-primary mb-1"
                                             href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }}
                                             {{ $item->lastname }}
                                         </a></h6>
                                     <ol class="card__actions" style="list-style: none">
                                         {{--  <li class="card__actions--wrapper">
                                  <i class="fas fa-eye"  data-toggle="modal"
                                  data-target="#exampleModal<?= $item->id ?>"></i>
                                </li> --}}
                                         <ol class="card__avatars" style="list-style: none">
                                             <li class="card__avatars--item">
                                                 @if ($item->image)
                                                     <img src="{{ $item->image }}" alt="{{ $item->name }}"
                                                         class="avatar__image">
                                                 @else
                                                     <img src="https://images.unsplash.com/photo-1521119989659-a83eee488004?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=664&q=80"
                                                         alt="Man standing near balcony" class="avatar__image">
                                                 @endif
                                             </li>
                                         </ol>
                                     </ol>
                                     @php
                                         $campaigs = $controlador->getCampaingsContacts($item->id);
                                     @endphp

                                     @if ($campaigs)
                                         <span>Campañas: {{ $campaigs->campaing_name }}</span>
                                     @endif
                                 </div>
                                 <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-lg">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                     Contacto
                                                 </h5>
                                                 <button type="button" class="close" data-dismiss="modal"
                                                     aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>
                                             </div>
                                             <div class="modal-body">
                                                 {!! Form::model($item, [
                                                     'route' => ['admin.contact.update', $item->id],
                                                     'autocomplete' => 'off',
                                                     'files' => true,
                                                     'method' => 'put',
                                                 ]) !!}

                                                 <div class="row">
                                                     <div class="col-md-6">

                                                         {!! Form::label('name', 'Nombre') !!}
                                                         {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                         @error('name')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('lastname', 'Apellido') !!}
                                                         {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                         @error('lastname')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('phone', 'Telefono') !!}
                                                         {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '+34 455487895',
                                                         ]) !!}
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('email', 'Email') !!}
                                                         {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => 'test@prueba.com',
                                                         ]) !!}
                                                         @error('email')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('postcode', 'Código Postal') !!}
                                                         {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '03430',
                                                         ]) !!}
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('country', 'País') !!}
                                                         {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => '---',
                                                         ]) !!}
                                                         @error('country')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">
                                                         {!! Form::label('city', 'Ciudad') !!}
                                                         {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                             'class' => 'form-control',
                                                             'placeholder' => 'Barcelona',
                                                         ]) !!}
                                                     </div>
                                                     {{--   <div class="col-md-6">
                                          {!! Form::label('state', 'Provincia (opcional)') !!}
                                          {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                      </div> --}}
                                                 </div>

                                                 <div class="row  mt-2">
                                                     <div class="col-md-6">

                                                         {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                         {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                         {!! Form::select(
                                                             'medio_comunicacion',
                                                             $comunicacion_medias,
                                                             isset($item->comunication_medium) ? $item->comunication_medium : null,
                                                             ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                         ) !!}

                                                         @error('medio_comunicacion')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror
                                                     </div>
                                                     <div class="col-md-6">

                                                         {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                         {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                         {!! Form::select('contact_status', $status, $item->contact_status, [
                                                             'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                             'class' => 'form-control',
                                                             'placeholder' => 'Seleccionar',
                                                         ]) !!}

                                                         @error('statu')
                                                             <small class="text-danger">Este campo es
                                                                 requerido</small>
                                                         @enderror

                                                     </div>
                                                 </div>

                                                 <div class="mt-5">

                                                     {!! Form::submit('Guardar', ['class' => 'btn btn-primary ']) !!}

                                                 </div>
                                                 {!! Form::close() !!}
                                             </div>

                                         </div>
                                     </div>
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
    @include('footer')
