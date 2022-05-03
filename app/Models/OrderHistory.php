<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'order_history';
    protected $primaryKey = 'id';

    protected $fillable = [
        'order_date',
        'user_name',
        'phone',
        'service_type',
        'state',
        'meter_type',
        'meter_number',
        'amount',
        'email',
        'network',
        'mobile_no',
        'data_bundle',
        'phone1',
        'provider',
        'package',
        'smart_card',
        'service',
        'coin_type',
        'recieving_address',
        'order_result'
    ];
}

