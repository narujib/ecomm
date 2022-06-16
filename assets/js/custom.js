$(document).ready(function () {
    //sembunyikan item
    $('.product-wrap .product-item').hide();

    //menampilkan data pertama
    $('.product-wrap').children('.product-item:lt(8)').show();

    //tombol
    $('.load-more').click(function () {
        $('.product-wrap').children('.product-item:hidden:lt(4)').show();
    });
});