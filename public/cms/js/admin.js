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
$('#newCategoryProuct').click(function (e) {
    e.preventDefault();
    $('#categoryProduct').find('.message-login').html('')
    var dataForm = new FormData($('form#categoryProduct')[0]);
    $.ajax({
        type:'POST',
        url:'/admin/category-products/create',
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
                console.log($('#categoryProduct').find('.error_' + property));
                $('#categoryProduct').find('.error_' + property).html(errorField[property])
            }
        }
    });
})

function newUser() {
    $('#create_new').on('show.bs.modal',function(){
       $('#usersForm').trigger("reset")
        $('#usersForm').find('.password-hidden').addClass('hidden')
        $('#usersForm').find('input[name="password"]').removeAttr('disabled')
        $('#usersForm').find('input[name="id"]').val('')
        $('#usersForm').find('input[name="current_password"]').removeAttr('disabled')
        $('#usersForm').find("#radio_2").attr('checked', 'checked');
        $('#usersForm').find("#radio_status2").attr('checked', 'checked')
    }).modal('show');

}

function newCategory() {
    $('#create_new').on('show.bs.modal',function(){
        $('#categoryProduct').trigger("reset")
        $('#categoryProduct').find('input[name="id"]').val('')
    }).modal('show');
}
function editCategoryProducts($category) {
    $('#categoryProduct').find('.message-login').html('')
    $('#create_new').on('show.bs.modal',function () {
        $form = $('#categoryProduct');
        $form.find('input[name="id"]').val($category.id)
        $form.find('input[name="name"]').val($category.name)
        $form.find('textarea[name="description"]').val($category.description)
        if($category.status == 1){
            $("#radio_status1").attr('checked', 'checked');
        }else $("#radio_status2").attr('checked', 'checked');
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

$('#changeUrl').keyup(function () {
    let value = $(this).val()
    $(this).val(removeVietnameseTones(value))
})
function removeVietnameseTones(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str = str.replace(/đ/g,"d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
    // Remove extra spaces
    // Bỏ các khoảng trắng liền nhau
    str = str.replace(/ + /g," ");
    str = str.replace(/\s/g, '-');
    str = str.trim();
    // Remove punctuations
    // Bỏ dấu câu, kí tự đặc biệt
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\:|\;|\'|\"|\”|\“|\&|\#|\[|\]|~|\$|_|`|{|}|\||\\/g,"");
    return str;
}
