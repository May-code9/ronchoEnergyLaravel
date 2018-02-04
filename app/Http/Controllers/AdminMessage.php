<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class AdminMessage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeMessage = 'active';
        $getMessages = Message::join('users', 'users.id', '=', 'messages.user_id')
        ->join('products', 'products.id', '=', 'messages.product_id')
        ->select('users.first_name', 'users.last_name', 'users.phone_number', 'products.product', 'message', 'quantity', 'messages.created_at', 'messages.id', 'read')
        ->where('read', 0)
        ->latest()
        ->paginate(20);
        $countReadMessages = Message::where('read',1)->count();
        $countMessages = Message::where('read',0)->count();
        return view('admin.layouts.crud.mail', compact('getMessages', 'countMessages', 'countReadMessages', 'activeMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getFullMessage = Message::join('users', 'users.id', '=', 'messages.user_id')
        ->join('products', 'products.id', '=', 'messages.product_id')
        ->select('users.first_name', 'users.last_name', 'users.phone_number', 'products.product', 'message', 'quantity', 'messages.created_at', 'messages.id', 'user_id', 'product_id')
        ->findOrFail($id);
        return view('admin.layouts.mail', compact('getFullMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $delete = $request->get('id');
      /* Add data to database */
      if($request->has('edit'))
      {
        $editMessage = Message::findOrFail($id);
        $editMessage->update($request->all());
        return redirect('/message')->with("success_status", "Message Marked As Read");
      } else {
        Message::where('id', $delete)->delete();
        return redirect('/message')->with("success_status", "Message Deleted");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
