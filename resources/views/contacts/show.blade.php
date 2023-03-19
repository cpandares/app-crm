@extends('layouts.app') @section('content')
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
                                @if (!$contact->image)
                                    <img width="50%" height="50%" class="rounded-circle"
                                        src="https://res.cloudinary.com/cpandares/image/upload/v1678472618/default_avatar_edkklf.png"
                                        alt="User profile picture" />
                                @else
                                    <img width="50%" height="50%" class="image-input-wrapper w-150px h-150px" style="object-fit: cover"
                                        src="{{ $contact->image }}" alt="User profile picture" />
                                @endif
                             
                            </div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->

                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                title="Cambiar foto de contacto" onchange="changePhoto()">
                                <i class="fas fa-pencil"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" id="avatarInput" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>


                        </div>
                    </div>

                    <h4 class="profile-username text-center">
                        <strong>{{ $contact->name }} {{ $contact->lastname }}</strong>
                    </h4>

                    {{--  <p class="text-muted text-center">ID 115400723</p> --}}

                    {{-- <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Celular</b> <a class="float-right">+58 86412220</a>
                        </li>
                        <li class="list-group-item">
                            <b>Sexo</b> <a class="float-right">Femenino</a>
                        </li>
                        <li class="list-group-item">
                            <b>Fecha de Nacimiento</b>
                            <a class="float-right">26-06-1993</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nacionalidad</b>
                            <a class="float-right">Costarricense</a>
                        </li>
                        <li class="list-group-item">
                            <b>Estado Civil</b>
                            <a class="float-right">Divorciado (a)</a>
                        </li>
                    </ul> --}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fa fa-map-marker mr-1"></i>Dirección</strong>

                    <p class="text-muted">{{ $contact->country }}</p>

                    <hr />

                    <strong><i class="fa fa-map mr-1"></i>Estado o ciudad</strong>

                    <p class="text-muted">{{ $contact->state }}</p>

                    <hr />

                    <strong><i class="fa fa-phone mr-1"></i>Teléfonos</strong>

                    <p class="text-muted">{{ $contact->phone }}</p>

                    <hr />

                    <strong><i class="fa fa-comment mr-1"></i>Estado</strong>


                    @if ($contact->contact_status == 1)
                        <span class="badge badge-primary pull-rigth">Nuevo</span>
                    @elseif($contact->contact_status == 2)
                        <span class="badge badge-primary pull-rigth">En Negociacion</span>
                    @elseif($contact->contact_status == 3)
                        <span class="badge badge-primary pull-rigth">Presupuesto Enviado</span>
                    @elseif($contact->contact_status == 4)
                        <span class="badge badge-primary pull-rigth">Cliente</span>
                    @elseif($contact->contact_status == 5)
                        <span class="badge badge-primary pull-rigth">Renegociando</span>
                    @else
                        <span class="badge badge-primary pull-rigth">No Interesado</span>
                    @endif

                    <hr />

                    <strong><i class="fa fa-envelope mr-1"></i> Email</strong>

                    <p class="text-muted">{{ $contact->email }}</p>
                    <hr />

                    <strong><i class="fa fa-envelope mr-1"></i> Se contactó mediante: </strong>
                    {{-- @dump($contact->comunication_medium) --}}
                    @if ($contact->comunication_medium == 1)
                        <span class="badge badge-primary pull-rigth">Email</span>
                    @elseif($contact->comunication_medium == 2)
                        <span class="badge badge-primary pull-rigth">Skype</span>
                    @elseif($contact->comunication_medium == 3)
                        <span class="badge badge-primary pull-rigth">Telefonica</span>
                    @elseif($contact->comunication_medium == 4)
                        <span class="badge badge-primary pull-rigth">Facebook</span>
                    @elseif($contact->comunication_medium == 5)
                        <span class="badge badge-primary pull-rigth">Whatsapp</span>
                    @endif
                    <hr />


                </div>
                <!-- /.card-body -->
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal<?= $contact->id ?>"><b>Actualizar</b></button>

                <a href="{{ route('admin.contact.index') }}" class="btn btn-primary btn-block"><b>Volver a
                        Lista</b></a>
            </div>
            <div class="modal fade" id="exampleModal<?= $contact->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Actualizar {{ $contact->name }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::model($contact,['route'=>['admin.contact.update', $contact], 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}

                        <div class="row">
                            <div class="col-md-6">
                              
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', $contact->name, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                                @error('name')
                                    <small class="text-danger">Este campo es requerido</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                               
                                {!! Form::label('lastname', 'Apellido') !!}
                                {!! Form::text('lastname', $contact->lastname, ['class'=>'form-control','placeholder'=>'Perez', ]) !!}
                                @error('lastname')
                                    <small class="text-danger">Este campo es requerido</small>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row  mt-2">
                            <div class="col-md-6">
                                {!! Form::label('phone', 'Telefono') !!}
                                {!! Form::text('phone', $contact->phone, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                            </div>
                            <div class="col-md-6">
                               
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', $contact->email, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                                @error('email')
                                    <small class="text-danger">Este campo es requerido</small>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row  mt-2">
                            <div class="col-md-6">
                                {!! Form::label('postcode', 'Código Postal') !!}
                                {!! Form::text('postcode', $contact->postcode, ['class'=>'form-control','placeholder'=>'65656', ]) !!}
                            </div>
                            <div class="col-md-6">
                              
                                {!! Form::label('country', 'País') !!}
                                {!! Form::select('country', $paises, $contact->country, ['class'=>'form-control','placeholder'=>'---', ]) !!}
                                @error('country')
                                    <small class="text-danger">Este campo es requerido</small>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row  mt-2">
                            <div class="col-md-6">
                                {!! Form::label('city', 'Ciudad') !!}
                                {!! Form::text('city', $contact->city, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                            </div>
                          {{--   <div class="col-md-6">
                                {!! Form::label('state', 'Provincia (opcional)') !!}
                                {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!}
                            </div> --}}
                        </div>
        
                        <div class="row  mt-2">
                            <div class="col-md-6">
                             
                                {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                {!! Form::select('medio_comunicacion',$comunicacion_medias, $contact->comunication_medium,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
        
                                @error('medio_comunicacion')
                                    <small class="text-danger">Este campo es requerido</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                               
                                {!! Form::label('medio_comunicacion', 'Estado del Cliente') !!}
                                {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                {!! Form::select('statu',$status, $contact->contact_status,['id'=>'cliente_tarjeta_franquicia_tarjeta_id','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
        
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
            <!-- /.card -->
        </div>

        <div class="col-md-9">
            <div class="card">
                {{--  --}}

                <div class="wizard my-5">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">

                        <li class="nav-item flex-fill " role="presentation" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Nuevo">

                            <button type="submit" onclick="updateStatusNew()"
                                class="nav-link  rounded-circle mx-auto d-flex align-items-center justify-content-center {{ $contact->contact_status == 1 ? 'active' : '' }}"
                                data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true">
                                <i class="fas fa-folder-open"></i>
                            </button>

                            {{-- <a  href="#step1" id="step1-tab" >
                                   
                                </a> --}}
                        </li>
                        <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Negociación">

                            <button type="submit" onclick="updateStatusNego()"
                                class="nav-link  rounded-circle mx-auto d-flex align-items-center justify-content-center {{ $contact->contact_status == 2 ? 'active' : '' }}"
                                data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true">
                                <i class="fas fa-briefcase"></i>
                            </button>

                        </li>
                        <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Presupuesto enviado">




                            <button type="submit" onclick="updateStatusPresu()"
                                class="nav-link  rounded-circle mx-auto d-flex align-items-center justify-content-center {{ $contact->contact_status == 3 ? 'active' : '' }} "
                                data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true">
                                <i class="fas fa-star"></i>
                            </button>

                        </li>
                        <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Cliente">



                            <input type="hidden" name="id" value="{{ $contact->id }}" id="id_user">
                            <button type="submit" onclick="return updateStatusCli()"
                                class="nav-link  rounded-circle mx-auto d-flex align-items-center justify-content-center {{ $contact->contact_status == 4 ? 'active' : '' }}"
                                data-bs-toggle="tab" role="tab" aria-controls="step1" aria-selected="true">
                                <i class="fas fa-flag-checkered"></i>
                            </button>

                        </li>
                    </ul>
                    {{-- <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel" id="step1" aria-labelledby="step1-tab">
                                <h3>Step 1</h3>
                                <p>This is step 1</p>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-info next">Continue <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="step2" aria-labelledby="step2-tab">
                                <h3>Step 2</h3>
                                <p>This is step 2</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Back</a>
                                    <a class="btn btn-info next">Continue <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="step3" aria-labelledby="step3-tab">
                                <h3>Step 3</h3>
                                <p>This is step 3</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Back</a>
                                    <a class="btn btn-info next">Continue <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="step4" aria-labelledby="step4-tab">
                                <h3>Complete</h3>
                                <p>You have successfully completed all steps.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Back</a>
                                    <a class="btn btn-info next">Submit <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div> --}}
                </div>

                {{--  --}}
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#presupuestos" data-toggle="tab">Presupuestos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#comunicaciones" data-toggle="tab">Comunicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#campaings" data-toggle="tab">Campañas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#notas" data-toggle="tab">Notas</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="presupuestos">

                            <div class="row">
                                <div class="col-md-12 text-right mb-3">
                                    <a data-toggle="modal" data-target="#agregarPresupuesto" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Agregar Presupuesto
                                    </a>
                                </div>
                            </div>

                            <table class="table table_hover table_striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre de presupuesto</th>
                                        <th>Observación</th>
                                        <th>Valor </th>
                                        <th>Fecha de creacón</th>
                                        <th>Válido hasta</th>
                                        <th>Fecha Actualizado</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($budgets) > 0)
                                        @foreach ($budgets as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->observacion }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->valid_until }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="" class="btn">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="" class="btn">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                        </div>

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="comunicaciones">
                            <div class="card mb-5 mb-xxl-8">

                                <div class="row">
                                    <div class="col-md-12 text-right mb-3">
                                        <a data-toggle="modal" data-target="#agregarComunicacion"
                                            class="btn btn-primary">
                                            <i class="fa fa-plus"></i> Agregar Comunicación
                                        </a>
                                    </div>
                                </div>
                                <!--begin::Header-->
                                <div class="card-header align-items-center border-0 mt-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bolder mb-2 text-dark">Historial de comunicación</span>

                                    </h3>

                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">

                                    @if (count($comunicaciones) > 0)
                                        @foreach ($comunicaciones as $comunicacion)
                                            <div class="timeline-label">

                                                <div class="timeline-item">

                                                    <span
                                                        class="timeline-label fw-bolder text-gray-800 fs-6">{{ $comunicacion->created_at->diffForHumans() }}</span>

                                                    <div class="timeline-badge">

                                                        @if ($comunicacion->comunicacion_media_id == 1)
                                                            <a href="" title="Telefonica">
                                                                <i class="fa fa-genderless text-primary fs-1">

                                                                </i>
                                                            </a>
                                                        @elseif($comunicacion->comunicacion_media_id == 2)
                                                            <a href="" title="Email">
                                                                <i class="fa fa-genderless text-warning fs-1">

                                                                </i>
                                                            </a>
                                                        @elseif($comunicacion->comunicacion_media_id == 3)
                                                            <a href="" title="skype">
                                                                <i class="fa fa-genderless text-success fs-1">

                                                                </i>
                                                            </a>
                                                        @elseif($comunicacion->comunicacion_media_id == 4)
                                                            <a href="" title="Whatsapp">
                                                                <i class="fa fa-genderless text-gray fs-1">

                                                                </i>
                                                            </a>
                                                        @else
                                                            <a href="" title="Whatsapp">
                                                                <i class="fa fa-genderless text-success fs-1">

                                                                </i>
                                                            </a>
                                                        @endif


                                                    </div>

                                                    <div class="fw-mormal timeline-content text-muted ps-3">
                                                        <h2>Asunto: <strong>{{ $comunicacion->asunto }}</strong></h2>
                                                        <h5>
                                                            Contacto mediante:
                                                            @if ($comunicacion->comunicacion_media_id == 1)
                                                                Telefonica
                                                            @elseif($comunicacion->comunicacion_media_id == 2)
                                                                Email
                                                            @elseif($comunicacion->comunicacion_media_id == 3)
                                                                Skype
                                                            @elseif($comunicacion->comunicacion_media_id == 4)
                                                                Whatsapp
                                                            @else
                                                                Facebook
                                                            @endif
                                                        </h5>
                                                        <span>
                                                            {{ $comunicacion->detalle }}
                                                        </span>
                                                    </div>

                                                </div>



                                            </div>
                                        @endforeach
                                    @else
                                        <h2>No hay comunicacion con este contacto</h2>
                                    @endif


                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="campaings">
                            <div class="row">
                                <div class="col-md-12 text-right mb-3">
                                    <a data-toggle="modal" data-target="#agregarCa" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Asignar Campaña
                                    </a>
                                </div>
                            </div>
                            <table class="table table-striped mt-2">

                                <thead>

                                    <tr>
                                        <th>Titulo</th>
                                        <th>Observación</th>
                                        <th>Fecha de inicio</th>
                                        <th>Fecha de Fin</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($contactsCapaings) > 0)
                                        @foreach ($contactsCapaings as $item)
                                            <tr>
                                                <td>{{ $item->campaing_name }}</td>
                                                <td>-</td>
                                                <td>{{ $item->init_date }}</td>
                                                <td>{{ $item->end_date }}</td>
                                                <td>
                                                    <a href="">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <a href="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td>No hay campañas asiganadas a este usuario</td>
                                    @endif

                                </tbody>


                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="notas">

                            <div class="row">
                                <div class="col-md-12 text-right mb-3">
                                    <a data-toggle="modal" data-target="#agregarNota" class="btn btn-primary">
                                        <i class="fa fa-plus"></i> Agregar Nota
                                    </a>
                                </div>
                            </div>
                            <table class="table table-striped mt-2">

                                <thead>

                                    <tr>
                                        <th>Titulo</th>
                                        <th>Observación</th>
                                        <th>Fecha de creación</th>
                                        <th>Fecha de actualización</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($notes) > 0)
                                        @foreach ($notes as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->observacion }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a href="">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <a href="">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td colspan="6">No hay notas guardadas</td>
                                    @endif

                                </tbody>


                            </table>
                            <div class="modal fade" id="agregarNota" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nueva Nota</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::open(['route' => 'admin.notes.store', 'autocomplete' => 'off', 'files' => true]) !!}
                                            <label for="">Titulo</label>
                                            <input type="text" class="form-control" name="title" placeholder="">
                                            <input type="hidden" name="contact" value="{{ $contact->id }}">
                                            <label for="">Observación</label>
                                            <textarea name="observacion" cols="30" rows="10" class="form-control" style="resize: none">
                                            </textarea>

                                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="modal fade" id="agregarPresupuesto" tabindex="-1"
                            aria-labelledby="agregarPresupuestoLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="agregarPresupuestoLabel">Nueva Presupuesto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['route' => 'admin.budget.store', 'autocomplete' => 'off', 'files' => true]) !!}


                                        <label for=""><strong>Titulo</strong></label>
                                        <input type="text" class="form-control" name="title" placeholder="">
                                        <input type="hidden" name="contact" value="{{ $contact->id }}">
                                        <label for=""><strong>Observación</strong></label>
                                        <textarea name="observacion" cols="30" rows="10" class="form-control" style="resize: none">
                                    </textarea>

                                        <label for=""><strong>Es Válido hasta</strong> </label>
                                        <input type="date" name="valid_until" class="form-control">

                                        <label for=""><strong>Precio del presupuesto</strong></label>
                                        <input class="form-control" type="text" name="price" id="price"
                                            data-thousands="." data-decimal="," data-prefix="₡ " />

                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="agregarCa" tabindex="-1" aria-labelledby="agregarPresupuestoLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="agregarPresupuestoLabel">Asigna una Campaña</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['url' => 'admin/add-contacts-campaings', 'autocomplete' => 'off', 'files' => true]) !!}

                                        {!! Form::label('campaing', 'Selecciona Campaña') !!}
                                        {!! Form::select('campaing', $campaings, null, ['class' => 'form-control', 'placeholder' => '--Seleccionar--']) !!}
                                        <input type="hidden" name="contact" value="{{ $contact->id }}">
                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="agregarComunicacion" tabindex="-1"
                            aria-labelledby="agregarComunicacionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="agregarComunicacionLabel">Nueva Comunicación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['route' => 'admin.comunicacion.store', 'autocomplete' => 'off', 'files' => true]) !!}
                                        <label for=""><strong>Asunto</strong></label>
                                        <input type="text" class="form-control" name="asunto" placeholder="">
                                        <input type="hidden" name="contact_id" value="{{ $contact->id }}">
                                        <label for=""><strong>Se acordó</strong></label>
                                        <textarea name="detalle" class="form-control" style="resize: none">
                                    </textarea>

                                        <label for=""><strong>Comunicación mediante</strong> </label>

                                        {!! Form::select('medio_comunicacion', $comunicacion_medias, null, ['class' => 'form-control']) !!}

                                        <br>

                                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-5']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

    <form action="{{ url('admin/update-photo-contact/' . $contact->id) }}" method="post" style="display: none"
        id="avatarForm">

        {{ csrf_field() }}

    </form>
    </div>

    </div>

    </div>
@endsection



@section('script')
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>


    <script>
        function changePhoto() {

            let avatarForm = $('#avatarForm');

            let avatarImage = $('#avatarInput')[0].files[0];
            let id = document.getElementById('id_user').value;

            console.log(avatarImage)
            var formData = new FormData();
            formData.append('imagen', avatarImage, 'id', id);



            $.ajax({
                type: "POST",
                url: avatarForm.attr('action') + '?' + avatarForm.serialize(),

                data: formData,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType


                success: function(res) {
                    if (res) {
                        Swal.fire({
                            title: 'Se Actualizo foto',
                           
                            icon: 'success',
                            showCancelButton: false,
                            
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                    }
                },
                dataType: "json"
            });

           
        }


        function updateStatusNew() {

            let reference = 1;
            let id = document.getElementById('id_user').value;
            $.ajax({
                type: "PUT",
                url: "{{ asset('') . 'admin/update-status-contact' }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    reference,
                    id
                },
                success: function(res) {
                    if (res) {
                        Swal.fire({
                            title: 'Se Actualizo contacto',
                           
                            icon: 'success',
                            showCancelButton: false,
                            
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                    }
                },
                dataType: "json"

            });
        }

        function updateStatusNego() {

            let reference = 2;
            let id = document.getElementById('id_user').value;
            $.ajax({
                type: "PUT",
                url: "{{ asset('') . 'admin/update-status-contact' }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    reference,
                    id
                },
                success: function(res) {
                    if (res) {
                        Swal.fire({
                            title: 'Se Actualizo contacto',
                           
                            icon: 'success',
                            showCancelButton: false,
                            
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                    }
                },
                dataType: "json"
            });
        }

        function updateStatusPresu() {

            let reference = 3;
            let id = document.getElementById('id_user').value;
            $.ajax({
                type: "PUT",
                url: "{{ asset('') . 'admin/update-status-contact' }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    reference,
                    id
                },
                success: function(res) {
                    if (res) {
                        Swal.fire({
                            title: 'Se Actualizo contacto',
                           
                            icon: 'success',
                            showCancelButton: false,
                            
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload()
                            }
                        })
                    }
                },
                dataType: "json"
            });
        }

        function updateStatusCli() {

            let reference = 4;
            let id = document.getElementById('id_user').value;
            $.ajax({
                type: "PUT",
                url: "{{ asset('') . 'admin/update-status-contact' }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    reference,
                    id
                },
                success: function(res) {
                    if (res) {
                        Swal.fire({
                            title: 'Se actualizo el contacto',
                            text: "",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6'
                        });
                    }
                },
                dataType: "json"
            });
        }


        listar(1)
        $(document).ready(() => {
            $(document).on('click', '.pagination a', function() {
                event.preventDefault()
                $('li').removeClass('active')
                $(this).parent('li').addClass('active')
                page = $(this).attr('href').split('page=')[1]

                listar(page)

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



        function listar(page) {
            let url = "{{ route('contacto-presupuesto-ajax', $contact->id) }}";
            $.ajax({
                url: url + '?page=' + page,
            }).done((data) => {

                $('#tablaPresupuestos').html(data)
            }).fail((jqXHR, ajaxOptions, thrownError) => {
                console.log(thrownError)
                /* alert('No response from server') */
            })
        }
    </script>
@endsection
