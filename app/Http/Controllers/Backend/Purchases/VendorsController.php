<?php

namespace App\Http\Controllers\Backend\Purchases;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Vendor::all();
        return view('Backend.Vendors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Vendors.add');
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
            'VendorName' => 'required|string|max:255',
            'VendorNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'VendorTaxNumber' => 'required|digits:10',
            'VendorEmail' => 'required|unique:vendors,email',
            'BillingCompanyNumber' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'ShippingCompanyNumber' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        $vendor = new Vendor();
        $vendor->name = $request->VendorName;
        $vendor_id = Helper::IDGenerator(new Vendor, 'vendor_id', 'VEND', 6);
        $vendor->email = $request->VendorEmail;
        $vendor->vendor_id = $vendor_id;
        $vendor->contact = $request->VendorNumber;
        $vendor->taxnumber = $request->VendorTaxNumber;
        $vendor->billing_name = $request->BillingCompanyName;
        $vendor->billing_country = $request->BillingCompanyCountry;
        $vendor->billing_state = $request->BillingCompanyProvince;
        $vendor->billing_city = $request->BillingCompanyCity;
        $vendor->billing_phone = $request->BillingCompanyNumber;
        $vendor->billing_zip = $request->BillingCompanyPostCode;
        $vendor->billing_address = $request->BillingCompanyAddress;
        $vendor->shipping_name = $request->ShippingCompanyName;
        $vendor->shipping_country = $request->ShippingCompanyCountry;
        $vendor->shipping_state = $request->ShippingCompanyProvince;
        $vendor->shipping_city = $request->ShippingCountryCity;
        $vendor->shipping_phone = $request->ShippingCompanyNumber;
        $vendor->shipping_zip = $request->ShippingCompanyPostCode;
        $vendor->shipping_address = $request->ShippingCompanyAddress;
        $vendor->save();

        $notification = array(
            'message' => 'Vendor Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('vendor.view')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the Vendor
        $vendor = vendor::find($id);

        // show the view and pass the vendor to it
        return view('Backend.Vendors.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
