<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('frontend.electricity');
    }

    public function electricity()
    {
        return view('frontend.electricity');
    }

    public function mobile()
    {
        return view('frontend.mobile');
    }

    public function data()
    {
        return view('frontend.data');
    }

    public function cable()
    {
        return view('frontend.cable');
    }

    public function gift_card()
    {
        return view('frontend.gift-card');
    }

    public function crypto()
    {
        return view('frontend.crypto');
    }

    public function transaction_history()
    {
        return view('frontend.transaction-history');
    }
}
