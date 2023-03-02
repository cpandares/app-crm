
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-zYXldzJsDrNKV+odAwFYiDXV2Cy37cwizT+NkuiPGsa9X1dOz04eHvUWVuxaJ299GvcJT31ug2zO4itXBjFx4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    
    /* const items = document.querySelectorAll('.card__item')
    const columns = document.querySelectorAll('.column') */
    
    const columns = document.querySelectorAll("#column_nuevos");
    const columns_nego = document.querySelectorAll("#column_nego");
    const column_presu = document.querySelectorAll("#column_presu");
    const column_cli = document.querySelectorAll("#column_cli");
   /*  let idContacto  = document.getElementById('id_contacto').value
    let contact_status_id  = document.getElementById('contact_status_id').value */

    columns.forEach((column) => {
        new Sortable(column, {
            group: "shared",
           
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

                console.log( to )
            }
        });
       
    });  

    columns_nego.forEach((column) => {
        new Sortable(column, {
            group: "shared",
           
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

                console.log( to )
            }
        });
       
    });  

    column_presu.forEach((column) => {
        new Sortable(column, {
            group: "shared",
           
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

                console.log( to )
            }
        });

        
       
    });

    column_cli.forEach((column) => {
        new Sortable(column, {
            group: "shared",
           
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

                console.log( to )
            }
        });

        
       
    });


  </script>



</body>
<!--end::Body-->

</html>