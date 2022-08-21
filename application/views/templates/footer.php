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
                    var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat"><i class="bi bi-eye"></i>Lihat Log</button></div><div class="middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispoKTU"><i class="bi bi-check-circle"></i>Disposisi</button></div><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                    return btn;
                }
            }]
        });
        loadPerangkatDaerah();
    });

    var table;
    $(document).ready(function() {
        $("#perangkat_daerah").hide();

        //data tables
        table = $('#lampiranArsip').DataTable({
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
                    var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat"><i class="bi bi-eye"></i>Lihat Log</button></div><div class="cuss-detail"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                    return btn;
                }
            }]
        });
        loadPerangkatDaerah();
    });


    //function load krim surat.....
    // $(document).ready(function() {
    //     $("#perangkat_daerah2").show();
    //     $("#daftar_dinas").hide();

    //     daerahLoad();
    //     dinasLoad();
    // });

    function loadDaerah() {
        $("#perangkat_daerah").change(function() {
            var getPerangkatDaerah = $("#perangkat_daerah").val();
            // console.log(getPerangkatDaerah);
            tabels();
        });
        //function load krim surat.....
        $(document).ready(function() {
            $("#perangkat_daerah2").show();
            $("#daftar_dinas").hide();

            daerahLoad();
            dinasLoad();
        });
    }



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

    // //function untuk krim surat.....

    // //untuk daerah
    // function daerahLoad() {


    //     $("#daerah").change(function() {
    //         var ambilDaerah = $("#daerah").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataPerangkat'); ?>",
    //             data: {
    //                 daerah: ambilDaerah,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Pilih Perangkat</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#perangkat_daerah2").html(html);
    //                 $("#perangkat_daerah2").show();
    //             }
    //         });

    //     });
    // };


    //untuk dinas....
    // function dinasLoad() {

    //     $("#perangkat_daerah2").change(function() {
    //         var ambilDinas = $("#perangkat_daerah2").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataDinas'); ?>",
    //             data: {
    //                 dinas: ambilDinas,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#daftar_dinas").html(html);
    //                 $("#daftar_dinas").show();
    //             }
    //         });

    //     });
    // };

    //untuk dinas....
    // function dinasLoad() {

    //     $("#perangkat_daerah2").change(function() {
    //         var ambilDinas = $("#perangkat_daerah2").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataDinas'); ?>",
    //             data: {
    //                 dinas: ambilDinas,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#daftar_dinas").html(html);
    //                 $("#daftar_dinas").show();
    //             }
    //         });

    //     });
    // };

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
                    var btn = '<div class="cuss"><div><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat"><i class="bi bi-eye"></i>Lihat Log</button></div><div class="middle"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispo"><i class="bi bi-check-circle"></i>Disposisi</button></div><div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
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

<script type="text/javascript">
    //function load krim surat.....
    // $(document).ready(function() {
    //     $("#perangkat_daerah2").show();
    //     $("#daftar_dinas").hide();

    //     daerahLoad();
    //     dinasLoad();
    // });

    function loadDaerah() {
        $("#perangkat_daerah").change(function() {
            var getPerangkatDaerah = $("#perangkat_daerah").val();
            // console.log(getPerangkatDaerah);
            tabels();
        });
        //function load krim surat.....
        $(document).ready(function() {
            $("#perangkat_daerah2").show();
            $("#daftar_dinas").hide();

            daerahLoad();
            dinasLoad();
        });
    }



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

    // //function untuk krim surat.....

    // //untuk daerah
    // function daerahLoad() {


    //     $("#daerah").change(function() {
    //         var ambilDaerah = $("#daerah").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataPerangkat'); ?>",
    //             data: {
    //                 daerah: ambilDaerah,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Pilih Perangkat</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#perangkat_daerah2").html(html);
    //                 $("#perangkat_daerah2").show();
    //             }
    //         });

    //     });
    // };


    //untuk dinas....
    // function dinasLoad() {

    //     $("#perangkat_daerah2").change(function() {
    //         var ambilDinas = $("#perangkat_daerah2").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataDinas'); ?>",
    //             data: {
    //                 dinas: ambilDinas,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#daftar_dinas").html(html);
    //                 $("#daftar_dinas").show();
    //             }
    //         });

    //     });
    // };

    //untuk dinas....
    // function dinasLoad() {

    //     $("#perangkat_daerah2").change(function() {
    //         var ambilDinas = $("#perangkat_daerah2").val();
    //         $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?= base_url('User/getDataDinas'); ?>",
    //             data: {
    //                 dinas: ambilDinas,
    //             },
    //             success: function(data) {
    //                 console.log(data);

    //                 var html = "";
    //                 var i;
    //                 for (i = 0; i < data.length; i++) {
    //                     html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
    //                 }

    //                 $("#daftar_dinas").html(html);
    //                 $("#daftar_dinas").show();
    //             }
    //         });

    //     });
    // };

    // -------------------------------------------------
    //untuk table....
