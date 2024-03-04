@extends('layouts.client')

@section('title')
    <h1>Trang chủ - </h1>
@endsection

@section('sidebar')
    @parent
    <h1>Home Sidebar</h1>
@endsection

@section('content')
    <h1> Trang chủ </h1>
    <p>{{ \Carbon\Carbon::parse('2022-12-03 15:00:00')->format('Y-m-d H:i:s') }}</p>
    <p>{{ \Carbon\Carbon::parse('2022-12-06 15:00:00')->format('Y-m-d H:i:s') }}</p>

    @env('production')
    <p>Môi trường production </p>
    @elseenv('test')
    <p>Không phải môi trường test</p>
@else
    <p>Không phải môi trường dev</p>
    @endenv
@endsection

@section('css')
    <!-- Additional CSS if needed -->
@endsection
