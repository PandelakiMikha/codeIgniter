const flashData = $('.flash-data').data('falshdata');

if(flashData){
    Swal({
        title: 'Data Surat',
        text: 'Berhasil',
        type: 'success'
    });
}