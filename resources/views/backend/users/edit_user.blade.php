@extends('admin.admin_master')
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
                <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">Users</span>
            </nav>
            <div class="block block-rounded">
                <div class="block-content">
                    <h2 class="content-heading d-flex justify-content-between align-items-center">
                        <span>Edit </span>
                    </h2>
                    <div class="row justify-content-center py-20">
                        <div class="col-xl-6">
                            <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _js/pages/be_forms_validation.js -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-material" action="{{ route('user.update', $editData->id) }}"
                                method="POST">
                                @csrf
                                <div class="mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="edit_first_name"
                                            name="edit_first_name" placeholder="Enter your First Name" value="{{ $editData->first_name }}">
                                        <label class="form-label" for="edit_first_name">First Name</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="edit_last_name"
                                            name="edit_last_name" placeholder="Enter your Last Name" value="{{ $editData->last_name }}">
                                        <label class="form-label" for="edit_last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="edit_email"
                                            name="edit_email" placeholder="Enter your username" value="{{ $editData->email }}">
                                        <label class="form-label" for="edit_email">Email</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="edit_role" name="edit_role"
                                            size="1" placeholder="Enter your subject">
                                            <option @if(old('edit_role',$editData->type) == 'Admin') selected @endif >Admin</option>
                                            <option @if(old('edit_role',$editData->type) == 'HR') selected @endif >HR</option>
                                            <option @if(old('edit_role',$editData->type) == 'Accountant') selected @endif >Accountant</option>
                                        </select>
                                        <label class="form-label" for="edit_role">Role </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
