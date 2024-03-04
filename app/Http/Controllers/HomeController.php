<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Trang chu';
        return view('clients.home', $this->data);
    }

    public function product()
    {
        return view('clients.products');
    }
}