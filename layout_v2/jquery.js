$(document).ready(function() {
    //activeclass chi_tiet_thuc_uong
    $('.khung').click(function() {
        $('.gray').addClass("active_gray");
        $('.chitiet__thuc_uong').addClass("active_chitiet__thuc_uong");
    })

    //removeclass chi_tiet_thuc_uong
    $('#themvao').click(function() {
        $('.chitiet__thuc_uong').removeClass("active_chitiet__thuc_uong");
        $('.gray').removeClass("active_gray");
    })

    $('#thoat_chi_tiet').click(function() {
        $('.chitiet__thuc_uong').removeClass("active_chitiet__thuc_uong");
        $('.gray').removeClass("active_gray");
    })

    //activeclass và removeClass don_gia
    var kt = 0;
    $('.don_gia').click(function() {

        if (kt % 2 == 0) //active
        {
            $('.don_gia').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia').removeClass("don_gia_active");
        }
        kt++;
    })
    var t = 0
    $('.don_gia_1').click(function() {
        if (t % 2 == 0) //active
        {
            $('.don_gia_1').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia_1').removeClass("don_gia_active");
        }
        t++;
    })

    var k = 0
    $('.don_gia_2').click(function() {
        if (k % 2 == 0) //active
        {
            $('.don_gia_2').addClass("don_gia_active");
        } else //remove
        {
            $('.don_gia_2').removeClass("don_gia_active");
        }
        k++;
    })


});