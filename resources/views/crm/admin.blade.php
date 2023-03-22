@extends('layouts.app') @section('content')
    <div class="row container">

        @if (auth()->user()->rol == 3)
            <h2 class="text-center text-danger">Acceso restringido</h2>
        @else
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                   <div class="card-header">
                    <h2 class="text-center">Resumen del Sistema</h2>
                   </div>
                    <div class="card-body pt-15">
                        <!--begin::Summary-->

                        <!--end::Summary-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-wrap flex-center" bis_skin_checked="1">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3" bis_skin_checked="1">
                                <div class="fs-4 fw-bolder text-gray-700" bis_skin_checked="1">
                                    <span class="w-75px">{{ count($contacts) }}</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                   {{--  <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                        </svg>
                                    </span> --}}
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted" bis_skin_checked="1">Contactos Registrados</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3" bis_skin_checked="1">
                                <div class="fs-4 fw-bolder text-gray-700" bis_skin_checked="1">
                                    <span class="w-50px">{{ count($campaings) }}</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                    {{-- <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
                                        </svg>
                                    </span> --}}
                                    
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted" bis_skin_checked="1">Campañas creadas</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3" bis_skin_checked="1">
                                <div class="fs-4 fw-bolder text-gray-700" bis_skin_checked="1">
                                    <span class="w-50px">{{ count($users) }}</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted" bis_skin_checked="1">Usuarios del sistema</div>
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>






            </div>
            <div class="col">
                <div class="card mb-6 mb-xl-9">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        
                        <div class="card-title">
                            <h2>Usuarios del sistema </h2>
                        </div>
                        <div class="card-toolbar" bis_skin_checked="1">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base"
                                bis_skin_checked="1">
    
                               
    
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">+ Nuevo Usuario</button>
                                <!--end::Add customer-->
                            </div>
                           
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario del sistema</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'admin.usuarios.store', 'autocomplete' => 'off', 'files' => true]) !!}
    
                                <div class="row">
                                    <div class="col-6">
                                        {!! Form::label('name', 'Nombre') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Eduardo']) !!}
                                        <br>
                                    </div>
                                    <div class="col-6">
                                        {!! Form::label('lastname', 'Apellido') !!}
                                        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Lopez']) !!}
                                       
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        {!! Form::label('ciudad', 'Ciudad') !!}
                                        {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                                        <br>
    
                                    </div>
                                    <div class="col-6">
    
                                        {!! Form::label('rol', 'Rol') !!}
                                        {!! Form::select('rol', ['1' =>'Soporte', '2'=>'Directivo','3'=>'Empleado'], null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Seleccionar',
                                        ]) !!}
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
    
                                        {!! Form::label('phone', 'Télefono') !!}
                                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                        <br>
                                    </div>
                                    <div class="col-6">
    
                                        {!! Form::label('email', 'Email') !!}
                                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
    
                                        {!! Form::label('password', 'Contraseña') !!}
                                       <input type="password" name="password" class="form-control">
                                        <br>
                                    </div>
                                    <div class="col-6">
                                        {!! Form::label('country', 'Pais') !!}
                                        {!! Form::select('country', $paises, null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Seleccionar',
                                        ]) !!}
                                    </div>
                                </div>
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-5']) !!}
                                {!! Form::close() !!}
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <table class="table align-middle table-row-dashed fs-6 gy-5  no-footer table-hover table_responsive"
                            id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead class="">
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">

                                    <th>Nombre Completo</th>
                                    <th>Pais</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>



                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->name }} {{ $item->lastname }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            @if ($item->rol == 1)
                                                <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                                                    Soporte
                                                </span>
                                            @elseif($item->rol == 2)
                                                <span class="badge badge-light-info fw-bolder fs-8 px-2 py-1 ms-2">
                                                    Directivo
                                                </span>
                                            @else
                                                <span class="badge badge-primary fw-bolder fs-8 px-2 py-1 ms-2">
                                                    Empleado
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acciones
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--></a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a {{-- data-toggle="modal"
                                                    data-target="#exampleModal<?= $item->id ?>" --}} class="menu-link px-3">Editar</a>
                                                </div>
                                               
                                                <div class="menu-item px-3">
                                                   {{--  <form method="post"
                                                action="{{ route('admin.campaings.destroy', $item) }}"
                                                class="formDelete">
                                                @csrf
                                                @method('delete') --}}
                                                <button  type="submit" id="logout_button" class="menu-link px-3"> 
                                                   Eliminar
                                                    
                                                </button>
                                           {{--  </form> --}}
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                            <!--end::Table body-->

                            <!--end::Table-->
                        </table>

                    </div>
                    <!--end::Body-->
                </div>
            </div>
        @endif


    </div>

@endsection
