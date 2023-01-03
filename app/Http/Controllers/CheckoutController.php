<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function indexCheckout() {
        return view('checkout.index', [
            'title' => 'Checkout'
        ]);
    }

    public function checkoutSuccess() {
        return redirect('/classes')->with('success', 'Checkout Success!');
    }
}
