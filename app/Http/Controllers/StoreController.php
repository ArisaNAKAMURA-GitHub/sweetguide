<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use Auth;

class StoreController extends Controller
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
        $store = New Store;
        $store -> name = $request -> name;
        $store -> category_id = $request -> category_id;
        $store -> prefecture_id = $request -> prefecture_id;
        $store -> address = $request -> address;
        $store -> phone_number = $request -> phone_number;
        $store -> opening_hour = $request -> opening_hour;
        $store -> closing_day = $request -> closing_day;
        $store -> price = $request -> price;
        $store -> store_image = $request -> store_image;
        $store -> recommend_image = $request -> recommend_image;
        $store -> recommend_product = $request -> recommend_product;
        $store -> latitude = $request -> latitude;
        $store -> longitude = $request -> longitude;
        $store -> url = $request -> url;
        $store -> user_id = Auth::id();

        $store -> save;
        return redirect()->route('/sweets/stores.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return view ('/sweets', ['store'=>$store]);
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
