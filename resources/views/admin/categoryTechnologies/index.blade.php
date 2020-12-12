@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
                <h2>Danh mục công nghệ</h2>
            <div>
                <button class="btn btn-primary" onclick="newCategory()"> + Thêm danh mục</button>
            </div>
        </div>
        <div>
            <table class="table table-bordered table-hover">
                <thead>
                    <td>STT</td>
                    <td>Tên Danh mục</td>
                    <td>Mô tả</td>
                    <td>Trạng thái</td>
                    <td>Ngày tạo</td>
                    <td>Hành động</td>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($categoryProducts as $category)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ \App\Services\UsersServices::getStatus($category->status) }}</td>
                        <td>{{$category->created_at ?? '- - -'}}</td>
                        <td>
                            <button class="btn btn-warning" onclick="editCategoryProducts({{$category}})">Edit</button>
                            <a href="{{url('/admin/category-products/delete', $category->id)}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                       <?php $i++; ?>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination float-right">
            {!! $categoryProducts->fragment('foo')->links() !!}
        </div>
    </div>
    <div class="modal fade" id="create_new" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm mới</h4>
                </div>
                <div class="modal-body">
                    <form id="categoryProduct" action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="" />
                        <input type="hidden" name="code" value="CN" />
                        <div class="form-group">
                            <label class="">Tên danh mục công nghệ (*)</label>
                            <input title="text" value="" class="form-control" name="name" />
                            <span class="invalid-feedback mt-5 error_name message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Mô tả</label>
                            <textarea class="form-control" name="description"></textarea>
                            <span class="invalid-feedback mt-5 error_description message-login"></span>
                        </div>
                        <div class="form-group">
                            <label class="">Trạng thái (*)</label>
                            <div class="radio">
                                <label><input type="radio" id="radio_status2" value="0" name="status">Không hoạt động</label>
                                <label class="ml-5"><input type="radio" id="radio_status1" value="1" name="status">Hoạt động</label>
                            </div>
                            <span class="invalid-feedback mt-5 error_status message-login"></span>
                        </div>
                        <div class="float-right">
                            <button id="newCategoryProuct" class="btn btn-success" type="submit">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


