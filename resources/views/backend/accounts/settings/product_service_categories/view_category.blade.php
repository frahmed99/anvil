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

    <script>
        $(function() {
            var n = 0;
            $('#addColorPicker')
                .colorpicker();
        });
        $(function() {
            var n = 0;
            $('#editColorPicker')
                .colorpicker();
        });
    </script>
@endsection

@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Categories</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Categories</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-category');">
                            <i class="fa fa-plus opacity-50 me-1"></i> Add Category
                        </button>
                    </h2>
                    <div id="cb-add-category" class="block block-rounded bg-body-light animated fadeIn d-none">
                        <div class="block-header">
                            <h3 class="block-title">Add a new category</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="{{ route('product_service_category.store') }}" method="POST">
                                @csrf
                                <div class="row g-sm items-push">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="category_name"
                                                name="category_name" value="{{ old('category_name') }}"
                                                placeholder="Category Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select" id="category_select" name="category_select"
                                            value="{{ old('category_select') }}">
                                            <option selected="">Category Type</option>
                                            <option value="Product">Product</option>
                                            <option value="Services">Services</option>
                                            <option value="Income">Income</option>
                                            <option value="Expense">Expense</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div id="addColorPicker" class="input-group">
                                            <input type="text" class="form-control input-lg" value="#902100"
                                                id="category_color" name="category_color"
                                                value="{{ old('category_color') }}">
                                            <span class="input-group-append">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="fa fa-plus opacity-50 me-1"></i> Add Category
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
                                        <th>Categories</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Category Type</th>
                                        <th style="width: 15%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $category)
                                        <tr>
                                            <td class="fw-semibold">
                                                <a href="javascript:void(0)">{{ $category->name }}</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                {{ $category->type }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <!-- /Edit Category Button-->
                                                    <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled edit"
                                                        href="#editCategoryModal{{ $category->id }}" data-bs-placement="bottom"
                                                        data-bs-toggle="modal"><i class="fa fa-fw fa-edit"></i></a>
                                                    <!-- /Delete Category Button -->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="" id="delete"
                                                        data-bs-original-title="Delete Category"
                                                        href="{{ route('product_service_category.destroy', $category->id) }}">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal" id="editCategoryModal{{ $category->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="block block-rounded shadow-none mb-0">
                                                        <div class="block-header block-header-default">
                                                            <h3 class="block-title"><small>EDIT</small> CATEGORY</h3>
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
                                                                <input type="hidden" name="id"
                                                                    value="{{ $category->id }}">
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="edit_category_name"
                                                                            name="edit_category_name"
                                                                            value="{{ $category->name }}">
                                                                        <label class="form-label"
                                                                            for="edit_category_name">Category Name</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <select class="form-select"
                                                                            id="edit_category_select"
                                                                            name="edit_category_select" required>
                                                                            <option @if (old('edit_category_select', $category->type) == 'Product') selected @endif>Product
                                                                            </option>
                                                                            <option @if (old('edit_category_select', $category->type) == 'Services') selected @endif>Services
                                                                            </option>
                                                                            <option @if (old('edit_category_select', $category->type) == 'Income') selected @endif>Income</option>
                                                                            <option @if (old('edit_category_select', $category->type) == 'Expense') selected @endif>Expense
                                                                            </option>
                                                                        </select>
                                                                        <label class="form-label"
                                                                            for="edit_category_select">Category Type</label>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <div class="form-floating">
                                                                        <div class="input-group" id="editColorPicker">
                                                                            <input type="text" class="form-control input-lg"
                                                                                value="{{ $category->color }}"
                                                                                id="edit_category_color"
                                                                                name="edit_category_color" required>
                                                                            <span class="input-group-append">
                                                                                <span
                                                                                    class="input-group-text colorpicker-input-addon"><i></i></span>
                                                                            </span>
                                                                        </div>
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
