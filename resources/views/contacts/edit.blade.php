@extends('layouts.app')


@section('content')

<div class="row container-xxl " bis_skin_checked="1">
    <div class="col-md-3" bis_skin_checked="1">
        <!-- Profile Image -->
        <div class="card" bis_skin_checked="1">
            <div class="card-header p-2" bis_skin_checked="1">
                
            </div>
            <!-- /.card-header -->
            <div class="card-body" bis_skin_checked="1">
                <div class="tab-content" bis_skin_checked="1">
                    <div class="active tab-pane" id="datos_contrato" bis_skin_checked="1">
                        
                        <div class="panel-body" bis_skin_checked="1">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nombre: </b> <a class="pull-right">{{ $contact->name }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Contrato File Maker #</b> <a class="float-right"></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cliente</b> <a class="float-right">CARMEN MARIA
                                        VEGA MORALES</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Sede</b>
                                    <a class="float-right">
                                        VALLE DE PAZ DE COSTA RICA SA
                                    </a>

                                </li>
                                <li class="list-group-item">
                                    <b>Vendedor</b> <a class="float-right">GERARDO CRUZ _
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Fecha Inicia</b> <a class="float-right">01-02-2023</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Fecha Primer Cobro</b> <a class="float-right">22-03-2023</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Día de Pago</b> <a class="float-right">22</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Modalidad de Cobro</b> <a class="float-right">Quincenal</a>
                                </li>
                               
                                
                               
                            </ul>

                        </div>
                    </div>
                    <!-- /#data_contratos -->
                    <div class="tab-pane" id="datos_cliente" bis_skin_checked="1">
                        <h4 class="panel-title">
                            <a aria-expanded="true"> Datos Contrato </a>
                        </h4>
                        <div class="panel-body" bis_skin_checked="1">
                            <div class="text-center" bis_skin_checked="1">
                                <img width="50%" height="50%" class="img-circle"
                                    src="http://localhost/valle_paz/public/images/default_avatar.png"
                                    alt="User profile picture">
                            </div>
                            <h4 class="profile-username text-center"><strong>CARMEN MARIA
                                    VEGA MORALES</strong></h4>
                            <p class="text-muted text-center">ID 700810175</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Celular</b> <a class="float-right">88309523</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Sexo</b> <a class="float-right">Masculino</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Fecha de Nacimiento</b> <a class="float-right">27-03-2065</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nacionalidad</b> <a class="float-right">Costarricense</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Estado Civil</b> <a class="float-right">Casado (a)</a>
                                </li>
                            </ul>

                            <strong><i class="fa fa-map-marker mr-1"></i>Dirección</strong>

                            <p class="text-muted">

                            </p>
                            <hr>
                            <strong><i class="fa fa-map mr-1"></i>Distrito</strong>
                            <p class="text-muted"></p>
                            <hr>

                            <strong><i class="fa fa-phone mr-1"></i>Otros Teléfonos</strong>
                            <p class="text-muted">
                            </p>
                            <hr>

                            <strong><i class="fa fa-comment mr-1"></i>Observacion Fija</strong>
                            <p class="text-muted"></p>
                            <hr>

                            <strong><i class="fa fa-envelope mr-1"></i> Autoriza el Envío de Email?</strong>
                            <p class="text-muted">No</p>
                            <hr>
                            <strong><i class="fa fa-mobile mr-1"></i> Autoriza el Envío de SMS?</strong>
                            <p class="text-muted">No</p>
                        </div>
                    </div>
                    <!-- /#data_contratos -->
                </div>
                <a href="http://localhost/valle_paz/public/contratos/124450/editar"
                    class="btn btn-primary btn-block"><b>Actualizar</b></a>
                <a href="http://localhost/valle_paz/public/contratos/124450/editar"
                    class="btn btn-danger btn-block"><b>Eliminar</b></a>
                <a href="http://localhost/valle_paz/public/contratos/lista" class="btn btn-warning btn-block"><b>Volver
                        a Lista</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.column -->
    <div class="col-md-9" bis_skin_checked="1">
        <div class="card" bis_skin_checked="1">
            <div class="card-header p-2" bis_skin_checked="1">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#servicio_contrato"
                            data-toggle="tab">Servicios del
                            Contrato</a></li>
                    <li class="nav-item"><a class="nav-link" href="#beneficios_contrato" data-toggle="tab">Beneficiarios
                            del
                            Contrato</a></li>
                    <li class="nav-item"><a class="nav-link" href="#planes_pago" data-toggle="tab">Planes de Pago</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#cobros_generados" data-toggle="tab">Cobros
                            Generados</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#pagos_realizados" data-toggle="tab">Pagos
                            Realizados</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#documentos_adjuntos" data-toggle="tab">Documentos
                            Adjuntos</a></li>
                </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body" bis_skin_checked="1">
                <div class="tab-content" bis_skin_checked="1">
                    <!--servicio_contrato--------------------------------->
                    <div class="active tab-pane" id="servicio_contrato" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">
                                <div class="mb-3 float-right" bis_skin_checked="1">
                                    <a class="btn bg-success text-white"
                                        href="http://localhost/valle_paz/public/contrato/servicio/crear/124450"><i
                                            class="fa fa-plus"></i>Agregar Servicio</a>
                                </div>
                            </div>
                        </div>
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">
                                <div class="table-responsive" bis_skin_checked="1">
                                    <table class="table table-wrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Observaciones</th>
                                                <th>Valor Servicio</th>
                                                <th>Cuota Servicio</th>
                                                <th>Saldo Actual</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <input type="hidden" id="h_row_contrato_servicio_50577345"
                                                    value="251996">
                                                <td>1</td>
                                                <td>Corporativo</td>
                                                <td></td>

                                                <td>
                                                    ₡

                                                    4,500.00

                                                </td>

                                                <td>

                                                    ₡



                                                    4,500.00






                                                </td>

                                                <td>₡

                                                    0,00
                                                </td>
                                                <td>
                                                    <p class="notification-label bg-primary text-white">Activo</p>
                                                </td>
                                                <td>
                                                    <a href="http://localhost/valle_paz/public/contrato_servicio/511/251996"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="http://localhost/valle_paz/public/servicio_contrato/edit/251996"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-pencil primary"></i>
                                                    </a>

                                                    <input type="hidden" name="" id="contrato_id" value="251996">



                                                    <a class="btn btn-tbl-update btn-xs text-white"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Desactivar Servicio"
                                                        onclick="sendUpdate('service_activate', '251996')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <input type="hidden" id="h_row_contrato_servicio_65913312"
                                                    value="251997">
                                                <td>2</td>
                                                <td>Corporativo</td>
                                                <td></td>

                                                <td>
                                                    ₡

                                                    4,500.00

                                                </td>

                                                <td>

                                                    ₡



                                                    4,500.00






                                                </td>

                                                <td>₡

                                                    0,00
                                                </td>
                                                <td>
                                                    <p class="notification-label bg-primary text-white">Activo</p>
                                                </td>
                                                <td>
                                                    <a href="http://localhost/valle_paz/public/contrato_servicio/511/251997"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="http://localhost/valle_paz/public/servicio_contrato/edit/251997"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-pencil primary"></i>
                                                    </a>

                                                    <input type="hidden" name="" id="contrato_id" value="251997">



                                                    <a class="btn btn-tbl-update btn-xs text-white"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Desactivar Servicio"
                                                        onclick="sendUpdate('service_activate', '251997')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <input type="hidden" id="h_row_contrato_servicio_5223086"
                                                    value="251998">
                                                <td>3</td>
                                                <td>Corporativo</td>
                                                <td></td>

                                                <td>
                                                    ₡

                                                    4,500.00

                                                </td>

                                                <td>

                                                    ₡



                                                    5,085.00






                                                </td>

                                                <td>₡

                                                    0,00
                                                </td>
                                                <td>
                                                    <p class="notification-label bg-primary text-white">Activo</p>
                                                </td>
                                                <td>
                                                    <a href="http://localhost/valle_paz/public/contrato_servicio/511/251998"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="http://localhost/valle_paz/public/servicio_contrato/edit/251998"
                                                        class="btn btn-tbl-update btn-xs text-white">
                                                        <i class="fa fa-pencil primary"></i>
                                                    </a>

                                                    <input type="hidden" name="" id="contrato_id" value="251998">



                                                    <a class="btn btn-tbl-update btn-xs text-white"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Desactivar Servicio"
                                                        onclick="sendUpdate('service_activate', '251998')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---beneficios_contrato------------------------------------------------------->
                    <div class="tab-pane" id="beneficios_contrato" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12 mb-3" bis_skin_checked="1">
                                <div class="text-right" bis_skin_checked="1">
                                    <a href="http://localhost/valle_paz/public/contrato_beneficiario/crear/124450"
                                        class="btn bg-primary text-white">
                                        <i class="fa fa-plus"></i>Agregar Beneficiario
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">
                                <div id="tablaContratos" bis_skin_checked="1">
                                    <div class="table-responsive" bis_skin_checked="1">
                                        <table class="table table-hover table-sm">
                                            <thead class="thead">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Edad de Afiliación</th>
                                                    <th>Parentesco</th>
                                                    <th>Nombre Servicio</th>
                                                    <th>Vigencia desde</th>
                                                    <th>¿Reporta a la INS?</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                        <center>
                                                            No se encontraron resultados.
                                                        </center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---planes_pago------------------------------------------------------->
                    <div class="tab-pane" id="planes_pago" bis_skin_checked="1">

                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">

                                <div class="table-responsive" bis_skin_checked="1">
                                    <form method="GET"
                                        action="http://localhost/valle_paz/public/contrato/generar-plan-pago/124450"
                                        accept-charset="UTF-8" id="frmFiltros">

                                        <select id="servicio" class="form-control" style="width:
                        100%;" onchange="buscar('servicio')" name="servicio">
                                            <option selected="selected" value="">Servicios</option>
                                            <option value="251996">Corporativo</option>
                                            <option value="251997">Corporativo</option>
                                            <option value="251998">Corporativo</option>
                                        </select>

                                        <button class="btn bg-success text-white mt-1" type="submit">
                                            Ver Plan de pago
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----cobros_generados----------------------->
                    <div class="tab-pane" id="cobros_generados" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">

                                <div class="table-responsive" bis_skin_checked="1">
                                    <form method="GET"
                                        action="http://localhost/valle_paz/public/cobros/contratos-clientes/124450"
                                        accept-charset="UTF-8" id="frmFiltros">

                                        <select id="servicio" class="form-control" style="width:
                        100%;" onchange="buscar('servicio')" name="contrato_servicio">
                                            <option selected="selected" value="">Servicios</option>
                                            <option value="251996">Corporativo</option>
                                            <option value="251997">Corporativo</option>
                                            <option value="251998">Corporativo</option>
                                        </select>



                                        <button class="btn bg-success text-white mt-1" type="submit">
                                            Ver Cobros
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----pagos_realizados----------------------->
                    <div class="tab-pane" id="pagos_realizados" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12 mb-3" bis_skin_checked="1">
                                <div class="text-right" bis_skin_checked="1">
                                    <a href="http://localhost/valle_paz/public/contrato_beneficiario/crear/124450"
                                        class="btn bg-primary text-white">
                                        <i class="fa fa-plus"></i>Agregar Beneficiario
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12" bis_skin_checked="1">
                                pagos_realizados
                            </div>
                        </div>
                    </div>
                    <!----documentos_adjuntos----------------------->
                    <div class="tab-pane" id="documentos_adjuntos" bis_skin_checked="1">

                        <div class="row" bis_skin_checked="1">
                            <div class="col-md-12 mb-3" bis_skin_checked="1">
                                <div id="tablaDocumentos" bis_skin_checked="1">
                                    <div class="tab-pane active" id="documentos_adjuntos" bis_skin_checked="1">
                                        <div class="row" bis_skin_checked="1">
                                            <div class="col-md-12 text-right mb-3" bis_skin_checked="1">
                                                <a data-toggle="modal" data-target="#agregar_adjunto"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-plus"></i> Agregar Adjunto
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
                                                                <th><a data-sort="cliente_adjunto_nombre">Nombre
                                                                        Adjunto</a></th>
                                                                <th><a
                                                                        data-sort="cliente_adjunto_observacion">Observación</a>
                                                                </th>
                                                                <th class="action-column">&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="4">No Hay resultados que mostrar</td>
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

                <div class="modal fade" id="agregar_adjunto" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true" bis_skin_checked="1">
                    <div class="modal-dialog modal-lg" role="document" bis_skin_checked="1">
                        <div class="modal-content" bis_skin_checked="1">
                            <div class="modal-header" bis_skin_checked="1">
                                <h4 class="modal-title" id="exampleModalLabel">Agregar Adjunto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form method="POST"
                                action="http://localhost/valle_paz/public/contrato/create/documento/86/124450"
                                accept-charset="UTF-8" role="form" id="frmAdjuntarArchivos"
                                enctype="multipart/form-data"><input name="_token" type="hidden"
                                    value="WlVOZbDqzdeKp1hjsff0Ltom9KiZWuLkIrm7XruK">
                                <div class="modal-body" bis_skin_checked="1">
                                    <div class="row col-md-12" bis_skin_checked="1">
                                        <div class="col-12" bis_skin_checked="1">
                                            <div class="form-group" bis_skin_checked="1"><label
                                                    class="form-control-label text-color-dark" for="nombre">Nombre del
                                                    archivo<span class="text-danger">*</span></label><input
                                                    class="form-control" placeholder="Nombre del archivo" id="nombre"
                                                    autocomplete="off" required=""
                                                    onkeyup="javascript:this.value=this.value.toUpperCase()"
                                                    name="nombre" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="row col-md-12" bis_skin_checked="1">
                                        <div class="row col-md-12" bis_skin_checked="1">
                                            <label for="foto" class="form-label">Archivo</label>
                                            <input type="file" class="form-control" name="archivo" id="archivo">
                                        </div>
                                    </div>
                                    <div class="row col-md-12" bis_skin_checked="1">
                                        <div class="col-sm-12" bis_skin_checked="1">
                                            <div class="form-group" bis_skin_checked="1"><label
                                                    class="form-label text-color-dark"
                                                    for="observaciones">Observación</label><textarea
                                                    name="observaciones" class="form-control" placeholder="Observación"
                                                    id="observaciones"></textarea></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer text-center" bis_skin_checked="1">
                                    <input type="hidden" name="id_registro" id="id_registro" value="">
                                    <button type="submit" class="btn btn-primary"><!--<i class="fa fa-times"></i>-->
                                        Guardar</button>
                                    <button type="button" class="btn btn-warning"
                                        data-dismiss="modal"><!--<i class="fa fa-times"></i>--> Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.card-body -->
       
       
       

    </div>
    <!-- /.nav-tabs-custom -->
</div>

@endsection