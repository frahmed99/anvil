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
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#btabs-business-settings">Business Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-system-settings">System Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-company-settings">Company Settings</a>
                            </li>
                        </ul>
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
                                                <input type="file" id="example-file-input" name="example-file-input" style="
                                                    margin: -20px -50px;
                                                    position:relative;
                                                    top:50%;
                                                    left:50%;">
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Favicon</h3>
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
                                                <input type="file" id="example-file-input" name="example-file-input" style="
                                                                margin: -20px -50px;
                                                                position:relative;
                                                                top:50%;
                                                                left:50%;">
                                            </div>
                                        </div>
                                        &nbsp;
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
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Currency Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridf"
                                                        name="material-gridf"
                                                        placeholder="Note: Add currency code as per three-letter ISO code.">
                                                    <label for="material-gridf">Currency</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="$">
                                                    <label for="material-gridl">Currency Symbol</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-material floating">
                                                    <select class="form-control" id="material-select2"
                                                        name="material-select2">
                                                        <option value="1">Pre</option>
                                                        <option value="2">Post</option>
                                                    </select>
                                                    <label for="material-select2">Currency Symbol Position </label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Date & Time Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <select class="form-control" id="material-select2"
                                                        name="material-select2">
                                                        <option value="1">Jan 1,2015</option>
                                                        <option value="2">d-m-y</option>
                                                        <option value="3">m-d-y</option>
                                                        <option value="4">y-m-d</option>
                                                    </select>
                                                    <label for="material-select2">Date Format</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <select class="form-control" id="material-select2"
                                                        name="material-select2">
                                                        <option value="1">10:30 PM</option>
                                                        <option value="2">22:30</option>
                                                    </select>
                                                    <label for="material-select2">Time Format</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Prefix Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#INVO">
                                                    <label for="material-gridl">Invoice Prefix</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#QUOT">
                                                    <label for="material-gridl">Quotation Prefix</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#BILL">
                                                    <label for="material-gridl">Bill Prefix</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#CUST">
                                                    <label for="material-gridl">Customer Prefix</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#VEND">
                                                    <label for="material-gridl">Vendor Prefix</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="#JOUR">
                                                    <label for="material-gridl">Journal Prefix</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Misc Settings</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl">
                                                    <label for="material-gridl">Invoice/Bill Footer Title</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="material-textarea-large"
                                                        name="material-textarea-large" rows="8"
                                                        placeholder="Please add a comment"></textarea>
                                                    <label for="material-textarea-large">Invoice/Bill Footer Notes</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
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
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridf"
                                                        name="material-gridf" placeholder="eg. ACME Investments">
                                                    <label for="material-gridf">Company Name</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="">
                                                    <label for="material-gridl">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="eg. Lusaka">
                                                    <label for="material-gridl">City</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="eg. Lusaka">
                                                    <label for="material-gridl">Province</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="eg. 10101">
                                                    <label for="material-gridl">Zip/Post Code</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="eg. Zambia">
                                                    <label for="material-gridl">Country</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Contact Information</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="+260123456789">
                                                    <label for="material-gridl">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="+260123456789">
                                                    <label for="material-gridl">Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="email" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="">
                                                    <label for="material-gridl">System Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="block-header bg-gd-aqua">
                                            <h3 class="block-title">Company Information</h3>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="">
                                                    <label for="material-gridl">Company Registration Number</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="material-gridl"
                                                        name="material-gridl" placeholder="">
                                                    <label for="material-gridl">Company Tax Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text"
                                                        class="js-masked-time form-control js-masked-enabled"
                                                        id="material-gridl" name="material-gridl" placeholder="00:00">
                                                    <label for="material-gridl">Company Start Time</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-material">
                                                    <input type="text"
                                                        class="js-masked-time form-control js-masked-enabled"
                                                        id="material-gridl" name="material-gridl" placeholder="00:00">
                                                    <label for="material-gridl">Company End Time</label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
