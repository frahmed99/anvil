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
            <span class="breadcrumb-item active">Banking Accounts</span>
        </nav>
        <div class="block block-rounded">
            <div class="block-content">
                <h2 class="content-heading d-flex justify-content-between align-items-center">
                    <span>Taxes</span>
                    <button type="button" class="btn btn-sm btn-alt-primary"
                        onclick="Codebase.block('open', '#cb-add-account');">
                        <i class="fa fa-plus opacity-50 me-1"></i> Add Bank Account
                    </button>
                </h2>
                <div id="cb-add-account" class="block block-rounded bg-body-light animated fadeIn d-none">
                    <div class="block-header">
                        <h3 class="block-title">Add a new Bank Account</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="{{ route('bankaccount.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="row g-sm items-push">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('holderName') is-invalid @enderror"
                                                id="holderName" name="holderName" placeholder="Bank Holder Name">
                                        </div>
                                        <span style="color:red">
                                            @error('holderName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('BankName') is-invalid @enderror"
                                                id="BankName" name="BankName" placeholder="Bank Name">
                                        </div>
                                        <span style="color:red">
                                            @error('BankName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('AccountNumber') is-invalid @enderror"
                                                id="AccountNumber" name="AccountNumber" placeholder="Account Number">
                                        </div>
                                        <span style="color:red">
                                            @error('AccountNumber')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="row g-sm items-push">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('Balance') is-invalid @enderror"
                                                id="Balance" name="Balance" placeholder="Balance">
                                        </div>
                                        <span style="color:red">
                                            @error('Balance')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('Contact') is-invalid @enderror"
                                                id="Contact" name="Contact" placeholder="Contact Number">
                                        </div>
                                        <span style="color:red">
                                            @error('Contact')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="fa fa-plus opacity-50 me-1"></i> Add Bank Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dynamic Table with Export Buttons -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Manage <small>Bank Accounts</small>
                </h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell">Phone</th>
                            <th class="d-none d-sm-table-cell">Bank</th>
                            <th class="d-none d-sm-table-cell">Account Number</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Balance</th>
                            <th class="text-center" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allData as $key => $bankaccount)
                            <tr>
                                <td class="fw-semibold">Jose Wagner</td>
                                <td class="d-none d-sm-table-cell">0962661523</td>
                                <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge bg-danger">Disabled</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled show"
                                            href="{{ route('bankaccount.show', $bankaccount->id) }}"
                                            data-bs-placement="bottom"><i class="fa fa-fw fa-eye"></i></a>
                                        <a type="button" id="edit"
                                            class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Customer"
                                            href="{{ route('bankaccount.edit', $bankaccount->id) }}">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
