@extends('frontend.index')

@section('content')
<div class="container">
       
<a href="{{url('post')}}" class="btn btn-success"> Back</a>   
    <br>
    <br>
    
    <h3>Post Details</h3>
        <hr>
        
        <h4>{{$post->title}}</h4>
        
        @if($post->status == 0) 
        <h6>Draft</h6>
        @else
        <h6>Published</h6>
        @endif
        <p>
            <a href="">{{$post->created_at->format('F d, Y')}}</a>
            by <a href="">{{$post->user->name}}</a>
            on <a href="">{{$post->category->name}}</a>
        </p>
        
        <p>{{$post->content}}</p>
        <p>
        <a href="{{url('post/'.$post->id.'/edit')}}" class="btn btn-info"> Edit</a> 
        </p>
        <form action="{{url('post/'.$post->id)}}" method="post" onclick="return confirm('Are you sure you want to delete this item?');">
            @csrf 
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
</div>

@endsection