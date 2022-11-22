<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function __construct() {

    }

    public function index() {
        return view('cart', [
            'page' => 'Cart',
            'breadcrumbDetail' => 'My Cart'
        ]);
    }

}
