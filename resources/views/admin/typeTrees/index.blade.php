@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Danh sách giống cây</h2>
            <div>
                <a href="{{url('/admin/type-trees/create')}}"><button class="btn btn-primary"> + Thêm giống mới</button></a>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                <td>STT</td>
                <td>Tên giống cây</td>
                <td>Loại giống</td>
                <td>Hình ảnh</td>
                <td>Mô tả</td>
                <td>Trạng thái</td>
                <td>Hành động</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($typeTrees ?? '' as $new)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$new->name}}</td>
                        <td>{{$new->category->name}}</td>
                        <td><img width="150" src="{{!empty($new->image) ? URL::to($new->image) : URL::to('/images/noimage.jpg')}}"/></td>
                        <td>{{$new->description}}</td>
                        <td>{{\App\Services\UsersServices::getStatus($new->status)}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{url('/admin/type-trees/edit/'. $new->id)}}"><button class="btn btn-warning mr-5">Edit</button></a>
                                <a href="{{url('/admin/type-trees/delete', $new->id)}}"><button class="btn btn-danger">Delete</button></a>
                            </div>
                        </td>
                        <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $typeTrees ?? ''->fragment('foo')->links() !!}
        </div>
    </div>
@endsection


