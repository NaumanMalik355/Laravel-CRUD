@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{url('/posts/create')}}">Create Post</a>
                    {{-- <a href="/posts/create" class="btn btn-primary">Create Post</a> --}}
<h1>Your blog Post</h1>

{{-- <table class="table table-striped">
    <tr>
        <th>Title</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($posts as $post)
        <tr>
        <th>{{$post->title}}</th>
        <th>
            <a href="http://localhost:8080/firstapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        </th>
        <th></th>
        </tr>
    @endforeach
</table> --}}

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
