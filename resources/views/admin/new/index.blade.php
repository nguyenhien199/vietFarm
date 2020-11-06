@extends('layouts.app')

@section('content')
    <div class="">
        <div class="my-4"><h2>List News</h2></div>
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
@endsection
