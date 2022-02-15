@extends('admin.admin_master')

@section('css_after')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
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
    <script src="{{ asset('js/custom/taxes_validation.min.js')}}"></script>

@endsection

@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Taxes</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Taxes</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-tax');">
                            <i class="fa fa-plus opacity-50 me-1"></i> Add Tax
                        </button>
                    </h2>
                    <div id="cb-add-tax" class="block block-rounded bg-body-light animated fadeIn d-none">
                        <div class="block-header">
                            <h3 class="block-title">Add a new Tax</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="{{ route('tax.store') }}" method="POST">
                                @csrf
                                <div class="row g-sm items-push">
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tax_name" name="tax_name"
                                                placeholder="Tax Name">
                                        </div>
                                        <span style="color:red">@error('tax_name')
                                                {{ $message }}
                                            @enderror</span>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="tax_rate" name="tax_rate"
                                                placeholder="Tax Rate %">
                                        </div>
                                        <span style="color:red">@error('tax_rate')
                                                {{ $message }}
                                            @enderror</span>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="fa fa-plus opacity-50 me-1"></i> Add Tax
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <!-- User Row-->
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Tax Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Tax Rate %</th>
                                        <th style="width: 15%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $tax)
                                        <tr>
                                            <td class="fw-semibold">
                                                <a href="javascript:void(0)">{{ $tax->name }}</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                {{ $tax->rate }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled edit"
                                                        href="#editTaxModal{{ $tax->id }}" data-bs-placement="bottom"
                                                        data-bs-toggle="modal"><i class="fa fa-fw fa-edit"></i></a>
                                                    <a type="button" id="delete"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                        href="{{ route('tax.destroy', $tax->id) }}">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" id="editTaxModal{{ $tax->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="block block-rounded shadow-none mb-0">
                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title"><small>EDIT</small> Tax</h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content fs-sm">
                                                            <form action="{{ route('tax.update') }}" method="POST"
                                                                id="tax-validation">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $tax->id }}">
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="edit_tax_name" name="edit_tax_name"
                                                                            value="{{ $tax->name }}">
                                                                        <label class="form-label"
                                                                            for="edit_tax_name">Tax Name</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="edit_tax_rate" name="edit_tax_rate"
                                                                            value="{{ $tax->rate }}">
                                                                        <label class="form-label"
                                                                            for="edit_tax_rate">Tax Rate</label>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-alt-secondary"
                                                                data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <input type="submit" class="btn btn-alt-primary" value="Save">
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END User Row -->
                </div>
            </div>
        </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
