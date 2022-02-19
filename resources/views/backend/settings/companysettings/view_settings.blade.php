@extends('admin.admin_master')
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">

            <!-- Block Tabs -->
            <h2 class="content-heading">Block Tabs</h2>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Block Tabs Default Style -->
                    <div class="block block-rounded overflow-hidden">
                        <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="btabs-business-settings-tab" data-bs-toggle="tab"
                                    data-bs-target="#btabs-business-settings" role="tab"
                                    aria-controls="btabs-business-settings" aria-selected="true">Business Settings</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabs-system-settings-tab" data-bs-toggle="tab"
                                    data-bs-target="#btabs-system-settings" role="tab" aria-controls="btabs-system-settings"
                                    aria-selected="false">System Settings</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabs-company-settings-tab" data-bs-toggle="tab"
                                    data-bs-target="#btabs-company-settings" role="tab"
                                    aria-controls="btabs-company-settings" aria-selected="false">Company Settings</button>
                            </li>
                        </ul>
                        <!-- Block Tabs Content -->
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="btabs-business-settings" role="tabpanel">
                                <h4 class="font-w400">Business Settings</h4>
                                <div class="block-content">
                                    <form action="be_forms_elements_material.html" method="post" onsubmit="return false;">
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">LOGO</h3>
                                        </div>
                                        &nbsp;
                                        <div class="form-group row">
                                            <div class="col-md-6 animated fadeIn">
                                                <div class="options-container">
                                                    <img class="img-fluid options-item"
                                                        src="{{ asset('media/photos/photo1.jpg') }}" alt="">
                                                    <div class="options-overlay bg-black-op-75">
                                                        <div class="options-overlay-content">
                                                            <h3 class="h4 text-white mb-5">Image</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <input type="file" id="example-file-input" name="example-file-input"
                                                    style="margin: -20px -50px; position:relative; top:50%; left:50%;">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="btabs-system-settings" role="tabpanel">
                                <h4 class="font-w400">System Settings</h4>
                                <div class="block-content">
                                    <form action="be_forms_elements_material.html" method="post" onsubmit="return false;">
                                        <div class="block-header bg-gd-aqua mb-2">
                                            <h3 class="block-title">Currency Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4 mb-4">
                                                <label class="form-label"
                                                    for="example-text-input-valid">Currency</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Currency
                                                    Symbol</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label">Currency Symbol Position</label>
                                                <div class="space-x-2">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            id="example-radios-inline1" name="example-radios-inline"
                                                            value="option1" checked>
                                                        <label class="form-check-label"
                                                            for="example-radios-inline1">Pre</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            id="example-radios-inline2" name="example-radios-inline"
                                                            value="option2">
                                                        <label class="form-check-label"
                                                            for="example-radios-inline2">Post</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-header bg-gd-aqua mb-2">
                                            <h3 class="block-title">Prefix Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4 mb-4">
                                                <label class="form-label"
                                                    for="example-text-input-valid">Currency</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Currency
                                                    Symbol</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Currency
                                                    Symbol</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4 mb-4">
                                                <label class="form-label"
                                                    for="example-text-input-valid">Currency</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Currency
                                                    Symbol</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Currency
                                                    Symbol</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="block-header bg-gd-aqua mb-2">
                                            <h3 class="block-title">Misc Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Invoice/Bill
                                                    Footer Title</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Invoice/Bill
                                                    Footer Notes</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="btabs-company-settings" role="tabpanel">
                                <h4 class="font-w400">Company Settings</h4>
                                <div class="block-content">
                                    <form action="be_forms_elements_material.html" method="post" onsubmit="return false;">
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Company Address</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Company
                                                    Name</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label class="form-label"
                                                    for="example-text-input-valid">Address</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">City</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">
                                                    Province</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Postal
                                                    Code</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label class="form-label"
                                                    for="example-text-input-valid">Country</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Contact Information</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Phone
                                                    Number</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Mobile
                                                    Number</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-4 mb-4">
                                                <label class="form-label" for="example-text-input-valid">System
                                                    Email</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Company Information</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Comapny
                                                    Registration Number</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Company Tax
                                                    Number</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Company Start
                                                    Time</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                            <div class="col-6 mb-4">
                                                <label class="form-label" for="example-text-input-valid">Company
                                                    Closing Time</label>
                                                <input type="text" class="form-control is-valid"
                                                    id="example-text-input-valid" name="example-text-input-valid"
                                                    placeholder="ZMK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End lock Tabs Content -->
                    </div>
                    <!-- END Block Tabs Default Style -->
                </div>
            </div>
            <!-- END Block Tabs -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
