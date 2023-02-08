@extends('layouts/base')
@section('name')
    
@endsection    
@section('content')
    {{-- <h1>Hello <?php echo $name?></h1> --}}
    {{-- <h1>Hello {{ $name }} </h1> --}}
    @if($name = "Weiwei")    
    <h1>Hello {{ $name }} </h1>
    @else    
    <h1>Hello user </h1>
    @endif
@endsection