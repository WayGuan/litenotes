{{-- Template Inheritance --}}
{{-- 
@extends('layouts/base')
@section('name', 'New User')
@section('content')
    <h1>About</h1>
@endsection 
--}}

{{-- Blade component --}}
<x-base>
    <x-slot name="name">
        New User
    </x-slot>
    <x-slot name="content">
        <h1>About</h1>
    </x-slot>
</x-base>
