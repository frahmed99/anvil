<?php

namespace App\Http\Controllers\Backend\Sales;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;


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
            'CustomerName' => 'required|string|max:255',
            'CustomerNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'CustomerTaxNumber' => 'required|digits:10',
            'CustomerEmail' => 'required|unique:customers,email',
            'BillingCompanyNumber' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'ShippingCompanyNumber' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        $customer = new Customer();
        $customer->name = $request->CustomerName;
        $customer_id = Helper::IDGenerator(new Customer, 'customer_id', 'CUST', 6);
        $customer->email = $request->CustomerEmail;
        $customer->customer_id = $customer_id;
        $customer->contact = $request->CustomerNumber;
        $customer->taxnumber = $request->CustomerTaxNumber;
        $customer->billing_name = $request->BillingCompanyName;
        $customer->billing_country = $request->BillingCompanyCountry;
        $customer->billing_state = $request->BillingCompanyProvince;
        $customer->billing_city = $request->BillingCompanyCity;
        $customer->billing_phone = $request->BillingCompanyNumber;
        $customer->billing_zip = $request->BillingCompanyPostCode;
        $customer->billing_address = $request->BillingCompanyAddress;
        $customer->shipping_name = $request->ShippingCompanyName;
        $customer->shipping_country = $request->ShippingCompanyCountry;
        $customer->shipping_state = $request->ShippingCompanyProvince;
        $customer->shipping_city = $request->ShippingCountryCity;
        $customer->shipping_phone = $request->ShippingCompanyNumber;
        $customer->shipping_zip = $request->ShippingCompanyPostCode;
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
    public function show($id)
    {
        // get the Customer
        $customer = customer::find($id);

        // show the view and pass the customer to it
        return view('Backend.Customers.show')->with('customer', $customer);
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
