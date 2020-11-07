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
