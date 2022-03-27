<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function policy()
    {
        $data['title'] = "policy";
        return view('frontend.policy', $data);
    }

    public function terms()
    {
        $data['title'] = "terms";
        return view('frontend.terms', $data);
    }

    public function privacy()
    {
        $data['title'] = "privacy";
        return view('frontend.privacy', $data);
    }
}
