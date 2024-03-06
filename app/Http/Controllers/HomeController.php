<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class HomeController extends Controller
{
    //
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Lập trình tại Unicode';
        $this->data['message'] = "Đăng ký tài khoản thành công";
        return view('client.home', $this->data);
    }
    public function products()
    {
        $this->data['title'] = 'Sản phẩm';
        return view('client.products', $this->data);
    }
    public function getAdd()
    {
        $this->data['title'] = 'Thêm sản phẩm';
        $this->data['errorMessage'] = 'Vui lòng nhập thông tin  ';
        return view('client.add', $this->data);
    }
    public function postAdd(ProductRequest $request)
    {
        dd($request);
    }
    public function putAdd(Request $request)
    {
        dd($request);
    }
    public function getArray()
    {
        $contentArray = [
            'name' => 'Laravel',
            'lesson' => 'Khóa học lập trình',
            'academy' => 'Unicode'
        ];
        return $contentArray;
    }
    public function downloadImg(Request $request)
    {
        if (!empty($request->image)) {
            $fileName = 'image_' . uniqid() . 'jpg';

            $image = trim($request->image);
            return response()->streamDownload(function () use ($image) {
                $imageContent = file_get_contents($image);
                echo $imageContent;
            }, $fileName);
        }
    }
}
