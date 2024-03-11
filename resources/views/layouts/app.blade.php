
<!DOCTYPE html>
<html lang="es">


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------- HEADER ---------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
@include('head')
@yield('script')

<!-- ------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------- HTML ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
<style>
    #logout_button{
        background: none;
        border: none
    }
    #logout_button :hover{
        background: #ace0b8 !important;
        color: white !important;
        width: 100%;
        border: none
    }
</style>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    @include('sweetalert::alert')
    <!--begin::Main-->
    
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root ">
        <!--begin::Page-->
        <div class=" flex-row flex-column-fluid">



            
            <div class="page-container">
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header tablet and mobile-->
                    <div class="header-mobile py-3">
                        <!--begin::Container-->
                        
                        <div class="container d-flex flex-stack">
                            <!--begin::Mobile logo-->
                            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                                <a>
                                   
                                    <img alt="Logoaa" src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" class="h-35px" />
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
                        <div class="header-container container-xxl">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3" bis_skin_checked="1">
                                <!--begin::Heading-->
                                <h1 class="d-flex flex-column text-dark fw-bolder my-1">
                                    <span class="fs-1">{{ $title }}</span>
                                </h1>
                                <!--end::Heading-->
                            </div>
                            <!--end::Page title=-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <!--begin::Search-->
                                <div class="me-3 py-3 py-lg-0">
                                    <!--begin::Search-->
                                    <div id="kt_header_search" class="d-flex align-items-center w-lg-225px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
                                        data-kt-menu-placement="bottom-end">
                                        <!--begin::Tablet and mobile search toggle-->
                                        <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                            <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-40px h-40px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Tablet and mobile search toggle-->
                                        <!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
                                        
                                        <!--end::Form-->
                                        <!--begin::Menu-->
                                     
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Search-->
                                <!--begin::Action-->
                                <div class="d-flex align-items-center py-3 py-lg-0">
                                    <!--begin::Item-->
                                    <div class="me-3">
                                       
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
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
                                                        {{-- @if (auth()->user()->rol == 1)
                                                            @if (!auth()->user()->image)
                                                                <img alt="Logo" src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" />
                                                            @else
                                                                <img alt="Logo" src="{{  URL('/images/contactos/') .'/'. auth()->user()->image }}" />
                                                            @endif
                                                       
                                                        @else

                                                        @if (!auth()->user()->image)
                                                        <img alt="Logo" src="{{ URL('/images/logo-demo17_o0xsf6.webp') }}" />
                                                            @else
                                                                <img alt="Logo" src="{{  URL('/images/contactos/') .'/'. auth()->user()->image }}" />
                                                        @endif
                                                       
                                                        
                                                        @endif --}}
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
                                                                class="badge badge-primary fw-bolder fs-8 px-2 py-1 ms-2">
                                                               Empleado
                                                            </span>
                                                            @else                                                            
                                                            <span 
                                                             class="badge badge-light-info fw-bolder fs-8 px-2 py-1 ms-2">
                                                             Directivo
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
                                   {{--  <a class="btn btn-primary">FACTUSOL</a> --}}
                                    <!--end::Item-->
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    
                   
                 
                </div>

                
                @include('menu')
            
            
                @yield('content')

                @include('footer')
            
            </div>

        </div>

    </div>


</body>
</html>