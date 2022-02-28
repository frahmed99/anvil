<?php

namespace App\Http\Controllers\Backend\Sales;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Auth;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Customer::all();
        return view('Backend.Customers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Customers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'CustomerName' => 'required',
            'CustomerNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'CustomerTaxNumber' => 'required|digits:10',
            'BillingCompanyName' => 'unique:customers,billing_name',
            'ShippingCompanyName' => 'unique: customers, shipping_name',
        ]);

        $customer = new Customer();
        $customer->customer_id = IdGenerator::generate(['table' => 'customers', 'length' => 10, 'prefix' => 'CUST-']);
        $customer->name = $request->CustomerName;
        $customer->email= $request->CustomerEmail;
        $customer->contact= $request->CustomerNumber;
        $customer->tax_number= $request->CustomerTaxNumber;
        $customer->billing_name= $request->BillingCompanyName;
        $customer->billing_country= $request->BillingCompanyCountry;
        $customer->billing_state= $request->BillingCompanyProvince;
        $customer->billing_city= $request->BillingCompanyCity;
        $customer->billing_phone= $request->BillingCompanyNumber;
        $customer->billing_zip= $request->BillingCompanyPostCode;
        $customer->billing_address= $request->BillingCompanyAddress;
        $customer->shipping_name= $request->ShippingCompanyName;
        $customer->shipping_country= $request->ShippingCompanyCountry;
        $customer->shipping_state = $request->ShippingCompanyProvince;
        $customer->shipping_city = $request->ShippingCountryCity;
        $customer->shipping_phone= $request->ShippingCompanyNumber;
        $customer->shipping_zip= $request->ShippingCompanyPostCode;
        $customer->shipping_address = $request->ShippingCompanyAddress;
        $customer->save();

        $notification = array(
            'message' => 'Customer Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('customer.view')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('Backend.Customers.show', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
