@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Thêm chứng nhận mới</h2>
        </div>
        <div class="content">
            <form action="{{url('/admin/certifications/create')}}" method="POST" enctype="Multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id ?? ''}}">
                <div class="row d-flex align-center">
                    <div class="col-sm-2">
                        <label class="form-label-group">Tên Chứng nhận (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <input type="text" name="name" class="form-input form-control" value="{{ old('name',  $data->name ?? '') }}" />
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('name'))
                            <span class="error message-login">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex align-center mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Url (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <input type="text" id="changeUrl" name="url" class="form-input form-control" value="{{ old('url',  $data->url ?? '') }}" />
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('url'))
                            <span class="error message-login">{{ $errors->first('url') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex align-center mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Logo image</label>
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
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('image'))
                            <span class="error message-login">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Description (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <textarea name="description" class="form-input form-control">{{ old('description', $data->description ?? '') }}</textarea>
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('description'))
                            <span class="error message-login">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Content (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                       <textarea id="editor" name="content" rows="10" class="form-textarea">
                            {!! old('content', $data->content ?? '') !!}
                        </textarea>
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('content'))
                            <span class="error message-login">{{ $errors->first('content') }}</span>
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
                                    <label for="radio0" class="custom-control-label">Không hoạt động</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1" name="status" class="custom-control-input" value="1" {{ isset($data->status) && $data->status == 1 ? 'checked' : '' }}>
                                    <label for="radio1" class="custom-control-label">Hoạt động</label>
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


