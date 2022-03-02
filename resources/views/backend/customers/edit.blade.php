@extends('admin.admin_master')
@section('admin')
    <!-- Page Content -->
    <div class="content">
        <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
            <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="{{ route('customer.view') }}">All Customers</a>
            <span class="breadcrumb-item active">Add Customers</span>
        </nav>
        <div class="block block-rounded">
            <div class="block-content">
                <h2 class="content-heading d-flex justify-content-between align-items-center">
                    <span>Add Customer</span>
                </h2>
                <form action="{{ route('customer.edit') }}" method="post">
                    @csrf
                    <div class="block-header bg-gd-primary mb-2">
                        <h3 class="block-title" style="color:white">Basic Information</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-6 mb-4">
                            <label class="form-label" for="CustomerName">Name</label>
                            <input type="text" class="form-control @error('CustomerName') is-invalid @enderror"
                                id="CustomerName" name="CustomerName" placeholder="Enter Customer Name">
                            <span style="color:red">
                                @error('CustomerName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="CustomerNumber">Phone
                                Number</label>
                            <input type="text" class="form-control @error('CustomerName') is-invalid @enderror"
                                id="CustomerNumber" name="CustomerNumber" placeholder="+260xxxxxxxxxx">
                            <span style="color:red">
                                @error('CustomerNumber')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6 mb-4">
                            <label class="form-label" for="CustomerEmail">Email</label>
                            <input type="email" class="form-control @error('CustomerEmail') is-invalid @enderror"
                                id="CustomerEmail" name="CustomerEmail" placeholder="Enter Customer Email">
                            <span style="color:red">
                                @error('CustomerEmail')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="CustomerTaxNumber">Tax Number</label>
                            <input type="text" class="form-control @error('CustomerTaxNumber') is-invalid @enderror"
                                id="CustomerTaxNumber" name="CustomerTaxNumber" placeholder="Enter Customer Tax Number">
                            <span style="color:red">
                                @error('CustomerTaxNumber')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="block-header bg-gd-primary mb-2">
                        <h3 class="block-title" style="color:white">Billing Address</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyName">Company Name</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyName"
                                name="BillingCompanyName" placeholder="Enter Company Name">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyCountry">Country</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyCountry"
                                name="BillingCompanyCountry" placeholder="Enter Company Country">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyProvince">Province</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyProvince"
                                name="BillingCompanyProvince" placeholder="Enter Company Province">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCountryCity">City</label>
                            <input type="text" class="form-control is-valid" id="BillingCountryCity"
                                name="BillingCompanyCity" placeholder="Enter Company City">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyNumber">Phone Number</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyNumber"
                                name="BillingCompanyNumber" placeholder="09xxxxxxxx">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyPostCode">Postal Code</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyPostCode"
                                name="BillingCompanyPostCode" placeholder="Enter Company Zip Code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-4">
                            <label class="form-label" for="BillingCompanyAddress">Address</label>
                            <textarea class="form-control" id="BillingCompanyAddress" name="BillingCompanyAddress"
                                rows="4" placeholder="Billing Address.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="" id="ShippingBillingSwitch"
                                    name="ShippingBillingSwitch" checked="">
                                <label class="form-check-label" for="ShippingBillingSwitch">Billing
                                    Address Same As Shipping Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="block-header bg-gd-primary mb-2">
                        <h3 class="block-title" style="color:white">Shipping Address</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyName">Company Name</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyName"
                                name="ShippingCompanyName" placeholder="Enter Company Name">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyCountry">Country</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyCountry"
                                name="ShippingCompanyCountry" placeholder="Enter Company Country">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyProvince">Province</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyProvince"
                                name="ShippingCompanyProvince" placeholder="Enter Company Province">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCountryCity">City</label>
                            <input type="text" class="form-control is-valid" id="ShippingCountryCity"
                                name="ShippingCountryCity" placeholder="Enter Company City">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyNumber">Phone Number</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyNumber"
                                name="ShippingCompanyNumber" placeholder="09xxxxxxxx">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyPostCode">Postal Code</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyPostCode"
                                name="ShippingCompanyPostCode" placeholder="Enter Company Zip Code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-4">
                            <label class="form-label" for="ShippingCompanyAddress">Address</label>
                            <textarea class="form-control" id="ShippingCompanyAddress" name="ShippingCompanyAddress"
                                rows="4" placeholder="Billing Address.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9 mb-4">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- END Page Content -->
@endsection
