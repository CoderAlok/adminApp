<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function menu1(Request $request)
    {
        $data['page_title'] = 'Menu 1';
        return view('menu1.data')->with($data);
    }

    public function menu2(Request $request)
    {
        $data['page_title'] = 'Menu 2';
        return view('menu2.data')->with($data);
    }

    public function menu3(Request $request)
    {
        $data['page_title'] = 'Menu 3';
        return view('menu3.data')->with($data);
    }
}
