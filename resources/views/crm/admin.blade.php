@extends('layouts.app')
@section('content')
  
    <div class="row container">

        @if (auth()->user()->rol == 3)
            <h2 class="text-center text-danger">Acceso restringido</h2>
        @else
            <div class="col-sm-12 col-md-3">
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
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3"
                                bis_skin_checked="1">
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
            <div class="col-sm-12 col-md-9">
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

                                <a href="{{ url('admin/config') }}" class="btn btn-primary float-right btn-sm mr-1"
                                    title="Limpiar filtros">
                                    <i class="fa fa-repeat"></i>
                                </a>

                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">+ Nuevo Usuario</button>


                                <!--end::Add customer-->
                            </div>

                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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
                                            {!! Form::text('name', null, [
                                                'class' => 'form-control',
                                                'id' => 'form-control',
                                                'placeholder' => 'Eduardo',
                                                'onkeyup' => 'convertir(this)',
                                            ]) !!}
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
                                            {!! Form::select('rol', ['1' => 'Soporte', '2' => 'Directivo', '3' => 'Comercial', '4' =>'Empleado'], null, [
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

                                <tr class="text-gray-600">
                                    {{-- @dump($campaing) --}}
                                    {!! Form::open(['url' => 'admin/config', 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                    <input type="hidden" id="accion" name="accion" value="2">

                                    <th>
                                        <input type="text" placeholder="Nombre contacto" name="name" id="name"
                                            onchange="buscar('namea')" class="form-control">
                                    </th>
                                    <th>
                                        {!! Form::select('country', $paises, null, [
                                            'id' => 'campaing',
                                            'class' =>
                                                'form-control text-gray-400                                                                                            js-example-basic-single',
                                            'placeholder' => 'Seleccionar',
                                            'onchange' => "buscar('campaing')",
                                        ]) !!}

                                    </th>
                                    <th>
                                        <input type="email" placeholder="Email" name="email" id="email"
                                            onchange="buscar('emaila')" class="form-control">
                                    </th>
                                    <th>
                                        {{--  {!! Form::select('campaing', $list_campaings, null, [
                                            'id' => 'campaing',
                                            'class' => 'form-control text-gray-400                                                                                            js-example-basic-single',
                                            'placeholder' => 'Seleccionar',
                                            'onchange' => "buscar('campaing')",
                                        ]) !!} --}}
                                    </th>
                                    <th>
                                        {!! Form::select('statu', ['1' => 'Soporte', '2' => 'Directivo', '3' => 'Empleado', '4' => 'Comercial'], null, [
                                            'id' => 'statu',
                                            'class' => 'form-control js-example-basic-single
                                                                                                                            text-gray-400',
                                            'placeholder' => '----',
                                            'onchange' => "buscar('statu')",
                                            'required',
                                        ]) !!}
                                    </th>

                                    <th>


                                    </th>

                                    <th></th>

                                    {!! Form::close() !!}
                                </tr>

                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">

                                @foreach ($users as $item)
                                    <tr>
                                        <td><a href="{{ url('admin/usuario-detail/' . $item->id) }}">{{ $item->name }}
                                                {{ $item->lastname }}</a></td>
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
                                            @elseif($item->rol == 3)
                                                <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                                                    Comercial
                                                </span>
                                            @else
                                                <span class="badge badge-primary fw-bolder fs-8 px-2 py-1 ms-2">
                                                    Empleado
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acciones
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-primary fw-bold fs-7 w-125px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a data-toggle="modal" data-target="#exampleModal<?= $item->id ?>"
                                                        class="menu-link px-3">Editar</a>
                                                </div>

                                                {{--  <div class="menu-item px-3">
                                                    <form method="post"
                                                action="{{ route('admin.campaings.destroy', $item) }}"
                                                class="formDelete">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit" id="logout_button" class="menu-link px-3"> 
                                                   Eliminar
                                                    
                                                </button>
                                            </form>
                                                </div> --}}
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'url' => ['admin/usuario-detail', $item->id],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}
                                                    <input type="hidden" name="user" value="{{ $item->id }}">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">

                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">

                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-sm-12 col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '+34 455487895',
                                                            ]) !!}
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">

                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'test@prueba.com',
                                                            ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-sm-12 col-md-6">

                                                            {!! Form::label('contact_status', 'Rol de usuario') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select(
                                                                'rol',
                                                                ['1' => 'Soporte', '2' => 'Directivo', '3' => 'Empleado', '4' => 'Comercial'],
                                                                $item->rol,
                                                                ['id' => 'cliente_tarjeta_franquicia_tarjeta_id', 'class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}

                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror

                                                        </div>

                                                        <div class="col-sm-12 col-md-6">

                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, [
                                                                'class' => 'form-control',
                                                                'placeholder' => '---',
                                                            ]) !!}
                                                            @error('country')
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
                                @endforeach


                            </tbody>
                            <!--end::Table body-->

                            <!--end::Table-->
                        </table>

                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                            {{ $users->links() }}
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        @endif


    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function buscar(tipo) {

            $('#accion').val(1);
            var textoSelect = $('#' + tipo).val();
            const ENTER_KEY_CODE = 13;

            switch (tipo) {


                case 'name':
                    document.querySelector('#name').addEventListener('keyup', function(e) {
                        if (e.keyCode === ENTER_KEY_CODE) {
                            document.getElementById("frmFiltros").submit();
                        }
                    });
                    break;

                case 'lastname':
                    document.querySelector('#lastname').addEventListener('keyup', function(e) {
                        if (e.keyCode === ENTER_KEY_CODE) {
                            document.getElementById("frmFiltros").submit();
                        }
                    });
                    break;
                case 'email':
                    document.querySelector('#email').addEventListener('keyup', function(e) {
                        if (e.keyCode === ENTER_KEY_CODE) {
                            document.getElementById("frmFiltros").submit();
                        }
                    });
                    break;


                default:
                    document.getElementById("frmFiltros").submit();
                    break;
            }

        }
    </script>
@endsection
