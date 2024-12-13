<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
        {
            // 問い合わせ内容の取得処理
            return view('admin.index');
        }
}
