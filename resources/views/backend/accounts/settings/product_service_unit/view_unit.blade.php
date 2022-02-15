@extends('admin.admin_master')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">

@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Units</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Units</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-category');">
                            <i class="fa fa-plus opacity-50 me-1"></i> Add Units
                        </button>
                    </h2>
                    <div id="cb-add-category" class="block block-rounded bg-body-light animated fadeIn d-none">
                        <div class="block-header">
                            <h3 class="block-title">Add a new unit</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="{{ route('product_service_unit.store') }}" method="POST">
                                @csrf
                                <div class="row g-sm items-push">
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="unit_name" name="unit_name"
                                                value="{{ old('unit_name') }}" placeholder="Unit Name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="fa fa-plus opacity-50 me-1"></i> Add Unit
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
                                        <th>Unit</th>
                                        <th style="width: 15%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $unit)
                                        <tr>
                                            <td class="fw-semibold">
                                                <a href="javascript:void(0)">{{ $unit->name }}</a>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <!-- /Edit Category Button-->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled edit"
                                                        href="#editUnitModal{{ $unit->id }}" data-bs-placement="bottom"
                                                        data-bs-toggle="modal"><i class="fa fa-fw fa-edit"></i></a>
                                                    <!-- /Delete Category Button -->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="" id ="delete"
                                                        data-bs-original-title="Delete Category"
                                                        href="{{ route('product_service_category.destroy', $unit->id) }}">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" id="editUnitModal{{ $unit->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="block block-rounded shadow-none mb-0">
                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title"><small>EDIT</small> UNIT</h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content fs-sm">
                                                            <form action="{{ route('product_service_category.update') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $unit->id }}">
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="edit_category_name"
                                                                            name="edit_category_name"
                                                                            value="{{ $unit->name }}">
                                                                        <label class="form-label"
                                                                            for="edit_category_name">Unit Name</label>
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
    </main>
    <!-- END Main Container -->
@endsection
