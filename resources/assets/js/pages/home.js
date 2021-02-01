import 'bootstrap'
import 'select2'
import 'datatables.net-responsive-bs4'

var Home = {
    init: function () {
        this.runLocation()
        this.processImportData()
        this.runToken()
        // this.runDataTable()
    },

    runDataTable() {
        let $table = $(".datatable-lists")
        if ($table.length) {
            $table.DataTable({
                responsive: true,
                select: true,
                bSort: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "http://hethongql.local/order-manage",
                    type: "GET"
                },
                columns: [
                    { data: 'om_name',name : 'om_name' },
                    { data: 'om_phone', name : 'om_phone' },
                    { data: 'om_receiver_address', name : 'om_receiver_address' },
                    { data: 'om_receiver_province_address', name : 'om_receiver_province_address' },
                ]
            });
        }
    },
    processImportData() {
        $(".js-process-import").click(function (event) {
            event.preventDefault()
            let $this = $(this)
            $(".text-strong").remove()
            let URL = $("#formData").attr('action')
            $.ajax({
                url: URL,
                method: "POST",
                data: $('#formData').serialize(),
                success: function (results) {
                    console.log(results)
                    return false
                },
                error: function (xhr) {

                },
            })
        })
    },
    runToken() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },
    runLocation() {
        $('.js-example-basic-single').select2({
            tags: true
        });
    }
}

$(function () {
    Home.init()
})
