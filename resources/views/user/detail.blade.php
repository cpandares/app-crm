@extends('layouts.app') 
@section('content')
@include('menu')
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            {{--  <div class="image-input-wrapper w-150px h-150px" style="background-image: url('https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png')">
                            </div> --}}
                            <div class="text-center image-input image-input-empty image-input-outline mb-3">
                                @if (!$user->image)
                                    <img width="50%" height="50%" class="rounded-circle"
                                        src="https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png"
                                        alt="User profile picture" />
                                @else
                                    <img width="50%" height="50%" class="image-input-wrapper w-150px h-150px" style="object-fit: cover"
                                        src="{{ $user->image }}" alt="User profile picture" />
                                @endif
                             
                            </div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->

                          {{--   <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                title="Cambiar foto de contacto" onchange="changePhoto()">
                                <i class="fas fa-pencil"></i>
                                
                                <input type="file" name="avatar" id="avatarInput" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                              
                            </label>
 --}}

                        </div>
                    </div>

                    <h4 class="profile-username text-center">
                        <strong>{{ $user->name }} {{ $user->lastname }}</strong>
                        
                    </h4>
                   
                   
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fa fa-comment mr-1"></i>Rol</strong>

                    
                    @if($user->rol == 1)
                    <span class="badge badge-light-success">Soporte</span>    
                    @elseif( $user->rol == 2)
                    <span class="badge badge-light-info">Directivo</span>    
                    
                    @elseif($user->rol == 3)
                    <span class="badge badge-primary">Empleado</span>
                    @else
                    <span class="badge badge-primary">Ventas</span>
                    @endif

                    <hr />
                    <strong><i class="fa fa-map-marker mr-1"></i>País</strong>

                    <p class="text-muted">{{ $user->country }}</p>

                    <hr />
                    

                    <strong><i class="fa fa-envelope mr-1"></i> Email</strong>

                    <p class="text-muted">{{ $user->email }}</p>
                    <hr />
                    <strong><i class="fa fa-phone mr-1"></i>Teléfonos</strong>

                    <p class="text-muted">{{ $user->phone }}</p>

                    <hr />
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalUser<?= $user->id ?>"><b>Actualizar</b></button>

                    <a href="{{ route('admin.config') }}" class="btn btn-primary btn-block">
                        <b>Volver a
                            Lista</b>
                    </a>


                </div>
                <!-- /.card-body -->
                <div class="modal fade" id="exampleModalUser<?= $user->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar {{ $user->name }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::model($user,['route'=>['usuario-update', $user], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}
    
                            <div class="row">
                                <div class="col-md-6">
                                  
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', $user->name, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                                    @error('name')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('lastname', 'Apellido') !!}
                                    {!! Form::text('lastname', $user->lastname, ['class'=>'form-control','placeholder'=>'Perez', ]) !!}
                                    @error('lastname')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('phone', 'Telefono') !!}
                                    {!! Form::text('phone', $user->phone, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::email('email', $user->email, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                                    @error('email')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                               
                                <div class="col-md-6">
                                  
                                    {!! Form::label('country', 'País') !!}
                                    {!! Form::select('country', $paises, $user->country, ['class'=>'form-control','placeholder'=>'--Seleccionar País--', 'required']) !!}
                                    @error('country')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                           
            
                            
            
                            <div class="mt-5">
            
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary ']) !!}
                                
                            </div>
                            {!! Form::close() !!}
                        </div>
                       
                      </div>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="col-md-9">
            <div class="card">
                {{--  --}}

            

                {{--  --}}
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#contacts" data-toggle="tab">Contactos registrados</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#comunicaciones" data-toggle="tab">Campañas creadas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#activity" data-toggle="tab">Resumen de actividad</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#notas" data-toggle="tab">Notas</a>
                        </li> --}}
                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content ">
                        
                        <div class="tab-pane active" id="contacts">
                            <a href="{{ url('admin/usuario-detail/' . $user->id) }}"
                                            class="btn btn-primary float-right btn-sm mr-1" title="Limpiar filtros">
                                    <i class="fa fa-repeat"></i>
                                </a>
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_customers_table">

                                <thead>

                                    <tr class="text-center text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>Nombre completo</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                        <th colspan="2"></th>
                                    </tr>
                                    <tr class="text-gray-600">
                                        {{-- @dump($campaing) --}}
                                        {!! Form::open(['url' => 'admin/usuario-detail/' . $user->id, 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                        <input type="hidden" id="accion" name="accion" value="2">

                                        <th>
                                            <input type="text" placeholder="Nombre contacto" name="name"
                                                id="name" onchange="buscar('names')" class="form-control">
                                        </th>
                                        <th>
                                            <input type="text" placeholder="Email" name="email"
                                                id="email" onchange="buscar('emails')" class="form-control">

                                        </th>
                                        <th></th>
                                        <th>
                                            {!! Form::select(
                                                'statu',
                                                ['1' => 'Nuevo', '2' => 'En Negociacion', '3' => 'Presupuesto Enviado', '4' => 'Cliente', '5' => ''],
                                                null,
                                                [
                                                    'id' => 'statu',
                                                    'class' => 'form-control js-example-basic-single
                                                                                        text-gray-400',
                                                    'placeholder' => '----',
                                                    'onchange' => "buscar('statu')",
                                                    'required'
                                                ],
                                            ) !!}
                                        </th>
                                        <th>
                                           
                                        </th>

                                        <th>
                                            

                                        </th>

                                        <th></th>

                                        {!! Form::close() !!}
                                    </tr>
                                </thead>

                                <tbody class="fw-bold text-gray-600">


                                    @foreach ($contacts as $item)
                                        <tr class="odd">
                                            <td>
                                                <a href="{{ route('admin.contact.show', $item->id) }}"
                                          
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $item->name }} {{ $item->lastname }}</a>
                                            </td>

                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>{{ $item->phone }}</td>

                                            <td>
                                                {{--  @dump($item) --}}
                                                @if ($item->contact_status == 1)
                                                    <span class="badge badge-primary pull-rigth">Nuevo</span>
                                                @elseif($item->contact_status == 2)
                                                    <span class="badge badge-light-info pull-rigth">En Negociacion</span>
                                                @elseif($item->contact_status == 3)
                                                    <span class="badge badge-light-success pull-rigth">Presupuesto
                                                        Enviado</span>
                                                @elseif($item->contact_status == 4)
                                                    <span class="badge badge-light-success pull-rigth">Cliente</span>
                                                @elseif($item->contact_status == 5)
                                                    <span class="badge badge-light-warning pull-rigth">Renegociando</span>
                                                @else
                                                    <span class="badge badge-light-danger pull-rigth">No interesado</span>
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
                                                        <a 
                                                        data-toggle="modal"
                                                        data-target="#exampleModal<?= $item->id ?>" class="menu-link px-3">Editar</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <form method="post"
                                                        action="{{ route('admin.contact.destroy', $item->id) }}"
                                                    class="formDeleteContact">
                                                    @csrf
                                                    @method('delete')
                                                    <button  type="submit" id="logout_button" class="menu-link px-3"> 
                                                       Eliminar
                                                        
                                                    </button>
                                                </form>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>

                                        </tr>

                                        


                                        <div class="modal fade" id="exampleModal<?= $item->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($item,['route'=>['admin.contact.update', $item->id], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}
                            
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                          
                                                            {!! Form::label('name', 'Nombre') !!}
                                                            {!! Form::text('name', $item->name, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                                                            @error('name')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                           
                                                            {!! Form::label('lastname', 'Apellido') !!}
                                                            {!! Form::text('lastname', $item->lastname, ['class'=>'form-control','placeholder'=>'Perez', ]) !!}
                                                            @error('lastname')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                    
                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('phone', 'Telefono') !!}
                                                            {!! Form::text('phone', isset($item->phone) ? $item->phone : null, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                                                        </div>
                                                        <div class="col-md-6">
                                                           
                                                            {!! Form::label('email', 'Email') !!}
                                                            {!! Form::email('email', isset($item->email) ? $item->email :null, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                                                            @error('email')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                    
                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('postcode', 'Código Postal') !!}
                                                            {!! Form::text('postcode', isset($item->postcode) ? $item->postcode : null, ['class'=>'form-control','placeholder'=>'65656', ]) !!}
                                                        </div>
                                                        <div class="col-md-6">
                                                          
                                                            {!! Form::label('country', 'País') !!}
                                                            {!! Form::select('country', $paises, isset($item->country) ? $item->country : null, ['class'=>'form-control','placeholder'=>'---', ]) !!}
                                                            @error('country')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                    
                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', isset($item->city) ? $item->city : null, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                                                        </div>
                                                        <div class="col-md-6">
                                                            {!! Form::label('state', 'Provincia (opcional)') !!}
                                                            {!! Form::text('state', isset($item->state) ? $item->state :null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                                                        </div>
                                                    </div>

                                                    <div class="row  mt-2">
                                                        <div class="col-md-6">
            
                                                            {!! Form::label('address', 'Dirección (opcional)') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::text('address',  isset($item->address) ? $item->address : null, [
                                                               
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Calle tercera casa 25',
                                                               
                                                            ]) !!}
            
                                                         
                                                        </div>
                                                        <div class="col-md-6">
            
                                                            {!! Form::label('campaing', 'Asignar Campaña (Opcional)') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('campaing', $campaings, null, [
                                                                
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
                                                            {!! Form::select('medio_comunicacion',$comunicacion_medias, isset($item->comunication_medium) ? $item->comunication_medium : null,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
                                    
                                                            @error('medio_comunicacion')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                           
                                                            {!! Form::label('contact_status', 'Estado del Cliente') !!}
                                                            {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                                            {!! Form::select('contact_status',$status, $item->contact_status,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
                                    
                                                            @error('statu')
                                                                <small class="text-danger">Este campo es requerido</small>
                                                            @enderror
                                                            
                                                        </div>
                                                    </div>
                                    
                                                    <div class="mt-5">
                                    
                                                        {!! Form::submit('Guardar', ['class'=>'btn btn-primary ']) !!}
                                                        
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                               
                                              </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </tbody>


                            </table>
                        </div>

                        <div class="tab-pane" id="comunicaciones">
                           
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer table-hover table_responsive"
                            id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead class="">
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                        style="width: 29.25px;">

                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0"
                                        aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                        aria-label="Nombre Cliente: activate to sort column ascending"
                                        style="width: 172.038px;">Nombre Campaña</th>
                                    <th class="min-w-125px sorting" tabindex="0"
                                        aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                        aria-label="Email: activate to sort column ascending"
                                        style="width: 247.025px;">Ciudad</th>
                                    <th class="min-w-125px sorting" tabindex="0"
                                        aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                        aria-label="Pais: activate to sort column ascending"
                                        style="width: 178.387px;">Pais</th>
                                    <th class="min-w-125px sorting" tabindex="0"
                                        aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                        aria-label="Metodo de Pago: activate to sort column ascending"
                                        style="width: 159.1px;">Fecha</th>
                                    <th class="min-w-125px sorting" tabindex="0"
                                    aria-controls="kt_customers_table" rowspan="1" colspan="1"
                                    aria-label="Fecha creación: activate to sort column ascending"
                                    style="width: 203.962px;">Status</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Acciones" style="width: 146.738px;">Acciones</th>
                                </tr>

                            {{--     <tr class="text-gray-600">
                                           
                                    {!! Form::open(['url' => 'admin/usuario-detail/' . $user->id, 'method' => 'get', 'id' => 'frmFiltros']) !!}
                                    <input type="hidden" id="accion" name="accion" value="2">

                                    <th>
                                      
                                    </th>
                                    <th>
                                        {!! Form::select('campaing_name', $list_campaings,null, [
                                            'id' => 'campaing_name',
                                            'class' => 'form-control text-gray-400                                                                          js-example-basic-single',
                                            'placeholder' => 'Seleccionar',
                                            'onchange' => "buscar('campaing_name')",
                                        ]) !!}
                                    </th>
                                    <th>
                                        <input type="text" placeholder="Ciudad" name="campaing_city" id="campaing_city"
                                            onchange="buscar('city')" class="form-control">
                                    </th>
                                    <th>
                                        {!! Form::select('campaing_country', $paises, null, [
                                            'id' => 'campaing_country',
                                            'class' => 'form-control text-gray-400                                                         js-example-basic-single',
                                            'placeholder' => 'Seleccionar',
                                            'onchange' => "buscar('campaing_country')",
                                        ]) !!}
                                    </th>

                                    <th>
                                     
                                   
                                    </th>

                                    <th>
                                        {!! Form::select('campaing_statu',['1'=> 'Activa', '2'=> 'En Pausa', '3'
                                        =>'Cancelada'],
                                        null,['id'=>'campaing_statu','class'=>'form-control js-example-basic-single
                                        text-gray-400','placeholder'=>'----','onchange'=>"buscar('campaing_statu')" ]) !!}
                                    </th>
                                    <th></th>
                                    {!! Form::close() !!}
                                </tr> --}}

                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">


                                @foreach ($campaings as $item)
                                    <tr class="odd">
                                        <td>

                                        </td>

                                        <td>
                                            <a href="{{ route('admin.campaings.show', $item) }}"
                                            class="text-gray-800 text-hover-primary mb-1">
                                                {{ $item->campaing_name }}
                                            </a>
                                        </td>

                                        <td>
                                            <span class="text-gray-410 text-hover-primary mb-1"> {{ $item->city }} </span>
                                        </td>

                                        <td><span class="text-gray-410 text-hover-primary mb-1">{{ $item->country }}</span></td>

                                        <td>
                                            <span class="text-gray-410 text-hover-primary mb-1">
                                                {{ date('d/m/Y', strtotime($item->init_date)) }}
                                                - {{ date('d/m/Y', strtotime($item->end_date)) }}
                                            </span>
                                        </td>

                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-light-success">Activa</span>
                                            @elseif($item->status == 2)
                                            <span class="badge badge-light-info">Pausada</span>
                                            @else
                                            <span class="badge badge-primary">Cancelada</span>
                                            @endif
                                        </td>
                               

                                       {{--  <td class="text-end">

                                            

                                            <a style="cursor: pointer" data-toggle="modal"
                                                data-target="#exampleModal<?= $item->id ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="post"
                                                action="{{ route('admin.campaings.destroy', $item) }}"
                                                class="formDelete">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit" id="logout_button">
                                                    <i class="fas fa-trash"></i>
                                                    
                                                </button>
                                            </form>
                                        </td> --}}
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
                                                    <a data-toggle="modal"
                                                    data-target="#exampleModalCa<?= $item->id ?>" class="menu-link px-3">Editar</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <form method="post"
                                                action="{{ route('admin.campaings.destroy', $item) }}"
                                                class="formDelete">
                                                @csrf
                                                @method('delete')
                                                <button  type="submit" id="logout_button" class="menu-link px-3"> 
                                                   Eliminar
                                                    
                                                </button>
                                            </form>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="exampleModalCa<?= $item->id ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar campaña: 
                                                        {{ $item->campaing_name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'route' => ['admin.campaings.update', $item],
                                                        'autocomplete' => 'off',
                                                        'files' => true,
                                                        'method' => 'put',
                                                    ]) !!}

                                                    <div class="row">
                                                        <div class="col-6">
                                                            {!! Form::label('campaing_name', 'Nombre') !!}
                                                            {!! Form::text('campaing_name', $item->campaing_name, [
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Feria España',
                                                            ]) !!}
                                                            <br>
                                                        </div>
                                                        <div class="col-6">

                                                            {!! Form::label('country', 'Pais') !!}
                                                            {!! Form::select('country', $paises, $item->country, [
                                                                'class' => 'form-control
                                                                                                                                                            ',
                                                                'placeholder' => 'Seleccionar',
                                                            ]) !!}
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            {!! Form::label('city', 'Ciudad') !!}
                                                            {!! Form::text('city', $item->city, ['class' => 'form-control', 'placeholder' => 'Barcelona']) !!}
                                                            <br>

                                                        </div>
                                                        <div class="col-6">

                                                            {!! Form::label('init_date', 'Fecha de inicio') !!}
                                                            {!! Form::date('init_date', $item->init_date, ['class' => 'form-control']) !!}
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">

                                                            {!! Form::label('end_date', 'Fecha finalización') !!}
                                                            {!! Form::date('end_date', $item->end_date, ['class' => 'form-control']) !!}
                                                            <br>
                                                        </div>
                                                        <div class="col-6">

                                                            {!! Form::label('status', 'Estado de la campaña') !!}
                                                            {!! Form::select(
                                                                'status',
                                                                ['1' => 'Activa', '2' => 'Inactiva', '3' => 'Cancelada'],
                                                                $item->status,
                                                                ['class' => 'form-control', 'placeholder' => 'Seleccionar'],
                                                            ) !!}
                                                            <br>
                                                        </div>
                                                    </div>
                                                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-5']) !!}
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

                        
                        <div class="tab-pane" id="activity">
                            <h2>Resumen de actividad</h2>
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_customers_table">

                                <thead>

                                    <tr class="text-start text-gray-800 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>Contactos Registrados</th>
                                        <th>Clientes Logrados</th>
                                        <th>Oportunidades creadas</th>
                                        {{-- <th>Estado</th> --}}
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>

                                <tbody class="fw-bold text-gray-600">


                                 
                                        <tr class="odd">
                                            <td>
                                                 {{ count($contacts) }}
                                            </td>

                                            <td>
                                                {{ count($clients) }}
                                            </td>
                                            <td>{{ count($campaings) }}</td>
                                           
                                            <td class="text-end">
                                                
                                            </td>

                                        </tr>
                                     
                                   

                                </tbody>


                            </table>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>


    <script>
        
      
        

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

       
        $(document).ready(() => {
            $('.js-example-basic-single').select2();
            $(document).on('click', '.pagination a', function() {
                event.preventDefault()
                $('li').removeClass('active')
                $(this).parent('li').addClass('active')
                page = $(this).attr('href').split('page=')[1]

                

            });

            //Enable Tooltips
            var tooltipTriggerList = [].slice.call(
                document.querySelectorAll('[data-bs-toggle="tooltip"]')
            );
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            //Advance Tabs
            $(".next").click(function() {
                const nextTabLinkEl = $(".nav-tabs .active")
                    .closest("li")
                    .next("li")
                    .find("a")[0];
                const nextTab = new bootstrap.Tab(nextTabLinkEl);
                nextTab.show();
            });

            $(".previous").click(function() {
                const prevTabLinkEl = $(".nav-tabs .active")
                    .closest("li")
                    .prev("li")
                    .find("a")[0];
                const prevTab = new bootstrap.Tab(prevTabLinkEl);
                prevTab.show();
            });
        });



     
    </script>
@endsection
