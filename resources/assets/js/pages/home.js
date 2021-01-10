import 'bootstrap'
import 'select2'
var Home = {
    init : function ()
    {
        this.runLocation()
    },
    runLocation()
    {
        $('.js-example-basic-single').select2({
            tags: true
        });
    }
}

$(function (){
    Home.init()
})
