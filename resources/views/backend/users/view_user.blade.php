@extends('admin.admin_master')

@section('js_after')
@endsection
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
                        <span>Users</span>
                        <button type="button" class="btn btn-sm btn-alt-primary"
                            onclick="Codebase.block('open', '#cb-add-user');">
                            <i class="fa fa-plus opacity-50 me-1"></i> Add User
                        </button>
                    </h2>
                    <div id="cb-add-user" class="block block-rounded bg-body-light animated fadeIn d-none">
                        <div class="block-header">
                            <h3 class="block-title">Add a new User</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="row g-sm items-push">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                id="first_name" name="first_name" placeholder="First Name">
                                        </div>
                                        <span style="color:red">@error('first_name'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name">
                                        </div>
                                        <span style="color:red">@error('last_name'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="row g-sm items-push">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="user_email" name="user_email"
                                                    placeholder="Email">
                                            </div>
                                            <span style="color:red">@error('user_email'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select" id="user_type" name="user_type">
                                                    <option value="">Please select</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="HR">HR</option>
                                                    <option value="Accountant">Accountant</option>
                                                </select>
                                                <span style="color:red">@error('user_type'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="row g-sm items-push">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" id="user_password"
                                                            name="user_password" placeholder="Password">
                                                    </div>
                                                    <span style="color:red">@error('user_password'){{ $message }}@enderror</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="user_password_confirmation"
                                                                name="user_password_confirmation" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-alt-success w-100">
                                                            <i class="fa fa-plus opacity-50 me-1"></i> Add User
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
                                        @foreach ($allData as $key => $user)
                                            <div class="col-md-6 col-xl-3">
                                                <div class="block block-rounded text-center">
                                                    <div class="block-content block-content-full block-content-sm">
                                                        <div class="fw-semibold">{{ $user->first_name }}
                                                            {{ $user->last_name }}</div>
                                                    </div>
                                                    <div class="fs-sm fw-semibold">{{ $user->type }}</div>
                                                    <div class="fs-sm fw-semibold">{{ $user->email }}</div>
                                                    <div class="block-content block-content-full bg-image"
                                                        style="background-image: url({{ asset('media/photos/photo34.jpg') }})">
                                                        <img class="img-avatar img-avatar-thumb" src="{{ !empty($user->profile_photo_path)? url('media/upload/user_images/'.$user->profile_photo_path): url('media/upload/default_user.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="block-content block-content-full">
                                                        <a type="button" class="btn btn-sm btn-alt-primary me-1 js-bs-tooltip-enabled"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit User"
                                                            href="{{ route('user.edit', $user->id) }}">
                                                            <i class="fa fa-fw fa-edit"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-sm btn-alt-danger me-1 js-bs-tooltip-enabled" id="delete"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete User"
                                                            href="{{ route('user.destroy', $user->id) }}">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
