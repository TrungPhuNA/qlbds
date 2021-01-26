import 'bootstrap'
import 'select2'
import 'datatables.net-responsive-bs4'

var Home = {
    init: function () {
        this.runLocation()
        this.processImportData()
        this.runToken()
        this.runDataTable()
    },

    runDataTable() {
        let $table = $(".datatable-lists")
        if ($table.length) {
            $table.DataTable({
                responsive: true,
                select: true
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
