<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Product;
use App\News;

class RonchoController extends Controller
{
    public function index() {
      $home = "active";
      $projects = Project::take(4)->inRandomOrder()->get();
      return view("body.index", compact('home', 'projects'));
    }
    public function engineering() {
      return view("body.engineering");
    }
    public function ict() {
      return view("body.ict");
    }
    public function energy() {
      return view("body.energy");
    }
    public function about() {
      $about = "active";
      return view("body.about-us", compact('about'));
    }
    public function products() {
      $getProducts = Product::inRandomOrder()->paginate(9);
      $getProductsFours = Product::take(2)->get();
      $products = "active";
      return view("body.products", compact('products', 'getProducts', 'getProductsFours'));
    }
    public function contact() {
      $contact = "active";
      return view("body.contact", compact('contact'));
    }
    public function news() {
      $getNews = News::latest()->paginate(2);
      $getSideNews = News::latest()->take(5)->get();
      $getOlderNews = News::oldest()->take(15)->get();
      $news = "active";
      return view("body.news", compact('news', 'getNews', 'getSideNews', 'getOlderNews'));
    }
    public function projects() {
      $active = "active";
      $projects = Project::inRandomOrder()->get();
      return view("body.project", compact('projects', 'active'));
    }
}
