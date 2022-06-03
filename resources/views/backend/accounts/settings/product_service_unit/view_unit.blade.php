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
                <span class="breadcrumb-item active">Units</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Units</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-unit');">
                            <i class="opacity-50 fa fa-plus me-1"></i> Add Units
                        </button>
                    </h2>
                    <div id="cb-add-unit" class="block block-rounded bg-body-light animated fadeIn d-none">
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
                                            <input type="text" class="form-control @error('unit_name') is-invalid @enderror"
                                                id="unit_name" name="unit_name" placeholder="Enter Unit Name"
                                                placeholder="Unit Name">
                                        </div>
                                        <span style="color:red">
                                            @error('unit_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="opacity-50 fa fa-plus me-1"></i> Add Unit
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
                                    @forelse ($allData as $key => $unit)
                                        <tr>
                                            <td class="fw-semibold">
                                                <a>{{ ucfirst($unit->name) }}</a>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <!-- /Edit Unit Button-->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        href="javascript:void(0)" onclick="fetch('{{ $unit->id }}')"><i
                                                            class="fa fa-fw fa-edit"></i></a>
                                                    <!-- /Delete Unit Button -->
                                                    <a type="button"
                                                        class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                        id="delete" data-bs-original-title="Delete Unit"
                                                        href="{{ route('product_service_unit.destroy', $unit->id) }}">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">
                                                <p class="text-center text-danger"> No Data Available! </p>
                                            </td>
                                        </tr>
                                    @endforelse
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
    <div class="modal" id="editModalunits" tabindex="-1" role="dialog" aria-labelledby="editModalunits"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block mb-0 shadow-none block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"><small>EDIT</small> UNIT</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <form enctype="multipart/form-data" id="formEditunits">
                            @csrf
                            <p style="color:#FA0000" id="msgEditunits"></p>
                            <input type="hidden" name="idunits" id="idunits">
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="unit_nameEdit" name="unit_nameEdit"
                                        placeholder="Name">
                                    <label class="form-label" for="unit_nameEdit">Unit Name</label>
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
    <!-- END Main Container -->
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    {{-- Script For Add Block --}}
    @if (count($errors) > 0 && ($errors->has('unit_name') || $errors->has('unit_rate')))
        <script type="text/javascript">
            $(document).ready(function() {
                Codebase.block('open', '#cb-add-unit');
            });
        </script>
    @endif

    {{-- Script For Edit Modal Open And Display Old Data --}}
    <script>
        function fetch($id) {
            $.ajax({
                url: "{{ route('product_service_unit.fetch') }}",
                method: "POST",
                dataType: "json",
                data: {
                    id: $id,
                },
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#unit_nameEdit").val(response.name);
                    $("#idunits").val(response.id);
                    $("#editModalunits").modal("show");
                }
            });
        }
    </script>

    {{-- Script For Save Edit data and display Errors --}}
    <script>
        $("#formEditUnits").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('product_service_unit.update') }}",
                method: "POST",
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    $("#msgEditUnits").html("");
                    if (response.status == 0)
                        $("#msgEditUnits").html(response.msg);
                    else {
                        toastr.success('Successfully Updated Unit!', 'Success Alert', {
                            timeOut: 5000
                        });
                        location.reload();
                        $("#editModalunits").modal("hide");
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
                    $("#msgEditUnits").html(errorString);
                }
            });
        });
    </script>
@endsection
