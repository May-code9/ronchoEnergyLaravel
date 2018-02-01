<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function productSearch(Request $request) {
      $search = $request->get('search');
      $getProductsFours = Product::take(2)->get();
      $searchProducts = Product::where('product', 'LIKE', '%'.$search.'%')->get();
      return view('body.searchProducts', compact('searchProducts', 'getProductsFours', 'search'));
    }
}
