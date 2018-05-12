<?php

namespace pruebas\Http\Controllers;

use Illuminate\Http\Request;
use pruebas\Http\Requests;
use pruebas\Http\Requests\CustomerRequest;
use pruebas\Customer;

class CustomerController extends Controller
{ 
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $customers = Customer::where('user_id',$request->user()->id)->get();
        return view('customers.index',['customers' =>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->customers()->create([
          'name' => $request -> name]);
          return redirect('/customer')->with('success','Cliente guardado correctamente!');
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
    public function edit(Customer $customer) //utilizando implicit binding
    { 
        return view('customers.edit',[
            'customer' => $customer
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customer $customer, Request $request)
    {
        //$this->authorize('owner',$customer);
        $customer->update($request->all());
         return redirect('/customer')->with('success','Cliente guardado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    { 
           $this->authorize('owner',$customer);
           $customer->delete();
        return redirect('/customer')->with('success','Cliente eliminado!');
    }
}
