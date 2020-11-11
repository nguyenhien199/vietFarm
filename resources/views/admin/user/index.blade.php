@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
                <h2>List Users</h2>
            <div>
                <button class="btn btn-primary" onclick="newUser()"> + New user</button>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <td>STT</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Status</td>
                    <td>Created at</td>
                    <td>Action</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($users as $user)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ \App\Services\UsersServices::getRole($user->role) }}</td>
                        <td>{{ \App\Services\UsersServices::getStatus($user->status) }}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <button class="btn btn-warning" onclick="editUser({{$user}})">Edit</button>
                            <a href="{{url('/admin/users/delete', $user->id)}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                       <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $users->fragment('foo')->links() !!}
        </div>
    </div>
    <div class="modal fade" id="create_new" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create New</h4>
                </div>
                <div class="modal-body">
                    <form id="usersForm" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="" />
                        <div class="form-group">
                            <label class="">Name (*)</label>
                            <input title="text" value="" class="form-control" name="name" />
                            <span class="invalid-feedback mt-5 error_name message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Email (*)</label>
                            <input type="email" value="" class="form-control" name="email" />
                            <span class="invalid-feedback mt-5 error_email message-login"></span>
                        </div>
                        <label class="password-hidden hidden"><input type="checkbox" class="checkbox_password" value="1"> Change password</label>
                        <div class="form-group">
                            <label class="">Password (*)</label>
                            <input type="password" value="" class="form-control" name="password" />
                            <span class="invalid-feedback mt-5 error_password message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Current password (*)</label>
                            <input type="password" value="" class="form-control" name="current_password" />
                            <span class="invalid-feedback mt-5 error_current_password message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Quyền hạn (*)</label>
                            <div class="radio">
                                <label class="ml-5"><input type="radio" id="radio_2" value="2" name="role">User</label>
                                <label><input type="radio" id="radio_1" value="1" name="role">Admin</label>
                            </div>
                            <span class="invalid-feedback mt-5 error_role message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Status (*)</label>
                            <div class="radio">
                                <label class="ml-5"><input type="radio" id="radio_status2" value="0" name="status">Not active</label>
                                <label><input type="radio" id="radio_status1" value="1" name="status">Active</label>
                            </div>
                            <span class="invalid-feedback mt-5 error_role message-login"></span>
                        </div>
                        <div class="float-right">
                            <button id="newUser" class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


