import 'select2'
import 'owl.carousel'

var GuestHome = {
    init : function (){
        this.scrollTopLink()
        this.initSelect2ShopName()
    },

    scrollTopLink()
    {
        $(".js-scroll-page").click( function (event){
            event.preventDefault()
            let $this = $(this)
            let $idBox = $this.attr('data-id')
            $('html, body').animate({
                scrollTop: $($idBox).offset().top  - 100
            }, 500);
        })
    },

    initSelect2ShopName() {
        $('.js-example-basic-single').select2({
            tags: true
        });
    },

    runPartner()
    {
        $('#init-partner .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            navContainer: '#js-owl-feature-job-button',
            navClass: [ 'owl-style-buttons__btn owl-style-buttons__btn--prev', 'owl-style-buttons__btn owl-style-buttons__btn--next' ],
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            },
            autoplay:false,
            autoplayTimeout:4000,
            autoplayHoverPause:false
        });
    }
}

$(function (){
    GuestHome.init()
})

