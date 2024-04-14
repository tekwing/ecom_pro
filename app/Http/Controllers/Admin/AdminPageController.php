<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        return view('admin/page/index');
    }

    public function add_product()
    {
        return view('admin/page/add_product');
    }

    public function signin()
    {
        return view('admin/page/signin');
    }
}
