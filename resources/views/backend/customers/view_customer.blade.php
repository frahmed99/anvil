@extends('admin.admin_master')
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{ url('media/photos/photo26@2x.jpg') }});">
            url({{ url('images/php_mysql.jpg') }})
            <div class="bg-black-op-75">
                <div class="content content-top content-full text-center">
                    <div class="py-20">
                        <h1 class="h2 font-w700 text-white mb-10">CUSTOMERS</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0"></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                    <span class="breadcrumb-item active">Customers</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <!-- Page Content -->
        <div class="content">
            <!-- Orders -->
            <div class="block-header block-header-default">
                <h3 class="block-title">Topics</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="fa fa-plus"></i> New Customer
                    </button>
                    <div class="dropdown float-right">
                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-drop"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Today
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-drop">
                            <a class="dropdown-item active" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar mr-5"></i>Today
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                    <form action="be_pages_ecom_orders.html" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Estimate..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Search -->
                </div>
                <div class="block-content">
                    <!-- Orders Table -->
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Est.#</th>
                                <th>Customer</th>
                                <th class="d-none d-sm-table-cell">Category</th>
                                <th class="d-none d-sm-table-cell">Issue Date</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="font-w600">001</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2017/10/27 </td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td class="text-right">
                                    <div class="push">
                                        <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-circle btn-alt-info mr-5 mb-5">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Orders Table -->

                    <!-- Navigation -->
                    <nav aria-label="Orders navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">8</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">9</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Navigation -->
                </div>
            </div>
            <!-- END Orders -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
