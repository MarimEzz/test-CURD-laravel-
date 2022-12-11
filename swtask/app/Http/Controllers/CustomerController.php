<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    //
    /** 
     * display 
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $records=Customer::all();
        return view('showCustomer',compact('records'));
    }

    /** 
     * show 
     * @return \Illuminate\Http\Response
    */

    public function create()
    {
        return view('addCustomer');
    }

    /** 
     * store 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $record = new Customer();
        $record->name = request('name');
        $record->address = request('address');
        $record->email = request('email');
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
        $record = Customer::find($id);
        $record->delete();
        return redirect()->back();
    }
}