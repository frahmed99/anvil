@extends('admin.admin_master')
@section('css_after')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection
@section('admin')
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Customers</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Customers</span>
                        <a href="{{ route('customer.create') }}" type="button" class="btn btn-sm btn-alt-primary">
                            <i class="fa fa-plus opacity-50 me-1"></i> Add Customer
                        </a>
                    </h2>
                </div>
            </div>
            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Manage <small>Customers</small>
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell">Phone</th>
                                <th class="d-none d-sm-table-cell">Email</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Balance</th>
                                <th class="text-center" style="width: 15%;">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">Jose Wagner</td>
                                <td class="d-none d-sm-table-cell">0962661523</td>
                                <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge bg-danger">Disabled</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip"
                                        title="View Customer">
                                        <i class="fa fa-user"></i>
                                </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->
        </div>
        </div>
        <!-- END Page Content -->
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection
