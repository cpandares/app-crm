@extends('layouts.app') @section('content')
    <div class="row" >

        <div class="row">
            <div class="col-12">
               

                             
                <button class="btn btn-primary float-right mb-3" onclick="generar_todos()" >
                    Agregar Contactos
                </button>
               
                <a href="{{ route('admin.contact.index') }}" class="btn btn-info float-right mb-3 mr-2">
                    Volver
                </a>
            </div>
        </div>

        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <div class="card p-5" bis_skin_checked="1">
                <!--begin::Card header-->
                <h2>{{ $campaing->name }}</h2> 
                
                <hr>
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                    <div class="card-title" bis_skin_checked="1">

                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre de contacto</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Pais</th>
                                    <th>Ciudad</th>
                                    <th>Estado</th>
                                    <th>
                                        <input type="checkbox" name="" id="marcarTodo" onclick="marcar(this);">
                                    </th>
                                   {{--  <th>Acciones</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($contacts) > 0)
                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->lastname }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->state }}</td>
                                            <td>{{ $item->contact_status }}</td>
                                            <td>
                                                <input type="checkbox" name="contact_id[]"  id="contact_id" value="{{ $item->id }}"/>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                @else
                                    
                                @endif
                            </tbody>
                        </table>
                        <input type="hidden" name="" id="campaing_id" value="{{ $campaing->id }}">
                    </div>
    
                </div>

            </div>

        </div>

    </div>


@endsection


@section('script')

<script type="text/javascript">

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
                    url: "{{asset('').'admin/add-contacts-campaings/'}}" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        contact_id: a,
                    },
                    success: function(res) {
                        console.log(res)
                        if (res) {
                            Swal.fire({
                                title: 'Generar Cobro',
                                text: "Se agregaron Exitosamente",
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
            checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
        }
    }
}

</script>

@endsection