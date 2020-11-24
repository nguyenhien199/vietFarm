@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Thêm dịch vụ mới</h2>
        </div>
        <div class="content">
            <form action="{{url('/admin/slides/create')}}" method="POST" enctype="Multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id ?? ''}}">
                <div class="row d-flex align-center">
                    <div class="col-sm-2">
                        <label class="form-label-group">Tiêu đề (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <input type="text" name="title" class="form-input form-control" value="{{ old('name',  $data->title ?? '') }}" />
                        @if($errors->has('title'))
                            <span class="error message-login">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex align-center mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Hình ảnh (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <div class="file-control">
                            <label class="input-group-btn">
                                <span class="form-btn">File selection
                                    <input onchange="change_file(this);" type="file" name="image" style="display: none;">
                                </span>
                            </label>
                            <input type="text" value="{{ $data->image ?? '' }}" placeholder="No file selected" readonly="readonly" class="form-control">
                            <i class="fa fa-trash remove-file" onclick="removeImage(this)">
                                <input type="hidden" name="remove_image" class="removeFile" value="{{ !empty($data->image) ? 0 : 1 }}"/>
                            </i>
                        </div>
                        @if($errors->has('image'))
                            <span class="error message-login">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Nội dung (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <textarea name="content" class="form-input form-control">{{ old('content', $data->content ?? '') }}</textarea>
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('content'))
                            <span class="error message-login">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Tác giả</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                       <input name="author" value="{!! old('content', $data->author ?? '') !!}" class="form-control" />
                        @if($errors->has('author'))
                            <span class="error message-login">{{ $errors->first('author') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-sm-2"><label class="form-label">Status (*)</label></div>
                    <div class="col-sm-10 inter-content">
                        <ul class="form-radio clearfix access-authorization">
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio0" name="status" class="custom-control-input" value="0" checked {{ isset($data->status) && $data->status == 0 ? 'checked' : '' }}>
                                    <label for="radio0" class="custom-control-label">Disable</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1" name="status" class="custom-control-input" value="1" {{ isset($data->status) && $data->status == 1 ? 'checked' : '' }}>
                                    <label for="radio1" class="custom-control-label">Enable</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row row-submit">
                    <div class="col-12">
                        <button type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


