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

                <div class="col-lg-6">
                    <div class="middull-content">
                        <form class="your-answer-form" id="questionForm">
                            @csrf
                            <div class="form-group">
                                <h3>Create a question</h3>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="topic" class="form-select form-control" id="category">
                                    <option selected disabled>Select Topic</option>
                                    @if(isset($data['topics']))
                                    @foreach($data['topics'] as $topic)
                                    <option value="{{$topic->id}}">{{$topic->title}}</option>
                                    @endforeach
                                    @else
                                    <option value="">no topics available</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags (Add up to 5 tags to describe what your question is about)</label>
                                <select class="form-select form-control" name="tags[]" id="tags" multiple="multiple">
                                    <option selected disabled>Select Tag</option>
                                    @if(isset($data['tags']))
                                        @foreach($data['tags'] as $tag)
                                            <option value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach
                                    @else
                                        <option value="">No tags available</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div id="txtEditor"></div>
                            </div>
                            <div class="form-group">
                                <div  class="file-upload-account-info btn btn-primary" style="color: white; background-color: black">
                                    <label class="upload">
                                        <i class="ri-link">
                                    <input type="file" name="file" id="file-2" class="inputfile">
                                        Upload Photo
                                        </i>
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
                        @include('layouts.frontend.partials.right-SideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tags').select2({
                placeholder: "Select tags",
                maximumSelectionLength: 5
            });
        });
    $(document).ready(function() {
        $('#questionForm').submit(function(event) {
            event.preventDefault();

            var formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content')); // Include CSRF token
            formData.append('title', $('#title').val());
            formData.append('category', $('#category').val());
            formData.append('tags', $('#tags').val());
            formData.append('description', $('#txtEditor').html()); // Assuming txtEditor is your rich text editor instance
            formData.append('file', $('#file-2')[0].files[0]);

            $.ajax({
                url: '{{route('store.questions')}}', // Specify your server endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    // Show success message using Toastr.js or any other notification library
                    toastr.success('Question posted successfully');
                    // Optionally, reset the form after successful submission
                    $('#questionForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show error message using Toastr.js or any other notification library
                    toastr.error('An error occurred while posting question');
                }
            });
        });
    });
</script>
@endsection
