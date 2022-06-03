@extends('admin.admin_master')

@section('css_after')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection



@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="px-4 py-2 breadcrumb push bg-body-extra-light rounded-pill">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Taxes</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Taxes</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-tax');">
                            <i class="opacity-50 fa fa-plus me-1"></i> Add Tax
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
                                            <input type="text" class="form-control @error('tax_name') is-invalid @enderror"
                                                id="tax_name" name="tax_name" placeholder="Tax Name">
                                        </div>
                                        <span style="color:red">
                                            @error('tax_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('tax_rate') is-invalid @enderror"
                                                id="tax_rate" name="tax_rate" placeholder="Tax Rate %">
                                        </div>
                                        <span style="color:red">
                                            @error('tax_rate')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-alt-success w-100">
                                            <i class="opacity-50 fa fa-plus me-1"></i> Add Tax
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-themed block-rounded">
                <div class="block-content">
                    <div class="row">
                        <!-- User Row-->
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full DataTable"
                                id="DataTable">
                                <thead>
                                    <tr>
                                        <th>Tax Name</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Tax Rate %</th>
                                        <th style="width: 8%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($allData as $key => $tax)
                                        <tr>
                                            <td class="fw-semibold">{{ $tax->name }}</td>
                                            <td class="d-none d-sm-table-cell">{{ $tax->rate }}</td>
                                            <td>
                                                <a type="button" href="javascript:void(0)"
                                                    onclick="fetchtaxes('{{ $tax->id }}')"
                                                    class=" btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled">
                                                    <i class="fa fa-fw fa-edit"></i></a>
                                                <a type="button" id="delete"
                                                    class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    href="{{ route('tax.destroy', $tax->id) }}">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </a>
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
            <!-- END Page Content -->
    </main>
    <!-- Edit Modal Start -->
    <div class="modal" id="editModaltaxes" tabindex="-1" role="dialog" aria-labelledby="editModaltaxes"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block mb-0 shadow-none block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"><small>EDIT</small> Tax</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <div class="alert alert-danger error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <form enctype="multipart/form-data" id="formEdittaxes">
                            @csrf
                            <p style="color:#FA0000" id="msgEdittaxes"></p>
                            <input type="hidden" name="idtaxes" id="idtaxes">
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tax_nameEdit" name="tax_nameEdit"
                                        placeholder="Name">
                                    <label class="form-label" for="tax_nameEdit">Tax Name</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tax_rateEdit" name="tax_rateEdit"
                                        placeholder="Rate">
                                    <label class="form-label" for="tax_rateEdit">Tax Rate</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            Close
                        </button>
                        <input type="submit" id="submitForm" class="btn btn-success reload" value="Save">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal End -->
    <!-- END Main Container -->
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    {{-- Script For Add Block --}}
    @if (count($errors) > 0 && ($errors->has('tax_name') || $errors->has('tax_rate')))
        <script type="text/javascript">
            $(document).ready(function() {
                Codebase.block('open', '#cb-add-tax');
            });
        </script>
    @endif

    {{-- Script For Edit Modal Open And Display Old Data --}}
    <script>
        function fetchtaxes($id) {
            $.ajax({
                url: "{{ route('taxes.fetch') }}",
                method: "POST",
                dataType: "json",
                data: {
                    id: $id,
                },
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                success: function(response) {
                    $("#tax_nameEdit").val(response.name);
                    $("#tax_rateEdit").val(response.rate);
                    $("#idtaxes").val(response.id);
                    $("#editModaltaxes").modal("show");
                }
            });
        }
    </script>

    {{-- Script For Save Edit data and display Errors --}}
    <script>
        $("#formEdittaxes").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('taxes.update') }}",
                method: "POST",
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    $("#msgEdittaxes").html("");
                    if (response.status == 0)
                        $("#msgEdittaxes").html(response.msg);
                    else {
                        toastr.success('Successfully Updated Tax!', 'Success Alert', {
                            timeOut: 5000
                        });
                        location.reload();
                        $("#editModaltaxes").modal("hide");
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
                    $("#msgEdittaxes").html(errorString);
                }
            });
        });
    </script>
@endsection
