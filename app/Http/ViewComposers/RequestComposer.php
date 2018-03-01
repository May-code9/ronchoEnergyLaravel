<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Auth;
use App\RequestForm;

class RequestComposer
{
    public function compose(View $view) {
      if(Auth::check() && Auth::user()->role > 2) {
        $countRequests = RequestForm::where('read', 0)->count();
        $view->with('countRequests', $countRequests);
      }
    }
}
