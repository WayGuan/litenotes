{{-- 
@extends('layouts/base')
@section('name', 'weiwei')
    
@section('content')
    <h1>Hello <?php echo $name?></h1> 
    <h1>Hello {{ $name = "haa" }} </h1>
    
    <h1> Welcome Home
        @if(isset($name))
        , {{ $name }} 
        @endif 
    </h1>
@endsection
--}}

<x-base>
    <x-slot name="name">
        weiwei
    </x-slot>
    <x-slot name="content">
        Home
    </x-slot>
</x-base>