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
    <link href="{{ asset('css/plugins/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bundle/bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
</head>
<!--end::Head-->
<!--begin::Body-->

<style>
    #forgot_password {
        cursor: pointer;
        color: inherit !important;
        text-decoration: none !important;
    }
</style>

<body id="kt_body" >
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-root align-items-center">
       
        <div class="container shadow-lg rounded">
             <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row-reverse flex-column-fluid">
                <!--begin::Aside-->
                <div 
                    class="d-flex flex-column flex-lg-row-auto w-xl-50 positon-xl-relative ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column ">
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid flex-column">
                            <!--begin::BACKGROUNG-->
                            <img style="height: 90vh; object-fit: cover;" src="assets/media/back-signin.jpg" />
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid py-10 ">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                            <!--begin::Form-->
                            <form method="POST" action="{{ route('login') }}" class="form w-100" id="kt_sign_in_form">
                                @csrf
                                <!--begin::Heading-->
                                <div 
                                    style="text-align: center;margin: 0 0 40px;" class="logo">
                                    <img src="assets/media/logonine.webp" /></div>


                                <div class="text-center mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">Bienvenido</h1>
                                    {{--  @dump(session('message')) --}}
                                    @if (session('message'))
                                        <p class="text-danger">{{ session('message') }}</p>
                                    @else
                                        <h4 class="text-dark mb-3">Inicia Sesión</h4>
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
                                    <input 
                                        class="form-control form-control-lg form-control-solid" 
                                        type="text"
                                        name="email" 
                                        autocomplete="off" 
                                        id="campo"
                                        />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Contraseña</label>
                                        <!--end::Label-->
                                        <!--begin::Link-->

                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Input-->

                                    <input 
                                        class="form-control form-control-lg form-control-solid" 
                                        type="password"
                                        name="password" 
                                        autocomplete="off" 
                                        id="password"
                                        />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="d-flex justify-content-between mb-2">
                                        <p>
                                            <input type="checkbox" name="" id="boton"> Recordarme
                                        </p>
                                      {{--   <button  
                                            class="link-primary fs-6 fw-bolder"
                                            id="forgot_password" 
                                            data-toggle="modal" data-target="#exampleModal">Olvidaste
                                            tu Contraseña ?</button> --}}

                                        {{--     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Launch demo modal
                                              </button> --}}

                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                        <span class="indicator-label">Iniciar Sesión</span>
                                        <span class="indicator-progress">Porfavor espere...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Submit button-->
                                    <!--begin::Separator-->

                                    <!--end::Google link-->
                                </div>
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

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
             
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Te enviaremos un correo con un link para que puedas cambiar tu contraseña
                </p>
{{-- form recovery password --}}
                <form method="POST" action="{{ route('password.email') }}" class="form w-100" id="kt_sign_in_form">
                    @csrf
                    <!--begin::Heading-->
                    <div
                        style="text-align: center;margin: 0 0 40px;" class="logo">
                       

                    <input type="email" class="form-control" name="email" placeholder="Tu email aqui">
                    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                </form>
                
            </div>
           
          </div>
        </div>
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->


    <!--begin::Global Javascript Bundle(used by all pages)-->

    {{-- <script src="assets/js/scripts.bundle.js"></script>
    <link href="{{ asset('js/plugins/bundle.js') }}" rel="stylesheet" type="text/css" /> --}}
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    {{-- <script src="assets/js/custom/authentication/sign-in/general.js"></script> --}}
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        
        // Obtener el botón y el campo de entrada
        var boton = document.getElementById("boton");
        var campo = document.getElementById("campo");
        var password = document.getElementById('password');
        // Agregar un evento de clic al botón
        boton.addEventListener("click", function() {
            // Obtener el valor del campo de entrada
            var valor = campo.value;
            var pass = password.value;
            // Almacenar el valor en localStorage
            localStorage.setItem("valor", valor);
            localStorage.setItem("pass", pass)
        });

        // Recuperar el valor del almacenamiento local y establecerlo en el campo de entrada
        campo.value = localStorage.getItem("valor");
        password.value = localStorage.getItem("pass")

        if(campo.value != ''){
            boton.checked = true;
        }
    </script>
</body>
<!--end::Body-->

</html>
