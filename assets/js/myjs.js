const flashData = $('.flash-data').data('falshdata');

if(flashData){
    Swal({
        title: 'Data Surat',
        text: 'Berhasil',
        type: 'success'
    });
}

// untuk get data surat yang di kirimkan dari admin ke user

// var table;
// $(document).ready(function() {
//     //data tables
//     table = $('#surat_masuk_user').DataTable({
//         "processing": true,
//         "serverSide": true,
//         "order": [],
//         "ajax": {
//             "url": "<?= base_url('User/getData'); ?>",
//             "type": "POST",
//             "data": function(data) {
//                 data.daerah = $("#daerah").val();
//             },
//         },
//         "columnDefs": [{
//             "target": [-1],
//             "orderable": false,
//             "searchable": false,
//             "render": function(data, type, row) {
//                 var btn = '<div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail"><i class="bi bi-file-earmark-text"></i>Detail</button></div></div>';
//                 return btn;
//             }
//         }]
//     });

//     loadPerangkatDaerah();
// });

