@extends('layouts.app') 
    @section('content')
    <div class="row" > 

        <div class="container-xxl" id="kt_content_container" bis_skin_checked="1">
            <div class="card p-5" bis_skin_checked="1">
                <!--begin::Card header-->
                <h3 class="text-gray-600 text-hover-primary">Contactos en la campaña: {{ $campaing->campaing_name }}</h3> 
                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                    
                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black"></path>
                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon--> 
                    {{ $campaing->country }}
                </a>
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
                       
                        <button 
                            class="btn btn-primary float-right mr-3 btn-sm"  
                            data-toggle="modal" 
                            data-target="#exampleModal" 
                            type="button" 
                            >
                            Agregar Contactos
                        </button>
                       {{--  <a href="{{ url('admin/campaings/contacts/' . $campaing->id) }}" class="btn btn-primary float-right btn-sm mr-1">
                            Vista pipeline
                        </a> --}}
                        <a href="{{ route('admin.campaings.show', $campaing->id) }}" class="btn btn-primary float-right btn-sm mr-1">
                            Vista tabla
                        </a>

                        <a href="{{ route('admin.campaings.index') }}" class="btn btn-primary float-right btn-sm mr-1">
                           < Ir a Campañas
                        </a>
                    </div>
                </div>

                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class=" modal-dialog modal-dialog-centered mw-650px">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Añade tu contacto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['url'=>'admin/campaings/create-contract/' . $campaing->id, 'autocomplete'=>'off', 'files'=>true]) !!}

                            <div class="row">
                                <div class="col-md-6">
                                  
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Pedro', ]) !!}
                                    @error('name')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('lastname', 'Apellido') !!}
                                    {!! Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Perez', ]) !!}
                                    @error('lastname')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('phone', 'Telefono') !!}
                                    {!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'+34 455487895', ]) !!}
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'test@prueba.com', ]) !!}
                                    @error('email')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('postcode', 'Código Postal') !!}
                                    {!! Form::text('postcode', null, ['class'=>'form-control','placeholder'=>'285056', ]) !!}
                                </div>
                                <div class="col-md-6">
                                  
                                    {!! Form::label('country', 'Campañas') !!}
                                    {!! Form::select('country', $paises, null, ['class'=>'form-control','placeholder'=>'España', ]) !!}
                                    @error('country')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                    {!! Form::label('city', 'Ciudad') !!}
                                    {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'Barcelona', ]) !!}
                                </div>
                                <div class="col-md-6">
                                    {{-- {!! Form::label('state', 'Provincia (opcional)') !!}
                                    {!! Form::text('state', null, ['class'=>'form-control','placeholder'=>'', ]) !!} --}}
                                </div>
                            </div>
            
                            <div class="row  mt-2">
                                <div class="col-md-6">
                                 
                                    {!! Form::label('medio_comunicacion', 'Se Contactó mediante') !!}
                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                    {!! Form::select('medio_comunicacion',$comunicacion_medias, null,['id'=>'statu','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
            
                                    @error('medio_comunicacion')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                   
                                    {!! Form::label('medio_comunicacion', 'Estado del Cliente') !!}
                                    {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                    {!! Form::select('statu',$status, null,['id'=>'statu','class'=>'form-control','placeholder'=>'Seleccionar', ]) !!}
            
                                    @error('statu')
                                        <small class="text-danger">Este campo es requerido</small>
                                    @enderror
                                    
                                </div>
                            </div>
            
            
                          
            
                            <div class="mt-5">
            
                                {!! Form::submit('Guardar', ['class'=>'btn btn-outline-primary ']) !!}
                                
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          
                        </div>
                      </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="card-header border-0 pt-6" bis_skin_checked="1">
                    <!--begin::Card title-->
                   
                    <div class="card-body pt-0" bis_skin_checked="1">
                        <!--begin::Table-->
                        <div
                            id="kt_customers_table_wrapper"
                            class="dataTables_wrapper dt-bootstrap4 no-footer"
                            bis_skin_checked="1"
                        >
        
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Nueva Campaña</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['route'=>'admin.campaings.store', 'autocomplete'=>'off', 'files'=>true]) !!}
        
                                        {!! Form::label('name', 'Nombre') !!}
                                        {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Feria España', ]) !!}
        
                                        {!! Form::label('status', 'Estado de la campaña') !!}
                                {{-- {!! Form::select('medio_comunicacion', $comunicacion_medias,null ,['class'=>'form-control']) !!} --}}
                                        {!! Form::select('status',['1'=>'Activa', '2'=>'Inactiva', '3'=>'Cancelada','4' => 'Empieza proximamente', '5'=>'Por confimar'], '',['class'=>'form-control','placeholder'=>'Seleccionar']) !!}
        
                                        {!! Form::submit('Guardar', ['class'=>'btn btn-primary mt-5']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
        
        
                        
                        
                        <!--end::Table-->
                    </div>
                    <div class="board-lists container-fluid">
        
                        
                        <div class="board-list" data-reference="1">
                            <div class="list-title">
                               <h2 class="text-center text-gray-600 text-hover-primary">Nuevos</h2>
                            </div>
                            @if (count($new_clients) > 0)
                                
                            @foreach ($new_clients as $item)                    
                                <div class="list-group-item card " id="tarjeta" draggable="true" data-id="{{ $item->id }}" data-contact="{{ $item->contact_status }}">
                                      
                                        <span>
                                            
                                                <a href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }} {{ $item->lastname }}
                                                </a>
                                            
                                    </span> 
                                    <hr>
                                    
                                    <span>Campañas:  {{ $item->country }}</span>
                                      
                                </div>
                            @endforeach
                           
                            @endif
        
                        </div>
                        <div class="board-list" data-reference="2">
                            <div class="list-title">
                                <h2 class="text-center text-gray-600 text-hover-primary">En Negociación</h2>
                             </div>
                             @if (count($clientes_negoci)>0)       
                             @foreach ($clientes_negoci  as $item)                    
                                                
                                <div class="list-group-item card" 
                                    draggable="true" 
                                    data-id="{{ $item->id }}" 
                                    id="tarjeta"
                                    data-contact="{{ $item->contact_status }}">
                                   
                                    <span>
                                        
                                            <a href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        
                                    </span> 
                                    <hr>
                                    
                                    <span>Campañas:  {{ $item->country }}</span>
                                
                                </div>
                                @endforeach
                            
                             @endif
         
                        </div>
                        <div class="board-list" data-reference="3">
                            <div class="list-title">
                                <h2 class="text-center text-gray-600 text-hover-primary">Presupuesto Enviado</h2>
                             </div>
                             @if (count($presupuestados) > 0)                         
                                @foreach ($presupuestados as $item)                    
                                        <div 
                                            class="list-group-item card" 
                                            draggable="true" 
                                            data-id="{{ $item->id }}" 
                                            data-contact="{{ $item->contact_status }}"
                                            id="tarjeta"
                                            >
                                            <span>
                                                
                                                    <a href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }} {{ $item->lastname }}
                                                    </a>
                                                
                                            </span>  
                                            {{-- <input type="hidden"  id="contact_status_id" value="2"> --}}
                                            <hr>
                                            <span>Campañas:  {{ $item->country }}</span>
                                            
                                        </div>
                                @endforeach
                            
                             @endif
                        </div>
                        <div class="board-list" data-reference="4">
                            <div class="list-title">
                                <h2 class="text-center text-gray-600 text-hover-primary">Clientes</h2>
                             </div>
                             @if (count($clientes) > 0)
                                 
                                @foreach ($clientes as $item)                    
                                <div class="list-group-item card" 
                                    draggable="true" 
                                    data-id="{{ $item->id }}" 
                                    data-contact="{{ $item->contact_status }}"
                                    id="tarjeta"
                                    >
                                    
                                    <span>
                                        
                                            <a href="{{ route('admin.contact.show', $item->id) }}">{{ $item->name }} {{ $item->lastname }}
                                            </a>
                                        
                                    </span> 
                                    {{-- <input type="hidden"  id="contact_status_id" value="3"> --}}
                                    <hr>
                                    <span>Campañas:  {{ $item->country }}</span>
                                
                                </div>
                                @endforeach
                            
                             @endif
                        </div>
                        
                      
        
        
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
            checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
        }
    }
}




function buscar(tipo){

    $('#accion').val(1);
    var textoSelect = $('#'+tipo).val();
    const ENTER_KEY_CODE = 13;

    switch(tipo){
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