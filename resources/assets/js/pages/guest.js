import 'select2'
import 'owl.carousel'
import 'jquery-validation'

var GuestHome = {
    init: function () {
        this.scrollTopLink()
        this.initSelect2ShopName()
        this.processOrderManage()
    },

    scrollTopLink() {
        $(".js-scroll-page").click(function (event) {
            event.preventDefault()
            let $this = $(this)
            let $idBox = $this.attr('data-id')
            $('html, body').animate({
                scrollTop: $($idBox).offset().top - 100
            }, 500);
        })
    },

    initSelect2ShopName() {
        $('.js-example-basic-single').select2({
            tags: true
        });
    },

    processOrderManage() {
        $('#formOrderManage').validate({
            rules: {
                // name_shop: {
                //     required: true,
                // },
                code: {
                    required: true,
                },
            },
            messages: {
                // name_shop: {
                //     required: "Please put your name shop.",
                // },
                code: {
                    required: "Please put your code.",
                }
            },
            submitHandler: function (form) {
                $("#formOrderManage").submit();

                // $.ajax({
                //     url: URL_SEARCH,
                //     method: "POST",
                //     beforeSend: function (xhr) {
                //         $(".js-loading-1").show()
                //     },
                //     data: $('#formOrderManage').serialize(),
                //     success: function (results) {
                //         $("#result-order-manage").html(results)
                //     },
                //     error: function (xhr) {
                //         console.log(xhr)
                //         $(".js-loading-1").hide()
                //     },
                // })
            }
        });
    }
}

$(function () {
    GuestHome.init()
})

