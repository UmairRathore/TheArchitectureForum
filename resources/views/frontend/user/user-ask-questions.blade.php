
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

                <div class="col-lg-6">
                    <div class="middull-content">
                        <form class="your-answer-form">
                            <div class="form-group">
                                <h3>Create a questions</h3>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Category</label>

                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Selete cagegory</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags (Add up to 5 tags to describe what your question is about)</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div id="txtEditor"></div>
                            </div>
                            <div class="form-group">
                                <div class="file-upload-account-info">
                                    <input type="file" name="file" id="file-2" class="inputfile">
                                    <label class="upload">
                                        <i class="ri-link"></i>
                                        Upload Photo
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="default-btn">Post your answer</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-siderbar">
                        @include('layouts.frontend.components.rightSideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->


@endsection
