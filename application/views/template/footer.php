        

</div>
<!-- LINK COM BOOTSTRAP QUE ESTA NA PASTA ASSETS -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>" crossorigin="anonymous"></script>

<!-- LINK COM DATATABLES QUE ESTA NA WEB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.4/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sb-1.3.1/sp-1.4.0/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#lista').DataTable({

      dom: 'Bfrtip',

      buttons: [

        'pdf',

        'excel',

        'print'

      ]

    });
        
    });


    $(document).ready(function () {
        $('#lista2').DataTable({

      dom: 'Bfrtip',

      buttons: [

        'pdf',

        'excel',

        'print'

      ]

    });
        
    });
    
        $(document).ready(function () {
        $('#lista3').DataTable({

      dom: 'Bfrtip',

      buttons: [

        'pdf',

        'excel',

        'print'

      ]

    });
        
    });
    
        $(document).ready(function () {
        $('#lista4').DataTable({

      dom: 'Bfrtip',

      buttons: [

        'pdf',

        'excel',

        'print'

      ]

    });
        
    });
</script>
</body>
</html>