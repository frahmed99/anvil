@extends('admin.admin_master')
<div class="content">
    <!-- Overview -->
    <h2 class="content-heading">Overview</h2>
    <div class="row">
        <!-- Orders -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-chart-line fa-2x opacity-25"></i>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <div class="fs-2 fw-bold mb-0">39</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Orders</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Orders -->

        <!-- In Cart -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-shopping-cart fa-2x opacity-25"></i>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <div class="fs-2 fw-bold mb-0">3</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">In Cart</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END In Cart -->

        <!-- Edit Customer -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-user fa-2x opacity-25"></i>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <div class="fs-2 fw-bold mb-0 text-info">
                            <i class="fa fa-pencil-alt"></i>
                        </div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Edit Customer</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Edit Customer -->

        <!-- Remove Customer -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-user fa-2x opacity-25"></i>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <div class="fs-2 fw-bold mb-0 text-danger">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Remove Customer</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Remove Customer -->
    </div>
    <!-- END Overview -->

    <!-- Addresses -->
    <h2 class="content-heading">Addresses</h2>
    <div class="row">
        <!-- Billing Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Billing Address</h3>
                </div>
                <div class="block-content">
                    <div class="fs-lg mb-1">John Smith</div>
                    <address>
                        5110 8th Ave<br>
                        New York 11220<br>
                        United States<br><br>
                        <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
                        <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Billing Address -->

        <!-- Shipping Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Shipping Address</h3>
                </div>
                <div class="block-content">
                    <div class="fs-lg mb-1">John Smith</div>
                    <address>
                        5110 8th Ave<br>
                        New York 11220<br>
                        United States<br><br>
                        <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
                        <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->

    <!-- Cart -->
    <h2 class="content-heading">Cart</h2>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <!-- Products Table -->
            <table class="table table-borderless table-striped mb-0">
                <thead>
                    <tr>
                        <th style="width: 100px;">ID</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
                        <th>Product</th>
                        <th class="d-none d-md-table-cell">Category</th>
                        <th class="d-none d-sm-table-cell text-end">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.424</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge bg-success">Available</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/09/27 </td>
                        <td>
                            <a href="be_pages_ecom_product_edit.html">Product #24</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="be_pages_ecom_products.html">House</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$36</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.423</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge bg-danger">Out of Stock</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/09/26 </td>
                        <td>
                            <a href="be_pages_ecom_product_edit.html">Product #23</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="be_pages_ecom_products.html">Health</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$47</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.422</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <span class="badge bg-success">Available</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/09/25 </td>
                        <td>
                            <a href="be_pages_ecom_product_edit.html">Product #22</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="be_pages_ecom_products.html">Video Games</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$64</td>
                    </tr>
                </tbody>
            </table>
            <!-- END Products Table -->
        </div>
    </div>
    <!-- END Cart -->

    <!-- Past Orders -->
    <h2 class="content-heading">Past Orders</h2>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <!-- Orders Table -->
            <table class="table table-borderless table-striped mb-0">
                <thead>
                    <tr>
                        <th style="width: 100px;">ID</th>
                        <th style="width: 120px;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
                        <th class="d-none d-sm-table-cell">Customer</th>
                        <th class="d-none d-sm-table-cell text-end">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.127</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/10/27 </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_ecom_customer.html">John Smith</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$604</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.402</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/10/26 </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_ecom_customer.html">John Smith</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$272</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.187</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/10/25 </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_ecom_customer.html">John Smith</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$770</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.573</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/10/24 </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_ecom_customer.html">John Smith</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$311</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.518</a>
                        </td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            2017/10/23 </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_ecom_customer.html">John Smith</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">$113</td>
                    </tr>
                </tbody>
            </table>
            <!-- END Orders Table -->
        </div>
    </div>
    <!-- END Past Orders -->

    <!-- Private Notes -->
    <h2 class="content-heading">Private Notes</h2>
    <div class="block block-rounded">
        <div class="block-content">
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <p class="mb-0"><i class="fa fa-info-circle me-1"></i> This note is only for
                    internal use and will not be displayed to the customer.</p>
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
@endsection
