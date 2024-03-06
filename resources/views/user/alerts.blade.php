<!-- resources/views/login_logs.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <h1>{{ $title }}</h1> --}}
    <div class="card">
        <div class="row">
            <div class="col-6">
                {{-- Crear alerta para usuarios con 2 semanas sin comunicacion, 1 mes o 2 meses --}}
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Configurar alerta para usuarios sin comunicacion en: </h4>
                    {{-- checks --}}
                    <form action="" method="post">
                        <div class="col-sm-12 col-sm-12 col-md-6">

                            <label for="comisiones" class="form-label">2 semanas
                            </label><br>
                            <input type="checkbox" id="representa_empresa"
                                name="representa_empresa" data-toggle="toggle" data-on="Si"
                                data-off="No" data-onstyle="primary" data-offstyle="danger"
                                onchange="accion_respresenta(this)">
    
                        </div>
                        <div class="col-sm-12 col-sm-12 col-md-6 mt-2">

                            <label for="comisiones" class="form-label">1 mes
                            </label><br>
                            <input type="checkbox" id="representa_empresa"
                                name="representa_empresa" data-toggle="toggle" data-on="Si"
                                data-off="No" data-onstyle="primary" data-offstyle="danger"
                                onchange="accion_respresenta(this)">
    
                        </div>
                        <div class="col-sm-12 col-sm-12 col-md-6 mt-2">

                            <label for="comisiones" class="form-label">2 meses
                            </label><br>
                            <input type="checkbox" id="representa_empresa"
                                name="representa_empresa" data-toggle="toggle" data-on="Si"
                                data-off="Si" data-onstyle="primary" data-offstyle="danger"
                                onchange="accion_respresenta(this)">
    
                        </div>


                            
                    </form>
                </div>
            </div>

            <div class="col-6">
                {{-- Crear alerta para usuarios con 2 semanas sin comunicacion, 1 mes o 2 meses --}}
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">¿Notificar cuando una feria empieza en 7 días? </h4>
                    {{-- checks --}}
                    <form action="" method="post">
                        <div class="col-sm-12 col-sm-12 col-md-6">

                            <label for="comisiones" class="form-label">
                            </label><br>
                            <input type="checkbox" id="representa_empresa"
                                name="representa_empresa" data-toggle="toggle" data-on="Si"
                                data-off="No" data-onstyle="primary" data-offstyle="danger"
                                onchange="accion_respresenta(this)">
    
                        </div>
                       


                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
