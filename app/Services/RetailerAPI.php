<?php // Code within app\Helpers\Helper.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

const URL_AUTHORIZE = 'https://api.kvg.com.ng/auth/demo';
const URL_REVIEW_PREPAID = 'https://api.kvg.com.ng/demo/energy/aedc/prepaid/preview';
const URL_REVIEW_POSTPAID = 'https://api.kvg.com.ng/demo/energy/aedc/postpaid/preview';
const URL_VALIDATE_PREPAID = 'https://api.kvg.com.ng/demo/energy/aedc/prepaid/meter/';
const URL_VALIDATE_POSTPAID = 'https://api.kvg.com.ng/demo/energy/aedc/postpaid/customer';
const RETAILER_USER = 'd6296183c52b_demo';
const RETAILER_PASSWORD = "rg8kV1zpG0+KqFpS2*&r7^";

class RetailerAPI
{
    private $lastError = null;

    public function getLastError() {
        return $this->lastError;
    }

    public function isValid() {
        $acccessCode = session('RETAILER_ACCESS_TOKEN');
        if(!$acccessCode) return false;
        $validUntil = session('RETAILER_VALID_UNTIL');
        if(!$validUntil) return false;
        if(Carbon::now()->isAfter($validUntil)) return false;
        return true;
    }

    public function authorize() {
        $response = Http::post(URL_AUTHORIZE, [
            'username'=>RETAILER_USER,
            'password'=>RETAILER_PASSWORD
        ]);
        if (!$response || !$response->successful()) {
            $this->lastError = 'Network error!';
            return false;
        }
        $result = $response->json();
        if ($result['ResponseCode']!=100/*SUCCESSFUL*/) {
            $this->lastError = $result['ResponseMessage'];
            return false;
        }
        session([
            'RETAILER_ACCESS_TOKEN' => $result['accessCode'],
            'RETAILER_VALID_UNTIL' => Carbon::parse($result['validUntil'])
        ]);
        return true;
    }
    
    public function review(string $customerNo, $amount, $type) {
        if(!$this->isValid() && !$this->authorize()) return false;
        $acccessCode = session('RETAILER_ACCESS_TOKEN');
        $response = Http::withToken($acccessCode)
            ->post($type=='prepaid'?URL_REVIEW_PREPAID:URL_REVIEW_POSTPAID, [
                'customer_no'=>$customerNo,
                'amount'=>$amount
            ]);
        if (!$response || !$response->successful()) {
            return false;
        }
        $result = $response->json();
        if ($result['code']!=100) {
            return false;
        }
        return $result;
    }
    
    public function validate($customerNo, $type) {
        if(!$this->isValid() && !$this->authorize()) return false;
        $acccessCode = session('RETAILER_ACCESS_TOKEN');
        // $response = Http::withToken($acccessCode);
        if ($type=='prepaid') {
            $response = Http::withToken($acccessCode)->get(URL_VALIDATE_PREPAID . $customerNo);
        } else {
            $response = Http::withToken($acccessCode)->post(URL_VALIDATE_POSTPAID, [
                    'customer_no'=>$customerNo,
                ]);
        }
        if (!$response || !$response->successful()) {
            return false;
        }
        $result = $response->json();
        if ($result[$type=='prepaid'?'ResponseCode':'code']!=100) {
            return false;
        }
        return $result;
    }
}