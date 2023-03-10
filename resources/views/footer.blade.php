
 <link  href="{{ asset('css/bundle/bundle.css') }}"  rel="stylesheet" type="text/css" />

<script src="{{ asset('js/plugins/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/plugins/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
{{-- <script src="assets/js/widgets.bundle.js"></script> --}}
<script src="{{ asset('js/custom/widgets.js') }}"></script>


<script src="{{ asset('js/custom/chat.js') }}"></script>
<script src="{{ asset('js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('js/custom/modals/users-search.js') }}"></script>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://sortablejs.github.io/Sortable/Sortable.js"></script>
  <script>
    
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    /* const items = document.querySelectorAll('.card__item')
    const columns = document.querySelectorAll('.column') */
    
    const columns = document.querySelectorAll(".board-list");
    
   /*  let idContacto  = document.getElementById('id_contacto').value
    let contact_status_id  = document.getElementById('contact_status_id').value */

    columns.forEach((column) => {
        new Sortable(column, {
            group: "shared",
           handle:'#tarjeta',

            animation: 150,
            ghostClass: "blue-background-class",
            onMove: function (/**Event*/evt, /**Event*/originalEvent) {
              // Example: https://jsbin.com/nawahef/edit?js,output
              evt.dragged; // dragged HTMLElement
              evt.draggedRect; // DOMRect {left, top, right, bottom}
              evt.related; // HTMLElement on which have guided
              evt.relatedRect; // DOMRect
              evt.willInsertAfter; // Boolean that is true if Sortable will insert drag element after target by default
              originalEvent.clientY; // mouse position
              // return false; — for cancel
              // return -1; — insert before target
              // return 1; — insert after target
              // return true; — keep default insertion point based on the direction
              // return void; — keep default insertion point based on the direction
            },
           
            onEnd: function (/**Event*/evt) {
                let itemEl = evt.item;  // dragged HTMLElement
                let to = evt.to;    // target list
                let from = evt.from;  // previous list
                let oldIndex = evt.oldIndex;  // element's old index within old parent
                let newIndex = evt.newIndex;  // element's new index within new parent
                let oldDraggableIndex = evt.oldDraggableIndex; // element's old index within old parent, only counting draggable elements
                let newDraggableIndex = evt.newDraggableIndex; // element's new index within new parent, only counting draggable elements
                let clone = evt.clone // the clone element
                let pullMode =  evt.pullMode;  // when item is in another sortable: `"clone"` if cloning, `true` if moving

                let reference =  to.dataset.reference;

                console.log(reference)

                let selector = `div[data-contact]:not([data-contact="${reference}"])`
               /*  to.querySelectorAll(selector) */
               /* console.log(to.querySelector(selector)) */

               let contacUdate = to.querySelector(selector)

               if(contacUdate){
                  /* contacUdate.dataset.contact = reference; */
                  
                  $.ajax({
                    type: "PUT",
                    url: "{{asset('').'admin/update-status-contact'}}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        reference,
                        id:  contacUdate.dataset.id
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

   


  </script>



</body>
<!--end::Body-->

</html>