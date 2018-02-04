<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Product;
use App\News;
use App\Message;

class DashboardController extends Controller
{
    public function index() {
      $activeDashboard = 'active';
      $energyProjects = Project::where('category', 'energy')->count();
      $ictProjects = Project::where('category', 'ict')->count();
      $engineeringProjects = Project::where('category', 'engineering')->count();
      $news = News::count();
      $product = Product::count();
      $readMails = Message::where('read', 1)->count();
      $unReadMails = Message::where('read', 0)->count();
      return view('admin.layouts.index', compact('energyProjects', 'ictProjects', 'engineeringProjects', 'news', 'product', 'activeDashboard', 'readMails', 'unReadMails'));
    }
}
