$('.nav-link').on('click', function(e){
    var tujuan = $(this).after('href');
    var elemenTujuan = $(tujuan);

    $('body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    });
    e.preventDefault();
});