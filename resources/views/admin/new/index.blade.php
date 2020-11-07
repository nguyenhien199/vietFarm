@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end">
                <h2>List News</h2>
            <div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#create_new"> + New</button>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <td>STT</td>
                    <td>Title</td>
                    <td>Image</td>
                    <td>Description</td>
                    <td>Status</td>
                    <td>Action</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($news as $new)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$new->title}}</td>
                        <td><img width="150" src="{{$new->image}}" /></td>
                        <td>{{$new->description}}</td>
                        <td>{{$new->status}}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                       <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
                    <form id="newForm" action="" method="POST">
                        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                        <div class="float-right">
                            <button id="save_new" class="btn btn-success" type="reset">Save</button>
                            <button class="btn btn-white">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


