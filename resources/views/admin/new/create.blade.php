@extends('layouts.app')

@section('content')
    <div class="">
        <div class="d-flex justify-content-end header-page">
            <h2>Create News</h2>
        </div>
        <div class="content">
            <form action="{{url('/admin/news/create')}}" method="POST">
                @csrf
                <div class="row d-flex align-center">
                    <div class="col-sm-2">
                        <label class="form-label-group">Title (*)</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <input type="text" name="title" class="form-input form-control" value="{{ old('title', !empty($data->title) ? $data->title : '') }}" />
                        <div class="d-none fill-data" id="fill-title"></div>
                        <div class="errorTxt message-login title"></div>
                        @if($errors->has('title'))
                            <span class="error message-login">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row d-flex align-center mt-5">
                    <div class="col-sm-2">
                        <label class="form-label-group">Image</label>
                    </div>
                    <div class="col-sm-10 inter-content">
                        <input value="" type="file" name="image">
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
                        <textarea name="description" class="form-input form-control"></textarea>
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
                            {!! old('content', !empty($data->content) ? $data->content : '') !!}
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
                                    <input type="radio" id="radio0" name="status" class="custom-control-input" value="0" checked>
                                    <label for="radio0" class="custom-control-label">Disable</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1" name="status" class="custom-control-input" value="1">
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


