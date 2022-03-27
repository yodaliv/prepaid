<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index()
    {
        $data['title'] = "contact-us";
        return view('frontend.intro');
    }
}
