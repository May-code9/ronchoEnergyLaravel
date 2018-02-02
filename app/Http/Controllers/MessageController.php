<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function submitProduct(Request $request, $id) {
      Message::create($request->all());
      return redirect()->back()->with("alert", "<script>alert('Message Delivered')</script>");
    }
}
