@extends('layouts/base')
@section('name', 'weiwei')
    
@section('content')
    {{-- <h1>Hello <?php echo $name?></h1> --}}
    {{-- <h1>Hello {{ $name = "haa" }} </h1>
    @if($name == "Weiwei")    
    <h1>Hello {{ $name }} </h1>
    @else    
    <h1>Hello user </h1>
    @endif --}}
    
    <h1> Welcome Home 
        @if(isset($name))    
        , {{ $name }} 
        @else    
        <h1>Hello user </h1>
        @endif </h1>
@endsection