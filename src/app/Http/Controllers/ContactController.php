<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
        {
            return view('index');
        }

        public function confirm(Request $request)
    {
        // 入力内容の確認処理
        return view('contact.confirm', ['data' => $request->all()]);
    }

    public function store(Request $request)
    {
        // 問い合わせ内容の保存処理
        return view('contact.thanks');
    }
}
