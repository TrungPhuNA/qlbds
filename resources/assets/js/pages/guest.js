var GuestHome = {
    init : function (){
        this.scrollTopLink()
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
    }
}

$(function (){
    GuestHome.init()
})

