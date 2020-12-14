@extends('web.app')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <h2>{{$certification->name}}</h2>
            <div>
                <p>
                    {!!$certification->content!!}
                </p>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
