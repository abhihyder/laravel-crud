<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Style -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Datatable -->
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

        <script  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

       
    </head>
    <body>
      
    <!-- Nav bar start-->

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('post')}}">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('user')}}">User</a>
                        </li>

 

                        </ul>
                        
                    </div>
                </nav>
            </div>
        </div>

 <!-- Nav bar end-->