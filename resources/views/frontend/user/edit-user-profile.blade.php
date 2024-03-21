
@extends('layouts.frontend.app')

@section('content')

    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.components.leftSideBar')
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
                                <a href="{{route('user.edit.profile')}}" class="default-btn">Edit profile</a>
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
                                    <button class="nav-link" id="email-settings-tab" data-bs-toggle="tab" data-bs-target="#email-settings" type="button" role="tab" aria-controls="email-settings" aria-selected="false">Email Settings</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="privacy-tab" data-bs-toggle="tab" data-bs-target="#privacy" type="button" role="tab" aria-controls="privacy" aria-selected="false">Privacy</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab" data-bs-target="#delete-account" type="button" role="tab" aria-controls="delete-account" aria-selected="false">Delete Account</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active edit-profile" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                                    <div class="public-information">
                                        <h3>Public information</h3>

                                        <div class="information d-flex align-items-center">
                                            <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">

                                            <div class="file-upload-account-info">
                                                <input type="file" name="file" id="file-2" class="inputfile">
                                                <label class="upload">
                                                    <i class="ri-link"></i>
                                                    Upload Photo
                                                </label>
                                                <span>Maximum file size: 10 MB.</span>
                                            </div>
                                        </div>

                                        <form class="edeite-content">
                                            <div class="form-group">
                                                <label>Display name</label>
                                                <input type="text" class="form-control" name="name" id="name">
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

                                        <form class="edeite-content">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" class="form-control" name="password" id="password">
                                            </div>

                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="new-password" id="new-password">
                                            </div>

                                            <div class="form-group">
                                                <label>New Password (again)</label>
                                                <input type="password" class="form-control" name="new-password-again" id="new-password-again">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button class="default-btn">Save change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade edit-profile" id="email-settings" role="tabpanel" aria-labelledby="email-settings-tab">
                                    <div class="public-information">
                                        <h3>Email settings</h3>

                                        <form class="edeite-content">
                                            <div class="form-group email-save">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Rosemary@gmail.com">

                                                <button class="default-btn">Save change</button>
                                            </div>

                                            <ul class="email-settings">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-1" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-1">
                                                            New products and feature updates, as well as occasional company announcements
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-2" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-2">
                                                            Timely advice and reminders to help you make the most of our feature
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-3" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-3">
                                                            An email rounding up the best news from the world of software development
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-4" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-4">
                                                            Notifications about bounties, reputation and more. Hint: sometimes involves swag.
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-5">
                                                        <label class="form-check-label" for="flexCheckDefault-5">
                                                            Invitations to participate in surveys, usability tests, and more. Only a few per year.
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-6">
                                                        <label class="form-check-label" for="flexCheckDefault-6">
                                                            Occasional emails highlighting special jobs and companies
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-7" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-7">
                                                            Do you like to unsubscribe from all the mails?
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault-8" checked>
                                                        <label class="form-check-label" for="flexCheckDefault-8">
                                                            Do you like to get mails when new replies are added to your answers?
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade edit-profile" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
                                    <div class="public-information">
                                        <h3>Privacy Settings</h3>

                                        <form class="edeite-content">
                                            <div class="form-group">
                                                <label>Profile Picture</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Social links</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Biography</label>
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Visibility</option>
                                                    <option value="1">Hidden</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <button class="default-btn">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade edit-profile" id="delete-account" role="tabpanel" aria-labelledby="delete-account-tab">
                                    <div class="public-information">
                                        <h3>Delete Account</h3>

                                        <ul class="delete-account">
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  id="flexCheckDefault-9">
                                                    <label class="form-check-label" for="flexCheckDefault-9">
                                                        Delete your account?
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{route('home')}}" class="default-btn">
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->


@endsection
