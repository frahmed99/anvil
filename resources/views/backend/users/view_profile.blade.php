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
        <!-- User Info -->
        <div class="bg-image bg-image-bottom" style="background-image: url({{ asset('media/photos/photo34.jpg') }})">
            <div class="bg-primary-dark-op py-4">
                <div class="content content-full text-center">
                    <!-- Avatar -->
                    <div class="mb-3">
                        <a class="img-link" href="#">
                            <img class="img-avatar img-avatar96 img-avatar-thumb"
                                src="{{ !empty(Auth::user()->profile_photo_path)? url('media/upload/user_images/' . Auth::user()->profile_photo_path): url('media/upload/default_user.jpg') }}"
                                alt="">
                        </a>
                    </div>
                    <!-- END Avatar -->

                    <!-- Personal -->
                    <h1 class="h3 text-white fw-bold mb-2">
                        {{ Auth::user()->first_name }}
                        {{ Auth::user()->last_name }}
                    </h1>
                    <!-- END Personal -->

                    <!-- Actions -->
                    <a class="btn btn-alt-primary" href="{{ route('profile.edit') }}">
                        <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
                    </a>
                    <!-- END Actions -->
                </div>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Main Content -->
        <div class="content">
            <!-- Projects -->
            <h2 class="content-heading d-flex justify-content-between align-items-center">
                <span class="fw-semibold"><i class="si si-briefcase me-1"></i> Projects</span>
                <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
            </h2>
            <div class="row items-push">
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                        <div class="ribbon-box">$2500</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-danger text-danger-light mx-auto my-3">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Website Design</div>
                            <div class="fs-sm fw-medium text-muted">https://example.com</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                        <div class="ribbon-box">$499</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-success text-success-light mx-auto my-3">
                                <i class="fa fa-birthday-cake"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Special Icon Set</div>
                            <div class="fs-sm fw-medium text-muted">3000 icons</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                        <div class="ribbon-box">$2999</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-info text-info-light mx-auto my-3">
                                <i class="fab fa-windows"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Windows App</div>
                            <div class="fs-sm fw-medium text-muted">Accounting Dashboard</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                        <div class="ribbon-box">$3999</div>
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-warning text-warning-light mx-auto my-3">
                                <i class="fa fa-mobile-alt"></i>
                            </div>
                            <div class="text-warning">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">iOS App</div>
                            <div class="fs-sm fw-medium text-muted">Accounting Dashboard</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-briefcase opacity-50 me-1"></i> View Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Projects -->

            <!-- Colleagues -->
            <h2 class="content-heading d-flex justify-content-between align-items-center">
                <span class="fw-semibold"><i class="si si-users me-1"></i> Colleagues</span>
                <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
            </h2>
            <div class="row items-push">
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded text-center">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar2.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Barbara Scott</div>
                            <div class="fs-sm fw-medium text-muted">Product Designer</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded text-center">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Adam McCoy</div>
                            <div class="fs-sm fw-medium text-muted">Senior Developer</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded text-center">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar14.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Albert Ray</div>
                            <div class="fs-sm fw-medium text-muted">Junior Designer</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded text-center">
                        <div class="block-content block-content-full">
                            <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="fw-semibold mb-1">Barbara Scott</div>
                            <div class="fs-sm fw-medium text-muted">Marketing</div>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add
                            </a>
                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-user-circle opacity-50 me-1"></i>Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Colleagues -->

            <!-- Articles -->
            <h2 class="content-heading d-flex justify-content-between align-items-center">
                <span class="fw-semibold"><i class="si si-note me-1"></i> Articles</span>
                <button type="button" class="btn btn-sm rounded-pill btn-alt-secondary">View More..</button>
            </h2>
            <div class="push">
                <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">3 hours ago</p>
                        <h4 class="fs-base text-primary mb-0">
                            5 things I've learned working from home
                        </h4>
                    </div>
                </a>
                <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">2 days ago</p>
                        <h4 class="fs-base text-primary mb-0">
                            Vue.js or React.js? Let's dive in!
                        </h4>
                    </div>
                </a>
                <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">1 week ago</p>
                        <h4 class="fs-base text-primary mb-0">
                            10 important things I wish I knew
                        </h4>
                    </div>
                </a>
                <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">2 weeks ago</p>
                        <h4 class="fs-base text-primary mb-0">
                            Bringing your productivity back
                        </h4>
                    </div>
                </a>
                <a class="block block-rounded block-link-shadow mb-3" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <p class="fs-sm fw-medium text-muted float-sm-end mb-1">1 month ago</p>
                        <h4 class="fs-base text-primary mb-0">
                            Creating a super smooth CSS animation
                        </h4>
                    </div>
                </a>
                <!-- END Articles -->
            </div>
            <!-- END Main Content -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
