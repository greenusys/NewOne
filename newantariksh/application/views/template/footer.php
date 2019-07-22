

<script>
        $(document).ready(function() { 
           
            $(".states").select2({
                    placeholder: "Select a State",
                    allowClear: true
             }); 

            // $(document).on("change","#states",function(){
            //     alert($(this).val());
            // })


        });
</script>


<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#file_export thead tr').clone(true).appendTo( '#file_export thead' );
    $('#file_export thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text"  />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#file_export').DataTable( {
         retrieve: true,
        orderCellsTop: true,
        fixedHeader: true,

    } );
} );

</script> 
<script>
       $(document).ready(function(){
            $("#create_sub").submit(function(e){
                e.preventDefault();
                var formData= new FormData($(this)[0]);
                $.ajax({
                    url:"CreateRadius",
                     type:"post",
                     data:formData,
                     contentType:false,
                     processData:false,
                     cache:false,

                    success:function(response)
                    {
                        alert(response);
                        //location.reload();
                    }
                });
            });
        });
    </script>
   <script type="text/javascript" src="<?=base_url('assets/js/select2.js')?>"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:20:53 GMT -->
</html>