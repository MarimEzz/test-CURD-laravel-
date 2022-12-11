<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /** 
     * display 
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $records=Product::all();
        return view('showProduct',compact('records'));
    }

    /** 
     * show 
     * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('addProduct');
    }

    /** 
     * store 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $record = new Product();
        $record->name = request('name');
        $record->serial = request('serial');
        $record->description = request('description');
        $record->price = request('price');
        $record->save();
        return redirect()->back();
    }

    /** 
     * show 
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function show($id)
    {

    }

    /** 
     * show 
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {

    }

    /** 
     * update
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function update(Request $request,$id)
    {

    }

    /** 
     * remove
     * @param int $id
     * @return \Illuminate\Http\Response
    */

    public function destroy($id)
    {
        $record = Product::find($id);
        $record->delete();
        return redirect()->back();
    }
}

