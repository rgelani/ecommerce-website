
$('body').on('click', '.deleteRecord', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    var title = 'Are you sure ?';
    var msg = '';
    var datatableid = 'datatable';

    if ($(this).attr('message') != undefined && $(this).attr('message') != '') {
        msg = $(this).attr('message');
    } else {
        deleteRecord(href, datatableid);
    }

    if ($(this).attr('datatableId') != undefined && $(this).attr('datatableId') != '') {
        datatableid = $(this).attr('datatableId');
    }

    if ($(this).attr('msgTitle') != undefined && $(this).attr('msgTitle') != '') {
        title = $(this).attr('msgTitle');
    }
    var delete_flag = 'relation';
    var return_type = deleteRecord(href, datatableid,delete_flag);

    if(return_type.data != undefined && return_type.data != '' && return_type.data != 'false'){
        delete_flag = 'delete';
        if (msg != '') {
            Swal.fire({
                title: title,
                text: msg,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteRecord(href, datatableid,delete_flag);
                }
            });
        }
    }
});

function deleteRecord(url, datatableid, delete_flag = '')
{
    res = '';
    $.ajax({
        url: url,
        type: "GET",
        async:false,
        data: {delete_flag:delete_flag},
		global: false,
        success: function (data) {
            res = data;
            if(data.data == 'false'){
                Swal.fire(
                  "Alert",
                  data.message,
                  "warning",
                );
            }
            $('#' + datatableid).DataTable().ajax.reload();
        },
        error: function () {
            $('#' + datatableid).DataTable().ajax.reload();
        },
    });
    return res;
}