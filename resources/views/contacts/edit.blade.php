@extends('layouts.app') @section('content')
    <div class="row" >
        <div class="col-md-3" >
            <!-- Profile Image -->
            <div class="card card-primary card-outline" >
                <div class="card-body box-profile" >
                    <div class="text-center" >
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
            <div class="card card-primary" >
                <!-- /.card-header -->
                <div class="card-body" >
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

        <div class="col-md-9" >
            <div class="card" >
                <div class="card-header p-2" >
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
                <div class="card-body" >
                    <div class="tab-content" >
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="presupuestos" >

                            <div class="row">
                                <div class="col-md-12 text-right mb-3">
                                    <a data-toggle="modal" data-target="#agregarPresupuesto" class="btn btn-primary" >
                                      <i class="fa fa-plus"></i>  Agregar Presupuesto
                                    </a>
                                </div>
                            </div>
                           
                           <table>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Test</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, rem voluptatibus? Ut eligendi impedit voluptas.</td>
                                        <td>1500</td>
                                        <td>22-05-2023</td>
                                        <td>22-06-2023</td>
                                        <td>--</td>
                                        <td>
                                            <a href="" class="btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="" class="btn">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                           </table>
                            
                        </div>

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="comunicaciones" >
                            <div class="card mb-5 mb-xxl-8">

                                <div class="row">
                                    <div class="col-md-12 text-right mb-3">
                                        <a data-toggle="modal" data-target="#agregarComunicacion" class="btn btn-primary" >
                                          <i class="fa fa-plus"></i>  Agregar Comunicación
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
                                    <!--begin::Timeline-->
                                    <div class="timeline-label">
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <a href="" title="Email">
                                                    <i class="fa fa-genderless text-warning fs-1">

                                                    </i>
                                                </a>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-mormal timeline-content text-muted ps-3">
                                                <h2>Asunto:</h2>
                                                <span>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, placeat culpa accusantium delectus at eius labore necessitatibus dicta accusamus nisi hic! A autem, culpa itaque repellat dolore laboriosam excepturi ut impedit, laborum obcaecati asperiores ullam architecto voluptatibus. Nemo non illum cumque ad! Aut vero nam aspernatur vel tempore voluptatum sit.
                                                </span>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-success fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-danger fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                            <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-primary fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-danger fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.</div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-primary fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-danger fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.</div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-success fs-1"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="campaings" >
                           
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
                                    <tr>
                                        <td>Capaña de prueba</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quam ipsam eligendi odit officiis tempore repellat ipsa non provident sequi sed totam cumque iure necessitatibus porro </td>
                                        <td>20-02-2023</td>
                                        <td>-</td>
                                        <td>
                                            <a href="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                        
                                            <a href="">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                            
                                </tbody>
                            
                            
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="notas" >
                            
                                <div class="row">
                                    <div class="col-md-12 text-right mb-3">
                                        <a data-toggle="modal" data-target="#agregarNota" class="btn btn-primary" >
                                          <i class="fa fa-plus"></i>  Agregar Nota
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
                                        <tr>
                                            <td>Pruea de nota</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quam ipsam eligendi odit officiis tempore repellat ipsa non provident sequi sed totam cumque iure necessitatibus porro veritatis, omnis nihil illo ducimus! Necessitatibus accusantium totam aperiam corrupti, consequatur, ratione laboriosam provident itaque, tenetur fugiat adipisci unde iusto ea nihil quam? Architecto.</td>
                                            <td>20-02-2023</td>
                                            <td>-</td>
                                            <td>
                                                <a href="">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                            
                                                <a href="">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                
                                    </tbody>
                                
                                
                                </table>
                                <div class="modal fade" id="agregarNota" tabindex="-1" aria-labelledby="exampleModalLabel"          aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Nueva Nota</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="" method="post">
                                            <label for="">Titulo</label>
                                            <input type="text" class="form-control" name="title" placeholder="">

                                            <label for="">Observación</label>
                                            <textarea 
                                                name="observacion" 
                                                cols="30" rows="10" 
                                                class="form-control" style="resize: none">
                                            </textarea>

                                            <button type="submit" class="btn btn-primary mt-4">Guardar Nota</button>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                         
                                        </div>
                                      </div>
                                    </div>
                                  </div>                              

                                  
                            
                        </div>


                        <div class="modal fade" id="agregarPresupuesto" tabindex="-1" aria-labelledby="agregarPresupuestoLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="agregarPresupuestoLabel">Nueva Presupuesto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ route('admin.budget.store') }}" method="post">
                                    @csrf
                                    <label for=""><strong>Titulo</strong></label>
                                    <input type="text" class="form-control" name="title" placeholder="">

                                    <label for=""><strong>Observación</strong></label>
                                    <textarea 
                                        name="observacion" 
                                        cols="30" rows="10" 
                                        class="form-control" style="resize: none">
                                    </textarea>

                                    <label for=""><strong>Es Válido hasta</strong> </label>
                                    <input type="date" name="valid_until" class="form-control">

                                    <label for=""><strong>Precio del presupuesto</strong></label>
                                    <input type="text" class="form-control" name="price" placeholder="10000000">

                                    <button type="submit" class="btn btn-primary mt-4">Guardar Nota</button>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="modal fade" id="agregarComunicacion" tabindex="-1" aria-labelledby="agregarComunicacionLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="agregarComunicacionLabel">Nueva Comunicación</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="" method="post">
                                    <label for=""><strong>Asunto</strong></label>
                                    <input type="text" class="form-control" name="title" placeholder="">

                                    <label for=""><strong>Se acordó</strong></label>
                                    <textarea 
                                        name="observacion" 
                                       
                                        class="form-control" style="resize: none">
                                    </textarea>

                                    <label for=""><strong>Comunicación mediante</strong> </label>
                                    <select name="comunicacion" id="" class="form-control">
                                        <option value="">Seleccionar</option>
                                        <option value="">Email</option>
                                        <option value="">Whatsapp</option>
                                    </select>

                                   

                                    <button type="submit" class="btn btn-primary mt-4">Guardar</button>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 
                                </div>
                              </div>
                            </div>
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
<script>

  

  
  listar(1)
  $(document).ready(() => {
    $(document).on('click', '.pagination a', function () {
      event.preventDefault()
      $('li').removeClass('active')
      $(this).parent('li').addClass('active')
      page = $(this).attr('href').split('page=')[1]
      
      listar(page)
      
    });


  });

 

  function listar(page) {
    let url = "{{route('contacto-presupuesto-ajax', $contact->id)}}"; 
      $.ajax({
        url : url + '?page=' + page,
      }).done( (data) => {
        console.log(data);
          $('#tablaPresupuestos').html(data)
      }).fail( (jqXHR,ajaxOptions,thrownError) => {
            console.log(thrownError)
          /* alert('No response from server') */
      })
  }

</script>

@endsection
