@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Danh sách dịch vụ</h2>
            <div>
                <a href="{{url('/admin/slides/create')}}"><button class="btn btn-primary"> + Thêm slide mới</button></a>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                <td>STT</td>
                <td>Tiêu đề</td>
                <td>Hình ảnh</td>
                <td>Tác giả</td>
                <td>Trạng thái</td>
                <td>Hành động</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($slides as $new)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$new->title}}</td>
                        <td><img width="150" src="{{!empty($new->image) ? URL::to($new->image) : URL::to('/images/noimage.jpg')}}"/></td>
                        <td>{{$new->author}}</td>
                        <td>{{\App\Services\UsersServices::getStatus($new->status)}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{url('/admin/slides/edit/'. $new->id)}}"><button class="btn btn-warning mr-5">Edit</button></a>
                                <a href="{{url('/admin/slides/delete', $new->id)}}"><button class="btn btn-danger">Delete</button></a>
                            </div>
                        </td>
                        <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $slides->fragment('foo')->links() !!}
        </div>
    </div>
@endsection


