@extends('layouts.app')
@section('content')

    <div class="row">

        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <div class="card p-5" bis_skin_checked="1">
                <!--begin::Card header-->
                {{-- <h3 class="text-gray-600 text-hover-primary">Contactos en la campaña: {{ $campaing->campaing_name }}</h3>  --}}
                <div class=" fw-bold fs-6 mb-4 pe-2">

                    <a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                    fill="black"></path>
                                <path
                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        Pais: {{ $campaing->country }}

                    </a>
                    <div>

                        <a class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->

                            Total Contactos: {{ count($contacts) }}

                        </a>
                    </div>

                    {{-- <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                    
                    <span class="svg-icon svg-icon-4 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                        </svg>
                    </span>
                    max@kt.com</a> --}}
                </div>
                <div class="row">
                    <div class="col-12">



                        <a  class="btn btn-primary float-right mb-3 btn-sm" 
                            {{-- href="{{ url('contact/create/' .  $campaing->id) }}" --}}
                            href="{{ route('admin.create-contact' , $campaing->id) }}"
                            >
                            Añadir Contactos
                        </a>
                        <a href="{{ url('admin/campaings/contacts/' . $campaing->id) }}"
                            class="btn btn-primary float-right btn-sm mr-1">
                            Vista pipeline
                        </a>
                        {{--  <a href="{{ route('admin.contact.index') }}" class="btn btn-primary float-right btn-sm mr-1">
                           Ver Contactos
                        </a> --}}

                        <a href="{{ route('admin.campaings.index') }}" class="btn btn-primary float-right btn-sm mr-1">
                            < Ir a Oportunidades </a>

                                <a href="{{ route('admin.campaings.show', $campaing->id) }}"
                                    class="btn btn-primary float-right btn-sm mr-1" title="Limpiar filtro">
                                    <i class="fa fa-repeat"></i>
                                </a>
                    </div>
                </div>

                @include('includes.contact_form_create')

                <hr>

                <div class="card-body pt-0" bis_skin_checked="1">
                    <!--begin::Table-->
                    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"
                        bis_skin_checked="1">
                        <div class="table-responsive">

                            <table class="table table-hover table-striped ">
                                <thead>
                                    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0 text-center">
                                        <th class="min-w-125px">Nombre Completo </th>

                                        <th class="min-w-125px ">Email</th>
                                        <th class="min-w-125px ">Teléfono</th>
                                        <th class="min-w-125px ">Página web</th>
                                        <th class="min-w-125px ">Paìs</th>
                                        <th class="min-w-125px ">Codigo N.I.F</th>
                                        <th class="min-w-125px ">Estado</th>
                                        <th class="text-end min-w-70px" rowspan="1" colspan="1"
                                            aria-label="Acciones" style="width: 146.738px;">Acciones</th>

                                    </tr>

                                    <tr class="text-gray-400 text-center">
                                        {{-- @dump($campaing) --}}
                                        {!! Form::open(['url' => 'admin/campaings/' . $campaing->id, 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                        <input type="hidden" id="accion" name="accion" value="2">
                                        <input type="hidden" name="campaing_id" value="{{$campaing->id}}">

                                        <th>
                                            <input type="text" placeholder="Nombre contacto" name="name"
                                                id="name" onchange="buscar('documento')" class="form-control">
                                        </th>

                                        <th>
                                            <input type="text" placeholder="Email" name="email" id="email"
                                                {{--  onfocusout="buscar('documento')"  --}} onchange="buscar('emaila')" class="form-control">
                                        </th>
                                        <th></th>
                                        <th></th>

                                        <th>
                                            {!! Form::select('country', $paises, null, [
                                                'id' => 'country',
                                                'class' => 'form-control text-gray-400 js-example-basic-single',
                                                'placeholder' => '----',
                                                'onchange' => "buscar('country')",
                                            ]) !!}
                                        </th>
                                        <th>
                                            {{-- {!! Form::select('tipo_contacto',['1' => 'Persona', '2' => 'Empresa'],
                                                    null,
                                                    [
                                                        'id' => 'tipo_contacto',
                                                        'class' => 'form-control js-example-basic-single
                                                                                            text-gray-400',
                                                        'placeholder' => '----',
                                                        'onchange' => "buscar('statu')",
                                                        
                                                    ],
                                                ) !!} --}}
                                        </th>
                                        <th>
                                            {!! Form::select(
                                                'statu',
                                                ['1' => 'Nuevo', '2' => 'En Negociacion', '3' => 'Presupuesto Enviado', '4' => 'Cliente', '5' => ''],
                                                null,
                                                [
                                                    'id' => 'state',
                                                    'class' => 'form-control js-example-basic-single text-gray-400',
                                                    'placeholder' => '----',
                                                    'onchange' => "buscar('cliente')",
                                                ],
                                            ) !!}
                                        </th>


                                        {!! Form::close() !!}
                                    </tr>


                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @if (count($contacts) > 0)
                                        @foreach ($contacts as $item)
                                            <tr class="odd">
                                                <td>

                                                    <a href="{{ route('admin.contact.show', $item->id) }}"
                                                        class="text-gray-800 text-hover-primary mb-1">{{ $item->name }}
                                                        {{ $item->lastname }}
                                                    </a>

                                                </td>
                                                <td>
                                                    {{ $item->email }}
                                                </td>
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    @if ($item->website)
                                                        <a href="{{ $item->website }}" target="_blank"
                                                            rel="noopener noreferrer">
                                                            {{ $item->website }}
                                                        </a>
                                                    @else
                                                        <p class="text-danger">No asignado</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $item->country }}
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->codigo_nif)
                                                       {{ $item->codigo_nif }}
                                                    @else
                                                        <p class="text-danger">No asignado</p>
                                                    @endif
                                                </td>
                                                <td class="text-center text-gray-600 text-hover-primary mb-1">
                                                    @if ($item->contact_status == 1)
                                                        <span class="badge badge-primary pull-rigth">Nuevo</span>
                                                    @elseif($item->contact_status == 2)
                                                        <span class="badge badge-light-info pull-rigth">En
                                                            Negociacion</span>
                                                    @elseif($item->contact_status == 3)
                                                        <span class="badge badge-light-success pull-rigth">Presupuesto
                                                            Enviado</span>
                                                    @elseif($item->contact_status == 4)
                                                        <span class="badge badge-light-success pull-rigth">Cliente</span>
                                                    @elseif($item->contact_status == 5)
                                                        <span
                                                            class="badge badge-light-warning pull-rigth">Renegociando</span>
                                                    @else
                                                        <span class="badge badge-light-danger pull-rigth">No
                                                            interesado</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm  btn-active-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">Acciones

                                                        <span class="svg-icon svg-icon-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-primary fw-bold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a  href="{{ route('admin.contact.show', $item->id) }}"
                                                                
                                                                class="menu-link px-3">Ver mas</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <form method="post"
                                                                action="{{ route('admin.contact.destroy', $item->id) }}"
                                                                class="formDeleteContact">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" id="logout_button"
                                                                    class="menu-link px-3">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                                {{-- <td>
                                            <input type="checkbox" name="contact_id[]"  id="contact_id" value="{{ $item->id }}"/>
                                        </td> --}}
                                            </tr>
                                            <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Actualizar
                                                                Contacto</h5>
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
                                                            <input type="hidden" name="contact"
                                                                value={{ $item->id }}>



                                                            {{-- <div class="row">
                                                                <div class="col-sm-12 col-sm-12 col-md-6">

                                                                    <label for="comisiones" class="form-label">¿Representa
                                                                        una empresa?</label><br>
                                                                    <input type="checkbox" id="representa_empresa"
                                                                        data-toggle="toggle" data-on="Si"
                                                                        data-off="No" data-onstyle="primary"
                                                                        data-offstyle="danger"
                                                                        onchange="accion_respresentart(this)">

                                                                </div>

                                                            </div> --}}

                                                           {{--  <div class="row mt-2" id="empresa_reprentart">
                                                                <div class="">
                                                                    {!! Form::label('name_empresa', 'Nombre Empresa') !!}
                                                                    {!! Form::text('name_empresa', $item->name_enterprise, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Inversiones llc',
                                                                    ]) !!}
                                                                </div>
                                                                <div class="">
                                                                    {!! Form::label('type_enterprise', 'Tipo de empresa') !!}
                                                                    {!! Form::select('type_enterprise', $type_enterprise, null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Seleccionar',
                                                                    ]) !!}
                                                                </div>
                                                                <hr class="mt-5">
                                                            </div> --}}

                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('name', 'Nombre') !!}
                                                                    {!! Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Pedro']) !!}
                                                                    @error('name')
                                                                        <small class="text-danger">Este campo es
                                                                            requerido</small>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('lastname', 'Apellido') !!}
                                                                    {!! Form::text('lastname', $item->lastname, ['class' => 'form-control', 'placeholder' => 'Perez']) !!}
                                                                    @error('lastname')
                                                                        <small class="text-danger">Este campo es
                                                                            requerido</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row  mt-2">
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('phone', 'Teléfono') !!}
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
                                                                        <small class="text-danger">Este campo es
                                                                            requerido</small>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row  mt-2">
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('postcode', 'Código Postal') !!}
                                                                    {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => '65656',
                                                                    ]) !!}
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

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
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('city', 'Ciudad') !!}
                                                                    {!! Form::text('city', isset($item->city) ? $item->city : null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Barcelona',
                                                                    ]) !!}
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    {!! Form::label('state', 'Provincia (opcional)') !!}
                                                                    {!! Form::text('state', isset($item->state) ? $item->state : null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => '',
                                                                    ]) !!}
                                                                </div>
                                                            </div>

                                                            <div class="row  mt-2">
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('address', 'Dirección (opcional)') !!}
                                                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                                    {!! Form::text('address', isset($item->address) ? $item->address : null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Calle tercera casa 25',
                                                                    ]) !!}


                                                                </div>
                                                                <div class="col-sm-12 col-md-6">

                                                                    {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                                                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                                    {!! Form::select('campaing', $list_campaings, null, [
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Seleccionar',
                                                                    ]) !!}

                                                                    @error('statu')
                                                                        <small class="text-danger">Este campo es
                                                                            requerido</small>
                                                                    @enderror

                                                                </div>
                                                            </div>

                                                            <div class="row  mt-2">
                                                               {{--  <div class="col-sm-12 col-md-4">

                                                                    {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                                                  
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
                                                                </div> --}}
                                                                <div class="col-sm-12 col-md-4">

                                                                    {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                                    {!! Form::select('contact_status', $status, $item->contact_status, [
                                                                        'id' => 'cliente_tarjeta_franquicia_tarjeta_id',
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'Seleccionar',
                                                                    ]) !!}



                                                                </div>
                                                                <div class="col-sm-12 col-md-4">

                                                                    {!! Form::label('website', 'Página web') !!}
                                                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                                    {!! Form::url('website', isset($item->website) ? $item->website : null, [
                                                                        'id' => 'website',
                                                                        'class' => 'form-control',
                                                                        'placeholder' => 'example.com',
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
                                    @else
                                    @endif
                                </tbody>
                            </table>
                        </div>


                        <div class="row">
                            <div
                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="dataTables_length" id="kt_customers_table_length">
                                    <label>
                                        {!! Form::open(['url' => 'admin/campaings/' . $campaing->id, 'method' => 'get', 'id' => 'frmFiltrosChange']) !!}
                                        <select 
                                            name="per_page"
                                            id="per_page"
                                            onchange="buscarChange('per_page')"
                                            aria-controls="kt_customers_table"
                                            class="form-select form-select-sm form-select-solid"
                                            >
                                            <option value="{{ $per_page }}">{{ $per_page }}</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        {!! Form::close() !!}
                                    </label>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>


                    <input type="hidden" name="" id="campaing_id" value="{{ $campaing->id }}">

                </div>
            </div>
        </div>
    </div>
    </div>



    </div>

    </div>

    </div>


@endsection


@section('script')
    <script type="text/javascript">
        function accion_respresentart(checkboxElem) {
            let inputSubalterno = document.getElementById('empresa_reprentart');

            if (checkboxElem.checked) {
                /*  $('#inputSubalterno').collapse('show'); */
                inputSubalterno.style.display = 'block';
            } else {
                /* $('#inputSubalterno').collapse('hide'); */
                inputSubalterno.style.display = 'none';
            }
        }
        $(document).ready(function() {

            document.getElementById('empresa_reprentart').style.display = 'none';

        })

        function generar_todos() {
            var ids = document.querySelectorAll("input[name='contact_id[]']:checked");
            var a = [];
            for (var i = 0; i < ids.length; i++) {
                a[i] = ids[i].value;
            }

            /* let fecha_inicio = document.querySelector('#fecha_corte').value; */
            let contact_id = $('#contact_id').val();
            let id = $('#campaing_id').val();

            Swal.fire({
                title: 'Confirmar',
                text: '¿Está seguro de que desea agregar estos contactos a esta campaña?',
                icon: 'question',
                showLoaderOnConfirm: true,
                showCancelButton: true,
                confirmButtonText: `<i class="fa fa-check"></i> De Acuerdo`,
                cancelButtonText: '<i class="fa fa-ban"></i> Cancelar',
                confirmButtonColor: '#3085d6'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {

                    $.ajax({
                        type: "POST",
                        url: "{{ asset('') . 'admin/add-contacts-campaings/' }}" + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            contact_id: a,
                        },
                        success: function(res) {
                            console.log(res)
                            if (res) {
                                Swal.fire({
                                    title: 'Se agregaron Exitosamente',

                                    icon: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6'
                                }).then((result) => {

                                    location.reload();
                                });
                            }
                        },
                        dataType: "json"
                    });

                }
            });
        }

        function marcar(source) {

            checkboxes = document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
            for (i = 0; i < checkboxes.length; i++) //recoremos todos los controles
            {
                if (checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
                {
                    checkboxes[i].checked = source
                        .checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
                }
            }
        }




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

        function buscarChange(tipo) {

            $('#accion').val(1);
            var textoSelect = $('#' + tipo).val();
            const ENTER_KEY_CODE = 13;

            switch (tipo) {
               

                default:
                    document.getElementById("frmFiltrosChange").submit();
                    break;
            }

        }
    </script>
@endsection
