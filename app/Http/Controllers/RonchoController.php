<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class RonchoController extends Controller
{
    public function index() {
      return view("body.index");
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
      $projects = Project::inRandomOrder()->get();
      return view("body.project", compact('projects'));
    }
}
