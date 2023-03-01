
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

    const columns = document.querySelectorAll(".column");

    columns.forEach((column) => {
        new Sortable(column, {
            group: "shared",
            animation: 150,
            ghostClass: "blue-background-class"
        });
       
    });  

  </script>



</body>
<!--end::Body-->

</html>