$(function(){
    var swiper = new Swiper('.swiper-container.banner', {
        pagination: '.swiper-pagination',
        loop:true,
        paginationClickable: true,
        autoplay : 4500,
    });
    var swipercolumn = new Swiper('.swiper-container.column', {
        pagination: '.swiper-pagination.pag-btn',
        nextButton: '.swiper-button-next.next-btn',
        prevButton: '.swiper-button-prev.prev-btn',
        slidesPerView: 3,
        slidesPerColumn: 2,
        slidesPerGroup : 3,
        paginationClickable: true,
        spaceBetween: 20,
        onlyExternal : true,
    });
    var swipernrow = new Swiper('.swiper-container.nrow', {
        pagination: '.swiper-pagination.nrow-pag-btn',
        nextButton: '.swiper-button-next.nrow-next-btn',
        prevButton: '.swiper-button-prev.nrow-prev-btn',
        slidesPerView: 3,
        slidesPerColumn: 1,
        slidesPerGroup : 3,
        paginationClickable: true,
        spaceBetween: 20,
        onlyExternal : true,
    });
    $('.productbtn').click(function(){
        $('html,body').animate({scrollTop:$('.product').offset().top },500);
    });
    $('.partnerbtn').click(function(){
        $('html,body').animate({scrollTop:$('.partner').offset().top },800);
    });
    $('.contactbtn').click(function(){
        $('html,body').animate({scrollTop:$('.contact').offset().top },800);
    });
    $(".chagelu").mouseover(function(){
        $('.lulist').show();
    });
    $('.chagelu').mouseout(function(){
        $('.lulist').hide();
    })
});
