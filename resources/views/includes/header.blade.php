<div id="kt_header" class="header py-6 py-lg-0 mt-4" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{lg: '300px'}">
                    <!--begin::Container-->
                    <div class="header-container container-xxl">
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
                        <div class="d-flex align-items-center flex-shrink-0">
                            <!--begin::Search-->
                            <div class="me-3 py-3 py-lg-0">
                                <!--begin::Search-->
                                <div id="kt_header_search" class="d-flex align-items-center w-lg-225px"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                    <!--begin::Tablet and mobile search toggle-->
                                    <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                                        <div
                                            class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-40px h-40px">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                        height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Tablet and mobile search toggle-->
                                    <!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
                                    <form data-kt-search-element="form"
                                        class="d-none d-lg-block w-100 mb-5 mb-lg-0 position-relative"
                                        autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden" />
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px"
                                            name="search" value="" placeholder="Buscar"
                                            data-kt-search-element="input" />
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                            data-kt-search-element="spinner">
                                            <span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                            data-kt-search-element="clear">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                        height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                        fill="black" />
                                                    <rect x="7.41422" y="6" width="16" height="2"
                                                        rx="1" transform="rotate(45 7.41422 6)"
                                                        fill="black" />
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

                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="me-3">
                                    <!--begin::Menu toggle-->
                                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary bg-transparent w-40px h-40px"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                    fill="black" />
                                                <rect opacity="0.3" x="8" y="3" width="8"
                                                    height="8" rx="4" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Menu toggle-->
                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    @if (auth()->user()->rol == 1)
                                                        <img alt="Logo"
                                                            src="https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png" />
                                                    @else
                                                        <img alt="Logo"
                                                            src="https://res.cloudinary.com/cpandares/image/upload/v1677505079/logo-demo17_o0xsf6.webp" />
                                                    @endif
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                                        {{ auth()->user()->name }}
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
                                                        <a href="#"
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
                                                <a class="menu-link px-5" title="Proximamente" disabled>Mi perfil
                                                    (Próximamente)</a>

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
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title position-relative">Idioma
                                                        <span
                                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">Español
                                                            <img class="w-15px h-15px rounded-1 ms-2"
                                                                src="{{ asset('assets/media/flags/spain.svg') }}"
                                                                alt="" /></span></span>
                                                </a>
                                                <!--begin::Menu sub-->

                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a class="menu-link px-5">Configuración cuenta</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                {{--  <a href="{{ route('logout') }}" class="menu-link px-5">Salir</a> --}}
                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <button type="submit" class="menu-link px-5"
                                                        id="logout_button">Salir</button>
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