</script>

<!-- ------------------------------------- -->
<!-- scirpt untuk surat_masuk_user -->
<script>
    var table;
    $(document).ready(function() {
        //data tables
        table = $('#surat_masuk_user').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('User/getData'); ?>",
                "type": "POST",

            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false,
                "searchable": false,
                "render": function(type, row) {
                    var btn = '<div><button id="download" type="button" class="btn btn-primary"><i class="bi bi-download"></i>Download File</button></div></div>';
                    return btn;

                }
            }]
        });
    });
</script>
<!-- ------------------------------------- -->

<!-- script untuk surat keluar user -->
<!-- <script>
    var $tablee;
    $(document).ready(function() {
        //data tables
        tablee = $('#surat_kel_user').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('User/getDataKel'); ?>",
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
                    var btn = '<div><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
                    return btn;
                }
            }]
        });
    });
</script> -->
<!-- ------------------------------ -->

<!-- Data Tables Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/user.js">
</script>
<!-- sweetalert2 -->
<script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<!-- my script -->
<script src="<?= base_url('assets/') ?>js/myjs.js"></script>

<!-- jquery script for sidebar_user -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script>
    // untuk mendisablekan form lainya ketika user mengklik form jenis surat..
    $('#jenis_surat').change(function() {
        $('#lainya').prop('disabled', true);
        if ($(this).val() == 'car') {
            $('#lainya').prop('disabled', false);
        }
    });
</script>



<script>
    //untuk mendisablekan form jenis surat ketika user menaruh input pada fort lainya..
    $('#lainya').change(function() {
        $('#jenis_surat').prop('disabled', true);
        if ($(this).val() == 'car') {
            $('#jenis_surat').prop('disabled', false);
        }
    });
</script>

<!-- end of jquery script -->

<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- end of sweet alert -->
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
    // <!-- jquery script for sidebar_user -->
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> -->
<script>
    // untuk mendisablekan form lainya ketika user mengklik form jenis surat..
    $('#jenis_surat').change(function() {
        $('#lainya').prop('disabled', true);
        if ($(this).val() == 'car') {
            $('#lainya').prop('disabled', false);
        }
    });
</script>

<script>
    //untuk mendisablekan form jenis surat ketika user menaruh input pada fort lainya..
    $('#lainya').change(function() {
        $('#jenis_surat').prop('disabled', true);
        if ($(this).val() == 'car') {
            $('#jenis_surat').prop('disabled', false);
        }
    });
</script>

