import 'select2'
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
    }
}

$(function (){
    GuestHome.init()
})

