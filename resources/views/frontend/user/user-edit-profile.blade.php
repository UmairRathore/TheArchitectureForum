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
                            <div class="profile-img">
                                <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                <h3>Rosemary Hamm</h3>
                                <span>Member since 1 years ago</span>
                                <span>Last seen this week</span>
                                <button class="followers-btn">45 Followers</button>
                                <button class="followers-btn">12 Following</button>
                            </div>

                            <div class="edit-btn">
                                {{--                                <a href="{{route('user.edit.profile')}}" class="default-btn">--}}
                                Edit profile</a>
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
                                    <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab" data-bs-target="#delete-account" type="button" role="tab" aria-controls="delete-account" aria-selected="false">Delete Account</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active edit-profile" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                                    <div class="public-information" style="margin-bottom: 5px">
                                        <h3>Public information</h3>
                                        <form id="updateUserProfile" class="edeite-content">
                                        @csrf

                                            <div class="information d-flex align-items-center">
                                            @if(isset($user->profile_image))
                                            <img src="{{asset($user->profile_image)}}" alt="Image">
                                                @else
                                            <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                                @endif

                                            <div class="file-upload-account-info">
                                                <input type="file" name="file" id="file-2" class="inputfile">
                                                <label class="upload">
                                                    <i class="ri-link"></i>
                                                    Upload Photo
                                                </label>
                                                <span>Maximum file size: 10 MB.</span>
                                            </div>
                                        </div>



                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control" name="fname" id="name">
                                            </div>

                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" name="lname" id="name">
                                            </div>

                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control" name="location" id="location">
                                            </div>

                                            <div class="form-group">
                                                <label>About me</label>
                                                <div id="txtEditor"></div>
                                            </div>

                                            <div class="form-group">
                                                <h3>Social Profiles</h3>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>Website link</label>
                                                        <input type="text" class="form-control" name="WebsiteLink" id="website-link">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>Twitter link</label>
                                                        <input type="text" class="form-control" name="twitter" id="twitter">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>Facebook link</label>
                                                        <input type="text" class="form-control" name="facebook" id="facebook">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-mad-6">
                                                    <div class="form-group">
                                                        <label>GitHub link</label>
                                                        <input type="text" class="form-control" name="github" id="github">
                                                    </div>
                                                </div>
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


                                <div class="tab-pane fade edit-profile" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
                                    <form id="deleteUserForm">
                                        <div class="public-information">
                                            <h3>Delete Account</h3>
                                            <ul class="delete-account">
                                                <li>
                                                    <div class="form-check">
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                                        <input class="form-check-input" type="checkbox" name="user_status" id="flexCheckDefault-9">
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

    <script>

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
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
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
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });


        document.getElementById('deleteUserBtn').addEventListener('click', function (event) {
            event.preventDefault();
            if (document.getElementById('flexCheckDefault-9').checked) {
                $.ajax({
                    url: "{{ route('user.delete.profile') }}",
                    method: "POST",
                    data: $('#deleteUserForm').serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response.status === 'success') {
                            window.location.href = "{{ route('home') }}";
                        } else {
                            alert("Failed to delete user account.");
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Failed to delete user account. Please try again later.");
                    }
                });
            } else {
                console.log('Please confirm account deletion.');
            }
        });
    </script>

@endsection
