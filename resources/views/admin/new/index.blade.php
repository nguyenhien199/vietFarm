@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
                <h2>List News</h2>
            <div>
                <a href="{{url('/admin/news/create')}}"><button class="btn btn-primary"> + Add News</button></a>
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
                        <td><img width="150" src="{{!empty($new->image) ? URL::to($new->image) : URL::to('/images/noimage.jpg')}}"/></td>
                        <td>{{$new->description}}</td>
                        <td>{{$new->status}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{url('/admin/news/edit/'. $new->id)}}"><button class="btn btn-warning mr-5">Edit</button></a>
                                <a href="{{url('/admin/news/delete', $new->id)}}"><button class="btn btn-danger">Delete</button></a>
                            </div>
                        </td>
                       <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $news->fragment('foo')->links() !!}
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


