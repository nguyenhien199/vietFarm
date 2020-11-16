@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Danh sách sản phẩm</h2>
            <div>
                <a href="{{url('/admin/products/create')}}"><button class="btn btn-primary"> + Add News</button></a>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                <td>STT</td>
                <td>Tên Sản phẩm</td>
                <td>Danh mục sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Mô tả</td>
                <td>Trạng thái</td>
                <td>Hành động</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($products as $new)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$new->name}}</td>
                        <td>{{$new->category->name}}</td>
                        <td><img width="150" src="{{!empty($new->image) ? URL::to($new->image) : URL::to('/images/noimage.jpg')}}"/></td>
                        <td>{{$new->description}}</td>
                        <td>{{\App\Services\UsersServices::getStatus($new->status)}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{url('/admin/products/edit/'. $new->id)}}"><button class="btn btn-warning mr-5">Edit</button></a>
                                <a href="{{url('/admin/products/delete', $new->id)}}"><button class="btn btn-danger">Delete</button></a>
                            </div>
                        </td>
                        <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $products->fragment('foo')->links() !!}
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


