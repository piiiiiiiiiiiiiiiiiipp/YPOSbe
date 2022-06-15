<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Srmklive\PayPal\Providers;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function capturePayment(Request $request){
        $order = Order::create(['orderID' => $request->get('orderId'),
            'date' => $request->get('date'),
            'payerName' => $request->get('payerName'),
            'payerSurname' => $request->get('payerSurname'),
            'payerEmail' => $request->get('payerEmail'),
            'payerId' => $request->get('payerId'),
            'status' => $request->get('status'),
            'paymentAmount' => $request->get('paymentAmount')
            ]);

        return $order;
    }
}
