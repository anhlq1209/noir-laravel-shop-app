<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    //
    public function __construct() {

    }

    public function index() {
        return view('checkout', [
            'page' => 'Checkout',
            'breadcrumbDetail' => 'Checkout'
        ]);
    }

}
