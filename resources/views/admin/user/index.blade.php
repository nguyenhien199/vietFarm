@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
                <h2>List Users</h2>
            <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#create_new"> + New</button>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <td>STT</td>
                    <td>Name</td>
                    <td>email</td>
                    <td>Role</td>
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
                        <td>{{$user->role}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="{{url('/admin/news/edit', $user->id)}}"><button class="btn btn-warning">Edit</button></a>
                            <a href="{{url('/admin/news/delete', $user->id)}}"><button class="btn btn-danger">Delete</button></a>
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
                    <form id="newForm" action="{{url('/admin/news/create')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="" />
                        <div class="form-group">
                            <label class="">Tittle (*)</label>
                            <input value="" class="form-control" name="title" />
                        </div>
                        <div class="form-group">
                            <label class="">image</label>
                            <input value="" class="form-control" name="image" />
                        </div>
                        <div class="form-group">
                            <label class="">Description (*)</label>
                            <input value="" class="form-control" name="description" />
                        </div>
                        <div class="form-group">
                            <label class="">Content (*)</label>
                            <textarea value="" class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="">status (*)</label>
                            <div class="radio">
                                <label><input type="radio" id="radio_1" value="0" name="status">Disable</label>
                                <label class="ml-5"><input type="radio" id="radio_2" value="1" name="status">Enable</label>
                            </div>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-success" type="submit">Save</button>
                            <button class="btn btn-white" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