<!-- script untuk menampilkan detail pada modal yang ada di U_table_srutaMasuk.. -->
<!-- <script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var Jenissurat = $(this).data('Jenissurat');
            var Noagenda = $(this).data('Noagenda');
            var Namafile = $(this).data('Namafile');
            var Perihal = $(this).data('Perihal');

            $("#modal-detail, #Jenis_surat").text(Jenissurat);
            $("#modal-detail, #No_agenda").text(Noagenda);
            $("#modal-detail, #Nama_file").text(Namafile);
            $("#modal-detail, #Perihal").text(Perihal);

            // $("#modal-detail #Jenis_surat").val(Jenissurat);
            // $("#modal-detail #No_agenda").val(Noagenda);
            // $("#modal-detail #Nama_file").val(Namafile);
            // $("#modal-detail #Perihal").val(Perihal);

            // $('#Jenis_surat').text(Jenissurat);
            // $('#No_agenda').text(Noagenda);
            // $('#Nama_file').text(Namafile);
            // $('#Perihal').text(Perihal);
        })
    })
</script> -->

<!-- script untuk membuat modal yang ada di sidebar user tetap timbul walaupun ada actio yang di lakukan -->
<script>
    $(function() {
        $('#exampleModal').modal({
            backdrop: false,
            keyboard: false
        });
        $('#exampleModal').modal('show');
    });
</script>

<!-- end of jquery script -->

<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // letting css, html to be loaded first before execute the function
    $(document).ready(function() {
        // condition if btn-show-sweetalert2 cliced
        $("#btn-submit").click(function() {
            // show the sweetalert after btn clicked
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
            )
        });
    });

    // $('#btn-submit').submit(function(e, params) {
    //     var localParams = params || {};

    //     if (!localParams.send) {
    //         e.preventDefault();
    //     }

    //     //additional input validations can be done hear

    //     swal({
    //         title: "Confirm Entry",
    //         text: "Are you sure all entries are correct",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#6A9944",
    //         confirmButtonText: "Confirm",
    //         cancelButtonText: "Cancel",
    //         closeOnConfirm: true
    //     }, function(isConfirm) {
    //         if (isConfirm) {
    //             $(e.currentTarget).trigger(e.type, {
    //                 'send': true
    //             });
    //         } else {

    //             //additional run on cancel  functions can be done hear

    //         }
    //     });
    // });

    // $('#btn-submit').on('click', function(e) {
    //     e.preventDefault();
    //     var form = $(this).parents('form');
    //     swal({
    //         title: "Are you sure?",
    //         text: "You will not be able to recover this imaginary file!",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#DD6B55",
    //         confirmButtonText: "Yes, delete it!",
    //         closeOnConfirm: false
    //     }, function(isConfirm) {
    //         if (isConfirm) form.submit();
    //     });
    // });
</script>


<!-- end of sweet alert -->
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


<script>
    const menu = document.getElementById('menu-label');
    const sidebar = document.getElementsByClassName('sidebarr')[0];
    const dropdown = document.getElementsByClassName('dropdown')[0];

    menu.addEventListener('click', function() {
        sidebar.classList.toggle('hide');
        dropdown.classList.toggle('dropend');
        console.log('ok');
    })
</script>

<!-- <script>
    $("#pesan").hide();
    const side = document.getElementById('surma');
    console.log('side', side);

    side.addEventListener('click', function(e) {
        console.log('e', e);
        $("#pesan").show();
    })
</script> -->
<!-- surat masuk baru ando -->
<script>
    $(document).ready(function() {
        $('#surat').DataTable();
    });
</script>


