@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>QUẢN LÝ TÀI KHOẢN</h2>
        </div>
    </div>
    <div class="body col-md-6">
        <form action="{{url('admin/setting')}}" method="POST">
            @csrf
            <div class="header">
                <h3>Thông tin cá nhân</h3>
            </div>
            <div class="content">
                <div class="form-group">
                    <label for="">Họ và tên (*)</label>
                    <input class="form-control" name="name" value="{{\Auth::user()->name}}"/>
                    @if($errors->has('name'))
                        <span class="error message-login">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" value="{{\Auth::user()->email}}" disabled/>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input class="form-control" name="address" value="{{\Auth::user()->address}}"/>
                </div>
            </div>
            <div class="header">
                <h3>Đổi mật khẩu</h3>
            </div>
            <div class="content">
                <div class="form-group">
                    <label for="">Mật khẩu cũ (*)</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu mới (*)</label>
                    <input type="password" name="newPassword" class="form-control"/>
                </div>
            </div>
            <div class="fotter">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
