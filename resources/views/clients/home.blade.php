@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('sidebar')
    {{-- @parent --}}
    <h3>Home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
    @include('clients.contents.about')
    @include('clients.contents.slide')
@endsection
@section('css')
    .hello {
    background: red;
    color: #fff;
    }
@endsection
