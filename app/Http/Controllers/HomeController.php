<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            // return '<h1>Trang chủ Unicode</h1>';
        $title = "Học laravel";

        // return view('home')->with(['title' => $title]);
        // return view('home',compact('title')); //load view from php
        // $contentView = view('home');
        // dd($contentView);

        return view('home',compact('title'));
    }

    public function getNew(){
        return view('blog');
    }

    public function getProductDetail($id)
    {
        return view('product.product_detail',compact('id'));
    }

}