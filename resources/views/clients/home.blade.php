@extends('layouts.client')
@section('titlet')
    <h1>Trang chủ - </h1>
@endsection
@section('sidebar')
    @parent
    <h1>Home Sidebar</h1>
@endsection

@section('content')
    <h1> Trang chủ </h1>
    <x-alert type="info" :content="$message" data-icon="youtube" />
    <!-- <x-inputs.button/>

        <x-forms.button /> -->
    <p><img src="https://cdn-img1.imgworlds.com/assets/a5366382-0c26-4726-9873-45d69d24f819.jpg?key=home-gallery"
            alt="Ảnh"></p>
    <p><a href="{{ route('downImg', ['link' => 'https://cdn-img1.imgworlds.com/assets/a5366382-0c26-4726-9873-45d69d24f819.jpg?key=home-gallery']) }}"
            class="btn btn-primary">Download ảnh</a></p>
@endsection

@section('css')
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
