
@extends('layouts.app') @section('content')
    <div class="row container">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            @if ($user->image)
                            <img src="{{ $user->image }}" alt="{{ $user->name }}">
                            @else
                                
                            <img src="https://res.cloudinary.com/cpandares/image/upload/v1678989754/blog-laravel/ds6saobpntikegnurzzo.jpg" alt="default_image">
                            @endif
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                       {{--  @dump($user->name) --}}
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $user->name }} {{ $user->lastname }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="fs-5 fw-bold text-muted mb-6">
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
                        <!--end::Position-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap flex-center">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-75px">20</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted">Clientes Ganados </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-50px">10</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted">Campañas creadas</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-50px">10</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
                                            <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted">usuarios no interesados</div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Detalles
                        <span class="ms-2 rotate-180">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span></div>
                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit customer details">
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Editar</a>
                        </span>
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div id="kt_customer_view_details" class="collapse show">
                        <div class="py-5 fs-6">
                            <!--begin::Badge-->
                            {{-- <div class="badge badge-light-info d-inline">Premium user</div> --}}
                            <!--begin::Badge-->
                            <!--begin::Details item-->
                           {{--  <div class="fw-bolder mt-5">Account ID</div>
                            <div class="text-gray-600">ID-45453423</div> --}}
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                          {{--   <div class="fw-bolder mt-5">Dirección</div>
                            <div class="text-gray-600">{{ $user->city }}, --}}
                            {{-- <br>Melbourne 3000 VIC --}}
                            {{-- <br>{{ $user->country }}</div> --}}
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                          {{--   <div class="fw-bolder mt-5">Language</div>
                            <div class="text-gray-600">English</div> --}}
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                           {{--  <div class="fw-bolder mt-5">Upcoming Invoice</div>
                            <div class="text-gray-600">54238-8693</div> --}}
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                           {{--  <div class="fw-bolder mt-5">Tax ID</div>
                            <div class="text-gray-600">TX-8674</div> --}}
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>



           


        </div>
        <div class="col">
            <div class="card mb-6 mb-xl-9">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <div class="card-title">
                        <h2>Actualiza tus datos</h2>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    
                    {!! Form::model($user,['route'=>['admin.usuarios.update', $user], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

                    <div class="row">
                        <div class="col-md-6">
                          
                            {!! Form::label('name', 'Nombre de usuario') !!}
                            {!! Form::text('name', $user->name, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                            @error('name')
                                <small class="text-danger">Este campo es requerido</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                         
                            {!! Form::label('password', 'Contraseña') !!}
                           
                            <input type="password" name="passowrd" class="form-control" placeholder="*******">
                        </div>
                    </div>
    
                    <div class="row  mt-2">
                        <div class="col-md-6">
                            {!! Form::label('imagen', 'Imagen') !!}
                           
                            <input type="file" name="imagen" class="form-control" >
                        </div>
                        <div class="col-md-6">
                           
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', $user->email, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                            @error('email')
                                <small class="text-danger">Este campo es requerido</small>
                            @enderror
                        </div>
                    </div>
    
                 
    
                
    
                   
    
                    <div class="mt-5">
    
                        {!! Form::submit('Guardar', ['class'=>'btn btn-primary ']) !!}
                        
                    </div>
                    {!! Form::close() !!}
                </div>
                <!--end::Body-->
            </div>
        </div>

    </div>

@endsection