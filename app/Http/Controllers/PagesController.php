<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function about() {
      // 配列に値をセット
        $data = [];
        $data["first_name"] = "yamaga";
        $data["last_name"] = "mitumasa";

        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);

        /* 以前のコード
        return view('pages.about');
        */
    }
}
