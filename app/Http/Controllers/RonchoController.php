<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RonchoController extends Controller
{
    public function index() {
      return view("body.index");
    }
    public function oil() {
      return view("body.oil-gas");
    }
    public function ict() {
      return view("body.ict");
    }
    public function energy() {
      return view("body.energy");
    }
    public function about() {
      return view("body.about-us");
    }
    public function products() {
      return view("body.products");
    }
    public function contact() {
      return view("body.contact");
    }
    public function news() {
      return view("body.news");
    }
    public function projects() {
      return view("body.project");
    }
}
