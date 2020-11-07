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

function new_edit($new) {
    console.log($new)
    $('#create_new').on('show.bs.modal', function(){
        $form = $(this).find('#newForm');
        $form.find('input[name="id"]').val($new.id)
        $form.find('input[name="image"]').val($new.image)
        $form.find('input[name="title"]').val($new.title)
        $form.find('input[name="description"]').val($new.description)
        $form.find('textarea[name="content"]').val($new.content)
        if($new.status == 0){
            $("#radio_1").attr('checked', 'checked');
        }else $("#radio_2").attr('checked', 'checked');

    }).modal('show');
}
