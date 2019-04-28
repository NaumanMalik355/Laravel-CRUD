@extends('layouts.app')

@section('content')
    <a href="http://localhost:8080/firstapp/public/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    {{-- @if (!Auth::guest()) --}}
    
    <a href="http://localhost:8080/firstapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    {{-- @endif --}}
@endsection