<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    // 優先執行該函式
    public function __construct()
    {

    }

    public function SaveStore(Request $request)
    {
        
        return redirect('/');
    }
}
