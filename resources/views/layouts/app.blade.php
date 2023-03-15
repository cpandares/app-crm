
<!DOCTYPE html>
<html lang="es">


<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------- HEADER ---------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------- -->
@include('head')
@yield('script')
<script src="{{ asset('inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
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
        background: #3f4254;
        width: 100%;
        border: none
    }
</style>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    @include('sweetalert::alert')
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class=" flex-row flex-column-fluid">



            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header tablet and mobile-->
                <div class="header-mobile py-3">
                    <!--begin::Container-->
                    <div class="container d-flex flex-stack">
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a>
                               
                                <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" class="h-35px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Aside toggle-->
                        <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2x me-n1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header tablet and mobile-->
                <!--begin::Header-->
                <div id="kt_header" class="header py-6 py-lg-0 mt-4" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
                    <!--begin::Container-->
                    <div class="header-container container-xxl">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                         
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
                                    <form data-kt-search-element="form" class="d-none d-lg-block w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black" />
													<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black" />
												</svg>
											</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text"  class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Buscar" data-kt-search-element="input" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
												<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        </span>
                                        <!--end::Reset-->
                                    </form>
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
                                    <!--begin::Menu toggle-->
                                   
                                    <!--end::Menu toggle-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																				<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																			</svg>
																		</span>
                                                                <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                           
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 hr</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    
                                                   
                                                </div>
                                                <!--end::Items-->
                                                <!--begin::View more-->
                                             
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                           
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                          
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
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
                                                    @if (auth()->user()->rol == 1)
                                                    <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png" />
                                                    @else
                                                    <img alt="Logo" src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" />
                                                    
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
                                                        class="badge badge-light-primary fw-bolder fs-8 px-2 py-1 ms-2">
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
                                        <div class="menu-item px-5">
                                            <a  class="menu-link px-5" title="Proximamente" disabled>Mi perfil (Próximamente)</a>
                                            
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
                                            <a  class="menu-link px-5">Configuración cuenta</a>
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
                <!--end::Header-->
                <!--begin::Content-->
               
             
            </div>

            <div class="page-container">

                @include('menu')
            
            
                @yield('content')

                @include('footer')
            
            </div>

        </div>

    </div>


</body>
</html>