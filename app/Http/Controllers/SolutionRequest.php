<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestForm;

class SolutionRequest extends Controller
{
    public function postEnergy(Request $request) {
      $user_id = $request->input('id');
      $email = $request->input('email');
      $phone = $request->input('phone_number');
      $first_name = $request->input('first_name');
      $equipment = $request->input('equipment');
      return view('body.request', compact('user_id', 'email', 'phone', 'first_name', 'equipment'));
    }
    
    public function postRequest(Request $request, $user_id, $equipment) {
      $requestForm = New RequestForm;
      $requestForm->user_id = $user_id;
      $requestForm->product = $equipment;
      $requestForm->message = $request->input('message');

      $requestForm->save();

      return redirect()->back()->with('success_status', 'Message Delivered');
    }
}
