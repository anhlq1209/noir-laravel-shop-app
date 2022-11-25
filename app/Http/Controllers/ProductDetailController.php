<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    //
    public function __construct() {

    }

    public function index($id) {
        $products = DB::table('products')->where('id', '=', $id)->get();
        $product = $products[0];

        return view('product_detail', [
            'page' => 'Product Detail',
            'product' => $product
        ]);
    }

}
