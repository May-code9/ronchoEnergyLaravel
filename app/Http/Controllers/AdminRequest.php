<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestForm;

class AdminRequest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activeRequest = 'active';
      $getMessages = RequestForm::join('users', 'users.id', '=', 'requests.user_id')
      ->select('users.first_name', 'users.last_name', 'users.phone_number', 'message', 'requests.created_at', 'requests.id', 'read')
      ->where('read', 0)
      ->latest()
      ->paginate(20);
      $countReadRequest = RequestForm::where('read',1)->count();
      $countRequest = RequestForm::where('read',0)->count();
      return view('admin.layouts.crud.request', compact('getMessages', 'countRequest', 'countReadRequest', 'activeRequest'));
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
      $getFullMessage = RequestForm::join('users', 'users.id', '=', 'requests.user_id')
      ->select('users.first_name', 'users.last_name', 'users.phone_number', 'product','message', 'requests.created_at', 'requests.id', 'user_id')
      ->findOrFail($id);
      return view('admin.layouts.request', compact('getFullMessage'));
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
        $editMessage = RequestForm::findOrFail($id);
        $editMessage->update($request->all());
        return redirect('/requestform')->with("success_status", "Request Marked As Read");
      } else {
        RequestForm::where('id', $delete)->delete();
        return redirect('/requestform')->with("success_status", "Request Deleted");
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
