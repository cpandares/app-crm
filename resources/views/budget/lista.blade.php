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
                        <input type="hidden" id="accionExpa_51014684" value="1" />
                        <a class="btn btn-default" data-toggle="collapse" href="#detalle_51014684" role="button"
                            aria-expanded="false" aria-controls="detalle_51014684"><span id="accion_51014684"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Expandir"><i
                                    class="fa fa-arrows"></i></span></a>
                    </td>
                    <td>19/02/2023</td>
                    <td>20/04/2023</td>
                    <td>
                        {{ auth()->user()->name }}
                    </td>
                    <td></td>
                    <td>
                        <span class="notification-label bg-success">Activo</span>
                    </td>
                    <td>
                        <div class="btn-group" bis_skin_checked="1">
                            <a href="http://localhost/valle_paz/public/contratos/3631/ver"
                                class="btn btn-tbl-update btn-xs" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Ver">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="http://localhost/valle_paz/public/contratos/3631/editar"
                                class="btn btn-tbl-update btn-xs" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="editar">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>