$('#newUser').click(function (e) {
    e.preventDefault();
    $('#usersForm').find('.message-login').html('')
    var dataForm = new FormData($('form#usersForm')[0]);
    $.ajax({
        type:'POST',
        url:'/admin/users/create',
        processData: false,
        contentType: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: dataForm,
        success:function(data){
            console.log(data);
            if(data.status === '200'){
                location.reload();
            }
        },
        error: function (error)
        {
            var errorField = error.responseJSON.errors;
            for(const property in errorField){
                console.log(errorField[property]);
                console.log($('#usersForm').find('.error_' + property));
                $('#usersForm').find('.error_' + property).html(errorField[property])
            }
        }
    });
})
function newUser() {
    $('#create_new').on('show.bs.modal',function(){
       $('#usersForm').trigger("reset")
        $('#usersForm').find('.password-hidden').addClass('hidden')
        $('#usersForm').find('input[name="password"]').removeAttr('disabled')
        $('#usersForm').find('input[name="current_password"]').removeAttr('disabled')
        $('#usersForm').find("#radio_2").attr('checked', 'checked');
        $('#usersForm').find("#radio_status2").attr('checked', 'checked')
    }).modal('show');

}
function editUser($user) {
    $('#usersForm').find('.message-login').html('')
    $('#create_new').on('show.bs.modal', function(){
        $form = $('#usersForm');
        $form.find('input[name="password"]').attr('disabled', 'disabled')
        $form.find('.password-hidden').removeClass('hidden')
        $form.find('input[name="current_password"]').attr('disabled', 'disabled')
        $form.find('input[name="id"]').val($user.id)
        $form.find('input[name="name"]').val($user.name)
        $form.find('input[name="email"]').val($user.email)
        if($user.role == 1){
            $("#radio_1").attr('checked', 'checked');
        }else $("#radio_2").attr('checked', 'checked');
        if($user.status == 1){
            $("#radio_status1").attr('checked', 'checked');
        }else $("#radio_status2").attr('checked', 'checked');
    }).modal('show');
}
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
$('.checkbox_password').change(function () {
    if(this.checked){
        $(this).parents('#usersForm').find('input[name="password"]').removeAttr('disabled')
        $(this).parents('#usersForm').find('input[name="current_password"]').removeAttr('disabled')
    }else {
        $(this).parents('#usersForm').find('input[name="password"]').attr('disabled', 'disabled')
        $(this).parents('#usersForm').find('input[name="current_password"]').attr('disabled', 'disabled')
    }
})
