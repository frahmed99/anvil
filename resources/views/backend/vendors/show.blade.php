@extends('admin.admin_master')

@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Breadcrumb -->
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('vendor.view') }}">All Vendors</a>
                <span class="breadcrumb-item active">Vendor Overview</span>
            </nav>
            <!-- END Breadcrumb -->
            <!-- Overview -->
            <h2 class="content-heading">Vendor Overview</h2>
            <div class="row g-sm">
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1">
                                <strong>$499</strong>
                            </p>
                            <p class="fw-medium">
                                Earnings
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1 text-success">
                                <strong>10</strong>
                            </p>
                            <p class="fw-medium">
                                Messages
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1 text-danger">
                                <strong>3</strong>
                            </p>
                            <p class="fw-medium">
                                Products
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1 text-corporate">
                                <strong>98.25</strong>
                            </p>
                            <p class="fw-medium">
                                Sales/Week
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1 text-flat">
                                <strong>12.63</strong>
                            </p>
                            <p class="fw-medium">
                                MB/s
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-rounded block-bordered block-link-pop text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="fs-1 text-elegance">
                                <strong>8</strong>
                            </p>
                            <p class="fw-medium">
                                Tests
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->
            <!-- Addresses -->
            <h2 class="content-heading">Addresses</h2>
            <div class="row">
                <!-- Vendor Information -->
                <div class="col-md-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Vendor Information</h3>
                        </div>
                        <div class="block-content">
                            <div class="fs-lg mb-1">{{ $vendor->name }}</div>
                            <address>
                                <br>
                                <br>
                                <br><br>
                                <i class="fa fa-phone me-1"></i>{{ $vendor->contact }}<br>
                                <i class="far fa-envelope me-1"></i> <a
                                    href="javascript:void(0)">{{ $vendor->email }}</a>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Billing Address -->
                <!-- Billing Address -->
                <div class="col-md-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Billing Address</h3>
                        </div>
                        <div class="block-content">
                            <div class="fs-lg mb-1">{{ $vendor->billing_name }}</div>
                            <address>
                                {{ $vendor->billing_address }}<br>
                                {{ $vendor->billing_city }}<br>
                                {{ $vendor->billing_zip }}<br>
                                {{ $vendor->billing_country }}<br>
                                <br>
                                <i class="fa fa-phone me-1"></i> {{ $vendor->billing_phone }}<br>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Billing Address -->

                <!-- Shipping Address -->
                <div class="col-md-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Shipping Address</h3>
                        </div>
                        <div class="block-content">
                            <div class="fs-lg mb-1">{{ $vendor->shipping_name }}</div>
                            <address>
                                {{ $vendor->shipping_address }}<br>
                                {{ $vendor->shipping_city }}<br>
                                {{ $vendor->shipping_zip }}<br>
                                {{ $vendor->shipping_country }}<br>
                                <br>
                                <i class="fa fa-phone me-1"></i> {{ $vendor->shipping_phone }}<br>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Shipping Address -->
            </div>
            <!-- END Addresses -->
            <!-- Quotation -->
            <h2 class="content-heading">Bills</h2>
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Manage <small>Bills</small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>Bills ID</th>
                                <th>Issue Date</th>
                                <th class="d-none d-sm-table-cell">Amount</th>
                                <th class="d-none d-sm-table-cell text-center">Status</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold"></td>
                                <td class="fw-semibold"></td>
                                <td class="d-none d-sm-table-cell"></td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <span class="badge bg-danger">Disabled</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled show"
                                            href="" data-bs-placement="bottom"><i class="fa fas fa-exchange-alt"></i></a>
                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled show"
                                            href="" data-bs-placement="bottom"><i class="fa fas fa-copy"></i></a>
                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled show"
                                            href="" data-bs-placement="bottom"><i class="fa fa-fw fa-eye"></i></a>
                                        <a type="button" id="edit"
                                            class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Vendor"
                                            href="">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled show"
                                            href="" data-bs-placement="bottom"><i class="fa fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Cart -->

            <!-- Private Notes -->
            <h2 class="content-heading">Private Notes</h2>
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <p class="mb-0"><i class="fa fa-info-circle me-1"></i> This note is only for internal
                            use and will not be displayed to the Vendor.</p>
                    </div>
                    <form action="be_pages_ecom_customer.html" method="POST" onsubmit="return false;">
                        <div class="mb-2">
                            <textarea class="form-control" id="ecom-customer-note" name="ecom-customer-note"
                                placeholder="Add a private note.." rows="4"></textarea>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Private Notes -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
