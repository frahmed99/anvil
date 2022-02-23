@extends('admin.admin_master')

@section('js_after')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
@section('admin')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image bg-image-bottom" style="background-image: url({{ asset('media/photos/photo34.jpg') }})">
            <div class="bg-black-75 py-4">
                <div class="content content-full text-center">
                    <!-- Avatar -->
                    <div class="mb-3">
                        <a class="img-link" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar96 img-avatar-thumb"
                                src="{{ !empty(Auth::user()->profile_photo_path)? url('media/upload/user_images/' . Auth::user()->profile_photo_path): url('media/upload/default_user.jpg') }}"
                                alt="User Avatar">
                        </a>
                    </div>
                    <!-- END Avatar -->

                    <!-- Personal -->
                    <h1 class="h3 text-white fw-bold mb-2">{{ Auth::user()->first_name }}
                        {{ Auth::user()->last_name }}</h1>
                    <!-- END Personal -->
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="content">
            <!-- User Profile -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-user-circle me-1 text-muted"></i> <small>Manage Your</small> Profile
                    </h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Your account’s vital info. Please do not share any information.
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="mb-4">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="first_name"
                                        name="first_name" placeholder="Enter your username.."
                                        value="{{ Auth::user()->first_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="last_name" name="last_name"
                                        placeholder="Enter your name.." value="{{ Auth::user()->last_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        placeholder="Enter your email.." value="{{ Auth::user()->email }}">
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-10 col-xl-6">
                                        <div class="push">
                                            <img class="img-avatar" id="showImage"
                                                src="{{ !empty(Auth::user()->profile_photo_path)? url('media/upload/user_images/' . Auth::user()->profile_photo_path): url('media/upload/default_user.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="profile-settings-avatar"
                                                class="form-label">Choose new avatar</label>
                                            <input class="form-control" type="file" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END User Profile -->
            <!-- Change Password -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-asterisk me-1 text-muted"></i> Change Password
                    </h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('update.password') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row items-push">
                            <div class="col-lg-3">
                                <p class="text-muted">
                                    Changing your sign in password is an easy way to keep your account secure.
                                </p>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <div class="mb-4">
                                    <label class="form-label" for="oldpassword">Current Password</label>
                                    <input type="password" class="form-control form-control-lg" id="oldpassword"
                                        name="oldpassword">
                                    @error('oldpassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="newpassword">New Password</label>
                                    <input type="password" class="form-control form-control-lg" id="newpassword"
                                        name="newpassword">
                                    @error('newpassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="password_confirmation">Confirm New
                                        Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                        name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Change Password -->
        </div>
        <!-- END Main Content -->
    </main>
    <!-- END Main Container -->
@endsection
