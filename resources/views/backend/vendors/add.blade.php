@extends('admin.admin_master')
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('vendor.view') }}">All Vendors</a>
                <span class="breadcrumb-item active">Add Vendors</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Add Vendor</span>
                    </h2>
                <form action="{{ route('vendor.store') }}" method="post">
                    @csrf
                    <div class="block-header bg-gd-primary mb-2">
                        <h3 class="block-title" style="color:white">Basic Information</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-6 mb-4">
                            <label class="form-label" for="VendorName">Name</label>
                            <input type="text" class="form-control @error('VendorName') is-invalid @enderror"
                                id="VendorName" name="VendorName" placeholder="Enter Vendor Name">
                            <span style="color:red">
                                @error('VendorName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="VendorNumber">Phone
                                Number</label>
                            <input type="text" class="form-control @error('VendorName') is-invalid @enderror"
                                id="VendorNumber" name="VendorNumber" placeholder="+260xxxxxxxxxx">
                            <span style="color:red">
                                @error('VendorNumber')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6 mb-4">
                            <label class="form-label" for="VendorEmail">Email</label>
                            <input type="email" class="form-control @error('VendorEmail') is-invalid @enderror"
                                id="VendorEmail" name="VendorEmail" placeholder="Enter Vendor Email">
                            <span style="color:red">
                                @error('VendorEmail')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="VendorTaxNumber">Tax Number</label>
                            <input type="text" class="form-control @error('VendorTaxNumber') is-invalid @enderror"
                                id="VendorTaxNumber" name="VendorTaxNumber" placeholder="Enter Vendor Tax Number">
                            <span style="color:red">
                                @error('VendorTaxNumber')
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
                                name="BillingCompanyName" placeholder="Enter Name">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyCountry">Country</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyCountry"
                                name="BillingCompanyCountry" placeholder="Enter Country">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyProvince">Province</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyProvince"
                                name="BillingCompanyProvince" placeholder="Enter Province">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCountryCity">City</label>
                            <input type="text" class="form-control is-valid" id="BillingCountryCity"
                                name="BillingCompanyCity" placeholder="Enter City">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyNumber">Phone Number</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyNumber"
                                name="BillingCompanyNumber" placeholder="Enter Phone Number">
                            <span style="color:red">
                                @error('BillingCompanyNumber')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="BillingCompanyPostCode">Postal Code</label>
                            <input type="text" class="form-control is-valid" id="BillingCompanyPostCode"
                                name="BillingCompanyPostCode" placeholder="Enter  Zip Code">
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
                                    name="ShippingBillingSwitch">
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
                                name="ShippingCompanyName" placeholder="Enter Name">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyCountry">Country</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyCountry"
                                name="ShippingCompanyCountry" placeholder="Enter Country">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyProvince">Province</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyProvince"
                                name="ShippingCompanyProvince" placeholder="Enter Province">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCountryCity">City</label>
                            <input type="text" class="form-control is-valid" id="ShippingCountryCity"
                                name="ShippingCountryCity" placeholder="Enter City">
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyNumber">Phone Number</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyNumber"
                                name="ShippingCompanyNumber" placeholder="Phone Number">
                            <span style="color:red">
                                @error('ShippingCompanyNumber')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-4 mb-4">
                            <label class="form-label" for="ShippingCompanyPostCode">Postal Code</label>
                            <input type="text" class="form-control is-valid" id="ShippingCompanyPostCode"
                                name="ShippingCompanyPostCode" placeholder="Enter Zip Code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mb-4">
                            <label class="form-label" for="ShippingCompanyAddress">Address</label>
                            <textarea class="form-control" id="ShippingCompanyAddress" name="ShippingCompanyAddress"
                                rows="4" placeholder="Shipping Address.."></textarea>
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
    </main>
    <!-- END Main Container -->
@endsection

@section('js_after')
    <script>
        $("#ShippingBillingSwitch").click(function() {
            if (this.checked) {
                $("#ShippingCompanyName").val($("#BillingCompanyName").val());
                $("#ShippingCompanyCountry").val($("#BillingCompanyCountry").val());
                $("#ShippingCompanyProvince").val($("#BillingCompanyProvince").val());
                $("#ShippingCountryCity").val($("#BillingCountryCity").val());
                $("#ShippingCompanyNumber").val($("#BillingCompanyNumber").val());
                $("#ShippingCompanyPostCode").val($("#BillingCompanyPostCode").val());
                $("#ShippingCompanyAddress").val($("#BillingCompanyAddress").val());
            } else {
                $("#ShippingCompanyName").val('');
                $("#ShippingCompanyCountry").val('');
                $("#ShippingCompanyProvince").val('');
                $("#ShippingCountryCity").val('');
                $("#ShippingCompanyNumber").val('');
                $("#ShippingCompanyPostCode").val('');
                $("#ShippingCompanyAddress").val('');

            }
        });
    </script>
@endsection
