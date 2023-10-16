<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>Login Nines d' Onil</title>
    <meta charset="utf-8" />
   
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
   {{--  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}"> --}}
   <link  href="{{ asset('css/plugins/plugins.bundle.css') }}"  rel="stylesheet" type="text/css" />
   <link href="{{ asset('css/bundle/bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<!--end::Head-->
<!--begin::Body-->

<style>
    #forgot_password  {
        cursor: pointer;
        color: inherit !important;
        text-decoration: none !important;
    }
</style>

<body id="kt_body" class="bg-body">
    @include('sweetalert::alert')
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row-reverse flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-50 positon-xl-relative" style="background-color: #F2C98A">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-50 scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center">
                        <!--begin::BACKGROUNG-->
                        <img style="height: 100%; object-fit: cover;" src="assets/media/back-signin.jpg" />
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                      
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('reset-password') }}">
                            @csrf
                           
                            <!--begin::Heading-->
                            <div style="text-align: center;margin: 0 0 40px;" class="logo"><img src="assets/media/logonine.webp" /></div>
                           
                       
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">¿Has Olvidado tu contraseña?</h1>
                               {{--  @dump(session('message')) --}}
                                @if(session('message'))
                                <p class="text-danger">{{ session('message') }}</p>
                                @else
                                <h4 class="text-dark mb-3">Valida tus datos para cambiar la contraseña</h4>
                                @endif
                                <!--end::Title-->
                                <!--begin::Link-->

                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Usuario</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="name" autocomplete="off" />
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Nueva Contraseña</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                <!--end::Input-->
                                <div class="text-center">
                                    <!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Validar</span>
                                            <span class="indicator-progress">Porfavor espere...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Submit button-->
                                    <!--begin::Separator-->
    
                                    <!--end::Google link-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
        
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
   

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('js/plugins/bundle.js') }}"></script>
    <script src="{{ asset('js/plugins/scripts.bundle.js') }}"></script>
    
    <script 
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous">
    </script>

    {{-- <script src="assets/js/scripts.bundle.js"></script>
    <link href="{{ asset('js/plugins/bundle.js') }}" rel="stylesheet" type="text/css" /> --}}
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="assets/js/custom/authentication/sign-in/general.js"></script> --}}
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>