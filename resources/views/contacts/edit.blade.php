@extends('layouts.app') @section('content')
    <div class="row" bis_skin_checked="1">
        <div class="col-md-3" bis_skin_checked="1">
            <!-- Profile Image -->
            <div class="card card-primary card-outline" bis_skin_checked="1">
                <div class="card-body box-profile" bis_skin_checked="1">
                    <div class="text-center" bis_skin_checked="1">
                        <img width="50%" height="50%" class="rounded-circle"
                            src="http://localhost/valle_paz/public/images/default_avatar.png" alt="User profile picture" />
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
            <div class="card card-primary" bis_skin_checked="1">
                <!-- /.card-header -->
                <div class="card-body" bis_skin_checked="1">
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
                            <span class="badge badge-danger pull-rigth">No interesado</span>
                            @elseif($contact->contact_status == 3)
                            <span class="badge badge-info pull-rigth">Presupuesto Enviado</span>
                            @elseif($contact->contact_status == 4)
                            <span class="badge badge-success pull-rigth">Cliente</span>
                            @elseif($contact->contact_status == 5)
                            <span class="badge badge-danger pull-rigth">En Negociación</span>
                            @else
                            <span class="badge badge-primary pull-rigth">Renegociando</span>
                        @endif
                   
                    <hr />

                    <strong><i class="fa fa-envelope mr-1"></i>  Email</strong>

                    <p class="text-muted">{{ $contact->email }}</p>
                    <hr />

                    <strong><i class="fa fa-envelope mr-1"></i>  Se contactó mediante: </strong>

                        @if ($contact->comunication_medium == 1)
                                <span class="badge badge-primary pull-rigth">Télefonica</span>
                            @elseif($contact->comunication_medium == 2)
                            <span class="badge badge-danger pull-rigth">Email</span>
                            @elseif($contact->comunication_medium == 3)
                            <span class="badge badge-info pull-rigth">Skype</span>
                            @elseif($contact->comunication_medium == 4)
                            <span class="badge badge-success pull-rigth">Whatsapp</span>
                            @elseif($contact->comunication_medium == 5)
                            <span class="badge badge-danger pull-rigth">Facebook</span>
                            
                        @endif
                    <hr />

                    
                </div>
                <!-- /.card-body -->
                <a  class="btn btn-primary btn-block"><b>Actualizar</b></a>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-warning btn-block"><b>Volver a
                        Lista</b></a>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-9" bis_skin_checked="1">
            <div class="card" bis_skin_checked="1">
                <div class="card-header p-2" bis_skin_checked="1">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#contratos" data-toggle="tab">Presupuestos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#comunicaciones" data-toggle="tab">Comunicaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#documentosC" data-toggle="tab">Campañas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tarjeras" data-toggle="tab">Notas</a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body" bis_skin_checked="1">
                    <div class="tab-content" bis_skin_checked="1">
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="contratos" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-md-12" bis_skin_checked="1">
                                    <div class="text-right" bis_skin_checked="1">
                                        <a class="btn bg-primary">
                                            <i class="fa fa-plus"></i>Crear
                                            Presupuesto
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12" bis_skin_checked="1">
                                    <div class="table-responsive" bis_skin_checked="1">
                                        <div id="tablaContratos" bis_skin_checked="1">
                                            <div class="card-body" bis_skin_checked="1">
                                                <div class="table-responsive" bis_skin_checked="1">
                                                    <table class="table table-hover table-sm">
                                                        <thead class="thead">
                                                            <tr>
                                                                <th>#</th>
                                                                <th></th>
                                                                <th>
                                                                    Presupuesto #
                                                                </th>
                                                                <th>
                                                                    Fecha creado
                                                                </th>
                                                                <th>
                                                                    Válido hasta
                                                                </th>
                                                                <th>Creado Por</th>
                                                                <th>Estado</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>3631</td>
                                                                <td>
                                                                    <input type="hidden" id="accionExpa_51014684"
                                                                        value="1" />
                                                                    <a class="btn btn-default" data-toggle="collapse"
                                                                        href="#detalle_51014684" role="button"
                                                                        aria-expanded="false"
                                                                        aria-controls="detalle_51014684"><span
                                                                            id="accion_51014684" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Expandir"><i
                                                                                class="fa fa-arrows"></i></span></a>
                                                                </td>
                                                                <td>19/02/2023</td>
                                                                <td>20/04/2023</td>
                                                                <td>
                                                                    {{ auth()->user()->name }}
                                                                </td>
                                                                <td></td>
                                                                <td>
                                                                    <span
                                                                        class="notification-label bg-success">Activo</span>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group" bis_skin_checked="1">
                                                                        <a href="http://localhost/valle_paz/public/contratos/3631/ver"
                                                                            class="btn btn-tbl-update btn-xs"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Ver">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                        <a href="http://localhost/valle_paz/public/contratos/3631/editar"
                                                                            class="btn btn-tbl-update btn-xs"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="editar">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                    </div>
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

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="comunicaciones" bis_skin_checked="1">
                            <div id="tblComunicaciones" bis_skin_checked="1">
                                <div class="card-body" bis_skin_checked="1">
                                    <div class="table-responsive" bis_skin_checked="1">
                                        <div class="tab-pane active" id="documentos" bis_skin_checked="1">
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-md-12 text-right mb-3" bis_skin_checked="1">
                                                    <a class="btn bg-primary text-white"
                                                        >
                                                        <i class="fa fa-plus"></i>
                                                        Agregar Comunicación
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-md-12" bis_skin_checked="1">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane active show" id="documentosC" bis_skin_checked="1">
                            <div id="tablaDocumentos" bis_skin_checked="1">
                                <div class="tab-pane active" id="documentos" bis_skin_checked="1">
                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-md-12 text-right mb-3" bis_skin_checked="1">
                                            <a data-toggle="modal" data-target="#agregar_adjunto"
                                                class="btn btn-primary">
                                                <i class="fa fa-plus"></i> Agregar Campaña
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-md-12" bis_skin_checked="1">
                                            <div class="table-responsive" bis_skin_checked="1">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>
                                                                <a data-sort="cliente_adjunto_nombre">Asunto</a>
                                                            </th>
                                                            <th>
                                                                <a data-sort="cliente_adjunto_observacion">Observación</a>
                                                            </th>
                                                            <th class="action-column">
                                                                &nbsp;
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4">
                                                                No Hay resultados
                                                                que mostrar
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
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tarjeras" bis_skin_checked="1">
                            <div id="tablaTarjetas" bis_skin_checked="1">
                                <div class="tab-pane active" id="documentos" bis_skin_checked="1">
                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-md-12 text-right mb-3" bis_skin_checked="1">
                                            <a href="http://localhost/valle_paz/public/tarjeta/create/cliente/4"
                                                class="btn btn-primary">
                                                <i class="fa fa-plus"></i> Agregar Nota
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row" bis_skin_checked="1">
                                        <div class="col-md-12" bis_skin_checked="1">
                                            <div class="table-responsive" bis_skin_checked="1">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Asunto</th>
                                                            <th>Observación</th>
                                                            
                                                            <th>Estado</th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="11">
                                                                Cliente sin
                                                                Notas
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


                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>

    </div>

    </div>
@endsection
