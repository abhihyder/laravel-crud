@extends('frontend.index')

@section('content')
<div class="container">  
    <a href="" class="btn btn-success">Register</a>   
    <br>
    <br>
    <table class="table table-hover" id="myTable">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Created At</th>

            </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->created_at->format('F d, Y')}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div> 
@endsection