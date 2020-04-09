@extends('frontend.index')

@section('content')
<div class="container"> 
    <br>
    <br>

    {!! $dataTable->table() !!}


</div>

@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush