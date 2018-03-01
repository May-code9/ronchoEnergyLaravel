<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Auth;
use App\Message;

class EmailComposer
{
    public function compose(View $view) {
      if(Auth::check() && Auth::user()->role > 2) {
        $countMessages = Message::where('read', 0)->count();
        $view->with('countMessages', $countMessages);
      }
    }
}
