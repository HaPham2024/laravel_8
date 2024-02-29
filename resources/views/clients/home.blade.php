@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    {{-- @parent --}}
    <h3>Home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chu</h1>
@endsection
@section('css')
    .hello {
    background: red;
    color: #fff;
    }
@endsection
