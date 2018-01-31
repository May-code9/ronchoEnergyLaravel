<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Project;

class IctProject extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.crud.ictProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $photo = $request->file('image');
      $photo2 = $request->file('fullimage');
      $imagename = time().'.'.$photo->getClientOriginalExtension();
      $imagename2 = time().'1.'.$photo2->getClientOriginalExtension();

      $destinationPath = public_path('/image');
      $thumb_img = Image::make($photo->getRealPath())->resize(370, 220);
      $thumb_img2 = Image::make($photo2->getRealPath());
      $thumb_img->save($destinationPath.'/'.$imagename);
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();
      $data['image'] = $imagename;
      $data['fullimage'] = $imagename2;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Project::create($data);
      return redirect()->back()->with("success_status", "Images Added");
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
        //
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
        //
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
