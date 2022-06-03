@extends('admin.admin_master')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
@endsection

@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="px-4 py-2 breadcrumb push bg-body-extra-light rounded-pill">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Categories</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Categories</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-category');">
                            <i class="opacity-50 fa fa-plus me-1"></i> Add Category
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
                                            <input type="text"
                                                class="form-control @error('category_name') is-invalid @enderror"
                                                id="category_name" name="category_name" placeholder="Category Name">
                                        </div>
                                        <span style="color:red">
                                            @error('category_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select @error('category_select') is-invalid @enderror"
                                            id="category_select" name="category_select" placeholder="Category Type">
                                            <option value="Product">Product</option>
                                            <option value="Services">Services</option>
                                            <option value="Income">Income</option>
                                            <option value="Expense">Expense</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div id="addColorPicker" class="input-group ">
                                            <input type="text"
                                                class="form-control input-lg @error('category_color') is-invalid @enderror"
                                                value="#902100" id="category_color" name="category_color"
                                                value="{{ old('category_color') }}">
                                            <span class="input-group-append">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="opacity-50 fa fa-plus me-1"></i> Add Category
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
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        href="javascript:void(0)"
                                                        onclick="fetch('{{ $category->id }}')"><i
                                                            class="fa fa-fw fa-edit"></i></a>
                                                    <!-- /Delete Category Button -->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                        id="delete" data-bs-original-title="Delete Category"
                                                        href="{{ route('product_service_category.destroy', $category->id) }}">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
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
    <!-- Edit Modal Start -->

    <div class="modal" id="editModalCategories" tabindex="-1" role="dialog" aria-labelledby="editModalCategories"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block mb-0 shadow-none block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"><small>EDIT</small> CATEGORY</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <form enctype="multipart/form-data" id="formEditcategories">
                            @csrf
                            <p style="color:#FA0000" id="msgEditcategories"></p>
                            <input type="hidden" name="idcategories" id="idcategories">
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="category_nameEdit"
                                        name="category_nameEdit" placeholder="Name">
                                    <label class="form-label" for="category_nameEdit">Category Name</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating">
                                    <select class="form-select" id="category_selectEdit" name="category_selectEdit">
                                        <option @if (old('category_selectEdit', $category->type) == 'Product') selected @endif>
                                            Product
                                        </option>
                                        <option @if (old('category_selectEdit', $category->type) == 'Services') selected @endif>
                                            Services
                                        </option>
                                        <option @if (old('category_selectEdit', $category->type) == 'Income') selected @endif>
                                            Income</option>
                                        <option @if (old('category_selectEdit', $category->type) == 'Expense') selected @endif>
                                            Expense
                                        </option>
                                    </select>
                                    <label class="form-label" for="category_selectEdit">Category Type</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating">
                                    <div class="input-group" id="editColorPicker">
                                        <input type="text" class="form-control input-lg" 
                                            id="category_colorEdit" name="category_colorEdit">
                                        <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <input type="submit" class="btn btn-alt-primary" value="Save">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal End -->
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
    @if (count($errors) > 0 && ($errors->has('category_name') || $errors->has('category_select')))
        <script type="text/javascript">
            $(document).ready(function() {
                Codebase.block('open', '#cb-add-category');
            });
        </script>
    @endif

    {{-- Script For Edit Modal Open And Display Old Data --}}
    <script>
        function fetch($id) {
            $.ajax({
                url: "{{ route('product_service_category.fetch') }}",
                method: "POST",
                dataType: "json",
                data: {
                    id: $id,
                },
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#category_nameEdit").val(response.name);
                    $("#category_selectEdit").val(response.type);
                    $("#category_colorEdit").val(response.color);
                    $("#idcategories").val(response.id);
                    $("#editModalCategories").modal("show");
                }
            });
        }
    </script>

    <script>
        $("#formEditcategories").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('product_service_category.update') }}",
                method: "POST",
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    $("#msgEditcategories").html("");
                    if (response.status == 0)
                        $("#msgEditcategories").html(response.msg);
                    else {
                        toastr.success('Successfully Updated Unit!', 'Success Alert', {
                            timeOut: 5000
                        });
                        location.reload();
                        $("#editModalCategories").modal("hide");
                    }
                },
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                error: function(error) {
                    console.log(error)
                    var response = JSON.parse(error.responseText);
                    var errorString = "<ul>";
                    $.each(response.errors, function(key, value) {
                        $("#" + key).addClass("is-invalid");
                        errorString += "<li>" + value + "</li>";
                    });
                    errorString += "</ul>";
                    $("#msgEditcategories").html(errorString);
                }
            });
        });
    </script>
@endsection
