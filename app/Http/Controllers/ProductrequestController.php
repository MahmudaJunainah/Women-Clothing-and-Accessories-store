<?php

namespace App\Http\Controllers;

use App\Models\Productrequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productrequest = Productrequest::get();
        
        return view('user.productrequest',compact('productrequest'));
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
        $data = array(
            'name' => $request->name,
            'category_name' => $request->category_name,
            'product_name' => $request->product_name,
            'user_id' => $request->user_id,
            
            
            
        );
        $create = Productrequest::create($data);
        return back()->with('success','Product request placed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productrequest  $productrequest
     * @return \Illuminate\Http\Response
     */
    public function show(Productrequest $productrequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productrequest  $productrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Productrequest $productrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productrequest  $productrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productrequest $productrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productrequest  $productrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productrequest $productrequest)
    {
        //
    }
}
