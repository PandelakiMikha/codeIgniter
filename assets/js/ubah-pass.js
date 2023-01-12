$(document).ready(function () {
    $('.bi-chevron-down').click(function () {
        $('.bi-chevron-down').toggleClass('bi bi-chevron-down bi-chevron-up');

        $('.daftar-user').addClass('active');
        console.log('halllloo')
    })
})