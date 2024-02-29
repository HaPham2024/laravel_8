<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['welcome'] = 'Hoc lap trinh';
        $this->data['content'] = '<h3>Chuong 1 : nhap mon</h3><p>Kien thuc 1</p><p>Kien thuc 2</p><p>Kien thuc 3</p>';
        // $dataArr = [
        //     'item1' => 'Value 1',
        //     'item2' => 'Value 2',
        //     'item3' => 'Value 3',
        // ];
        $this->data['number'] = 20;

        return view('home', $this->data);

        // return view('home', compact('dataArr'));
    }
}