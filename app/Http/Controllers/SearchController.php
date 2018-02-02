<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\News;

class SearchController extends Controller
{
    public function productSearch(Request $request) {
      $search = $request->get('search');
      $getProductsFours = Product::take(2)->get();
      $searchProducts = Product::where('product', 'LIKE', '%'.$search.'%')->get();
      return view('body.searchProducts', compact('searchProducts', 'getProductsFours', 'search'));
    }
    public function newsSearch(Request $request) {
      $search = $request->get('search');
      $getSideNews = News::latest()->take(5)->get();
      $getOlderNews = News::oldest()->take(15)->get();
      $searchNews = News::where('category', 'LIKE', '%'.$search.'%')
      ->orWhere('title', 'LIKE', '%'.$search.'%')
      ->get();
      return view('body.searchNews', compact('searchNews', 'search', 'getSideNews', 'getOlderNews'));
    }
}
