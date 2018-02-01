<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Product;

class ProductController extends Controller
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
        return view('admin.layouts.crud.products');
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
      $photo2 = $request->file('product');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/image/product');
      $thumb_img = Image::make($photo->getRealPath())->resize(340, 340);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $data = $request->all();
      $data['image'] = $imagename;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Product::create($data);
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
