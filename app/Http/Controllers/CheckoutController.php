<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51JI1vHABpGZPNQ3pwswV249rfpptaq74FhZ16mGjSV4znM5MjN4ph6b95bEuz0yuEaWR1aAfVInzgQf1tBIn3Lr200KoKEs5Xn');

        $amount = 100;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'INR',
            'description' => 'Payment From Codehunger',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('checkout.credit-card', compact('intent'));
    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
