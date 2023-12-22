<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        $allproduct = DB::table('product')->get();
        return view('viewallproduct', compact('allproduct'));
        // dd($allproduct);
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
    public function store(Request $request,product $product)
    {
        // dd('call');
        
        $product->product_title = $request->product_title;
        $product->product_decription= $request->product_decription;
        $product->price = $request->price;
        $product->quantity = $request->quantity;       
        $product->product_image = $request->product_image;       
        $product->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($pid,product $product)
    {
        $productById = $product::find($pid);
        return view('editprod', compact('productById'));
        // dd( $productById);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($pid,Request $request, product $product)
    {
        $productById = $product::find($pid);
        $productById->product_title = $request->product_title;
        $productById->product_decription= $request->product_decription;
        $productById->price = $request->price;
        $productById->quantity = $request->quantity;       
      
        $productById->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($pid,product $product)
    {
        $productById = $product::find($pid);
        $productById->delete();
        return redirect('/product')->with('success', 'Task deleted successfully');
        
    }
}
