<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //

    public function __construct() {

    }

    public function index() {
        $products = DB::table('products')->paginate(12);
        $categories = DB::select('select * from categories');

        return view('shop', [
            'page' => 'Shop',
            'breadcrumbDetail' => 'Collection Products',
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function category($category) {
        $products = DB::table('products')
                        ->join('categories', 'products.categoryId', '=', 'categories.id')
                        ->select('products.*')
                        ->where('categories.name', '=', $category)
                        ->paginate(12);
        $categories = DB::table('categories')->get();

        return view('shop', [
            'page' => $category,
            'breadcrumbDetail' => 'Collection Products',
            'products' => $products,
            'categories' => $categories
        ]);
    }


}
