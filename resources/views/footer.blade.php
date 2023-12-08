<link href="{{ asset('css/bundle/bundle.css') }}" rel="stylesheet" type="text/css" />

<script src="{{ asset('js/plugins/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/plugins/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
{{-- <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script> --}}

<script src="{{ asset('js/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('js/fullcalendar/calendar.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
{{-- <script src="assets/js/widgets.bundle.js"></script> --}}
<script src="{{ asset('js/custom/widgets.js') }}"></script>
<script src="{{ asset('js/widgets/widgets.bundle.js') }}"></script>

<script src="{{ asset('js/custom/chat.js') }}"></script>
<script src="{{ asset('js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('js/custom/modals/users-search.js') }}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
    integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://sortablejs.github.io/Sortable/Sortable.js"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    





<script>
    $(document).ready(function() {  
        
        

       /*  $.ajax({
                url: "https://shop.ninesdeonil.com/wp-json/wc/v3/orders?consumer_key=ck_6d3fb768918b7067ee823204e2107033097ca64a&consumer_secret=cs_532eab538d5f11f08d30b70bd1a626a9808f8725&per_page=100",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var i = 1;
                    $.each(data, function(key, value) {
                        html += '<tr>';
                        html += '<td>' + i + '</td>';
                        html += '<td>' + value.id + '</td>';
                        html += '<td>' + value.line_items[0].name + '</td>';
                        html += '<td>' + value.billing.first_name + ' ' + value.billing.last_name + '</td>';
                        html += '<td>' + value.status + '</td>';
                        html += '<td>' + value.total + '</td>';
                        html += '<td>' + value.date_created + '</td>';
                        html += '</tr>';
                        i++;
                    });
                    $('#productos_api').html(html);
                }
            }); */


            $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            className: 'btn btn-success'   
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            className: 'btn btn-danger'
                        }
                        
                    ],
                    "lengthMenu": [15, 25, 50, 75, 100],
                    
                
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                        "processing": "Cargando...",
                        "infoEmpty": "No hay registros disponibles",
                        "loadingRecords": "Cargando...",
                        "infoEmpty": "No hay registros disponibles",
                    },
                    "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "processing": true,
            } );

            $('#kt_ecommerce_products_table').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            className: 'btn btn-success'   
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            className: 'btn btn-danger'
                        }
                        
                    ],
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                    },
            } );

       
        $('#kt_customers_table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
            }
        
        });
        $('.formDelete').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea eliminar esta campaña?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        })

        $('.formDeleteBudget').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea eliminar este presupuesto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        })

        $('.formDeleteContact').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea eliminar este contacto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        })
        $('.formDeleteNote').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea eliminar esta nota?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        })

        $('.formDeleteContactCampaing').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea quitar este contacto de la campaña?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        });
        $('.formDeleteProduct').submit(function(e) {
            e.preventDefault();
            let form = event.target;
            Swal.fire({
                title: 'Seguro desea quitar este producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Continuar'
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        })

        $("#price").maskMoney();
        $("#budget").maskMoney();
       
    });
    /* const items = document.querySelectorAll('.card__item')
    const columns = document.querySelectorAll('.column') */

    const columns = document.querySelectorAll(".board-list");

    /*  let idContacto  = document.getElementById('id_contacto').value
     let contact_status_id  = document.getElementById('contact_status_id').value */

    columns.forEach((column) => {
        new Sortable(column, {
            group: "shared",
            handle: '#tarjeta',

            animation: 150,
            ghostClass: "blue-background-class",
            onMove: function( /**Event*/ evt, /**Event*/ originalEvent) {
                // Example: https://jsbin.com/nawahef/edit?js,output
                evt.dragged; // dragged HTMLElement
                evt.draggedRect; // DOMRect {left, top, right, bottom}
                evt.related; // HTMLElement on which have guided
                evt.relatedRect; // DOMRect
                evt
                    .willInsertAfter; // Boolean that is true if Sortable will insert drag element after target by default
                originalEvent.clientY; // mouse position
                // return false; — for cancel
                // return -1; — insert before target
                // return 1; — insert after target
                // return true; — keep default insertion point based on the direction
                // return void; — keep default insertion point based on the direction
            },

            onEnd: function( /**Event*/ evt) {
                let itemEl = evt.item; // dragged HTMLElement
                let to = evt.to; // target list
                let from = evt.from; // previous list
                let oldIndex = evt.oldIndex; // element's old index within old parent
                let newIndex = evt.newIndex; // element's new index within new parent
                let oldDraggableIndex = evt
                    .oldDraggableIndex; // element's old index within old parent, only counting draggable elements
                let newDraggableIndex = evt
                    .newDraggableIndex; // element's new index within new parent, only counting draggable elements
                let clone = evt.clone // the clone element
                let pullMode = evt
                    .pullMode; // when item is in another sortable: `"clone"` if cloning, `true` if moving

                let reference = to.dataset.reference;

                console.log(reference)

                let selector = `div[data-contact]:not([data-contact="${reference}"])`
                /*  to.querySelectorAll(selector) */
                /* console.log(to.querySelector(selector)) */

                let contacUdate = to.querySelector(selector)

                if (contacUdate) {
                    /* contacUdate.dataset.contact = reference; */

                    $.ajax({
                        type: "PUT",
                        url: "{{ asset('') . 'admin/update-status-contact' }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            reference,
                            id: contacUdate.dataset.id
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

                    /*  window.location.reload() */


                }

            }
        });

    });
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {

        let file = event.target.files[0];
        let reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }

    function mostrarPalabra() {
        var datos = document.getElementById('caja_busqueda').value;
        datos = convertir(caja_busqueda.toLowerCase());
        document.getElementById('empresa_repre').style.display = 'none';
        document.getElementById('empresa_reprentar').style.display = 'none';
    }

    function convertir(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    $(document).ready(function() {
        $('.js-example-basic-single').select2();


    })

   
</script>



</body>
<!--end::Body-->

</html>
