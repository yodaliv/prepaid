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
    public function home1()
    {
        return view('frontend.home1');
    }
    public function home2()
    {
        return view('frontend.home2');
    }
    public function home3()
    {
        return view('frontend.home3');
    }
    public function home4()
    {
        return view('frontend.home4');
    }
<<<<<<< HEAD
    public function register()
    {
        return view('frontend.register');
=======
    public function home5()
    {
        return view('frontend.home5');
>>>>>>> e0e559b5b84997868a22ea8b06599ebdd2307ea5
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
