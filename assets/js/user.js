// $(document).ready(function() {
//     $("#perangkat_daerah2").show();
//     $("#daftar_dinas").show();

//     daerahLoad();
//     dinasLoad();

//     //function untuk krim surat.....

//     //untuk daerah
//     function daerahLoad() {


//         $("#daerah").change(function() {
//             var ambilDaerah = $("#daerah").val();
//             $.ajax({
//                 type: "POST",
//                 dataType: "JSON",
//                 url: "<?= base_url('application/controllers/User/getDataPerangkat'); ?>",
//                 data: {
//                     daerah: ambilDaerah,
//                 },
//                 success: function(data) {
//                     console.log(data);

//                     var html = "";
//                     var i;
//                     for (i = 0; i < data.length; i++) {
//                         html += '<option selected hidden>Pilih Perangkat</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
//                     }

//                     $("#perangkat_daerah2").html(html);
//                     $("#perangkat_daerah2").show();
//                 }
//             });

//         });
//     };

//     //untuk dinas....
//     function dinasLoad() {

//         $("#perangkat_daerah2").change(function() {
//             var ambilDinas = $("#perangkat_daerah2").val();
//             $.ajax({
//                 type: "POST",
//                 dataType: "JSON",
//                 url: "<?= base_url('application/controllers/User/getDataDinas'); ?>",
//                 data: {
//                     dinas: ambilDinas,
//                 },
//                 success: function(data) {
//                     console.log(data);

//                     var html = "";
//                     var i;
//                     for (i = 0; i < data.length; i++) {
//                         html += '<option selected hidden>Silahkan Pilih Dinas/Badan/Setda</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
//                     }

//                     $("#daftar_dinas").html(html);
//                     $("#daftar_dinas").show();
//                 }
//             });

//         });
//     };

// });


