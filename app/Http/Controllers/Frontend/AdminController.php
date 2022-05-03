<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('frontend.admin');
    }
    public function receps()
    {
        return view('frontend.receps');
    }
    public function receps1()
    {
        return view('frontend.receps');
    }
    public function printable()
    {
        return view('frontend.printable');
    }
    public function review()
    {
        return view('frontend.review');
    }
    public function trans_detail()
    {
        return view('frontend.trans-detail');
    }
    public function trans_detail2()
    {
        return view('frontend.trans-detail2');
    }
    public function logo()
    {
        return view('frontend.logo');
    }

    public function password()
    {
        return view('frontend.password');
    }

    public function change_password(Request $request)
    {
    }


}
