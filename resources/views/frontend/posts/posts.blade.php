@extends('frontend.index')

@section('content')
<div class="container">
       
    <a href="{{url('post/create')}}" class="btn btn-success">Add Post</a>   
    <br>
    <br>
    
    <h3>Posts list</h3>
        <hr>
        @foreach($posts as $post)
        
            <h5>{{$post->title}}</h5>
            <p>{{$post->content}}</p>
            <p>
                <a href="">{{$post->created_at->format('F d, Y')}}</a>
                by <a href="">{{$post->user->name}}</a>
                on <a href="">{{$post->category->name}}</a>
            </p>
        @endforeach
        <hr>
</div>

@endsection