<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Lập trình tại unicode';
        return view('clients.home', $this->data);
    }
    public function product()
    {
        $this->data['title'] = 'Sản phẩm';
        return view('clients.products', $this->data);
    }
    public function getAdd()
    {
        $this->data['title'] = 'Thêm sản phẩm';
        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request)
    {
        dd($request);
    }
    public function putAdd(Request $request)
    {
        dd($request);
    }
}