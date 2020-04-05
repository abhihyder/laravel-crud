@extends('frontend.index')

@section('content')
<div class="container">

<a href="{{url('post')}}" class="btn btn-success"> Back</a>   
    <br>
    <br>
            <!-- Error massese-->
            @if ($errors->any())
                <div class="alert alert-danger col-md-8">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <h3>Create new post</h3>
    <hr>
  

        <form enctype="multipart/form-data" action="{{url('post/'.$post->id)}}" method="POST">
        @csrf 
        @method('put')
    
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Title</label>
                <input type="text" class="form-control" value="{{$post->title}}" name="title" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-10">
                <label>Content</label>
                <textarea name="content" id="" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>
                </div>
            </div>
          

            <div class="form-row">
                <div class="form-group col-md-10">
                <label >Status</label>
                <select name="status" id="" class="form-control">
                    <option value="0" @if($post->status == 0) selected @endif>Draft</option>
                    <option value="1" @if($post->status == 1) selected @endif>Publish</option>
                </select>
                </div>
            </div>
           
            
            <button type="submit" class="btn btn-primary"  name="submit">Submit</button>

        </form>

    <br>
</div>
@endsection