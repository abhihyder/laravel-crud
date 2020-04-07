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
      
    </table>
</div> 


    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('get.users') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'phone', name: 'phone' },
                    { data: 'created_at', name: 'created_at' }
                ]
            });
        } );
    </script>
@endsection