@extends('admin.admin_master')
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{ url('media/photos/photo26@2x.jpg') }});">
            url({{ url('images/php_mysql.jpg') }})
            <div class="bg-black-op-75">
                <div class="content content-top content-full text-center">
                    <div class="py-20">
                        <h1 class="h2 font-w700 text-white mb-10"> Add A User</h1>
                        <h2 class="h4 font-w400 text-white-op mb-0"></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-b">
            <div class="content py-5 text-center">
                <nav class="breadcrumb bg-body-light mb-0">
                    <a class="breadcrumb-item" href="{{ route('dashboard') }}">Dashboard</a>
                    <span class="breadcrumb-item active">Add A User</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->
        <!-- Page Content -->
        <div class="content">
            <!-- Add User -->
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Enter all the user information and click the save button.
                            </p>
                        </div>
                        <form method="post" action="{{ route('user.store') }}">
                            @csrf
                            <div class="col-lg-7 offset-lg-1">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="first_name"
                                        name="first_name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="last_name" name="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="user_email">Email</label>
                                    <input type="email" class="form-control form-control-lg" id="user_email"
                                        name="user_email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="user_type">Type</label>
                                        <select class="form-control form-control-lg" id="user_type" name="user_type">
                                            <option value="0">Please select</option>
                                            <option value="Admin">Admin</option>
                                            <option value="HR">HR</option>
                                            <option value="Accountant">Accountant</option>
                                            <option value="Employee">Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_password">Password</label>
                                    <input type="password" class="form-control form-control-lg" id="user_password"
                                        name="user_password">
                                </div>
                                <div class="row items-push">
                                    <div class="col-lg-7 offset-lg-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-success">
                                                <i class="fa fa-plus mr-5"></i>
                                                Add User
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Add Users -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
