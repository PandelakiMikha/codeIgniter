</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- jquery-3.2.1 for filter -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- select bertingkat -->
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        $("#perangkat_daerah").hide();

        //data tables
        table = $('#dispo').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('ServerSideTables/getData'); ?>",
                "type": "POST",
                "data": function(data) {
                    // var perda;
                    data.daerah = $("#daerah").val();
                    // perda = data.perangkat_daerah;
                    // console.log('perda', perda);
                },
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false,
                "searchable": false,
                "render": function(data, type, row) {
                    var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover"><i class="bi bi-eye"></i>Lihat</button></div><div class="middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-check-circle"></i>Disposisi</button></div><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                    return btn;
                }
            }]
        });
        loadPerangkatDaerah();
    });
    $(document).ready(function() {
        $("#perangkat_daerah2").show();
        $("#daftar_dinas").show();

        daerahLoad();
        dinasLoad();
    });


    function loadPerangkatDaerah() {
        // for get data for filter
        $("#daerah").change(function() {
            var getDaerah = $("#daerah").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url('ServerSideTables/getDataPerangkatDaerah'); ?>",
                data: {
                    daerah: getDaerah,
                },
                success: function(data) {
                    console.log('data', data);

                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option selected hidden>Pilih Perangkat Daerah</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }

                    $("#perangkat_daerah").html(html);
                    $("#perangkat_daerah").show();
                }
            });

        });
    }

    //function untuk krim surat.....

    //untuk daerah
    function daerahLoad() {


        $("#daerah").change(function() {
            var ambilDaerah = $("#daerah").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url('User/getDataPerangkat'); ?>",
                data: {
                    daerah: ambilDaerah,
                },
                success: function(data) {
                    console.log(data);

                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option selected hidden>Pilih Perangkat</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }

                    $("#perangkat_daerah2").html(html);
                    $("#perangkat_daerah2").show();
                }
            });

        });
    };

    //untuk dinas....
    function dinasLoad() {

        $("#perangkat_daerah2").change(function() {
            var ambilDinas = $("#perangkat_daerah2").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url('User/getDataDinas'); ?>",
                data: {
                    dinas: ambilDinas,
                },
                success: function(data) {
                    console.log(data);

                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }

                    $("#daftar_dinas").html(html);
                    $("#daftar_dinas").show();
                }
            });

        });
    };
    // -------------------------------------------------
    //untuk table....
    function tabels() {
        var perangkatDaerah = $("#perangkat_daerah").val();
        console.log('val', perangkatDaerah);
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('ServerSideTables/getData'); ?>",
                // data: {
                //     daerah: getDaerah,
                //     perangkatDaerah: getPerangkatDaerah
                // },
                "type": "POST"
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false,
                "searchable": false,
                "render": function(data, type, row) {
                    var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover"><i class="bi bi-eye"></i>Lihat</button></div><div class="middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-check-circle"></i>Disposisi</button></div><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                    return btn;
                }
            }]
        })
        $('#btn-filter').click(function() { //button filter event click
            table.ajax.reload(); //just reload table
        });
        $('#btn-reset').click(function() { //button reset event click
            $('#form-filter')[0].reset();
            table.ajax.reload(); //just reload table
        });


    }
</script>

<script>
    var table;
    $(document).ready(function() {
        //data tables
        table = $('#surat_masuk').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('Surat_masuk/getData'); ?>",
                "type": "POST",
                "data": function(data) {
                    // var perda;
                    data.daerah = $("#daerah").val();
                    // perda = data.perangkat_daerah;
                    // console.log('perda', perda);
                },
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false,
                "searchable": false,
                // "render": function(data, type, row) {
                //     var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover"><i class="bi bi-eye"></i>Lihattt</button></div><div class="middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-check-circle"></i>Disposisi</button></div><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                //     return btn;
                // }
            }]
        });
    });
</script>

<!-- Data Tables Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>

</script>

<script>
    $("table thead tr th").addClass("align-middle");
    $("table tbody").addClass("align-middle");
</script>

<!-- Enable Popover -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</body>

</html>