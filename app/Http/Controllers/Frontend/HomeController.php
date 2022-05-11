<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

use App\Models\OrderHistory;
use App\Models\User;

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
        // session_destroy();
        return view('frontend.home');
    }
    public function update(Request $request, $id)
    {
        $exam_number = $id;
        $exam = Exam::where('exam_number', $exam_number)->first();
        if($request->exam_name)
            $exam->exam_name = $request->exam_name;
        if($request->take_mode)
            $exam->take_mode = $request->take_mode;
        if($request->take_duration)
            $exam->take_duration = $request->take_duration;
        if($request->take_start)
            $exam->take_start = $request->take_start;
        if($request->take_end)
            $exam->take_end = $request->take_end;
        $exam->save();
        return redirect()->back();
    }

    public function check_phone(Request $request)
    {
        $phone = $request->phone;
        session(['phone_no' => $phone]);
        $history = OrderHistory::where('phone', $phone)->first();
        $user = User::where('mobile', $phone)->first();
        if ($user) {
            session(['user' => $user->name]);
            return redirect()->action('App\Http\Controllers\Frontend\HomeController@home2');
            
        } else {
            return redirect()->action('App\Http\Controllers\Frontend\PaymentController@electricity');
            
        }
    }
    public function check_user(Request $request)
    {
        $phone = session('phone_no');
        $user = User::where('mobile', $phone)->first();
        $password = $request->password;
        if (Hash::check($password, $user->password)) {//If password currect
                return redirect()->action('App\Http\Controllers\Frontend\PaymentController@electricity');
        }
        return redirect()->back();
    }
    function rand_string( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);
    }
    
    public function reset_password(Request $request)
    {
        $phone = session('phone_no');
        $phoneconfirm = $request->phone;
        if ($phone != $phoneconfirm) {
            return response()->json(['success' => false, 'message' => 'Phone No. not equal.']);
        }
        $password = $this->rand_string(8);
        $user = User::where('mobile', $phone)->first();
        $user->password = Hash::make($password);
        $user->save();

        return $password;

    }
    public function register_user(Request $request)
    {
        $phone = $request->phone;
        $password = $request->password;
        $passwordconfirm = $request->passwordconfirm;
        $email = $request->email;
        $name = $request->name;

        if ($password != $passwordconfirm) {
            return redirect()->back();
        }

        $user = new User;
        $user->name = $name;
        $user->mobile = $phone;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();

        return redirect()->action('App\Http\Controllers\Frontend\HomeController@index');

    }
    public function services(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.electricity', compact('phone'));
    }
    public function home2(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.home2', compact('phone'));
    }
    public function home3()
    {
        return view('frontend.home3');
    }
    public function home4()
    {
        return view('frontend.home4');
    }
    public function register()
    {
        return view('frontend.register');
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

    public function profile(Request $request)
    {
        $phone = session('phone_no');
        $user = User::where('mobile', $phone)->first();
        if ($user)
            return view('frontend.profile', compact('user'));
        else
            return redirect()->action('App\Http\Controllers\Frontend\HomeController@register');
    }
/////////////////////////////////////////////////////////////////


}
