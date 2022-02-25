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
                    <form action="be_forms_elements_material.html" method="post">
                        <div class="block-header bg-gd-primary mb-2">
                            <h3 class="block-title" style="color:white">Basic Information</h3>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="example-text-input-valid">Name</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Vendor Name">
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="example-text-input-valid">Phone
                                    Number</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="09xxxxxxxx">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="example-text-input-valid">Email</label>
                                <input type="email" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Vendor Email">
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="example-text-input-valid">Tax Number</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Vendor Tax Number">
                            </div>
                        </div>
                        <div class="block-header bg-gd-primary mb-2">
                            <h3 class="block-title" style="color:white">Billing Address</h3>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Company Name</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Name">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Country</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Country">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Province</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Province">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">City</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company City">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Phone Number</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="09xxxxxxxx">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Postal Code</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Zip Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="mb-4">
                                <label class="form-label" for="example-textarea-input">Address</label>
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input"
                                    rows="4" placeholder="Textarea content.."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="mb-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="" id="example-switch-default1"
                                        name="example-switch-default1" checked="">
                                    <label class="form-check-label" for="example-switch-default1">Billing
                                        Address Same As Shipping Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="block-header bg-gd-primary mb-2">
                            <h3 class="block-title" style="color:white">Shipping Address</h3>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Company Name</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Name">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Country</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="09xxxxxxxx">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Province</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Province">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">City</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company City">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Phone
                                    Number</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="09xxxxxxxx">
                            </div>
                            <div class="col-4 mb-4">
                                <label class="form-label" for="example-text-input-valid">Postal
                                    Code</label>
                                <input type="text" class="form-control is-valid" id="example-text-input-valid"
                                    name="example-text-input-valid" placeholder="Enter Company Post Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="mb-4">
                                <label class="form-label" for="example-textarea-input">Address</label>
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input"
                                    rows="4" placeholder="Textarea content.."></textarea>
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
