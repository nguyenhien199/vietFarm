$('#save_new').click(function (e) {
    e.preventDefault();
    var dataForm = new FormData($('form#newForm')[0]);
    $.ajax({
        type:'POST',
        url:'/admin/new/create',
        processData: false,
        contentType: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: dataForm,
        success:function(data){
            if(data.status === 'success'){
                location.reload();
            }
        }
    });
})

function change_file(event) {
    if ($(event).val() == undefined || $(event).val() == '')
    {
        return false;
    }
    var filename = $(event).val().split('\\').pop();
    $(event).parents('.file-control').find('.removeFile').val(0);
    $(event).parents('.file-control').find('.form-control').val(filename);
}

function removeImage(event) {
    $(event).parents('.file-control').find('.form-control').val('');
    $(event).find('.removeFile').val(1);
}

if ($('#editor').length == 1)
{
    CKEDITOR.replace("editor");
}
