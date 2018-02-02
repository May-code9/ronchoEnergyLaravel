<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Product;
use App\News;

class DashboardController extends Controller
{
    public function index() {
      $energyProjects = Project::where('category', 'energy')->count();
      $ictProjects = Project::where('category', 'ict')->count();
      $engineeringProjects = Project::where('category', 'engineering')->count();
      $news = News::count();
      $product = Product::count();
      return view('admin.layouts.index', compact('energyProjects', 'ictProjects', 'engineeringProjects', 'news', 'product'));
    }
}
