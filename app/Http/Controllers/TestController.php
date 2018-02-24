<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/index');
    }

    public function fabu()
    {
        return view('user/fabu');
    }

    public function myfabu()
    {
        return view('user/myfabu');
    }

    public function order()
    {
        return view('user/order');
    }

    public function cash()
    {
        return view('user/mycash');
    }

    public function userinfo()
    {
        return view('user/userinfo');
    }
    public function waiguan()
    {
        return view('user/wg');
    }
    public function zhuangbei()
    {
        return view('user/zb');
    }
}
