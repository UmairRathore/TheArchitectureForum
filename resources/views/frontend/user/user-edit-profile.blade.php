@extends('layouts.frontend.app')

@section('content')

    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.partials.left-SideBar')
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="edit-profile-area">
                        <div class="profile-content d-flex justify-content-between align-items-center">
                            <div  class="profile-img imageLoaderlaoaded">
                                @if(isset($user->profile_image))
                                    <img id="previewImage" src="{{asset($user->profile_image)}}" alt="Image" style="size:30px 40px">
                                @else
                                    <img id="previewImage" src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image" style="size:30px 40px">
                                @endif                                <h3>{{$user->name}}</h3>

                                <span>Member since {{$user->created_at->format('Y-m-d')}}</span>
                                <span>{{$user->student_or_worker_workplace}}</span>
                                <span>{{$user->location}}</span>
                                <button class="followers-btn">{{$user->followers}} Followers</button>
                                <button class="followers-btn">{{$user->following}} Following</button>
                            </div>

                            <div class="edit-btn">
                                {{--                                <a href="{{route('user.edit.profile')}}" class="default-btn">--}}
{{--                                Edit profile</a>--}}
                            </div>
                        </div>

                        <div class="profile-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="edit-profile-tab" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile" aria-selected="true">Edit Profile</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">Change Password</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="portfolio-account-tab" data-bs-toggle="tab" data-bs-target="#portfolio-account" type="button" role="tab" aria-controls="portfolio-account" aria-selected="false">Portfolio</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab" data-bs-target="#delete-account" type="button" role="tab" aria-controls="delete-account" aria-selected="false">Delete Account</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active edit-profile" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                                    <div class="public-information" style="margin-bottom: 5px">
                                        <h3>Public information</h3>
                                        <form id="updateUserProfile" class="edeite-content">
                                        @csrf

                                            <div  class=" imageLoaderlaoaded information d-flex align-items-center">
                                                @if(isset($user->profile_image))
                                                    <img id="previewImage" src="{{asset($user->profile_image)}}" alt="Image" style="size:30px 40px">
                                                @else
                                                    <img id="previewImage" src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image" style="size:30px 40px">
                                                @endif

                                                <div class="file-upload-account-info">
                                                    <label class="upload">
                                                        <i class="ri-link"></i>
                                                        <input type="file" name="profile_image" id="file-2" class="inputfile" onchange="previewFile()">
                                                        Upload Photo
                                                    </label>
                                                    <span>Maximum file size: 10 MB.</span>
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control" name="fname" id="fname" value="{{$user->fname}}">
                                            </div>

                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" name="lname" id="lname" value="{{$user->lname}}">
                                            </div>

                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control" name="location" id="location" value="{{$user->location}}">
                                            </div>

                                            <div class="form-group">
                                                <label>About me</label>
{{--                                                <div id="txtEditor"></div>--}}
                                                <textarea class="form-control"  id="txtEditor " name="about_me" rows="6" placeholder="Enter your about here?"> {{$user->about_me}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <h3>Social Profiles</h3>
                                            </div>

                                            <div class="row">
{{--                                                <div class="col-lg-6 col-mad-6">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Website link</label>--}}
{{--                                                        <input type="text" class="form-control" name="WebsiteLink" id="website-link">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>Twitter link</label>
                                                        <input type="text" class="form-control" name="twitter_url" id="twitter" value="{{$user->twitter_url}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>Facebook link</label>
                                                        <input type="text" class="form-control" name="facebook_url" id="facebook" value="{{$user->facebook_url}}">
                                                    </div>
                                                </div>
{{--                                                <div class="col-lg-6 col-mad-6">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>GitHub link</label>--}}
{{--                                                        <input type="text" class="form-control" name="github" id="github">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <div class="col-12">
                                                    <div class="form-group mb-0">
                                                        <button class="default-btn">Save change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <div class="tab-pane fade edit-profile" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                                    <div class="public-information">
                                        <h3>Change password</h3>

                                        <form id="updatePasswordForm" class="edeite-content">
                                            @csrf
                                            <div class="form-group">
                                                <label for="password">Current Password</label>
                                                <input type="password" class="form-control" name="password" id="password">
                                            </div>

                                            <div class="form-group">
                                                <label for="new-password">New Password</label>
                                                <input type="password" class="form-control" name="new_password" id="new-password">
                                            </div>

                                            <div class="form-group">
                                                <label for="new-password-again">New Password (again)</label>
                                                <input type="password" class="form-control" name="new_password_confirmation" id="new-password-again">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="default-btn">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade edit-profile" id="portfolio-account" role="tabpanel" aria-labelledby="portfolio-account-tab">
                                    <form id="portfolioUserForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="public-information">
                                            <h3>Portfolio Update</h3>
                                            <ul class="portfolio-account">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="file" name="user_portfolio" id="user_portfolio" accept=".pdf">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="default-btn" type="button" id="submitPortfolio">
                                                        Update Portfolio
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane fade edit-profile" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
                                    <form id="deleteUserForm">
                                        @csrf
                                        <div class="public-information">
                                            <h3>Delete Account</h3>
                                            <ul class="delete-account">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="user_status" id="user_statu-9">
                                                        <label class="form-check-label" for="flexCheckDefault-9">
                                                            Delete your account?
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="default-btn">
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Mail Content Area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
        //     // Initialize Editor.js
        //     var editor = new EditorJS({
        //         holder: 'txtEditor',
        //         // Your Editor.js configuration options here

            });
        function previewFile() {
            var preview = document.getElementById('previewImage');
            var file = document.querySelector('input[type=file]').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "{{asset('frontend/assets/images/user/profile-img.jpg')}}"; // Default image if no file selected
            }
        }

        $(document).ready(function() {
            $('#submitPortfolio').click(function() {
                var formData = new FormData($('#portfolioUserForm')[0]);

                $.ajax({
                    url: '{{ route("user.update.portfolio") }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log('Upload successful:', response);
                        showSuccessMessage('Portfolio updated successfully');

                    },
                    error: function(xhr, status, error) {
                        console.error('Upload failed:', xhr.responseText);
                        showErrorMessage('An error occurred while updating Portfolio');
                    }
                });
            });
        });


        $(document).ready(function() {
            $('#updateUserProfile').submit(function(event) {
                event.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route("user.update.profile") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        showSuccessMessage('Profile updated successfully');

                        $('.imageLoaderlaoaded').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        showErrorMessage('An error occurred while updating profile');

                    }
                });
            });
        });


        $('#updatePasswordForm').on('submit', function (event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '{{ route("user.update.password") }}',
                method: 'POST',
                data: formData,
                success: function (response) {
                    console.log(response);
                    showSuccessMessage('Password updated successfully');

                },
                error: function (xhr, status, error) {
                    showErrorMessage('Password Did not Update successfully');
                    console.error(xhr.responseText);
                }
            });
        });


        $('#deleteUserBtn').on('click', function (event) {
            event.preventDefault();
            if (document.getElementById('user_statu--9').checked) {
                $.ajax({
                    url: "{{ route('user.delete.profile') }}",
                    method: "POST",
                    data: $('#deleteUserForm').serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response.status === 'success') {
                            showSuccessMessage('Profile deleted successfully');
                            window.location.href = "{{ route('home') }}";
                        } else {
                            alert("Failed to delete user account.");
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Failed to delete user account. Please try again later.");
                        showSuccessMessage('Failed to delete user account. Please try again later.');

                    }
                });
            } else {
                console.log('Please confirm account deletion.');
            }
        });
        function showSuccessMessage(message) {
            toastr.success(message, '', {
                timeOut: 5000, // 5 seconds
                progressBar: true,
                closeButton: true
            });
        }

        function showErrorMessage(message) {
            toastr.error(message, '', {
                timeOut: 5000, // 5 seconds
                progressBar: true,
                closeButton: true
            });
        }
    </script>

@endsection