<!-- dispo ktu 1 ando -->
<script type="text/javascript">
    $(document).ready(function() {

        var push_dispo_ktu = $('#push_dispo_ktu');
        var push_dispo_ktu1 = $('#push_dispo_ktu1');

        // dispo ktu pertama
        push_dispo_ktu.submit(function(e) {

            e.preventDefault();

            $.ajax({

                type: push_dispo_ktu.attr('method'),
                url: push_dispo_ktu.attr('action'),
                data: push_dispo_ktu.serialize(),
                success: function(data) {
                    if (data.status = true) {

                        location.reload();

                    } else if (data.status = false) {

                        location.reload();

                    };

                },
                error: function() {

                    alert('Terjadi Mistake!')

                }

            })

        });

        jQuery(document).on("click", "#pushDispoKtu", function() {

            var idnya = $(this).data("idnya");

            var basee = window.base_url = <?php echo json_encode(base_url('Ktu/')); ?> + 'dispoKTU';

            $('#modalKtu').modal('show');

            jQuery.ajax({

                type: "POST",
                dataType: "json",
                url: basee,
                data: {
                    idnya: idnya
                }

            }).done(function(data) {

                if (data.status = false) {
                    alert('Gagal memuat data!');
                };
                $("#dKtu_id").val(data.id);

            })

        });


        // dispo ktu kedua
        push_dispo_ktu1.submit(function(e) {

            e.preventDefault();

            $.ajax({

                type: push_dispo_ktu1.attr('method'),
                url: push_dispo_ktu1.attr('action'),
                data: push_dispo_ktu1.serialize(),
                success: function(data) {
                    if (data.status = true) {

                        location.reload();

                    } else if (data.status = false) {

                        location.reload();

                    };

                },
                error: function() {

                    alert('Terjadi Mistake!')

                }

            })

        });

        jQuery(document).on("click", "#pushDispoKtu1", function() {

            var idnya = $(this).data("idnya");

            var basee = window.base_url = <?php echo json_encode(base_url('Ktu/')); ?> + 'dispoKtu1';

            $('#modalKtu1').modal('show');

            jQuery.ajax({

                type: "POST",
                dataType: "json",
                url: basee,
                data: {
                    idnya: idnya
                }

            }).done(function(data) {

                if (data.status = false) {
                    alert('Gagal memuat data!');
                };
                $("#dKtu1_id").val(data.id);

            })

        });
    });
</script>

<!-- dispo karo ando -->
<script type="text/javascript">
    $(document).ready(function() {

        var push_dispo_karo = $('#push_dispo_karo');

        push_dispo_karo.submit(function(e) {

            e.preventDefault();

            $.ajax({

                type: push_dispo_karo.attr('method'),
                url: push_dispo_karo.attr('action'),
                data: push_dispo_karo.serialize(),
                success: function(data) {
                    if (data.status = true) {

                        location.reload();

                    } else if (data.status = false) {

                        location.reload();

                    };

                },
                error: function() {

                    alert('Terjadi Mistake!')

                }

            })

        });

        jQuery(document).on("click", "#pushDispoKaro", function() {

            var idnya = $(this).data("idnya");

            var basee = window.base_url = <?php echo json_encode(base_url('Karoo/')); ?> + 'dispoKaro';

            $('#modalKaro').modal('show');

            jQuery.ajax({

                type: "POST",
                dataType: "json",
                url: basee,
                data: {
                    idnya: idnya
                }

            }).done(function(data) {

                if (data.status = false) {
                    alert('Gagal memuat data!');
                };
                $("#dKaro_id").val(data.id);

            })

        });
    });
</script>

<!-- dispo kabag ando -->
<script type="text/javascript">
    $(document).ready(function() {

        var push_dispo_kabag = $('#push_dispo_kabag');

        push_dispo_kabag.submit(function(e) {

            e.preventDefault();

            $.ajax({

                type: push_dispo_kabag.attr('method'),
                url: push_dispo_kabag.attr('action'),
                data: push_dispo_kabag.serialize(),
                success: function(data) {
                    if (data.status = true) {

                        location.reload();

                    } else if (data.status = false) {

                        location.reload();

                    };

                },
                error: function() {

                    alert('Terjadi Mistake!')

                }

            })

        });

        jQuery(document).on("click", "#pushDispoKabag", function() {

            var idnya = $(this).data("idnya");

            var basee = window.base_url = <?php echo json_encode(base_url('Kabag/')); ?> + 'dispoKabag';

            $('#modalKabag').modal('show');

            jQuery.ajax({

                type: "POST",
                dataType: "json",
                url: basee,
                data: {
                    idnya: idnya
                }

            }).done(function(data) {

                if (data.status = false) {
                    alert('Gagal memuat data!');
                };
                $("#dKabag_id").val(data.id);

            })

        });
    });
</script>

</body>

</html>