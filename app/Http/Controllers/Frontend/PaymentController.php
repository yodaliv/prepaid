<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\OrderHistory;
use App\Models\User;
use App\Services\RetailerAPI;
use App\Services\FlutterRave;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function __constructor() {
        $retailer = new RetailerAPI();
        if (!$retailer->isValid()) {
            if(!$retailer->authorize()) {
                $err = $retailer->getLassError();
                //...
            }
        }
    }
    public function index()
    {
        return view('frontend.electricity');
    }
    
    public function electricity(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.electricity', compact('phone'));
    }

    public function mobile(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.mobile', compact('phone'));
    }

    public function data(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.data', compact('phone'));
    }

    public function cable(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.cable', compact('phone'));
    }

    public function gift_card(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.gift-card', compact('phone'));
    }

    public function crypto(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.crypto', compact('phone'));
    }

    public function transaction_history(Request $request)
    {
        $phone = session('phone_no');
        $user = User::where('mobile', $phone)->first();
        if ($user)
            return view('frontend.transaction-history', compact('phone'));
        else
            return redirect()->back();
    }
    public function reciept(Request $request)
    {
        $phone = session('phone_no');
        return view('frontend.reciept', compact('phone'));
    }
    public function order(Request $request)
    {
        $service_type = $request->servicetype;

        $state = '';
        $meter_type = '';
        $meter_number = '';
        $network = '';
        $mobile_no = '';
        $data_bundle = '';
        $phone1 = '';
        $provider = '';
        $package = '';
        $smart_card = '';
        $service = '';
        $coin_type = '';
        $outstanding = '';
        $name = '';
        $adress = '';
        $recieving_address = '';
        $amount = $request->amount;
        $email = $request->email;

        $history = new OrderHistory;
        $history->order_date = date('Y-m-d H:i:s');
        if (session('user'))
            $history->user_name = session('user');
        $history->phone = session('phone_no');
        $history->service_type = $service_type;
        $history->amount = $amount;
        $history->email = $email;
        $state = $request->state;
        switch ($service_type) {
            // Electricity
            case 'electricity':
                $adress = $request->state;
                $meter_type = $request->metertype;
                $meter_number = $request->meter_num;

                $history->state = $state;
                $history->meter_type = $meter_type;
                $history->meter_number = $meter_number;

                $retailer = new RetailerAPI();
                $validate = $retailer->validate($meter_number, $request->metertype);
                if ($validate===false || !$validate[$meter_type=='prepaid'?'MeterNumber':'customer_no'] == $meter_number) {
                    //
                }
                if ($meter_type=='prepaid') {
                    $name = $validate['CustomerDetail']['Name'];
                    $adress = $validate['CustomerDetail']['Address'];
                } else {
                    $name = $validate['name'];
                    $adress = $validate['address'];
                }
                $review = $retailer->review($history->phone, $amount, $request->metertype);
                if ($review===false) {
                }

                $outstanding = $review['outstanding'];
                if ($review['name'])
                    $name = $review['name'];
                break;
                // Air Time
            case 'mobile':
                $network = $request->network;
                $mobile_no = $request->mobile_num;

                $history->network = $network;
                $history->mobile_no = $mobile_no;
                break;
                // Data
            case 'data':
                $network = $request->network;
                $mobile_no = $request->mobile_num;
                $data_bundle = $request->bundle;

                $history->network = $network;
                $history->mobile_no = $mobile_no;
                $history->data_bundle = $data_bundle;
                break;
                // Cable TV
            case 'cable':
                $provider = $request->provider;
                $package = $request->package;
                $smart_card = $request->card_num;
                $phone1 = $request->phone1;

                $history->provider = $provider;
                $history->package = $package;
                $history->smart_card = $smart_card;
                $history->phone1 = $phone1;
                break;
            // Gift Card
            case 'gift-card':
                $provider = $request->provider;

                $history->provider = $provider;
                break;
            // Crypto
            case 'crypto':
                $service = $request->service;
                $coin_type = $request->cointype;
                $recieving_address = $request->adress;

                $history->service = $service;
                $history->coin_type = $coin_type;
                $history->recieving_address = $recieving_address;
                break;
        }

        $vend_amount = $request->amount;
        $service_charge = 100;// How much? and where come from?
        $gateway_charge = 0;// How much? and where come from?

        $meter_no = $request->meter_num;
        $meter_type = ucfirst($request->metertype);
        $phone = session('phone_no');
        
        $history->order_result = false;
        $history->save();
        session(['lastid' => $history->id]);
        $summary = $vend_amount+$service_charge;
        return view('frontend.order', compact('service_type', 'vend_amount', 'service_charge', 'gateway_charge', 'meter_no', 'name', 'meter_type', 'phone', 'outstanding', 'email', 'state', 'adress', 'summary'));
    }

    public function payment(Request $request) {

        // TODO: Payment with API //
        // Get Bill Categories
        $url = 'https://api.flutterwave.com/v3/bill-categories';
        $secretkey = 'FLWSECK_TEST-f11cfe7b657f4a4a084175ad73f8ace8-X';
        $data = [
            'power'=> 1,
        ];
        $response = Http::withToken($secretKey)->get($url, $data);
        print_r($response->json());exit;

        // $payment = new FlutterRave($secretkey);
        // $payment
        // // ->eventHandler(new myEventHandler)
        // ->setAmount($request->amount)
        // ->setPaymentOptions($request->payment_options) // value can be card, account or both
        // ->setDescription($request->description)
        // ->setLogo($request->logo)
        // ->setTitle($request->title)
        // ->setCountry($request->country)
        // ->setCurrency($request->currency)
        // ->setEmail($request->email)
        // ->setFirstname($request->firstname)
        // ->setLastname($request->lastname)
        // ->setPhoneNumber($request->phonenumber)
        // ->setPayButtonText($request->meter_no)
        // // ->setRedirectUrl('')
        // // ->setMetaData(array('metaname' => 'SomeDataName', 'metavalue' => 'SomeValue')) // can be called multiple times. Uncomment this to add meta datas
        // // ->setMetaData(array('metaname' => 'SomeOtherDataName', 'metavalue' => 'SomeOtherValue')) // can be called multiple times. Uncomment this to add meta datas
        // ->initialize();
        // ////////////////////////////
        // $result = $payment->chargePayment(array());
        $successed = true;
        $history = OrderHistory::find(session('lastid'))->first();
        $history->order_result = $successed;
        $history->save();
        if ($successed) {
        } else {
            return Redirect::back()->withErrors(['info' => 'not validate']);

        }
    }
}

