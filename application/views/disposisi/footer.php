<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function() {
    //     $('`#example`').DataTable({
    //         'serverSide': true,
    //         'processing': true,
    //         'order': [],
    //         'ajax': {
    //             'url': 'fetch_data.php',
    //             'type': 'post'
    //         },
    //         fnCreateRow: function(nRow, aData, iDataIndex) {
    //             $(nRow).attr('id', aData[0])
    //         },
    //         'columnDefs': [{
    //             'target': [0, 5],
    //             'orderable': false
    //         }]
    //     });
    // });

    $(document).ready(function() {
        $('#table-dispo').DataTable({
                order: [
                    [2, 'asc']
                ],
            }
            // {
            //     "createdRow": function(row, data, dataIndex){
            //         if(){

            //         }
            //     }
            // }
        );
    });
</script>
</body>

</html>