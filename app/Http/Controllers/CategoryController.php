<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct(Request $request)
    {
        if ($request->is('category')) {
            echo 'Hi';
        }
    }
    public function index(Request $request)
    {

        return view('clients/category/list');
    }

    // phương thức get
    public function getCategory($id)
    {
        return view('clients/category/edit');
    }

    public function updateCategory($id)
    {
        return 'Submit sửa chuyên mục' . $id;
    }
    public function showCategory()
    {
        return 'button submit chuyên mục';
    }

    public function addCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // $cateName = $request->id;
        // dd($cateName);
        if ($request->has('category_name')) {
            $request->flash();
            return  redirect(route('category.add'));
        } else {
            return 'Không có danh mục';
        }


        $old = $request->old('category_name');
        return view('clients/category/add');
    }
    public function deleteCategory($id)
    {
    }
    public function getFile()
    {
        return view('clients/category/file');
    }
    public function Handlefile(Request $request)
    {

        if ($request->hasFile('photo')) {
            $file = $request->file();
        } else {
            return "Vui lòng chọn file";
        }
    }
}
