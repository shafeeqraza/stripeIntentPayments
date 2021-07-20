<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view("stripe");
    }

    public function makePayment(Request $request)
    {

        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51InqbyA9OAFt8cxTZzEL0r2UbGdD73GsHlVz92OtyCbdEnW9lhdt6sPmi74qbH1NtnjUmwmOzt0L1NvTrus7q3Gi00OFDuKgkU'
        //   );
        // $response =  $stripe->paymentMethods->create([
        // 'type' => 'card',
        // 'card' => [
        //     'number' => '4242424242424242',
        //     'exp_month' => 7,
        //     'exp_year' => 2022,
        //     'cvc' => '314',
        // ],
        // ]);
        // return $response;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => 100 * 100,
            'currency' => 'usd',
            // "source" => $request->tokenId,
            'payment_method_types' => ['card'],
            // 'transfer_group' => '{ORDER10}',
        ]);

        // return $paymentIntent;


        // // Create a Transfer to a connected account (later):
        $transferVendor = \Stripe\Transfer::create([
            'amount' => 100 * 70,
            'currency' => 'usd',
            'destination' => 'acct_1JF4YaQxLPfS0CG6', //acct_1JF4YaQxLPfS0CG6
            'transfer_group' => 'order10',
        ]);

        $transferAdmin = Stripe\Charge::create ([
            "amount" => 100 * 30,
            "currency" => "usd",
            "source" => $request->tokenId,
            "description" => "Making test payment for venue2go."
        ]);

        return [
            "paymentIntent" => $paymentIntent,
            "transferVendor" => $transferVendor,
            "transferAdmin" => $transferAdmin
        ];

    }
}
